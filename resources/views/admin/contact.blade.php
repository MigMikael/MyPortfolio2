@extends('adminTemplate')

@section('title', 'Contact')

@section('content')
    @foreach($contacts as $contact)
        <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-phone mdl-cell--2-col-tablet mdl-card mdl-shadow--4dp portfolio-card">
            <div class="mdl-card__media">
                <img class="article-image" src="{{ $contact->image }}" border="0" alt="">
            </div>
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">{{ $contact->name }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
                {{ $contact->description }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ $contact->url }}">
                    Visit
                </a>

                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('contact/'.$contact->id.'/edit') }}">
                    edit
                </a>
            </div>
            <div class="mdl-card__menu">
                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                    <i class="material-icons">cancel</i>
                </button>
            </div>
        </div>
    @endforeach
@stop