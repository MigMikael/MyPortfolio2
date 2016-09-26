@extends('userTemplate')

@section('title', 'Mig\'s blog - Category')

@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-card mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Category</h2>
        </div>
        <div class="mdl-card__media">
            <img src="../images/photo-wide.jpg" alt="About Me" border="0" class="article-image">
        </div>
        <div class="mdl-card__supporting-text">
            View Blog by category.
        </div>
    </div>
    @foreach($categories as $category)
        <div class="mdl-cell mdl-cell--3-col mdl-cell--2-col-phone mdl-cell--2-col-tablet mdl-card mdl-shadow--4dp">
            <div class="mdl-card__media artificial-image" style="background-color: {{ sprintf('#%06X', mt_rand(0, 0xFFFFFF)) }}">
                <h1><b>{{ substr($category->name, 0, 1) }}</b></h1>
            </div>
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">
                    {{ $category->name }}<br>
                </h2>
            </div>
            <div class="mdl-card__supporting-text">
                {{ $category->description }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('post/category/'.$category->id) }}">
                    View
                </a>
            </div>
        </div>
    @endforeach

    @include('tag._allTag')
@stop