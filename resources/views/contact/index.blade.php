@extends('userTemplate')

@section('title', 'Mig\'s blog - Contact')

@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-card mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Contact Me</h2>
        </div>
        <div class="mdl-card__media">
            <img src="../images/contact-image.jpg" alt="About Me" border="0" class="article-image">
        </div>
        <div class="mdl-card__supporting-text">
            I've use some social network, You can contact me when ever you needed.
        </div>
    </div>

    @foreach($contacts as $contact)
        <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-phone mdl-cell--2-col-tablet mdl-card mdl-shadow--4dp">
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