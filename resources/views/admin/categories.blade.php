@extends('templates.master')

@section('title', 'CodeCommerce - Admin Categories')

@section('content')
		<h3 class="page-header">Admin Categories</h3>
		<a class="btn btn-primary" href="categories/create">Create New</a>
    	<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th> 
					<th>Description</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($categories as $category)
					<tr>
						<td>{{ $category->id }}</td>
						<td>{{ $category->name }}</td>
						<td>{{ $category->description }}</td>
						<td></td>
					</tr>
				@endforeach
			</tbody>
    	</table>
@endsection