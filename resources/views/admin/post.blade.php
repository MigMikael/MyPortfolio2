@extends('adminTemplate')

@section('title', 'Blog')

@section('content')

    <a href="{{ url('post/create') }}" class="mdl-cell mdl-cell--4-col mdl-cell--4-col-phone mdl-cell--4-col-tablet
        empty-card mdl-card mdl-shadow--4dp portfolio-card" style="text-align: center">
            <i class="material-icons" style="font-size:200px;color:#EF5350;">add</i>
    </a>

    @foreach($posts as $post)
        <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-phone mdl-cell--4-col-tablet
            @if($post->status == 'publish')
                publish-card
            @else
                draft-card
            @endif
            mdl-card mdl-shadow--4dp portfolio-card">
            <div class="mdl-card__title mdl-card--expand">
                <h2 class="mdl-card__title-text">{{ $post->title }}</h2>
            </div>
            <hr>
            <div class="mdl-card__supporting-text" style="color: #FFFFFF">
                Update : {{ $post->updated_at }}<br>
                Status : {{ $post->status  }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('post/'.$post->id) }}">
                    View
                </a>

                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('post/'.$post->id.'/edit') }}">
                    edit
                </a>
            </div>
            <div class="mdl-card__menu">
                {!! Form::model($post, ['method' => 'DELETE', 'url'=>'post/'.$post->id]) !!}
                <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect" type="submit">
                    <i class="material-icons">cancel</i>
                </button>
                {!! Form::close() !!}
            </div>
        </div>
    @endforeach
@stop