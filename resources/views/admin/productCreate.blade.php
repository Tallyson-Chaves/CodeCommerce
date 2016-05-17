@extends('templates.master')

@section('title', 'CodeCommerce - Admin Categories Create')

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
			<h3 class="page-header">Admin Product Create</h3>
			<a class="btn btn-primary" href="{!! $url = route('admin::products') !!}">&#8592; Return</a>
		</div>
		<div class="col-md-6">

			<div class="form-group">
				{!! Form::open(['url' => 'admin/products']); !!}

					{!! Form::label('name', 'Name:') !!}
					{!! Form::text('name', null, ['class'=>'form-control']) !!}

			</div>
			<div class="form-group">

				{!! Form::label('description', 'Description:') !!}
				{!! Form::textarea('description', null, ['class'=>'form-control']) !!}

			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">

				{!! Form::label('price', 'Price:') !!}
				{!! Form::number('price', null, ['class'=>'form-control']) !!}

			</div>
			<div class="form-group">

                {!! Form::label('featured', 'Featured:') !!}
				{!! Form::select('featured', array('0' => 'No', '1' => 'Yes')) !!}

			</div>
			<div class="form-group">

				{!! Form::label('recommend', 'Recommend') !!}
				{!! Form::select('recommend', array('0' => 'No', '1' => 'Yes')) !!}

			</div>
		</div>
		<div class="col-md-12 form-group">

			{!! Form::submit('Add Product',['class'=>'btn btn-primary form-group']) !!}

		</div>
	    	{!! Form::close() !!}
    	
@endsection