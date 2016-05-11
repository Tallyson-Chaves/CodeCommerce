<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

use CodeCommerce\Category;

class ExemploController extends Controller
{
    private $categories;
    private $teste;

    public function __construct(Category $category) {
        $this->categories = $category;
    }
    
    
    public function exemplo(){
        
        $categories = $this->categories->all();
        $title = "MainFrame";
        $teste = array('Teste' => 'Teste2' );
        
        return view('exemplo',  compact('categories' , 'title', 'teste'));
    }
}
