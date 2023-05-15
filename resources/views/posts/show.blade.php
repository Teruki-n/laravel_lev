<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <title>Posts</title>
</head>
<body>
    <x-app-layout>
        <h1 class="title">
            {{$post->title}}
        </h1>
        <div class="content">
            <h3>本文</h3>
            <p>{{$post->body}}</p>
        </div>
        
        <div class="edit">
            <a href="/posts/{{ $post->id}}/edit">[編集する]</a>
            <a href="/">[戻る]</a>
    </x-app-layout>
</body>
</html>