<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

class ExemploController extends Controller
{
    public function exemplo(){
        
        $nome = "Tallyson";
        
        return view('exemplo')->with( 'nome', $nome);
    }
}
