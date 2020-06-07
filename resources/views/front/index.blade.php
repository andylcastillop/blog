<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Laravel 7</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

</head>
<body>

<br>
<center>
    <h1>Blog de prueba de laravel 7</h1>
    <a href="{{ route('home') }}">Administrar</a><br><br>
    <h5>www.innovbec.com</h5>
    
<br></center>

<div class="row bodya">
<div class="card" style="width: 38.5rem; margin-bottom: 25px; margin-right: 20px; margin-left: 20px;">
  <div class="card-body">
  <h5 class="card-title">Tags</h5>
    <span class="badge badge-dark">Default</span>
    <span class="badge badge-dark">Default</span>
    <span class="badge badge-dark">Default</span>
    <span class="badge badge-dark">Default</span>
    <span class="badge badge-dark">Default</span>

  </div>
</div>

<div class="card" style="width: 38.5rem; margin-bottom: 25px; margin-right: 20px; margin-left: 20px;">
  <div class="card-body">
    <h5 class="card-title">Categorias</h5>
    <ul class="list-group list-group-flush">
    <a href=""><li class="list-group-item">Noticias</li></a>
    <a href=""><li class="list-group-item">Noticias</li></a>

  </ul>
  </div>
</div>
</div>

<div class="row bodya">
@foreach($articles as $article)
<div class="card" style="width: 18rem; margin-bottom: 25px; margin-right: 20px; margin-left: 20px;">
    @foreach($article->images as $image)
        <img height="250" src="{{ asset('img/articles/' . $image->name) }}" class="card-img-top" alt="...">
    @endforeach
    <div class="card-body">
        <h5 class="card-title">{{ $article->title }}</h5>
        <p class="card-text"><svg class="bi bi-folder" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.828 4a3 3 0 0 1-2.12-.879l-.83-.828A1 1 0 0 0 6.173 2H2.5a1 1 0 0 0-1 .981L1.546 4h-1L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3v1z"/>
            <path fill-rule="evenodd" d="M13.81 4H2.19a1 1 0 0 0-.996 1.09l.637 7a1 1 0 0 0 .995.91h10.348a1 1 0 0 0 .995-.91l.637-7A1 1 0 0 0 13.81 4zM2.19 3A2 2 0 0 0 .198 5.181l.637 7A2 2 0 0 0 2.826 14h10.348a2 2 0 0 0 1.991-1.819l.637-7A2 2 0 0 0 13.81 3H2.19z"/>
        </svg> {{ $article->category->name }}</p>
        <p class="card-text"><svg class="bi bi-clock-history" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M8.515 1.019A7 7 0 0 0 8 1V0a8 8 0 0 1 .589.022l-.074.997zm2.004.45a7.003 7.003 0 0 0-.985-.299l.219-.976c.383.086.76.2 1.126.342l-.36.933zm1.37.71a7.01 7.01 0 0 0-.439-.27l.493-.87a8.025 8.025 0 0 1 .979.654l-.615.789a6.996 6.996 0 0 0-.418-.302zm1.834 1.79a6.99 6.99 0 0 0-.653-.796l.724-.69c.27.285.52.59.747.91l-.818.576zm.744 1.352a7.08 7.08 0 0 0-.214-.468l.893-.45a7.976 7.976 0 0 1 .45 1.088l-.95.313a7.023 7.023 0 0 0-.179-.483zm.53 2.507a6.991 6.991 0 0 0-.1-1.025l.985-.17c.067.386.106.778.116 1.17l-1 .025zm-.131 1.538c.033-.17.06-.339.081-.51l.993.123a7.957 7.957 0 0 1-.23 1.155l-.964-.267c.046-.165.086-.332.12-.501zm-.952 2.379c.184-.29.346-.594.486-.908l.914.405c-.16.36-.345.706-.555 1.038l-.845-.535zm-.964 1.205c.122-.122.239-.248.35-.378l.758.653a8.073 8.073 0 0 1-.401.432l-.707-.707z"/>
            <path fill-rule="evenodd" d="M8 1a7 7 0 1 0 4.95 11.95l.707.707A8.001 8.001 0 1 1 8 0v1z"/>
            <path fill-rule="evenodd" d="M7.5 3a.5.5 0 0 1 .5.5v5.21l3.248 1.856a.5.5 0 0 1-.496.868l-3.5-2A.5.5 0 0 1 7 9V3.5a.5.5 0 0 1 .5-.5z"/>
        </svg> {{ $article->created_at->diffForHumans() }}</p>
        <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
</div>
@endforeach
</div>




<style>

.bodya {
  margin-left: 100px;
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