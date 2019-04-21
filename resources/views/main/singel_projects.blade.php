@extends('main.master')
@section('content') 
 
    <div class="top-banner internal">
        <h2 class="text-center">Product</h2>
    </div>

    <div class="product-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-img">
                        <img src=" {{  asset('/assets/img/6.webp') }}   " alt="">
                    </div>

                    <div class="product-desc">
                        <h2>Product Name</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
    <section class="team bg-second" style="padding: 10px;" data-scroll-index="3">
            
                <h4 class="min-title text-center" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">Gallery</h4>   
                <h3 class="text-center" data-aos="fade-up" data-aos-delay="100" data-aos-once="true"><span> What we are offer</span></h3>    
                <div class="line"></div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-gallery owl-theme">
                            <div class="team-item ss" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
                                <img src="{{  asset('/assets/img/s4.webp') }}  " alt="port-1">
                            </div>
                            <div class="team-item ss" data-aos="fade-right" data-aos-delay="500" data-aos-once="true">
                                <img src="{{  asset('/assets/img/s4.webp') }}  " alt="port-1">
                            </div>
                            <div class="team-item ss" data-aos="fade-down" data-aos-delay="500" data-aos-once="true">
                                <img src=" {{  asset('/assets/img/s4.webp') }}  " alt="port-1">
                            </div>
                            <div class="team-item ss" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                                <img src=" {{  asset('/assets/img/s4.webp') }}   " alt="port-1">
                            </div>
                            <div class="team-item">
                                <img src=" {{  asset('/assets/img/s4.webp') }}   " alt="port-1">
                            </div>
                        </div>                    
                    </div>
                </div>
            
        </section>
    </div>
        
        <br><br>

        <div class="overlay none">
            <div class="popup">
                <img src="assets/img/about.webp" alt="" class="img-src">
            </div>
        </div>
 
				
				
			 
				  
   @endsection