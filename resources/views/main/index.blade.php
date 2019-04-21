@extends('main.master')
@section('content')
  

    <!-- Start Header -->
    <header class="valign header">
        <div id="particles-js"></div>
        <!-- backgroundslide -->
        <div class="pic-wrapper">
		
		            @foreach(  $slider as  $NEWs_val)
               @foreach(  $NEWs_val->get_slider_description  as  $NEWs_val_dec)

            <figure style=" 
			
			animation-delay: {{ $NEWs_val->id}}s;
			-o-animation-delay: {{ $NEWs_val->id}}s;
			-moz--animation-delay: {{ $NEWs_val->id}}s;
			-webkit-animation-delay: {{ $NEWs_val->id}}s;

			background: url('{{ URL::to('/').'/images/'.$NEWs_val->single_photo}}') no-repeat center center;"
			class="pic"></figure>
           
			
			            @endforeach
						@endforeach

        </div>

        <div class="container">
            <div class="text-center mt-30">                
                <div class="row">
                    <div class="col-md-10 offset-md-1">
					
					 
                        <h1 class="slide-h">   {{  $NEWs_val_dec->title }}</h1>

             
						
						
                    </div>                    
                </div>
                <ul class="head-navigation text-center">
                    <li class="main-nav text-right">
                        <a href=" {{ URL::to('/').'/'.App::getLocale().'/About/'}} ">
                            <h4>More about us</h4>
                            <div class="top-nav">
                                <span>
                                    <i class="arrow"></i>
                                            {{ trans('langsite.About')}}
                                    <i class="arrow"></i>		
                                </span>
                            </div>
                        </a>                        
                    </li>
                    <li class="main-nav text-right">
                        <a href="  {{ URL::to('/').'/'.App::getLocale().'/all_Projects/all_Projects/2'}}  " data-scroll-nav="2">
                        <h4>What we offer</h4>
                        <div class="top-nav">
                            <span>
                                <i class="arrow"></i>
                                        {{ trans('langsite.Products')}}
                                <i class="arrow"></i>		
                            </span>
                        </div>
                         </a>
                    </li>
                </ul> 
                <!-- right side social -->
                <div class="social-media">
                    <ul>
                        <li><a href="  {!! site_settings('instagram')  !!}  "><i class="fab fa-instagram"></i></a></li>
                        <li><a href=" {!! site_settings('facebook')  !!} "><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href=" {!! site_settings('twitter')  !!} "><i class="fab fa-twitter"></i></a></li>
                        <li><a href=" {!! site_settings('linkedin')  !!} "><i class="fab fa-linkedin"></i></a></li>
                    </ul>
                </div>      
                <!-- left-navbar -->
                <div class="left-nav">
                    <ul>
                        <li><a href=" {{ URL::to('/').'/'.App::getLocale().'/Contact/'}}  l">{{ trans('langsite.Contact Us')}}</a></li>
                        <li><a href="  {{ URL::to('/').'/'.App::getLocale().'/all_news/all_news/1'}} ">{{ trans('langsite.News')}}</a></li>
                    </ul>
                </div>
                <!-- decor -->
                <div class="top-dash-1"></div>
                <div class="top-dash-2"></div>
                <div class="top-dash-3"></div>
                <div class="top-dash-4"></div>
                <div class="top-dash-5"></div>
            </div>            
        </div>
        <a href="#" data-scroll-nav="1">
            <div id="mouse-scroll">
                <div class="mouse">
                <div class="mouse-in"></div>
                </div>
                <div>
                    <span class="down-arrow-1"></span>
                    <span class="down-arrow-2"></span>
                    <span class="down-arrow-3"></span>
                </div>
            </div>
        </a>        
    </header>
    <!-- End Header==== -->
        <!-- margin up -->
        <div class="mt-up"></div>
    <!-- Start About -->
    <section class="about" data-scroll-index="1"> 
        <div class="container bg-second">
            <div class="row v-center">
                <div class="col-md-12 col-lg-6 text-center mmt-20 px-0" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                    <div class="img-about">                        
                        <img src="{{  asset('/assets/img/s3.webp ') }} " alt="about">
                    </div>
                </div>
                <div class="col-md-12 col-lg-4 mmt-20 about-detail about-1 pb-30 text-right" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                    <p class="white mt-30"><span class="about-span"> {!! site_settings('Web_site_name')  !!}  </span>      
					{!! site_settings('About_Us')  !!}
					
					
					<a href="  {{ URL::to('/').'/'.App::getLocale().'/About/'}}  "> {{ trans('langsite.More')}}</a>
                    </p>
                    <a href="  {{ URL::to('/').'/'.App::getLocale().'/Contact/'}}  " data-scroll-nav="6" class="main-button mt-30">
                        <span>{{ trans('langsite.Contact Us')}}</span>
                    </a>

                </div>
            </div>  
        </div>
        <div class="container features">
            
            <div class="line"></div>
            <div class="row text-center">
                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content feature" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                        <div class="icon hov">
                            <i class="fab fa-connectdevelop"></i>
                        </div>
                        <h5>{{ trans('langsite.Vision')}}</h5>
                        <p>   	{!! site_settings('Vision')  !!}  </p>
                    </div>                    
                </div>

                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content feature" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" >
                        <div class="icon hov">
                            <i class="fas fa-vector-square"></i>
                        </div>
                        <h5>{{ trans('langsite.Mission')}}</h5>
                        <p> 	{!! site_settings('Mission')  !!} </p>
                    </div>                    
                </div>

                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content about-list feature" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                        <div class="icon hov">
                            <i class="fas fa-check"></i>
                        </div>
                        <h5>{{ trans('langsite.Values')}}</h5>
                        <p> {!! site_settings('Values')  !!} </p>
                    </div>                    
                </div> 
                
                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content about-list feature" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                        <div class="icon hov">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5>{{ trans('langsite.Philosophy')}}</h5>
                        <p> {!! site_settings('Philosophy')  !!} </p>

                    </div>                    
                </div>   
            </div>                     
        </div>

    </section>


    <!-- Team Start -->
    <section class="team bg-second" data-scroll-index="3">
        <div class="container">
            <h4 class="min-title text-center" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.Products')}}</h4>   
            <div class="line"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-products owl-theme">
					
					
						@foreach($NEWS as $NEWSs_val)

			@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)	
					
					
                        <a href="  {!! $NEWSs_val->get_NEWS_path()  !!} ">
                            <div class="product" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
                                <img src=" {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt="  {{  $NEWSs_val_dec->title}}  ">
                                <div class="caption text-center">
                                    <h4>  {{  $NEWSs_val_dec->title}}    </h4>
                                    <p>  {{  $NEWSs_val_dec->seo_title}}  </p>
                                    <span>More</span>
                                </div>
                            </div>
                        </a>

                          @endforeach
			 
	@endforeach




						 
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <div class="overlay none">
        <div class="popup">
            <img src=" {{  asset('/assets/img/about.webp') }} "   class="img-src">
        </div>
    </div>
    <!-- Team End -->
    
    <!-- Testimonial Start -->
    <section class="testimonial bg-main" data-scroll-index="4">
        <div class="container">
            <h4 class="min-title text-center" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.What our customers says')}}</h4>   
            <div class="line"></div>          
            <div class="row">                   
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme text-right">
					
					
					
						@foreach($NEWS as $NEWSs_val)

			@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)	
					
					
					
                        <div class="testimonial-item" data-aos="fade-up" data-aos-delay="600" data-aos-once="true">
                            <div class=" testimonial-content">
                                <p class="pb-20">  {{  $NEWSs_val_dec->seo_title}}  </p>
                                <img src="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt="testi-1">
                                <h4>   {{  $NEWSs_val_dec->title}}    </h4>     
                            </div>                            
                        </div>
                     
 					     @endforeach
			 
	@endforeach

					 
					 

			   </div>
                </div>
            </div>
            <h4 class="min-title text-center mt-50" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.financial partners')}}</h4>   
              
            <div class="line"></div> 
            <div class="team">
                <div class="owl-carousel owl-gallery owl-theme">
				
				
				
						@foreach($NEWS as $NEWSs_val)

			@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)	
					
					
                    <div class="item">
                        <img src="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}" alt="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} ">
                    </div>
					
					  @endforeach   
			 
	@endforeach

					
                </div>
            </div> 

        </div>
    </section>
    <!-- clients -->

    <section class="team bg-second" data-scroll-index="3">
        <div class="container">
            <h4 class="min-title text-center" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.Gallery')}}</h4>   
            <div class="line"></div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-gallery owl-theme">
                        <div class="team-item ss" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
                            <img src="assets/img/5.webp" alt="port-1">
                        </div>
                        <div class="team-item ss" data-aos="fade-right" data-aos-delay="500" data-aos-once="true">
                            <img src="assets/img/6.webp" alt="port-1">
                        </div>
                        <div class="team-item ss" data-aos="fade-down" data-aos-delay="500" data-aos-once="true">
                            <img src="assets/img/1.webp" alt="port-1">
                        </div>
                        <div class="team-item ss" data-aos="fade-up" data-aos-delay="500" data-aos-once="true">
                            <img src="assets/img/3.webp" alt="port-1">
                        </div>
                        <div class="team-item ss">
                            <img src="assets/img/4.webp" alt="port-1">
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial End -->

    <!-- Start Blog -->
   <!-- Start Blog -->
   <section class="blog bg-main" data-scroll-index="5">
    <div class="container">
        <h4 class="min-title text-center" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.News')}}</h4>   
        <div class="line"></div>
        <div class="row text-right">
            
            <div class="col-lg-4">
                <a href="blog.html">
                    <div class="item" data-aos="fade-down" data-aos-delay="400" data-aos-once="true">
                        <div class="post-img">
                            <div class="img">
                                <img src="assets/img/s4.webp" alt="1">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <span style="color: #888; font-size: 12px;">06 Mars 2019</span>
                            </div>
                            <h6 style="color: #458ba7; font-size: 20px;">Title</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                            <span style="color: #458ba7;">More</span>
                        </div>
                    </div>
                </a>
            </div>
            

            
            <div class="col-lg-4">
                <a href="blog.html">
                    <div class="item mmt-20" data-aos="fade-right" data-aos-delay="400" data-aos-once="true">
                        <div class="post-img">
                            <div class="img">
                                <img src="assets/img/s2.webp" alt="2">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <span style="color: #888; font-size: 12px;">06 Mars 2019</span>
                            </div>
                            <h6 style="color: #458ba7; font-size: 20px;">Title</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                            <span style="color: #458ba7;">More</span>
                        </div>
                    </div>
                </a>
            </div>
            

            
            <div class="col-lg-4">
                <a href="blog.html">
                    <div class="item mmt-20" data-aos="fade-down" data-aos-delay="400" data-aos-once="true">
                        <div class="post-img">
                            <div class="img">
                                <img src="assets/img/5.webp" alt="3">
                            </div>
                        </div>
                        <div class="cont">
                            <div class="info">
                                <span style="color: #888; font-size: 12px;">06 Mars 2019</span>
                            </div>
                            <h6 style="color: #458ba7; font-size: 20px;">Title</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                            <span style="color: #458ba7;">More</span>
                        </div>
                    </div>
                </a>
            </div>
            

        </div>
    </div>
