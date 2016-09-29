@extends('adminTemplate')

@section('title', 'Category')

@section('content')
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
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('category/'.$category->id.'/edit') }}">
                    edit
                </a>
            </div>
            <div class="mdl-card__menu">
                {!! Form::model($category, ['method' => 'DELETE', 'url'=>'category/'.$category->id]) !!}
                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" type="submit">
                    <i class="material-icons">cancel</i>
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    @endforeach

    <a href="{{ url('category/create') }}" class="mdl-cell mdl-cell--3-col mdl-cell--2-col-phone mdl-cell--2-col-tablet
        mdl-card mdl-shadow--4dp portfolio-card" style="text-align: center">
        <i class="material-icons" style="font-size:200px;color:#EF5350;">add</i>
    </a>
@stop