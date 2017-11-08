@extends('layouts.admin')

@section('content')
    {!! Form::model($article, ['url' => route('article.update', $article), 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $article->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', $article->description, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('profile_picture', 'Profile picture') !!}
        {!! Form::text('profile_picture', $article->profile_picture, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('additional_photos', 'Additional photos') !!}
        {!! Form::text('additional_photos', $article->additional_photos, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('price_per_day', 'Price per day') !!}
        {!! Form::text('price_per_day', $article->price_per_day, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit() !!}
    {!! Form::close() !!}
@endsection