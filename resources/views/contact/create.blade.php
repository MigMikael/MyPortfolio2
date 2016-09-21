@extends('adminTemplate')

@section('title', 'Create Contact')

@section('content')
    <div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Content</h2>
        </div>
        <div class="mdl-card__supporting-text">
            {!! Form::open(['url'=>'contact', 'name' => 'createForm']) !!}
                @include('category._formCreate', ['submitButtonText' => 'Create Contact'])
            {!! Form::close() !!}
        </div>
    </div>

    <div class="mdl-cell mdl-cell--4-col mdl-cell--12-col-phone mdl-cell--12-col-tablet">
        @include('fileentries._imagePanel', ['from' => 'contact'])
    </div>
@stop