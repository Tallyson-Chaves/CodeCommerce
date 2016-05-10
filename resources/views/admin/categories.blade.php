@extends('templates.master')

@section('title', 'CodeCommerce - Página Inicial')

@section('content')

<ul>
     @foreach ($categories as $category)
     <li>
         {{ $category->name }}
     </li>
     @endforeach
</ul>
   
@endsection