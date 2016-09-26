<div class="mdl-card mdl-shadow--4dp">
    <div class="mdl-card__title">
        <h2 class="mdl-card__title-text">Option</h2>
    </div>
    <div class="mdl-card__supporting-text">

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('card_image', null, ['class' => 'mdl-textfield__input', 'placeholder' => 'image in first page']) !!}
            {!! Form::label('card_image', 'Card Image:', ['class' => 'mdl-textfield__label']) !!}
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('cover_image', null, ['class' => 'mdl-textfield__input', 'placeholder' => 'image in heading of blog']) !!}
            {!! Form::label('cover_image', 'Cover Image:', ['class' => 'mdl-textfield__label']) !!}
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('tag', null, ['class' => 'mdl-textfield__input', 'placeholder' => 'HashTag here']) !!}
            {!! Form::label('tag', 'Tag:', ['class' => 'mdl-textfield__label']) !!}
        </div>

        <div class="mdl-cell mdl-cell--12-col">
            {!! Form::select('category_id', $categories, null, ['placeholder' => 'Pick category']) !!}
            <p>or</p>
            <a href="{{ url('category/create') }}"> Create </a>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            {!! Form::text('status', null, ['class' => 'mdl-textfield__input', 'placeholder' => 'draft or publish']) !!}
            {!! Form::label('status', 'Status:', ['class' => 'mdl-textfield__label']) !!}
        </div>
        <div class="mdl-cell mdl-cell--4-col">
            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="comments_switch">
                {!! Form::checkbox('comments', '1', true, ['class' => 'mdl-switch__input', 'id' => 'comments_switch']) !!}
                <span class="mdl-switch__label">Comments</span>
            </label>
        </div>
        <div class="mdl-cell mdl-cell--4-col">
            <label class="mdl-switch mdl-js-switch mdl-js-ripple-effect" for="featured_switch">
                {!! Form::checkbox('featured', '1', true, ['class' => 'mdl-switch__input', 'id' => 'featured_switch']) !!}
                <span class="mdl-switch__label">Featured</span>
            </label>
        </div>
        <p>
            {!! Form::submit($submitButtonText, ['class' => 'mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent']) !!}
        </p>
    </div>
</div>