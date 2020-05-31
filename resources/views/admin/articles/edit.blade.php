@extends('admin.template.main')

@section('title', 'Editar Artículo')

@section('content')

    {!! Form::open(['route' => ['articles.update', $article], 'method' => 'PUT']) !!}
        <div class="form-group">
            {!! Form::label('title', 'Título') !!}
            {!! Form::text('title', $article->title, ['class' => 'form-control', 'placeholder' => 'Nombre del Artículo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('category_id', 'Categoría') !!}
            {!! Form::select('category_id', $categories, $article->category_id, ['class' => 'form-control select-category', 'placeholder' => 'Seleccione una opción', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'Contenido') !!}
            {!! Form::textarea('content', $article->content, ['class' => 'form-control textarea-content', 'placeholder' => 'Información del artículo', 'required']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('tags', 'Tags') !!}
            {!! Form::select('tags[]', $tags, $article->tags, ['class' => 'form-control select-tag', 'multiple', 'required']) !!}
        </div>
        
        <div class="form-group">
            {!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
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

