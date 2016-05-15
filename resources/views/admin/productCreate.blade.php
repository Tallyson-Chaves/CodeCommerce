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

        <h3 class="page-header">Admin Categories Create</h3>
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
				{!! Form::checkbox('featured', '1') !!}

			</div>
			<div class="form-group">

				{!! Form::label('recommend', 'Recommend') !!}
				{!! Form::checkbox('recommend', '1') !!}

			</div>
		</div>
		<div class="col-md-12 form-group">

			{!! Form::submit('Add Products',['class'=>'btn btn-primary form-group']) !!}

		</div>
	    	{!! Form::close() !!}
    	
@endsection