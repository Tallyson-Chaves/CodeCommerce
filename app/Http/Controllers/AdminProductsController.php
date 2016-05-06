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
}
