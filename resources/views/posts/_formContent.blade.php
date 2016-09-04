<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('title', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('title', 'Title:', ['class' => 'mdl-textfield__label']) !!}
</div>
<br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('slug', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('slug', 'Slug:', ['class' => 'mdl-textfield__label']) !!}
</div>
<br>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::text('description', null, ['class' => 'mdl-textfield__input']) !!}
    {!! Form::label('description', 'Description:', ['class' => 'mdl-textfield__label']) !!}
</div>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::textarea('summary', null, ['class' => 'mdl-textfield__input', 'rows' => '8']) !!}
    {!! Form::label('summary', 'Summary:', ['class' => 'mdl-textfield__label']) !!}
</div>
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    {!! Form::textarea('content', null, ['class' => 'mdl-textfield__input', 'rows' => '30']) !!}
    {!! Form::label('content', 'Content:', ['class' => 'mdl-textfield__label']) !!}
</div>
