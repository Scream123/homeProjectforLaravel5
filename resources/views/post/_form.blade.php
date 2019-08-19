<div class="form-group">
    {!! Form::label('Ключевые слова') !!}
    {!! Form::text('slug', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Название') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Краткая запись') !!}
    {!! Form::textarea('excerpt', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Полная запись') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('опубликовать') !!}
    {!! Form::hidden('published', 0) !!}
    {!! Form::checkbox('published', 1, false) !!}

</div>
<div class="form-group">
    {!! Form::label('Дата публикации') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Создать', ['class' => 'btn btn-primary']) !!}
</div>