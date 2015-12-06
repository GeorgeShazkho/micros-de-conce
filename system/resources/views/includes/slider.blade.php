<div class="container">
    <div class="row content-row">
        <div id="carousel-slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-slider" data-slide-to="1"></li>
                <li data-target="#carousel-slider" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active"  style="background-image: url('{!! asset('images/slider/1.jpg') !!}');">
                    <div class="carousel-caption">
                        Slide 1
                    </div>
                </div>
                <div class="item" style="background-image: url('{!! asset('images/slider/2.jpg') !!}');">
                    <div class="carousel-caption">
                        Slide 2
                    </div>
                </div>
                <div class="item" style="background-image: url('{!! asset('images/slider/3.jpg') !!}');">
                    <div class="carousel-caption">
                        Slide 3
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-slider" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-slider" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>