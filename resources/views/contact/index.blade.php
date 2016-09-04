@extends('userTemplate')

@section('title', 'Mig\'s blog - Contact')

@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-card mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">About & Contact</h2>
        </div>
        <div class="mdl-card__media">
            <img src="../images/about-header1.jpg" alt="About Me" border="0" class="article-image">
        </div>

        <div class="mdl-grid portfolio-copy">
            <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">
                Introduction
            </h3>
            <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium ad architecto autem consectetur cupiditate dignissimos dolor, dolore, eius eum explicabo in, ipsum iure minus nemo quae quibusdam quo reprehenderit voluptatibus?
            </div>

            <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Irure mollit est sit labore</h3>

            <div class="mdl-cell mdl-cell--8-col mdl-card__supporting-text no-padding ">
                <p>
                    Excepteur reprehenderit sint exercitation ipsum consequat qui sit id velit elit. Velit anim eiusmod labore sit amet. Voluptate voluptate irure occaecat deserunt incididunt esse in. Sunt velit aliquip sunt elit ex nulla reprehenderit qui ut eiusmod ipsum do. Duis veniam reprehenderit laborum occaecat id proident nulla veniam. Duis enim deserunt voluptate aute veniam sint pariatur exercitation. Irure mollit est sit labore est deserunt pariatur duis aute laboris cupidatat. Consectetur consequat esse est sit veniam adipisicing ipsum enim irure.
                </p>
            </div>
        </div>
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
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ $contact->url }}">
                    Visit
                </a>
            </div>
        </div>
    @endforeach
@stop