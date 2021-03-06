<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;

use CodeCommerce\Http\Requests;


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

    	return view('admin/categoryCreate');
    }

    public function store(Requests\categoryRequest  $request){

    	$input = $request->all();

    	$category = $this->categories->fill($input);

    	$category->save();

    	return redirect('admin/categories');
    }

    public function destroy($id){

        $this->categories->find($id)->delete();

        return redirect('admin/categories');

    }

    public function push($id){

        $category = $this->categories->find($id);

        return view('admin/categoryUpdate', compact('category'));
    }

    public function update(Requests\categoryRequest $request, $id){

        $this->categories->find($id)->update($request->all());

        return redirect('admin/categories');

    }
}