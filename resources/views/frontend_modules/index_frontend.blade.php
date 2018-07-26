@extends('frontend_layouts.app')

@section('title')
    Home
@endsection

@section('content')
    
    {{-- SETTING BANNER IMAGE --}}
    <style type="text/css">
      .sans-banner{
        background-image: linear-gradient(to right, rgba(0, 0, 0, 0.9), rgba(0, 0, 0, 0.1)), url("/assets_frontend/images/{{ $banners[0]->banner_img_var }}");
      }

      .sans-padding {
        padding: 10%;
      }

      .sans-nvabar-color{
        /*background-color: #FFFFFF;*/
        background: #FFFFFF; 
        /*background: linear-gradient(to left, rgba(121,166,63,0), rgba(121,166,0,1));*/
        background: linear-gradient(to right, rgba(255,255,255,0), rgba(121,166,62,0.8));
      }

      .sans-map {
        position: relative;
        padding-bottom: 30%; // This is the aspect ratio
        height: 0;
        overflow: hidden;
      }
    
      .sans-map iframe {
        position: absolute;
        top: 0;
        left: 0;
        width: 100% !important;
        /* height: 100% !important; */
      }
    </style>

    <div class="wrapper animsition" data-animsition-in-class="fade-in"
      data-animsition-in-duration="1000"
      data-animsition-out-class="fade-out"
      data-animsition-out-duration="1000">
        <div class="container">
          <nav class="navbar navbar-default navbar-fixed-top sans-nvabar-color" role="navigation">
          <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
              <a class="navbar-brand page-scroll" href="#main"><img src="{{ asset('assets_frontend/logos/'.$logos[0]->logo_img_var.'') }}" alt="Mash Able Logo" /></a>
              </div>
              
              <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">

                    @foreach($list_menus as $menu)
                      <li><a class="{{ $menu->class }}" href="{{ $menu->href_var }}">{{ $menu->menu_name_var }}</a></li>
                    @endforeach
                    
                </ul>
            </div>
          </div>
        </nav><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->

    <div class="main" id="main"><!-- Main Section-->
      <div class="hero-section app-hero sans-banner">
        <div class="container">
          <div class="hero-content app-hero-content text-center">
            <div class="col-md-10 col-md-offset-1 sans-padding">
                <h1 class="wow fadeInUp" data-wow-delay="0s">{{ $banners[0]->title_var }}</h1>
                <p class="wow fadeInUp" data-wow-delay="0.2s">
                    {!! $banners[0]->subtitle_txt !!}
                </p>
                <a class="btn btn-success btn-action" data-wow-delay="0.2s" href="#">Konsultasikan dengan Kami</a>
				        {{-- <a class="btn btn-primary btn-action" data-wow-delay="0.2s" href="#">Buy Now</a> --}}
            </div>
          <div class="col-md-12">
            <div class="hero-image">
              <img class="img-responsive" src="{{ asset('assets_frontend/images/app_hero_1.png') }}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services-section text-center" id="services"><!-- Services section (small) with icons -->
      <div class="container">
        <div class="col-md-8 col-md-offset-2 nopadding">
        <div class="services-content">
         
          @foreach($service_pages as $service)
            <h1 class="wow fadeInUp" data-wow-delay="0s">
              {{ $service->title_var }}
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s">
            {!! $service->subtitle_txt !!}
          </p>
          @endforeach
          
        </div>
      </div>
        <div class="col-md-12 text-center">
        <div class="services">

          @foreach($service_page_details as $service_detail)

            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="services-icon">
                <img src="{{ asset('assets_frontend/logos/'.$service_detail->service_icon_var.'') }}" height="60" width="60" alt="Service" />
              </div>
              <div class="services-description">
                <h1>{{ $service_detail->service_name_var }}</h1>
                <p>
                  {!! $service_detail->service_desc_txt !!}
                </p>
              </div>
            </div>

          @endforeach

          {{-- <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
            <div class="services-icon">
              <img src="{{ asset('assets_frontend/logos/icon1.png') }}" height="60" width="60" alt="Service" />
            </div>
            <div class="services-description">
              <h1>Mega feature rich</h1>
              <p>
                Mash Able is one of unique dashboard template which come with tons of ready to use feature. We continuous working on it to provide latest updates in digital market.
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.3s">
            <div class="services-icon">
              <img class="icon-2" src="{{ asset('assets_frontend/logos/icon2.png') }}" height="60" width="60" alt="Service" />
            </div>
            <div class="services-description">
              <h1>Fast and Robust</h1>
              <p>
                We are contantly working on Mash Able and improve its performance too. Your definitely give higher rating to Mash Able for its performance.
              </p>
            </div>
          </div>
          <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
            <div class="services-icon">
              <img class="icon-3" src="{{ asset('assets_frontend/logos/icon3.png') }}" height="60" width="60" alt="Service" />
            </div>
            <div class="services-description">
              <h1>FLAT UI-Interface</h1>
              <p>
                Mash able is first ever admin dashboard template which release in Bootstrap 4 framework. Intuitive feature rich design concept and color combination.
              </p>
            </div>
          </div> --}}
        </div>
      </div>
    </div>
  </div>

  <div class="flex-features" id="fortofolio">
    <div class="container nopadding">
            
      @foreach($portofolios as $portofolio)

        <div class="flex-split"><!-- Feature section with flex layout -->
          
          @if($portofolio->position_class_var == 'right')
          <div class="f-left wow fadeInUp" data-wow-delay="0s">
            <div class="left-content">
              <img class="img-responsive" src="{{ asset('assets_frontend/images/portofolio/'.$portofolio->project_img_var.'') }}" alt="{{ $portofolio->project_title_var }}" />
            </div>
          </div>
          <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
            <div class="right-content">
          @else
          <div class="f-right">
            <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
          @endif
          
            <h2>{{ $portofolio->project_title_var }}</h2>
            <p>
              {!! $portofolio->project_desc_txt !!}
            </p>
            <ul>
              {!! $portofolio->project_feature_txt !!}
            </ul>

            @if($portofolio->show_button_link_boo == TRUE)
            <a href="{{ $portofolio->project_url_var }}" class="btn btn-primary btn-action btn-fill" target="_blank" >Lihat</a>
            @endif 

          @if($portofolio->position_class_var == 'right')
            </div>
          </div>
          @else
            </div>
          </div>
          <div class="f-left">
            <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
              <img class="img-responsive" src="{{ asset('assets_frontend/images/portofolio/'.$portofolio->project_img_var.'') }}" alt="{{ $portofolio->project_title_var }}" />
            </div>
          </div>
          @endif

        </div>  
        
      @endforeach
    
    </div>
    
      <div class="flex-split">
        <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
          <div class="right-content">
            <h2>Daftar Project KATAPANDA</h2>
            <p>
              Berikut beberapa project sudah pernah dikerjakan oleh KATAPANDA, diantaranya :
            </p>
            <ul>
              @foreach($list_portofolios as $list_portofolio)
                <li><i class="ion-android-checkbox-outline"></i>{{ $list_portofolio->project_title_var }}</li>
              @endforeach 
            </ul>
          </div>
        </div>
      </div>
     

    <div class="testimonial-section" id="testimony">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
          <!--  <h1>Destiny is loved by many Startups.</h1>
            <p class="sub">
              Listen what your friends are saying about us. Just get the code and sit tight, <br class="hidden-xs"> you'll witness
              its power and performance in lead conversion.
            </p>-->
            <div class="testimonials owl-carousel owl-theme">
              
              @foreach($testimonies as $testimony)
              <div class="testimonial-single"><img class="img-circle" src="{{ asset('assets_frontend/images/users/'.$testimony->photo_var.'') }}" alt="Client Testimonoal" />
                <div class="testimonial-text wow fadeInUp" data-wow-delay="0.2s">
                  <p>{!! $testimony->feedback_txt !!}</p>
                  <h3>{{ $testimony->position_var }}</h3>
                  <h3> - {{ $testimony->fullname_var }} [{{ $testimony->from_var }}]</h3>
                  @for($i=0; $i < $testimony->start_level_int; $i++)
                    <i class="ion ion-star"></i>
                  @endfor
                </div>
              </div>
              @endforeach
          
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Team Image Big -->
      <div class="feature_huge text-center" id="team">
        <div class="container nopadding">
          <div class="col-md-12">
            <img class="img-responsive wow fadeInUp" data-wow-delay="0.1s" src="{{ asset('assets_frontend/images/team/foto_utama.png') }}" alt="" style="max-width:100%"/>
          </div>
          <div class="feature_list">

            @foreach($our_team as $team)

              <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
                <img src="{{ asset('assets_frontend/images/team/'.$team->member_img_var) }}" alt="{{ $team->member_name_var }}" />
                <h1>{{ $team->position_name_var }} [ {{ $team->position_code_var }} ]</h1>
                <p>
                  {{ $team->member_name_var }} 
                </p>
              </div>
            
            @endforeach
            
        </div>
      </div>

      <!-- Counter Section -->
    	<!-- <div class="counter-section">
    		<div class="container">
    			<div class="row text-center">
    			<div class="col-sm-3 col-xs-6">
    				<div class="counter-up">
    					<div class="counter-icon">
    						<i class="ion-android-download"></i>
    					</div>
              <h3><span class="counter">250</span>+</h3>
    					<div class="counter-text">
    						<h4>Pages</h4>
    					</div>
    				</div>
    			</div>
    			<div class="col-sm-3 col-xs-6">
    				<div class="counter-up">
    					<div class="counter-icon">
    						<i class="ion-cube"></i>
    					</div>
              <h3><span class="counter">1000</span>+</h3>
    					<div class="counter-text">
    						<h4>UI Elements</h4>
    					</div>
    				</div>
    			</div>
          <div class="col-sm-3 col-xs-6">
    				<div class="counter-up">
    					<div class="counter-icon">
    						<i class="ion-ios-people"></i>
    					</div>
              <h3><span class="counter">500</span>+</h3>
    					<div class="counter-text">
    						<h4>Form Elements</h4>
    					</div>
    				</div>
    			</div>
          <div class="col-sm-3 col-xs-6">
    				<div class="counter-up">
    					<div class="counter-icon">
    						<i class="ion-ios-paper"></i>
    					</div>
              <h3><span class="counter">80</span>+</h3>
    					<div class="counter-text">
    						<h4>Widgets</h4>
    					</div>
    				</div>
    			</div>
    		</div>
     	</div>
    </div> -->
    <!-- Counter Section Ends -->


  <!-- Feature section with flex layout -->
  <!-- <div class="features-section">
    <div class="f-left">
      <div class="left-content wow fadeInLeft" data-wow-delay="0s">
        <h2 class="wow fadeInLeft" data-wow-delay="0.1s">We are available for custom work development</h2>
        <p class="wow fadeInLeft" data-wow-delay="0.2s">
          We at Mash Able available for custom work development with High end specialized developer.
        </p>
        <button class="btn btn-primary btn-action btn-fill wow fadeInLeft" data-wow-delay="0.2s"><a href="#">Click to send query</a></button>
      </div>
    </div>
    <div class="f-right">
    </div>
  </div> -->

  <div class="services-section text-center" id="contact"><!-- Contact section (small) with icons -->
      <div class="container">
        <div class="col-md-8 col-md-offset-2 nopadding">
        <div class="services-content">
         
          @foreach($contacts as $contact)
            <h1 class="wow fadeInUp" data-wow-delay="0s">
              {{ $contact->title_var }}
            </h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s">
            {!! $contact->subtitle_txt !!}
          </p>
          @endforeach
          
        </div>
      </div>
        <div class="col-md-12 text-center">
        <div class="services">

         @foreach($contact_details as $contact_detail)

            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
              <div class="services-icon">
                <img src="{{ asset('assets_frontend/logos/'.$contact_detail->contact_icon_var.'') }}" height="60" width="60" alt="Service" />
              </div>
              <div class="services-description">
                <h1>{{ $contact_detail->contact_name_var }}</h1>
                <p>
                  {!! $contact_detail->contact_desc_txt !!}
                </p>
              </div>
            </div>

          @endforeach

        </div>
      </div>
    </div>
  </div>

