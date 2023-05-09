<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
  <title>Blog</title>
</head>
<body>
    <form action="/posts" method="POST"> 
        @csrf
        <div class="title">
            <h2>タイトル</h2>
            <input type="text" name=post[title] placeholder="タイトル"/>
        </div>
        <div class="body">
            <h2>内容</h2>
            <textarea name="post[body]"></textarea>
        </div>
        <input type="submit" value="保存"/>
    </form>
    <div class="footer">
        <a href="/">戻る</a>
    </div>
</body>
</html>