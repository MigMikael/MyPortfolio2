@extends('userTemplate')

@section('title', 'Mig\'s blog')

@section('content')
    @php
        $nextPage = $currentPage + 1;  // 3
        $prevPage = $currentPage - 1;  // 1
    @endphp
    @for($i = 0; $i < sizeof($posts); $i++)
        @php
            $post = $posts[$i];
        @endphp
        <div class="mdl-cell mdl-cell--6-col mdl-cell--6-col-phone mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp portfolio-card">
            <div class="mdl-card__media">
                <a href="{{ url('post/'.$post->id) }}">
                    {!! $post->card_image !!}
                </a>
            </div>
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">{{ $post->title }}</h2>
            </div>
            <div class="mdl-card__supporting-text mdl-card--expand">
                {{ $post->description }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent"
                   href="{{ url('post/'.$post->id) }}">
                    Read more
                </a>
            </div>
            <div class="mdl-card__menu">
                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect">
                    <i class="material-icons">share</i>
                </button>
            </div>
        </div>
    @endfor



    <div class="mdl-cell mdl-cell--12-col">{{--{{ $posts->links() }}--}}</div>


    <div class="mdl-cell mdl-cell--4-col mdl-cell--1-col-phone mdl-cell--2-col-tablet" style="text-align: center">
        @if($currentPage != 1)
            <a href="{{ url('post/page/'.$prevPage) }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">arrow_back</i>
            </a>
        @endif
    </div>

    <div class="mdl-cell mdl-cell--4-col mdl-cell--2-col-phone mdl-cell--4-col-tablet" style="text-align: center">
        <a href="{{ url('post') }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
            <i class="material-icons">apps</i>
        </a>
    </div>
    <div class="mdl-cell mdl-cell--4-col mdl-cell--1-col-phone mdl-cell--2-col-tablet" style="text-align: center">
        @if($currentPage != $lastPage)
            <a href="{{ url('post/page/'.$nextPage) }}" class="mdl-button mdl-js-button mdl-button--fab mdl-js-ripple-effect mdl-button--colored">
                <i class="material-icons">arrow_forward</i>
            </a>
        @endif
    </div>

    <div class="mdl-cell mdl-cell--12-col"></div>
@stop