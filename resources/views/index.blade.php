<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $article->title }}</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/general.css') }}">
</head>
<body>
    INNOVBEC Soluciones Informáticas
    <br><br>
    <h1>{{ $article->title }}</h1>
    <hr>
    {{ $article->content }}
    <hr>
    {{ $article->user->name }} | {{ $article->category->name }} | 

    @foreach($article->tags as $tag)
        {{ $tag->name }}
    @endforeach
</body>
</html>