</section>

<!-- End Blog -->

    <!-- End Blog -->

    <!-- Start Contact -->
    <section class="contact bg-main" data-scroll-index="6">
        <div class="container">

            <h4 class="min-title text-center" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.Contact Us')}}</h4>   
            <div class="line"></div>

            <div class="row">
                    
                <div class="col-sm-12">
                    <form class="form" id="contact-form" method="post">

                        <div class="messages"></div>

                        <div class="controls">

                            <div class="row">

                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                                        <input id="form_name" type="text" name="name" placeholder="{{ trans('langsite.Name')}}" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="form-group" data-aos="fade-up" data-aos-delay="200" data-aos-once="true">
                                        <input id="form_email" type="email" name="email" placeholder="{{ trans('langsite.Email')}}" required="required">
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="form-group" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                                        <input id="form_subject" type="text" name="Subject" placeholder="{{ trans('langsite.Subject')}}" required="required">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group" data-aos="fade-up" data-aos-delay="400" data-aos-once="true">
                                        <textarea id="form_message" name="message" placeholder="{{ trans('langsite.Message')}}" rows="4" required="required"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="main-button"><span>{{ trans('langsite.send')}}</span></button>
                                </div>

                            </div>                             
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </section>
    <iframe class="map" style="width:100% !important" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.1826000497726!2d31.189913315115465!3d30.060299981876536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x2fce18eb7e30c90b!2sCORD+DIGITAL!5e0!3m2!1sen!2s!4v1487675163137" width="100%" height="300" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

    <!-- End Contact  -->
    
@endsection