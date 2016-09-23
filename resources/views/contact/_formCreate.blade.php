<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('name', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('name', 'Name:', ['class' => 'mdl-textfield__label']) !!}
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('description', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('description', 'Description:', ['class' => 'mdl-textfield__label']) !!}
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('url', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('url', 'URL:', ['class' => 'mdl-textfield__label']) !!}
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('image', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('image', 'Image:', ['class' => 'mdl-textfield__label']) !!}
</div>
<p>
    {!! Form::submit($submitButtonText, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent']) !!}
</p>