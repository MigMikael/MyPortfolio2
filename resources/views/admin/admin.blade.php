@extends('adminTemplate')

@section('title', 'Home')

@section('content')
    <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Blog</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <ul>
                <li><h6>All Blog : {{ $allPostNum }}</h6></li>
                <li><h6>Publish : {{ $publishPostNum }}</h6></li>
                <li><h6>Draft : {{ $allPostNum - $publishPostNum }}</h6></li>
            </ul>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="{{ url('post/create') }}">
                create
            </a>

            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ url('admin/post') }}">
                Manage
            </a>
        </div>
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Category</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <ul>
                <li><h6>All : 26</h6></li>
                <li><h6>sth :20</h6></li>
                <li><h6>sth : 6</h6></li>
            </ul>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="{{ url('category/create') }}">
                create
            </a>

            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ url('admin/category') }}">
                Manage
            </a>
        </div>
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">Contact</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <ul>
                <li><h6>All : 26</h6></li>
                <li><h6>sth :20</h6></li>
                <li><h6>sth : 6</h6></li>
            </ul>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="{{ url('contact/create') }}">
                create
            </a>

            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{ url('admin/contact') }}">
                Manage
            </a>
        </div>
    </div>

    <div class="mdl-cell mdl-cell--3-col mdl-cell--12-col-phone mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">User</h2>
        </div>
        <div class="mdl-card__supporting-text">
            <ul>
                <li><h6>All : 26</h6></li>
                <li><h6>sth :20</h6></li>
                <li><h6>sth : 6</h6></li>
            </ul>
        </div>
        <div class="mdl-card__actions mdl-card--border">
            <a class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" href="">
                create
            </a>

            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="{{--{{ url('post/'.$category->id) }}--}}">
                Manage
            </a>
        </div>
    </div>
@stop