<!-- Client Section -->
  <div class="client-section" id="client">
    <div class="container text-center">
      <div class="clients owl-carousel owl-theme">
        
        @foreach($logo_clients as $logo_client)
          <div class="single">
            <img src="{{ asset('assets_frontend/logos/client/'.$logo_client->logo_img_var.'') }}" alt="" />
          </div>
        @endforeach
        
      </div>
    </div>
  </div>

<!-- Subscribe Form -->
  <div class="cta-sub text-center no-color">
    <div class="container">

      @foreach($subscribe_pages as $subscribe)

        <h1 class="wow fadeInUp" data-wow-delay="0s">{{ $subscribe->title_var }}</h1>
          <p class="wow fadeInUp" data-wow-delay="0.2s">
          {!! $subscribe->subtitle_txt !!}
          </p>
        <div class="form wow fadeInUp" data-wow-delay="0.3s">
          <form class="subscribe-form wow zoomIn" action="{{ asset('assets_frontend/php/subscribe.php') }}" method="post" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
            <input class="mail" type="email" name="email" placeholder="{{ $subscribe->placeholder_var }}" autocomplete="off"><input class="submit-button" type="submit" value="{{ $subscribe->button_name_var }}">
          </form>
          <div class="success-message"></div>
          <div class="error-message"></div>
        </div>

      @endforeach  
    </div>
  </div>

<!-- Footer Section -->
  <div class="footer">
    <div class="container">
        <div class="col-md-12 text-center">
          <img src="{{ asset('assets_frontend/logos/logo.png') }}" alt="Katapanda Logo" />
          <ul class="footer-menu">

            @foreach($contacts as $contact)
            <li><a href="{{ $contact->account_twitter_url_var }}">Twitter</a></li>
            <li><a href="{{ $contact->account_facebook_url_var }}">Facebook</a></li>
            <li><a href="{{ $contact->account_intagram_url_var }}">Intagram</a></li>
            <li><a href="{{ $contact->account_twitter_url_var }}">Youtube</a></li>
            @endforeach
          </ul>
        <div class="footer-text">
          <p>
            Copyright © 2017 Mash Able. All Rights Reserved.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Scroll To Top -->

    <a id="back-top" class="back-to-top page-scroll" href="#main">
    <i class="ion-ios-arrow-thin-up"></i>
    </a>

  <!-- Scroll To Top Ends-->


    </div><!-- Main Section -->
  </div><!-- Wrapper-->

@endsection
