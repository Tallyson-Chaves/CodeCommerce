<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

use CodeCommerce\Category;

class ExemploController extends Controller
{
    private $categories;

    public function __construct(Category $category) {
        $this->categories = $category;
    }
    
    
    public function exemplo(){
        
        $categories = $this->categories->all();
        $title = "MainFrame";
        
        return view('exemplo',  compact('categories' , 'title'));
    }
}
