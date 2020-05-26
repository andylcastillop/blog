@extends('admin.template.main')

@section('title', 'Agregar Artículo')

@section('content')

    {!! Form::open(['route' => 'articles.store', 'method' => 'POST']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Tag', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!!  Form::close() !!}
@endsection