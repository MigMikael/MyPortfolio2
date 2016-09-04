{{--Blog Post in Admin View--}}
@extends('adminTemplate')

@section('title', 'Post')

@section('content')
    @foreach($posts as $post)
        @if($post->status == 'publish')
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-phone mdl-cell--4-col-tablet publish-card mdl-card mdl-shadow--4dp portfolio-card">
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

                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="">
                        <i class="material-icons">cancel</i>
                    </a>
                </div>
            </div>
        @else
            <div class="mdl-cell mdl-cell--4-col mdl-cell--4-col-phone mdl-cell--4-col-tablet draft-card mdl-card mdl-shadow--4dp portfolio-card">
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

                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="">
                        <i class="material-icons">cancel</i>
                    </a>
                </div>
            </div>
        @endif
    @endforeach

@stop