@extends('templates.master')

@section('title', 'CodeCommerce - Admin Categories Update')

@section('content')

		@if($errors->any())
			<ul>
				@foreach($errors->all() as $error)
					<li class="alert alert-danger">
						<spam class="glyphicon glyphicon-remove-sign"></spam>
						{{ $error }}
					</li>
				@endforeach
			</ul>
		@endif

		<div style="margin-bottom:10px;" class="col-md-12">
        	<h3 class="page-header">Admin Product Update: {{ $product->name }}</h3>
			<a class="btn btn-primary" href="{!! $url = route('admin::products') !!}">&#8592; Return</a>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				{!! Form::open(['route'=>['admin::products.update', $product->id], 'method'=>'put']) !!}

					{!! Form::label('name', 'Name:') !!}
					{!! Form::text('name', $product->name, ['class'=>'form-control']) !!}

			</div>
			<div class="form-group">

				{!! Form::label('description', 'Description:') !!}
				{!! Form::textarea('description', $product->description, ['class'=>'form-control']) !!}

			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">

				{!! Form::label('price', 'Price:') !!}
				{!! Form::number('price', $product->price, ['class'=>'form-control']) !!}

			</div>
			<div class="form-group">

                {!! Form::label('featured', 'Featured:') !!}

				@if($product->featured == 1)

				{!! Form::select('featured', array('1' => 'Yes', '0' => 'No')) !!}

				@else

				{!! Form::select('featured', array('0' => 'No', '1' => 'Yes')) !!}

				@endif


			</div>
			<div class="form-group">

				{!! Form::label('recommend', 'Recommend') !!}

				@if($product->recommend == 1)

					{!! Form::select('recommend', array('1' => 'Yes', '0' => 'No')) !!}

				@else

					{!! Form::select('recommend', array('0' => 'No', '1' => 'Yes')) !!}

				@endif

			</div>
		</div>
		<div class="col-md-12 form-group">

			{!! Form::submit('Update Product',['class'=>'btn btn-primary form-group']) !!}

		</div>
	    	{!! Form::close() !!}
    	
@endsection