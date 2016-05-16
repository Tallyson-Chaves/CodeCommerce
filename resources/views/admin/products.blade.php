@extends('templates.master')

@section('title', 'CodeCommerce - Admin Products')

@section('content')
		<h3 class="page-header">Admin Products</h3>
		<a class="btn btn-primary" href="products/create">Create New</a>
    	<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th> 
					<th>Description</th>
					<th>Price</th>
					<th>Featured</th>
					<th>Recommend</th>
					<th>Action</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach ($products as $product)
				<tr>

						<td>{{ $product->id }}</td>
						<td>{{ $product->name }}</td>
						<td>{{ $product->description }}</td>
						<td>US$ {{ $product->price }}</td>
						<td>

							@if( $product->featured == 1)
								<input type="checkbox" checked="checked" disabled>
							@else
								<input type="checkbox" value="" disabled>
							@endif

						</td>
						<td>

							@if( $product->recommend == 1)
								<input type="checkbox" checked="checked" disabled>
							@else
								<input type="checkbox" value="" disabled>
							@endif

						</td>
						<td><a class="btn btn-danger" href="{!! $url = route('admin::products.destroy',['id' => $product->id]) !!}">Delete</a></td>
						<td><a class="btn btn-primary" href="{!! $url = route('admin::products.push',['id' => $product->id]) !!}">Modify</a></td>
				</tr>
				@endforeach
			</tbody>
    	</table>
@endsection