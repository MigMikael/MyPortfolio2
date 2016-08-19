@extends('template')

@section('content')
    <div class="mdl-cell mdl-cell--8-col mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Create Blog</h2>
        </div>
        <div class="mdl-card__supporting-text">
            {!! Form::open(['url'=>'post', 'name' => 'createForm']) !!}
                @include('posts._form', ['submitButtonText' => 'Add'])
            {!! Form::close() !!}
        </div>
    </div>

    @include('fileentries._imagePanel')

@stop