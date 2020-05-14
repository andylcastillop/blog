<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>

@include('admin.template.partials.nav') <br>
@include('flash::message')
@include('admin.template.partials.card')

<script src="{{ asset('plugins/bootstrap/jquery/js/jquery-3.5.1.slim.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
</body>
</html>