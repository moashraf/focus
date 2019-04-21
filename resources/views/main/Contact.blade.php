@extends('main.master')
@section('content')  

 
    <div class="top-banner internal">
        <h2 class="text-center">Contact Us</h2>
    </div>

    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="map">
 
{!! site_settings('google_maps')  !!}

 </div>

                    <div class="col-md-12">
                        <div class="contact-form">
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

                    <div class="col-md-12">
                        <div class="contact-info">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="info" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                                        <div class="icon">
                                            <i class="fa fa-phone"></i>
                                        </div>

                                        <div class="info-caption">
                                            <p><a href="tel:{!! site_settings('phone')  !!}"> {!! site_settings('phone')  !!}  </a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="info" data-aos="fade-down" data-aos-delay="300" data-aos-once="true">
                                        <div class="icon">
                                            <i class="fa fa-envelope"></i>
                                        </div>

                                        <div class="info-caption">
                                            <p><a href="mailto:{!! site_settings('Mail')  !!}"> {!! site_settings('Mail')  !!}</a></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="info" data-aos="fade-up" data-aos-delay="300" data-aos-once="true">
                                        <div class="icon">
                                            <i class="fa fa-map"></i>
                                        </div>

                                        <div class="info-caption">
                                            <p><a href="mailto:info@focus.com"> {!! site_settings('Location')  !!}  </a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 
 
 
 
   @endsection
