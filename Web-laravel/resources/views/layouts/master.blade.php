<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('header.title')</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ url('css/blog-home.css') }}" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    @include('template.header')

    <!-- Page Content -->
    <div class="container">

      <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">

            @yield('body.content')
        </div>
        @include('template.slide-bar')
       

      @include('template.footer')