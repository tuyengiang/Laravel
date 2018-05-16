@extends('layouts.master')

@section('header.title')
	Create Artites new
@stop

@section('body.content')
	<h1 class="my-4"> Create Articles</h1>


	@if(count($errors)>0)
		<div class="alert alert-danger">
			<strong>Whoop:</strong> Error create blog <br><br>


			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
			
				@endforeach
			</ul>
		
		</div>
	
	@endif
	<div class="card bs-4">
		<div class="card-body">
		{!! Form::open([
			'route'=>'articles.index','method'=>'POST'
		]) !!}
			<div class="form-group">
				{!! Form::label('title','Tên bài viết',['class'=>'form-content']) !!}
				{!! Form::text('title','',['class'=>'form-control','required'=>'true']) !!}
			</div>
			<div class="form-group">
				{!! Form::label('content','Nội dung bào viết',['class'=>'form-content']) !!}
				{!! Form::textarea('content','',['class'=>'form-control','required'=>'true']) !!}
			</div>
			<div class="form-group">
				{!! Form::submit('Create Article',['class'=>'btn btn-success']) !!}
				
			</div>
			
	
		{!! Form::close() !!}
		
		</div>
	</div>
	
@stop