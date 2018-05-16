@extends('layouts.master')

@section('header.title')
    Blog đơn gỉan sử dụng larvel
@stop

@section('body.content')
    
        <h5 class="card-header" style="margin:25px 0 25px 0;border-top-left-radius:5px;border-top-right-radius:5px;">Bài viết mới</h5>
            
        @foreach($articles as $a)
          <!-- Blog Post -->
          <div class="card mb-4">
            <div class="card-body">
              <h2 class="card-title">{{ $a->title }}</h2>
              <p class="card-text">{{ $a->content}}</p>
              <a href="{{ route('articles.show',$a->id) }}" class="btn btn-primary">Read More</a>
              <a href="{{ route('articles.edit',$a->id) }}" class="btn btn-success">Edit</a>
              {!! Form::open([
                  'route'=>['articles.delete',$a->id],'method'=>'delete','style'=>'display:inline'

                ]) !!}
                    <button type="submit" onclick="return confirm('Bạn muốn xóa bài viết này không ? '); " class="btn btn-danger">Xóa</button>

              {!! Form::close() !!}
            </div>
            
          </div>
        @endforeach

@stop