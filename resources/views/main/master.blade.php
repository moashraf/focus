 <html lang="en">
  
<head>
    <title> {!! site_settings('Web_site_name')  !!}  </title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{  asset('/assets/img/favicon.ico') }}   " type="image/x-icon">
    <link rel="icon" href="{{  asset('/assets/img/favicon.ico') }}  " type="image/x-icon">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href=" {{  asset('/assets/fonts/css/all.css') }}  ">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <!-- Magnific Popup CSS -->
    <link rel="stylesheet" href=" {{  asset('/assets/vendor/magnific-popup.css') }}  ">
    <!-- Animate CSS -->
    <!-- AOS CSS -->
    <link href=" {{  asset('/assets/aos.css') }}  " rel="stylesheet">
    <link rel="stylesheet" href=" {{  asset('/assets/vendor/animate.css') }}  ">
     <!-- Owl Carouusel CSS -->
     <link rel="stylesheet" href=" {{  asset('/assets/vendor/owl.carousel.css') }}  ">
     <link rel="stylesheet" href=" {{  asset('/assets/vendor/owl.theme.default.css') }}  ">
    
    <link rel="stylesheet" href="{{  asset('/assets/css/responsive.css') }}  ">
	
	
	<?php if (App::getLocale()=='en'){   ?>
					
    <link rel="stylesheet" href=" {{  asset('/assets/css/ltr.css') }} ">


                  <?php  }else {    ?>
                   
    <link rel="stylesheet" href=" {{  asset('/assets/css/style.css') }} ">


                  <?php  }    ?>
				  
				  
				  
				  
</head>



 
  <body>

    <!--Loader -->
    <div class="akar-loader">
        <div id="preloader">
            <div id="loader"></div>
        </div>
    </div>
    <!-- Loader end -->
    	
  
    <!-- Start Navbar -->
    <nav class="navbar navbar-internal navbar-expand-lg">
        <div class="container">

            <!-- Logo -->
            <a class="logo" href="{{ URL::to('/').'/'.App::getLocale().''}}">
                <img src=" {{  asset('/assets/img/logo.webp') }}  " alt="logo">       
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </button>

            <!-- navbar links -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto nav-links">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/').'/'.App::getLocale().''}} ">{{ trans('langsite.Home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/About/'}}  ">   {{ trans('langsite.About')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/all_Projects/all_Projects/2'}}  ">    {{ trans('langsite.Products')}}</a>
                    </li>                 
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/all_news/all_news/1'}}  "> {{ trans('langsite.News')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/Contact/'}}  ">   {{ trans('langsite.Contact Us')}} </a>
                    </li>

					
					
					<?php if (App::getLocale()=="en"){   ?>
					
					<li class="nav-item lang">
                        <a class="nav-link" href="{{ URL::to('/').'/ar/' }}">عربي</a>
                    </li>
				
                  <?php  }else {    ?>
                   
					  <li class="nav-item lang">
                        <a class="nav-link" href="{{ URL::to('/').'/en/' }}">English</a>
                    </li>
					
                
                  <?php  }    ?>
				  
				  
				  
                   
                </ul>

                <ul class="navbar-nav mr-auto social-nav">
                    <li class="nav-item">
                        <a class="nav-link" href=" {!! site_settings('facebook')  !!} "><i class="fab fa-facebook"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href=" {!! site_settings('twitter')  !!} "><i class="fab fa-twitter"></i></a>
                    </li>

                    
                    <li class="nav-item">
                        <a class="nav-link" href=" {!! site_settings('linkedin')  !!} "><i class="fab fa-linkedin-in"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href=" {!! site_settings('instagram')  !!}  "><i class="fab fa-instagram"></i></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{!! site_settings('youtube')  !!}  "><i class="fab fa-youtube"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar = -->

  
  
  
  

         @yield('content')	
         
             <!--footer start-->
    <footer class="footer footer-internal white-bg pos-r o-hidden bg-contain">
        <div class="round-p-animation"></div>
        <div class="primary-footer">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-lg-4" data-aos="fade-left" data-aos-delay="1000" data-aos-once="true">
                        <div class="ht-theme-info bg-contain bg-pos-r dark-bg text-white" data-bg-img="{{  asset('/images/bg/02.png') }} ">
                            <div class="footer-logo">
                                <img src=" {{  asset('/assets/img/logo.webp') }} " class="img-center" alt="">
                            </div>
                            <p class="mb-3"> {!! site_settings('About_Us')  !!}</p> 
                            <div class="social-icons social-border circle social-hover mt-5">
                                <h4 class="title">{{ trans('langsite.Follow')}}</h4>
