@extends('templates.master')

@section('title', 'CodeCommerce - Admin Products')

@section('content')
		<h3 class="page-header">Admin Products</h3>
		<a class="btn btn-primary" href="categories/create">Create New</a>
    	<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th> 
					<th>Description</th>
					<th>Price</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					@foreach ($products as $product)
						<td>{{ $product->id }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->description }}</td>
						<td>US$ {{ $product->price }}</td>
						<td></td>
					@endforeach
				</tr>
			</tbody>
    	</table>
@endsection