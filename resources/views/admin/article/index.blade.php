@extends('layouts.admin')
@section('content')
    <a href="{{ route('article.create') }}" class="btn btn-success pull-right">
        <i class="fa fa-plus"></i>
    </a>
    <table class="table table-stripped">
        <thead>
        <tr>
            <td>ID</td>
            <td>Title</td>
            <td>Description</td>
            <td>Profile picture</td>
            <td>Additional pictures</td>
            <td>Price per day</td>
            <td>Actions</td>
        </tr>
        </thead>
        <tbody>
        @foreach($articles as $article)
            <tr>
                <td>{{ $article->id }}</td>
                <td>{{ $article->title }}</td>
                <td>{{ $article->description }}</td>
                <td>{{ $article->profile_picture }}</td>
                <td>{{ $article->additional_photos }}</td>
                <td>{{ $article->price_per_day }}</td>
                <td>
                    <a href="{{ route('article.edit', $article) }}" class="btn btn-warning">
                        <i class="fa fa-edit"></i>
                    </a>
                    <button type="button"
                            class="btn btn-danger destroy-modal"
                            data-toggle="modal"
                            data-url="{{ route('article.destroy', $article) }}"
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