@extends('layouts.admin')
@section('content')
    <a href="{{ route('user.create') }}" class="btn btn-success pull-right">
        <i class="fa fa-plus"></i>
    </a>
    <table class="table table-stripped">
        <thead>
            <tr>
                <td>ID</td>
                <td>Name</td>
                <td>Email</td>
                <td>Admin</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if($user->is_admin)
                            <span class="label label-success">
                                <i class="fa fa-check"></i>
                            </span>
                        @else
                            <span class="label label-danger">
                                <i class="fa fa-ban"></i>
                            </span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('user.edit', $user) }}" class="btn btn-warning">
                            <i class="fa fa-edit"></i>
                        </a>
                        <button type="button"
                                class="btn btn-danger destroy-modal"
                                data-toggle="modal"
                                data-url="{{ route('user.destroy', $user) }}"
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