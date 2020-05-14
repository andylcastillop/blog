@extends('admin.template.main')

@section('title', 'Editar Usuario ' . $user->name)

@section('content')
    {!! Form::open(['route' => ['users.update', $user], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Nombre completo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Correo electrónico') !!}
            {!! Form::email('email', $user->email, ['class' => 'form-control', 'placeholder' => 'example@hotmail.com', 'required']) !!}
        </div>
        <!--<div class="form-group">
            {!! Form::label('password', 'Contraseña') !!}
            {!! Form::password('password', ['class' => 'form-control', 'placeholder' => '**********', 'required']) !!}
        </div>-->
        <div class="form-group">
            {!! Form::label('type', 'Tipo') !!}
            {!! Form::select('select', ['admin' => 'Administrador', 'member' => 'Miembro'], null,  ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!!  Form::close() !!}
@endsection