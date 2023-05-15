<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <x-app-layout>
            <h1>Blog Name</h1>
            <div class='posts'>
                @foreach($posts as $post)
                    <div class='post'>
                        <h2 class='title'>
                            <a href="/posts/{{$post->id}}">{{ $post->title }}</a>
                        </h2>
                        <a href="/categories/{{ $post->category->id }}">{{ $post->category->name }}</a>
                        <p class='body'>{{ $post->body }}</p>
                     　<form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                          @csrf
                          @method('DELETE')
                        　<button type="button" onclick="deletePost({{ $post->id }})">[削除]</button> 
                       </form>
                    </div>
                @endforeach
            </div>　
            <div class='paginate'>
                    {{ $posts->links() }}
            </div>
            <a href='/posts/create'>[作成]</a>
            <a href="/">[戻る]</a>
        </x-app-layout>
    </body>

</html>   