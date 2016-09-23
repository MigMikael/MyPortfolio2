@extends('adminTemplate')

@section('title', 'Edit Contact')

@section('content')
    <div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Content</h2>
        </div>
        <div class="mdl-card__supporting-text">
            {!! Form::model($contact, ['method' => 'PATCH', 'url'=>'contact/'.$contact->id]) !!}
            @include('contact._formCreate', ['submitButtonText' => 'Finish'])
            {!! Form::close() !!}
        </div>
    </div>
@stop