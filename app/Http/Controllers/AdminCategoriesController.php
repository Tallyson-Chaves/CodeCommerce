<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

use CodeCommerce\Category;

class AdminCategoriesController extends Controller
{
    private $categories;

    public function __construct(Category $category) {

        $this->categories = $category; 
     }
    
    public function index(){
        
        $categories = $this->categories->all();
        
        return view('admin.categories',  compact('categories'));
    }

    public function create(){

    	return view('admin.create');
    }

    public function store(Requests\categoryRequest  $request){

    	$input = $request->all();

    	$category = $this->categories->fill($input);

    	$category->save();

    	return redirect('admin/categories');
    }
}
