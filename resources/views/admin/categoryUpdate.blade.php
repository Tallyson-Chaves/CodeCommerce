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

        <h3 class="page-header">Admin Categories edit: {{ $category->name }}</h3>
	
    	<div class="form-group">
	    	{!! Form::open(['url' => 'admin/categories']); !!}

	    		{!! Form::label('name', 'Name:') !!}
	    		{!! Form::text('name', $category->name, ['class'=>'form-control']) !!}

		</div>
		<div class="form-group">

			{!! Form::label('description', 'Description:') !!}
    		{!! Form::textarea('description', $category->description, ['class'=>'form-control']) !!}

		</div>
		<div class="form-group">

			{!! Form::submit('Add Category',['class'=>'btn btn-primary form-group']) !!}

		</div>
	    	{!! Form::close(); !!}
    	
@endsection