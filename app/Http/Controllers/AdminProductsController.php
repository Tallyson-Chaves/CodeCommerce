<?php

namespace CodeCommerce\Http\Controllers;

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

        $product = $this->products->find($id);

        return view('admin/productUpdate', compact('product'));
    }

    public function update (Requests\productRequest $request, $id)
    {

        $this->products->find($id)->update($request->all());

        return redirect('admin/products');

    }
}
