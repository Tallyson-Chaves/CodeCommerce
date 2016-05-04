<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

class ExemploController extends Controller
{
    public function exemplo(){
        return view('exemplo')->with( 'nome', $nome);
    }
}
