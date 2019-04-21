 @extends('main.master')
@section('content') 

  <div class="top-banner internal">
        <h2 class="text-center">{{ trans('langsite.About')}}</h2>
    </div>
    

    <section class="about" data-scroll-index="1"> 
        <div class="container bg-second">
            <div class="row v-center">
                <div class="col-md-12 col-lg-12 text-center mmt-20 px-0" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                    <div class="img-about">                        
                        <img class="internal-about" src="  {{  asset('/assets/img/s3.webp') }} " alt="about">
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 mmt-20 about-detail about-1 pb-30 text-right" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
                    <p class="white mt-30"><span class="about-span"> {!! site_settings('Web_site_name')  !!}</span> 				  {!! site_settings('About_Us')  !!}
                    </p>
 
 
                    
                    <a href=" {{ URL::to('/').'/'.App::getLocale().'/Contact/'}}  " class="main-button mt-30">
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
                        <h5>{{ trans('langsite.Vision')}}n</h5>
                        <p>	{!! site_settings('Vision')  !!}   </p>
                    </div>                    
                </div>

                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content feature" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" >
                        <div class="icon hov">
                            <i class="fas fa-vector-square"></i>
                        </div>
                        <h5>{{ trans('langsite.Mission')}}</h5>      <p> 	{!! site_settings('Mission')  !!} </p>
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


    <br><br>
    <h4 class="min-title text-center partner-h4" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.Experiance')}}</h4>   
   
    <div class="line"></div>
    <div class="container bg-second">
            <div class="row v-center">
                <div class="col-md-12 col-lg-12 text-center mmt-20 px-0" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                    <div class="img-about">                        
                        <img class="internal-about" src=" {{  asset('/assets/img/s4.webp') }} " alt="about">
                    </div>
                </div>
                <div class="col-md-12 col-lg-12 mmt-20 about-detail about-1 pb-30 text-right" data-aos="fade-right" data-aos-delay="300" data-aos-once="true">
   {!! site_settings('About_Us')  !!}
                </div>
            </div>  
        </div>

    <section id="method">
        <div class="row">
<div class="container">
            <div class="col-md-12 method">
                <div class="row">
                    <div class="col-md-6">
                        <div class="method-caption">
                            <h2>{{ trans('langsite.Ownership')}}</h2>
                            {!! site_settings('About_Us')  !!} 
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="method-img">
                            <img src="{{  asset('/assets/img/4.webp') }}  " style="visibility: hidden;" />
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 method method-2">
                <div class="row">
                    <div class="col-md-6">
                        <div class="method-img method-img2">
                            <img src=" {{  asset('/assets/img/4.webp') }}   " style="visibility: hidden;" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="method-caption">
                            <h2>{{ trans('langsite.Operations')}}</h2>
                             {!! site_settings('About_Us')  !!}
 
                        </div>
                    </div>
                </div>
            </div>
          		  </div>
        </div>
    </section>

    <section id="leadership">
        <div class="container">
            <h4 class="min-title text-center partner-h4" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.Leadership')}}</h4>   
             
            <div class="line"></div>
	@foreach($NEWS as $NEWSs_val)			@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)											
            <div class="row">
                <div class="col-md-4">
                    <div class="member">
                        <div class="leader-img">
                            <img src=" {{ URL::to('/').'/images/'.$NEWSs_val->single_photo}} " alt="">
                        </div>
                        <div class="member-info">
                            <p>  {{  $NEWSs_val_dec->title}} </p>
                            <p>  {{  $NEWSs_val_dec->seo_title}} </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-8">
                        <div class="member-caption"> 

                            <p>  {!!  $NEWSs_val_dec->description!!}    </p>
                        </div>
                </div>
            </div>
                   @endforeach			 	@endforeach	
            </div>
        </div>
    </section>
<br>

    <div class="overlay none">
        <div class="popup">
            <img src="  {{  asset('/assets/img/about.webp') }}  " alt="" class="img-src">
        </div>
    </div>
    

<br><br>
        <div class="container features">
            <h4 class="min-title text-center partner-h4" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">{{ trans('langsite.Strategic')}}</h4>   
            <div class="row text-center">
                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content feature" data-aos="fade-up" data-aos-delay="100" data-aos-once="true">
                        <div class="icon hov">
                            <i class="fas fa-circle"></i>
                        </div>
                        <h5>{{ trans('langsite.Target')}}</h5>
                        <p>    {!! site_settings('About_Us')  !!} </p>
                    </div>                    
                </div>

                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content feature" data-aos="fade-up" data-aos-delay="200" data-aos-once="true" >
                        <div class="icon hov">
                            <i class="fas fa-times"></i>
                        </div>
                        <h5>{{ trans('langsite.Be different')}}</h5>
                        <p>   {!! site_settings('About_Us')  !!} </p>
                    </div>                    
                </div>

                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content about-list feature" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                        <div class="icon hov">
                            <i class="fas fa-chess-pawn"></i>
                        </div>
                        <h5>{{ trans('langsite.Be innovative')}}</h5>
                        <p>   {!! site_settings('About_Us')  !!}  </p>
                    </div>                    
                </div> 
                
                <div class="col-md-6 col-lg-6 mt-30">
                    <div class="ww-content about-list feature" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                        <div class="icon hov">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                        <h5>One-stop-buy</h5>
                        <p>   {!! site_settings('About_Us')  !!}  </p>
                    </div>                    
                </div>   
            </div>                   
        </div>


				 
   @endsection
	