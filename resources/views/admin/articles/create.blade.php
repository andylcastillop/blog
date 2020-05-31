@extends('admin.template.main')

@section('title', 'Agregar Artículo')

@section('content')

    {!! Form::open(['route' => 'articles.store', 'method' => 'POST', 'files' => 'true']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Título') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Artículo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, null, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una opción', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenido') !!}
            {!! Form::textarea('content', null, ['class' => 'form-control textarea-content', 'placeholder' => 'Información del artículo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tags', 'Tags') !!}
            {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('image', 'Imagen') !!}
            {!! Form::file('image') !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
        </div>
    {!!  Form::close() !!}
    
@endsection

@section('js')
    <script>
        $('.select-tag').chosen({
            placeholder_text_multiple: 'Seleccione un máximo de 5 tags',
            max_selected_options: 5,
            no_results_text: 'No hay resultados'
        });

        $('.select-category').chosen({
            allow_single_deselect: true
        });

        $('.textarea-content').trumbowyg();
    </script>
@endsection

