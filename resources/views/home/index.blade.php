@extends('layouts.home')

@section('content')
    @include("home.partials.slider")
        <div id="main-container" class="container-fluid">
            <div class="row">
                <div id="sidebar" class="col-xs-3">
                   @include("home.partials.sidebar")
                </div>

                <div id="content" class="col-xs-9">
                    <hr>
                    <h3>
                        OUR VEHICLES
                    </h3>
                    <hr style="width: 100%; color: black; height: 1px; background-color:black;" />

                    {{--<div class="card" style="width: 30rem;">--}}
                        {{--<img class="card-img-top" src="..." alt="Card image cap">--}}
                        {{--<div class="card-body">--}}
                            {{--<h4 class="card-title">Card title</h4>--}}
                            {{--<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>--}}
                            {{--<a href="#" class="btn btn-primary">Go somewhere</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="card-body">--}}
                        {{--<img class="card-img" src="images/650SCoupe-resize605x162.png" alt="Card image">--}}
                        {{--<h4 class="card-title">Card title</h4>--}}
                        {{--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>--}}
                        {{--<a href="#" class="btn btn-primary">Button</a>--}}
                    {{--</div>--}}

                    <div class="row">
                        @foreach($add_cars as $add_car)
                            <div class="col-md-4">
                                <div class="card-body">
                                    {{--<p>This is user {{ $add_car->id }}</p>--}}
                                    <img class="card-img-top" src="uploads/{{ $add_car->profile_image }}" alt="Profile image">
                                    <div class="card-body">
                                        <h4 class="card-title">{{$add_car->title}}</h4>
                                        <p class="card-text">{{$add_car->description}}</p>
                                        <p><strong class="card-text">${{$add_car->price}} per day</strong></p>
                                        <a href="#" class="btn btn-primary">Details</a>
                                    </div>
                                </div>
                            </div>
                            @if ($loop->iteration % 2 == 0)
                    </div>
                    <div class="row">
                        @endif
                        @endforeach

                </div>
                </div>
            </div>
        </div>


    {{--@include("home.partials.sidebar")--}}
    {{--<div class="row">--}}
        {{--<div class="col-lg-12 margin-tb">--}}
            {{--<div class="pull-left">--}}
                {{--<h2>Laravel 5.5 CRUD Example from scratch</h2>--}}
            {{--</div>--}}
            {{--<div class="pull-right">--}}
                {{--<a class="btn btn-success" href="#"> Create New Article</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<table class="table table-bordered">--}}
        {{--<tr>--}}
            {{--<th>No</th>--}}
            {{--<th>Title</th>--}}
            {{--<th>Body</th>--}}
            {{--<th width="280px">Action</th>--}}
        {{--</tr>--}}
        {{--@foreach ($articles as $article)--}}
            {{--<tr>--}}
                {{--<td>{{ ++$i }}</td>--}}
                {{--<td>{{ $article->title}}</td>--}}
                {{--<td>{{ $article->body}}</td>--}}
                {{--<td>--}}
                    {{--<a class="btn btn-info" href="{{ route('articles.show',$article->id) }}">Show</a>--}}
                    {{--<a class="btn btn-primary" href="{{ route('articles.edit',$article->id) }}">Edit</a>--}}
                    {{--{!! Form::open(['method' => 'DELETE','route' => ['articles.destroy', $article->id],'style'=>'display:inline']) !!}--}}
                    {{--{!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}--}}
                    {{--{!! Form::close() !!}--}}
                {{--</td>--}}
            {{--</tr>--}}
        {{--@endforeach--}}
    {{--</table>--}}



    {{--<div class="row">--}}
        {{--<div class="col-lg-12 margin-tb">--}}
            {{--<div class="pull-left">--}}
                {{--<h2> Show Article</h2>--}}
            {{--</div>--}}
            {{--<div class="pull-right">--}}
                {{--<a class="btn btn-primary" href="#"> Back</a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div class="row">--}}
        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
            {{--<div class="form-group">--}}
                {{--<strong>Title:</strong>--}}
                {{--{{ $article->title}}--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="col-xs-12 col-sm-12 col-md-12">--}}
            {{--<div class="form-group">--}}
                {{--<strong>Body:</strong>--}}
                {{--{{ $article->body}}--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



@endsection
