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
	
    	<div class="form-group">
	    	{!! Form::open(['url' => 'admin/categories']); !!}

	    		{!! Form::label('name', 'Name:') !!}
	    		{!! Form::text('name', null, ['class'=>'form-control']) !!}

		</div>
		<div class="form-group">

			{!! Form::label('description', 'Description:') !!}
    		{!! Form::textarea('description', null, ['class'=>'form-control']) !!}

		</div>
		<div class="form-group">

			{!! Form::submit('Add Category',['class'=>'btn btn-primary form-group']) !!}

		</div>
	    	{!! Form::close(); !!}
    	
@endsection