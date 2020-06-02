@extends('admin.template.main')

@section('title', 'Lista de imágenes')

@section('content')
<div class="row">
    @foreach($images as $image)
    <div class="col-md-2">
        <div class="card" style="width: 18rem;">
            <img src="/img/articles/{{ $image->name }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $image->article->title }}</h5>
            </div>
        </div>
    </div>
    @endforeach
</div>
    
@endsection