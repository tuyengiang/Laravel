@extends('layouts.master')

@section('header.title')
	{{$articles->title}}
@stop

@section('body.content')
	 <h1 class="my-4">{{ $articles->title }}</h1>
	 <div style="border-top:none;border-radius:0.5em;" class="card-footer text-muted">
	              Posted on January 1, 2017 by
	              <a href="#">Start Bootstrap</a>
	  </div>
	 <div class="card mb-4">
            <div class="card-body">
              <p class="card-text">{{ $articles->content}}</p>
            </div>
             
         </div>
@stop