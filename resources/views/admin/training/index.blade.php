@extends('layouts.admin')
@section('content')
    <a href="{{ route('training.create') }}" class="btn btn-success pull-right">
        <i class="fa fa-plus"></i>
    </a>
    <table class="table table-stripped">
        <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($trainings as $training)
            <tr>
                <td>{{ $training->id }}</td>
                <td>{{ $training->title }}</td>
                <td>{{ $training->description }}</td>
                <td>
                    <a href="{{ route('training.edit', $training) }}" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button type="button"
                            class="btn btn-danger destroy-modal"
                            data-toggle="modal"
                            data-url="{{ route('training.destroy', $training) }}"
                            data-target="#destroy-modal">
                        <i class="fa fa-ban"></i>
                    </button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @include('admin.partials.destroy')
@endsection