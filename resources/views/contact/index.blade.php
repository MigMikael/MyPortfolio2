@extends('userTemplate')

@section('title', 'Mig\'s blog - Contact')

@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-card__title mdl-shadow--4dp artificial-heading">
        <h2 class="mdl-card__title-text">Contact</h2>
    </div>

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
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ $contact->url }}" target="_blank">
                    Visit
                </a>
            </div>
        </div>
    @endforeach
@stop