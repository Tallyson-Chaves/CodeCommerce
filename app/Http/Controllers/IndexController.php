<?php

namespace CodeCommerce\Http\Controllers;

use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }
}
