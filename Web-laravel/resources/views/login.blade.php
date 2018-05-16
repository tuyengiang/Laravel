@extends('layouts.master')

@section('header.title')
	Đằng nhập vào blog
@stop

@section('body.content')
	<h5 class="card-header" style="margin:25px 0 25px 0;border-top-left-radius:5px;border-top-right-radius:5px;">Đăng nhập</h5>
	<div class="card mb-4">
		<div class="card-body">
			<div class="col-ms-6 col-ms-offset-3">
				{!! Form::open([
					'method'=>'post'

				]) !!}	
					<div class="form-group">
						{!! Form::label('username','Tên đăng nhập',['class'=>'form-content'] ) !!}
						{!! Form::text('username','',['class'=>'form-control','required'=>'true']) !!}
					</div>
					<div class="form-group">
						{!! Form::label('password','Mật khẩu',['class'=>'form-content'] ) !!}
						{!! Form::text('password','',['class'=>'form-control','required'=>'true']) !!}
					</div>
					
					<div class="form-group">
						{!! Form::submit('Đăng nhập',['class'=>'btn btn-success']) !!}
					</div>
				{!! Form::close() !!}
			</div>
		

		</div>	
	</div>
	
@stop
