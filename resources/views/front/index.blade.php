<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<br>
<center>
    <h1>Blog de prueba de laravel 7</h1><br>
    
    <img src="/img/INNOV-BEC-transparencia.png" alt="">
    <h5>www.innovbec.com</h5>
</center><br><br>

<div class="row">

@foreach($articles as $article)
<div class="card" style="width: 18rem; margin-bottom: 25px;">
    @foreach($article->images as $image)
        <img src="{{ asset('img/articles/' . $image->name) }}" class="card-img-top" alt="...">
    @endforeach
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text">Categoría: {{ $article->category->name }}</p>
        <p class="card-text">Hace 3 minutos
        </p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endforeach
    

<style>

* {

  margin-right: 20px;
  margin-left: 20px;

}

</style>

{{ $articles->links() }}


<script src="https://code.jquery.com/jquery-3.5.0.min.js">
<script src="{{ asset('plugins/bootstrap/jquery/js/jquery-3.5.1.slim.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('plugins/chosen_v1.8.7/chosen.jquery.js') }}"></script>
<script src="{{ asset('plugins/trumbowyg/trb-d/trumbowyg.min.js') }}"></script>
</body>
</html>