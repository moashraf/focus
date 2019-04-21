@extends('main.master')
@section('content') 
 
@foreach(  $NEWS  as  $NEWS_val)

	@foreach(  $NEWS_val->get_NEWS_description  as  $NEWS_val_dec)
								
								
		<title> {{  $NEWS_val_dec->title}}  |    {!! site_settings('Web_site_name')  !!}  </title>


<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="UTF-8">
   <meta name="author" content=" mar-decor  ">
  <meta name="description" content="{{  $NEWS_val_dec->meta_description}} "/>
 <meta name="Keywords" content=" {{  $NEWS_val_dec->meta_description}} "/>
 <meta property="og:locale" content="<?php  echo App::getLocale() ; ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content=" {{  $NEWS_val_dec->seo_title}}  " />
<meta property="og:description" content="{{  $NEWS_val_dec->meta_description}} " />
<meta property="og:url" content="{!! $NEWS_val->get_NEWS_path()  !!}" />
<meta property="og:site_name" content="Mar Decor" />
<meta property="article:tag" content=" {{  $NEWS_val_dec->seo_title}} " />
<meta property="article:section" content="" />
<meta property="article:published_time" content="{{  $NEWS_val_dec->created_at}} " />
<meta property="article:modified_time" content="{{  $NEWS_val_dec->updated_at}} " />
<meta property="og:updated_time" content="{{  $NEWS_val_dec->updated_at}} " />
<meta property="og:image" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta property="og:image:secure_url" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta property="og:image:width" content="900" />
<meta property="og:image:height" content="900" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:description" content="  {{  $NEWS_val_dec->seo_title}}" />
<meta name="twitter:title" content="  {{  $NEWS_val_dec->meta_description}} " />
<meta name="twitter:image" content="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" />
<meta name="twitter:site" content="@mar-decor" />
				 
    <div class="top-banner internal">
        <h2 class="text-center"> {{  $NEWS_val_dec->title}}  </h2>
    </div>

    <div class="blog-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="blog-img">
                        <img src="{{ URL::to('/').'/images/'.$NEWS_val->single_photo}}" class="img-responsive" alt="{{  $NEWS_val->single_photo}}">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="blog-desc">
                        <h2> {{  $NEWS_val_dec->title}} </h2>
                        <p>   {!!   $NEWS_val_dec->description  !!} </p>
                    </div>
                </div>
 
            </div>
        </div>
    </div>


	 @endforeach
	@endforeach
    <section class="team  " data-scroll-index="3">
        <div class="container">
            <h2 class="min-title text-center" style="     color: #0e0e0e; " data-aos="fade-up" data-aos-delay="300" data-aos-once="true"> {{ trans('langsite.Gallery')}}</h2>   
			<br>
             <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-gallery owl-theme">
					
							@foreach(  $NEWS  as  $NEWS_val)

								@foreach(  $NEWS_val->get_News_Photos  as  $get_News_Photos_dec)
                        <div class="team-item ss" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
                            <img src="{{ URL::to('/').'/images/'.$get_News_Photos_dec->single_photo_gallery}}" alt=" <?php   
						 echo str_replace(".jpg"," ","$get_News_Photos_dec->single_photo_gallery"); ?> ">
                        </div>
							 @endforeach
											 @endforeach
						 
                    
					
                    </div>                    
                </div>
            </div>
        </div>
    </section>


   <div class="overlay none">
        <div class="popup">
            <img src="assets/img/about.webp" alt="" class="img-src">
        </div>
    </div>
	
	
	
 
   @endsection