@extends('adminTemplate')

@section('title', 'Category')

@section('content')
    @foreach($categories as $category)
        <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-phone mdl-cell--4-col-tablet publish-card mdl-card mdl-shadow--4dp portfolio-card">
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">{{ $category->name }}</h2>
            </div>
            <hr>
            <div class="mdl-card__supporting-text" style="color: #FFFFFF">
                Slug : {{ $category->slug }}<br>
                Description : {{ $category->description  }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('category/'.$category->id.'/edit') }}">
                    edit
                </a>

                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="">
                    <i class="material-icons">cancel</i>
                </a>
            </div>
        </div>
    @endforeach
@stop