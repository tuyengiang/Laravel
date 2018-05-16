@extends('layouts.master')

@section('header.title')

	Edit Articles
@stop

@section('body.content')
	<h1 class="my-4">Sua bai viet</h1>

	
		@if(COUNT($errors)>0)
			<div class="alert alert-danger">
				<strong>Whoop:</strong> Error <br><br>
				@foreach($errors->all() as $error)
					<ul>
						<li>{{ $error }}</li>
					</ul>
				@endforeach
			</div>
		@endif
	
	<div class="card ms-4">
		<div class="card-body">
			{!! Form::model($articles,[
				'route'=>['articles.update',$articles->id],'method'=>'PUT'
			]) !!}
				<div class="form-group">
					{!! Form::label('title','Tên bài viết',['class'=>'form-content']) !!}
					{!! Form::text('title',NULL,['class'=>'form-control','required'=>'true']) !!}
				</div>
				<div class="form-group">
					{!! Form::label('content','Nội dung bào viết',['class'=>'form-content']) !!}
					{!! Form::textarea('content',NULL,['class'=>'form-control','required'=>'true']) !!}
				</div>
				<div class="form-group">
					{!! Form::submit('Create Article',['class'=>'btn btn-success']) !!}
					
				</div>

			{!! Form::close() !!}
		</div>
	
	</div>

@stop
