<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

<style>
.d-block{
max-height: 35vh;
    
}

</style>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">


    <!-- Wrapper for slides -->

    <div class="carousel-inner" role="listbox">

        @for ($i = 0; $i < sizeOf($gallery); $i++)
            <div class="item @if($i == 0) active @endif">
                <img class="d-block w-100" src="uploads/{{ $gallery[$i]->image }}" alt="{{ $gallery[$i]->title }} ">
                <div class="carousel-caption">
                    {{--<h3>{{ $gallery[$i]->title }}</h3>--}}
                    {{--<p>{{ $gallery[$i]->subtitle }}</p>--}}
                </div>
            </div>
        @endfor
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>


</div>