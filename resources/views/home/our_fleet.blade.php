@extends('layouts.home')
@section('content')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified jquery -->
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<div  class="container">
    <div class="row">
        @foreach($add_cars as $add_car)
            <div class="col-md-4">
                <div class="card-body">
                    <img class="card-img-top" src="uploads/{{ $add_car->profile_image }}" alt="Profile image">
                    <div class="card-body">
                        <h4 class="card-title">{{$add_car->title}}</h4>
                        <p class="card-text">{{$add_car->description}}</p>
                        <p><strong class="card-text">${{$add_car->price}} per day</strong></p>
                        <a href="#" class="btn btn-primary">Details</a>
                    </div>
                </div>
            </div>
            @if ($loop->iteration % 3 == 0)
    </div>
    <div class="row">
        @endif
        @endforeach
    </div>
</div>




    @endsection