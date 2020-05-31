<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Default') | Panel de Administración</title>
    <link rel="stylesheet" href="{{ asset('plugins/bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('plugins/chosen_v1.8.7/chosen.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/trumbowyg/trb-d/ui/trumbowyg.min.css') }}">

</head>
<body>

@include('admin.template.partials.nav') <br>
@include('flash::message')
@include('admin.template.partials.errors')
@include('admin.template.partials.card')

<script src="https://code.jquery.com/jquery-3.1.1.min.js">
<script src="{{ asset('plugins/bootstrap/jquery/js/jquery-3.5.1.slim.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('plugins/chosen_v1.8.7/chosen.jquery.js') }}"></script>
<script src="{{ asset('plugins/trumbowyg/trb-d/trumbowyg.min.js') }}"></script>

@yield('js')
</body>
</html>