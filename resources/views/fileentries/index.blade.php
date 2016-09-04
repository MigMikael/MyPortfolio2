@extends('userTemplate')

@section('title', 'Mig\'s blog - File')

@section('content')
    {!! Form::open(['url'=>'fileentry/add', 'files' => true]) !!}

        {!! Form::file('filefield') !!}

        {!! Form::submit('upload') !!}
        {{--<p>
            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit">
                Submit
            </button>
        </p>--}}

    {!! Form::close() !!}

    <h1>Picture List</h1>
    @foreach($entries as $entry)
        <div class="mdl-cell mdl-cell--12-col mdl-cell--4-col-phone mdl-cell--4-col-tablet mdl-card mdl-shadow--4dp portfolio-card">
            <div class="mdl-card__media">
                <img src="{{route('getentry', str_replace('.','_',$entry->filename))}}" border="0" alt="" width="200px" height="200px">
            </div>
            <div class="mdl-card__title">
                <h2 class="mdl-card__title-text">{{ $entry->filename }}</h2>
            </div>
            <div class="mdl-card__supporting-text">
              Original Filename:  {{ $entry->original_filename }}
            </div>
            <div class="mdl-card__actions mdl-card--border">
                <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect mdl-button--accent" href="">
                    Add
                </a>
            </div>
        </div>
    @endforeach
@stop