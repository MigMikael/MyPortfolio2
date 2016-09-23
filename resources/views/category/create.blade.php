@extends('adminTemplate')

{{--@section('content')
{!! Form::open(['url'=>'category']) !!}
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
			{!! Form::label('description', 'Description:') !!}
			{!! Form::text('description') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}
@stop--}}

@section('title', 'Create Category')

@section('content')
	<div class="mdl-cell mdl-cell--8-col mdl-cell--12-col-phone mdl-cell--12-col-tablet mdl-card mdl-shadow--4dp">
		<div class="mdl-card__title">
			<h2 class="mdl-card__title-text">Content</h2>
		</div>
		<div class="mdl-card__supporting-text">
			{!! Form::open(['url'=>'category']) !!}
				@include('category._formCreate', ['submitButtonText' => 'Create Category'])
			{!! Form::close() !!}
		</div>
	</div>
@stop