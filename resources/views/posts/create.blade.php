@extends('adminTemplate')

@section('title', 'Create Blog')

@section('content')
    <div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
        {!! Form::open(['url'=>'post', 'name' => 'createForm']) !!}
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Content</h2>
        </div>
        <div class="mdl-card__supporting-text">
            @include('posts._formContent')
        </div>
    </div>

    <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet">
        @include('posts._formOption', ['submitButtonText' => 'Post Blog'])

        {!! Form::close() !!}
        <div class="some-space"></div>

        @include('fileentries._imagePanel')
    </div>
@stop