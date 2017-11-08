@extends('layouts.admin')

@section('content')
    {!! Form::model($training, ['url' => route('training.update', $training), 'method' => 'PUT']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', $training->title, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', $training->description, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit() !!}
    {!! Form::close() !!}
@endsection