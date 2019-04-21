@extends('main.master')
@section('content') 
    <div class="top-banner internal">
        <h2 class="text-center">{{ trans('langsite.Products')}}  </h2>
 <title> {!! site_settings('Web_site_name')  !!}   / {{ trans('langsite.Products')}}  </title>

		
    </div>

    <div class="products">
        <div class="container">
            <div class="row">
	@foreach($NEWS as $NEWSs_val)

			@foreach(  $NEWSs_val->get_NEWS_description  as  $NEWSs_val_dec)		
                 <div class="col-md-4">
                    <a href=" {!! $NEWSs_val->get_NEWS_path()  !!} ">
                        <div class="product" data-aos="fade-left" data-aos-delay="500" data-aos-once="true">
                            <img src="{{ URL::to('/').'/images/'.$NEWSs_val->single_photo}}" alt=" {!! site_settings('Web_site_name')  !!}">
                            <div class="caption text-center">
                                <h4> {{  $NEWSs_val_dec->title}}   </h4>
                                <p>  {{  $NEWSs_val_dec->seo_title}}  	</p>
                                <span>  {{  $NEWSs_val_dec->created_at}}    </span>
                            </div>
                        </div>
                    </a>
                </div>
			 @endforeach
			 
	@endforeach

           
            </div>
        </div>
    </div>
    
         @endsection