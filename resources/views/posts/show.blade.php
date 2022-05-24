@extends('layouts.app')　
@section('content')
<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
        
  </head>
    <body>
        <h1 class="title">
            {{ $tests2->title }}
        </h1>
        <p class="edit">[<a href="/posts/{{ $tests2->id }}/edit">edit</a>]</p>
        
        <form action="/posts/{{ $tests2->id }}" id="form_{{ $tests2->id }}" method="post" style="display:inline">
        
        
        <div class="content">
            <div class="content__post">
                <!--<h3>本文</h3>-->
                <p>{{ $tests2->body }}</p>    
            </div>
            <a href="/categories/{{ $tests2->category->id }}">{{ $tests2->category->name }}</a>
            @csrf
            @method('DELETE')
            <button type="submit" id="bty">delete</button>
            <p id="txt"></p>
        </div>
        </form>
        
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>
@endsection

