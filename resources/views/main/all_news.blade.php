@extends('main.master')
@section('content')
   
  
	  
    <div class="top-banner internal">
        <h2 class="text-center"> {{ trans('langsite.News')}} </h2>
    </div>
    
    <!-- Start Blog -->
    <section class="blog bg-main" data-scroll-index="5">
        <div class="container">
            <div class="row text-right">
                
				
				
					@foreach($NEWS as $NEWSs_val)
								@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)
                <div class="col-lg-4">
                    <a href=" {!! $NEWSs_val->get_NEWS_path()  !!} ">
                        <div class="item" data-aos="fade-down" data-aos-delay="400" data-aos-once="true">
                            <div class="post-img">
                                <div class="img">
                                    <img src=" {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt="{!! site_settings('Web_site_name')  !!}">
                                </div>
                            </div>
                            <div class="cont">
                                <div class="info">
                                    <span style="color: #888; font-size: 12px;">  {{  $NEWSs_val_dec->created_at}} </span>
                                </div>
                                <h6 style="color: #458ba7; font-size: 20px;">{{  $NEWSs_val_dec->title}}  </h6>
                                <p> {{  $NEWSs_val_dec->seo_title}} </p>
                                <span style="color: #458ba7;">More</span>
                            </div>
                        </div>
                    </a>
                </div>
                			 @endforeach
									 @endforeach

             </div>
        </div>
    </section>

    <!-- End Blog -->
 
				  
   @endsection