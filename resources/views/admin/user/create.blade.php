@extends('layouts.admin')

@section('content')
    {!! Form::open(['url' => route('user.store'), 'method' => 'POST']) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('password_confirmation', 'Password Confirmation') !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('is_admin', 'Is Admin') !!}
        {!! Form::hidden('is_admin', 0) !!}
        {!! Form::checkbox('is_admin', 1, null) !!}
    </div>

    {!! Form::submit() !!}
    {!! Form::close() !!}
@endsection
