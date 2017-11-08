<!DOCTYPE html>
<html>
    @include("admin.partials.head")
<body>
<div id="wrapper" class="toggled">
    @include("admin.partials.sidebar")
            <ul class="nav nav-custom">
                <li class="nav-item">
                    <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">
                        <i class="fa fa-bars"></i>
                    </a>
                </li>
            </ul>
            <div class="container-fluid">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @yield("content")
            </div>
</div>
    @include("admin.partials.footer")
</body>
</html>