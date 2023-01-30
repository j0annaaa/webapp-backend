@extends('homepage.index')
@section('content')
<!-- About Start -->
<div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-5 pe-0">
                        <img class="img-fluid w-100" src="{{asset('assets-homepage/image-homepage/infos/image5.jpg') }}">
                        <img class="img-fluid w-100" src="{{asset('assets-homepage/image-homepage/infos/image4.jpg') }}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">About Us</h1>
                    <h1 class="display-5 mb-4">Sweet Tooth Alley (Cakes and Pastries)</h1>
                    <p class="mb-4">Remy Casil Ampoloquio is the owner of the Sweet Tooth Alley (cakes and pastries) and was established in 2017 with the simple belief that baked goods make people smile. From birthday cakes to wedding desserts, Sweet Tooth Alley’s team of expert bakers and decorators strive to create unforgettable memories with every cake and pastries they bake. With a focus on quality and customer service, Remy and her team created a shop that is the go-to for delicious treats in Butuan City area. Whether it’s a birthday cake, wedding dessert, or any other celebration, the Sweet Tooth Alley (cakes and pastries) team will make sure your event is unforgettable. Stop by today and taste the difference!</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Read More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    @stop