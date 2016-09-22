<div class="mdl-card mdl-shadow--4dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Tag</h2>
    </div>
    <div class="mdl-card__supporting-text">
        {!! Form::open(['url'=>'tag']) !!}
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('name', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('name', 'Name:', ['class' => 'mdl-textfield__label']) !!}
        </div>
        {{--<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('slug', null, ['class' => 'mdl-textfield__input']) !!}
            {!! Form::label('slug', 'Slug:', ['class' => 'mdl-textfield__label']) !!}
        </div>--}}
        <p>
            {!! Form::submit(/*$submitButtonText, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent']*/) !!}
        </p>
        {!! Form::close() !!}
    </div>
</div>