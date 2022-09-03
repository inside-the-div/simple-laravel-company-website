@extends('layout')


@section('content')
<div class="blue_bg">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <h2><img src="{{ asset('images/heading_icon.png')}}" alt="#"/> Testimonial</h2>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- testimonial section -->
<div id="testimonial" class="testimonial">
    <div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div id="myCarousel" class="carousel slide testimonial_Carousel " data-ride="carousel">
                <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <div class="carousel-caption ">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial_box">
                                    <figure><img src="{{ asset('images/test.png')}}" alt="#"/></figure>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial_box">
                                    <figure><img src="{{ asset('images/test.png')}}" alt="#"/></figure>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <div class="carousel-caption">
                            <div class="row">
                            <div class="col-md-12">
                                <div class="testimonial_box">
                                    <figure><img src="{{ asset('images/test.png')}}" alt="#"/></figure>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it </p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
            </a>
        </div>
    </div>
    </div>
</div>
</div>
<!-- end testimonial section -->
@endsection