<ul class="list-inline social">
<li class="social-facebook" data-aos="fade-left" data-aos-delay="1000" data-aos-once="true"><a href="{!! site_settings('facebook')  !!}"><i class="fab fa-facebook-f"></i></a></li>
<li class="social-twitter" data-aos="fade-left" data-aos-delay="1200" data-aos-once="true"><a href=" {!! site_settings('twitter')  !!}"><i class="fab fa-twitter"></i></a>
</li>
 
<li class="social-linkedin" data-aos="fade-left" data-aos-delay="1500" data-aos-once="true"><a href="{!! site_settings('linkedin')  !!} "><i class="fab fa-linkedin-in"></i></a>
</li>
<li class="social-instagram" data-aos="fade-left" data-aos-delay="1600" data-aos-once="true"><a href="{!! site_settings('instagram')  !!}"><i class="fab fa-instagram"></i></a>
</li>
<li class="social-youtube" data-aos="fade-left" data-aos-delay="1700" data-aos-once="true"><a href="{!! site_settings('youtube')  !!} "><i class="fab fa-youtube"></i></a>
</li>

</ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 py-8 md-px-5 footer-link" data-aos="fade-up" data-aos-delay="1000" data-aos-once="true">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 footer-list">
                                <h4 class="title text-center">{{ trans('langsite.Links')}}</h4>
                                <div class="row">
                                    <div class="col-sm-12 text-center">
                                        <ul class="list-unstyled">
                                            <li class="nav-item">
                        <a class="nav-link" href="{{ URL::to('/').'/'.App::getLocale().''}} ">{{ trans('langsite.Home')}}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/About/'}}  "> {{ trans('langsite.About')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/all_Projects/all_Projects/2'}}  "> {{ trans('langsite.Products')}} </a>
                    </li>                 
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/all_news/all_news/1'}}  "> {{ trans('langsite.News')}} </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href=" {{ URL::to('/').'/'.App::getLocale().'/Contact/'}}  ">  {{ trans('langsite.Contact Us')}} </a>
                    </li>

                  
					<?php if (App::getLocale()=="en"){   ?>
					
					<li class="nav-item lang">
                        <a class="nav-link" href="{{ URL::to('/').'/ar/' }}">عربي</a>
                    </li>
				
                  <?php  }else {    ?>
                   
					  <li class="nav-item lang">
                        <a class="nav-link" href="{{ URL::to('/').'/en/' }}">English</a>
                    </li>
					
                
                  <?php  }    ?>
				  
				  
				  
				  
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 sm-mt-5">
                                <h4 class="title">   {{ trans('langsite.Contact Us')}} </h4>
                                <ul class="media-icon list-unstyled">
                                    <li>
                                        <p class="mb-0"> {!! site_settings('Location')  !!}  </p><br>
                                    </li>
                                    <li><a href="mailto:{!! site_settings('Mail')  !!}">{!! site_settings('Mail')  !!} </a><br>
                                    </li>
                                    <li><a href="tel:{!! site_settings('phone')  !!}">{!! site_settings('phone')  !!} </a></li><br>

                                </ul>
                            </div>
                        </div>
                        <!-- <div class="row mt-5">
                            <div class="col-lg-10 col-md-12 mr-auto">
                                <div class="align-items-center white-bg box-shadow px-3 py-3 radius d-md-flex justify-content-between">
                                    <h4 class="mb-0 sub">NewsLetter</h4>
                                    <div class="subscribe-form sm-mt-2">
                                        <form id="mc-form" class="group">
                                            <input type="email" value="" name="EMAIL" class="email" id="mc-email" placeholder="Email Address" required="">
                                            <input class="btn btn-theme" type="submit" name="subscribe" value="Subscribe">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="secondary-footer">
            <div class="container">
                <div class="copyright">
                    <div class="row align-items-center">
                        <div class="col-md-12 text-center"> <span> focus 2019 | All Rights Reserved designed and developed by <a target="_blank" href="https://corddigital.com/"> Cord Digital </a></span></div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    
 
 
 
         
    
    <script  src="{{  asset('/assets/vendor/jquery-3.3.1.min.js') }} "></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Magnific-popup JS -->
    <script src=" {{  asset('/assets/vendor/jquery.magnific-popup.min.js') }} "></script>
    <!-- Owl Carousel JS -->
    <script src=" {{  asset('/assets/vendor/owl.carousel.js') }} "></script>    
    <!-- Scroll IT JS -->
    <script src=" {{  asset('/assets/vendor/scrollIt.min.js') }} "></script>
    <!-- AOS JS -->
    <script src="{{  asset('/assets/aos.js') }} "></script>
    <!-- Particle JS -->
    <script src=" {{  asset('/assets/vendor/particles.min.js') }} "></script>
    <script src=" {{  asset('/assets/vendor/app.js') }} "></script>
    <!-- Custom JS -->
    <script src=" {{  asset('/assets/js/custom.js') }} "></script>
</body>

</html>

