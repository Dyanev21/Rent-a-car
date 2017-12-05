@extends('layouts.admin')

@section('content')
    {!! Form::open(['url' => route('article.store'), 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::open(['url' => route('article.store'), 'files' => true, ]) !!}
        {!! Form::label('profile_picture', 'Profile picture') !!}
        {!! Form::file('profile_picture', null, ['class' => 'form-control']) !!}
    </div>



    <div class="form-group">
        {!! Form::open(['url' => route('article.store'), 'files' => true, ]) !!}
        {!! Form::label('additional_photos', 'Additional photos') !!}
        {!! Form::file('additional_photos', null, ['class' => 'form-control']) !!}

    </div>

    <div class="form-group">
        {!! Form::label('price_per_day', 'Price per day') !!}
        {!! Form::text('price_per_day', null, ['class' => 'form-control']) !!}
    </div>


    {!! Form::submit() !!}
    {!! Form::close() !!}
@endsection