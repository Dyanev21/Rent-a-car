@extends('layouts.admin')

@section('content')
    {!! Form::open(['url' => route('training.store'), 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('title', 'Title') !!}
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('description', 'Description') !!}
        {!! Form::text('description', null, ['class' => 'form-control']) !!}
    </div>

    {!! Form::submit() !!}
    {!! Form::close() !!}
@endsection