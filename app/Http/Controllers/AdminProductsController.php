<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

use CodeCommerce\Product;

class AdminProductsController extends Controller
{
   private $products;

    public function __construct(Product $products) {
        $this->products = $products;
    }
    
    public function index(){
        
        $products = $this->products->all();
        
        return view('admin/products',  compact('products'));
    }

    public function create(){

        return view('admin/productCreate');
    }

    public function store(Requests\productRequest  $request){

        $input = $request->all();

        $product = $this->products->fill($input);

        $product->save();

        return redirect('admin/products');
    }

    public function destroy($id)
    {

        $this->products->find($id)->delete();

        return redirect('admin/products');
    }

    public function push($id)
    {

        $this->products->find($id)->all();

        return view('admin/productUpdate');
    }
}
