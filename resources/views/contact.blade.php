@extends('layout')


@section('content')
<div class="blue_bg">
    <div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="titlepage">
                <h2><img src="{{ asset('images/heading_iconw.png')}}" alt="#"/>Contact Us</h2>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- contact section -->
<div id="contact" class="contact">
    <div class="con_bg">
    <div class="container-fluid">
        <div class="row ">
            <div class="col-md-6">
                <form id="request" class="main_form">
                <div class="row">
                    <div class="col-md-12 ">
                        <input class="contactus" placeholder="Name" type="type" name="Name"> 
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number"> 
                    </div>
                    <div class="col-md-12">
                        <input class="contactus" placeholder="Email" type="type" name="Email">                          
                    </div>
                    <div class="col-md-12">
                        <input class="contactusmess" placeholder="Message" type="type" Message="Name">
                    </div>
                    <div class="col-md-12">
                        <button class="send_btn">Send</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-6 padding_right2">
                <div class="map_section">
                <div id="map">
                </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
<!-- end contact section -->
@endsection