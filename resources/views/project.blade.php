@extends('layout')


@section('content')
<div class="blue_bg">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <h2><img src="{{ asset('images/heading_iconw.png')}}" alt="#"/>Our Projects</h2>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- Our  project section -->
<div id="project" class="project">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <p>The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content  
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="project_box before_top">
                <figure><img src="{{ asset('images/project_img1.jpg')}}" alt="#"/></figure>
                <h3>Modern Fixture</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="project_box margin_top1 before_bottom">
                <figure class="marging_top4"><img  src="{{ asset('images/project_img2.jpg')}}" alt="#"/></figure>
                <h3 >Vintage chandlier</h3>
            </div>
        </div>
        <div class="col-md-4">
            <div class="project_box before_top">
                <figure><img src="{{ asset('images/project_img3.jpg')}}" alt="#"/></figure>
                <h3>bulpilo</h3>
            </div>
        </div>
        <div class="col-md-12">
            <a class="read_more" href="#">See More</a>
        </div>
    </div>
    </div>
</div>
<!-- end Our project section -->
@endsection