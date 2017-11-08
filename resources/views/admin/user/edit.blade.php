@extends('layouts.admin')

@section('content')
    {!! Form::model($user, ['url' => route('user.update', $user), 'method' => 'PUT']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', $user->name, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::text('email', $user->email, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('is_admin', 'Is Admin') !!}
            {!! Form::hidden('is_admin', 0) !!}
            {!! Form::checkbox('is_admin', 1, $user->is_admin) !!}
        </div>

        {!! Form::submit() !!}
    {!! Form::close() !!}
@endsection
