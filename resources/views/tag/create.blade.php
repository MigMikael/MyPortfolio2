@extends('userTemplate')

@section('content')
    <h1>New Tag</h1>
    <hr>
    <div class="mdl-grid">
        {!! Form::open(['url'=>'tag']) !!}
        <ul>
            <li>
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name') !!}
            </li>
            <li>
                {!! Form::label('slug', 'Slug:') !!}
                {!! Form::text('slug') !!}
            </li>
            <li>
                {!! Form::submit() !!}
            </li>
        </ul>
        {!! Form::close() !!}
    </div>
@stop