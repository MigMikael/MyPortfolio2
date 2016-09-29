@extends('userTemplate')

@section('title', $post->title)

@section('content')
    <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
        <div class="mdl-card__title">
            <h2 class="mdl-card__title-text">{{ $post->title }}</h2>
        </div>
        <div class="mdl-card__media">
            {{--<img class="article-image" src="../images/portfolio-example-01.jpg" border="0" alt="">--}}
            {!! $post->cover_image !!}
        </div>

        <div class="mdl-grid portfolio-copy">
            <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Summary</h3>
            <div class="mdl-cell mdl-cell--12-col">
                {{ $post->summary }}
            </div>

            <h3 class="mdl-cell mdl-cell--12-col mdl-typography--headline">Content</h3>
            <div class="mdl-cell mdl-cell--12-col">
                {!! $post->content !!}
            </div>
            <br>
            <br>
            <br>
            <div class="mdl-cell mdl-cell--12-col">
                Category :
                <a href="{{ url('post/category/'.$category->id) }}">
                    {{ $category->name }}
                </a>
            </div>

            <div class="mdl-cell mdl-cell--12-col">
                Tag :
                @foreach($blog_tags as $blog_tag)
                    <span class="mdl-chip">
                        <span class="mdl-chip__text">{{ $blog_tag->name }}</span>
                    </span>
                @endforeach
            </div>
        </div>
    </div>

    @if($post -> comments)
        <div class="mdl-cell mdl-cell--12-col mdl-card mdl-shadow--4dp">
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">Comments</h2>
            </div>
            <hr>
            <div class="mdl-card__supporting-text">
                <ul class="demo-list-three mdl-list">
                    @foreach($comments as $comment)
                        <li class="mdl-list__item mdl-list__item--three-line">
                            <span class="mdl-list__item-primary-content">
                              <i class="material-icons mdl-list__item-avatar">person</i>
                              <span>{{ $comment -> user_agent }}</span>
                              <span class="mdl-list__item-text-body">
                                {{ $comment -> content }}
                              </span>
                            </span>
                        </li>
                        <hr>
                    @endforeach
                </ul>
                <ul class="demo-list-three mdl-list">
                    @include('comments.create')
                </ul>
            </div>
        </div>
    @endif

@stop