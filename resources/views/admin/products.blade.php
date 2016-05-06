@extends('templates.master')

@section('title', 'CodeCommerce - Página Inicial')

@section('content')
    
    <ul>
         @foreach ($products as $product)
         <li>
             {{ $product->description }}
         </li>
         @endforeach
    </ul>

@endsection