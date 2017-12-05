<!DOCTYPE html>
<html>
@include("home.partials.head")

<body>

@include("home.partials.navbar")

<div class="container-fluid">
    @yield('content')
</div>

@include("home.partials.footer")

</body>
<script src="{{url('js/popper.min.js')}}"></script>
<script src="{{url('js/bootstrap.min.js')}}"></script>
</html>