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
            </div>
            <div class="mdl-card__menu">
                {!! Form::model($category, ['method' => 'DELETE', 'url'=>'category/'.$category->id]) !!}
                    {{--{!! Form::hidden('name', null, ['class' => 'mdl-textfield__input', 'value' => $category->name]) !!}
                    {!! Form::hidden('slug', null, ['class' => 'mdl-textfield__input', 'value' => $category->slug]) !!}
                    {!! Form::hidden('description', null, ['class' => 'mdl-textfield__input', 'value' => $category->description]) !!}--}}
                    <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" type="submit">
                        <i class="material-icons">cancel</i>
                    </button>
                {!! Form::close() !!}
            </div>
        </div>
    @endforeach
@stop