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
                    {{-- <li><a class="page-scroll" href="#main">Beranda</a></li>
                    <li><a class="page-scroll" href="#services">Layanan</a></li>
                    <li><a class="page-scroll" href="#features">Keuntungan</a></li>
                    <li><a class="page-scroll" href="#reviews">Testimoni</a></li>
                    <li><a class="page-scroll" href="#pricing">Harga</a></li>
                    <li><a href="">Kontak</a></li> --}}
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
      <div class="flex-split"><!-- Feature section with flex layout -->
        <div class="f-left wow fadeInUp" data-wow-delay="0s">
          <div class="left-content">
            <img class="img-responsive" src="{{ asset('assets_frontend/images/feature_1.png') }}" alt="" />
          </div>
        </div>
        <div class="f-right wow fadeInUp" data-wow-delay="0.2s">
          <div class="right-content">
            <h2>High performance and flexible code</h2>
            <p>
              Mash Able is full flexible solution for your entire project development. You can easily maintain all of its module/components.
            </p>
            <ul>
              <li><i class="ion-android-checkbox-outline"></i>Neat n clean code structure.</li>
              <li><i class="ion-android-checkbox-outline"></i>Flexible module structure</li>
              <li><i class="ion-android-checkbox-outline"></i>Copy / Paste and Ready to use</li>
            </ul>
            <button class="btn btn-primary btn-action btn-fill">Learn More</button>
          </div>
        </div>
      </div>

      <div class="flex-split"><!-- Feature section with flex layout -->
        <div class="f-right">
          <div class="right-content wow fadeInUp" data-wow-delay="0.2s">
            <h2>Included Software Dependencies</h2>
            <p>
				Bower - Grunt - Sass Dependencies for easy project flow management.
            </p>
            <ul>
              <li><i class="ion-android-checkbox-outline"></i>Grunt - No need to update plugins manually</li>
              <li><i class="ion-android-checkbox-outline"></i>Grunt - Less work you have to performance</li>
              <li><i class="ion-android-checkbox-outline"></i>Sass  - Most Powerful CSS extension language</li>
            </ul>
            <button class="btn btn-primary btn-action btn-fill">Learn More</button>
          </div>
        </div>
        <div class="f-left">
          <div class="left-content wow fadeInUp" data-wow-delay="0.3s">
            <img class="img-responsive" src="{{ asset('assets_frontend/images/feature_2.png') }}" alt="" />
          </div>
        </div>
      </div>
    </div>
  </div>

    <div class="testimonial-section" id="reviews">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-12">
          <!--  <h1>Destiny is loved by many Startups.</h1>
            <p class="sub">
              Listen what your friends are saying about us. Just get the code and sit tight, <br class="hidden-xs"> you'll witness
              its power and performance in lead conversion.
            </p>-->
            <div class="testimonials owl-carousel owl-theme">
              <div class="testimonial-single"><img class="img-circle" src="{{ asset('assets_frontend/images/testimonial2.jpg') }}" alt="Client Testimonoal" />
                <div class="testimonial-text wow fadeInUp" data-wow-delay="0.2s">
                  <p>Totally flexible admin template. Easy to use and easy to manage all the elements in entire theme. <br class="hidden-xs">  Great support team behind this product. Low turnaround time with exact support which i needed.
                            </p>
                  <h3>Code Quality</h3>
                  <h3> - amit1134 [Buyer - NZ]</h3>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                </div>
              </div>
              <div class="testimonial-single"><img class="img-circle" src="{{ asset('assets_frontend/images/testimonial1.jpg') }}" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>The main reason for the Rating for Able pro admin template is that its is awesome template with tons of ready to use features.<br class="hidden-xs">  - Top quality - Regular updates - PHP version - Clean n Neat code - Saves lots of developing time
                            </p>
                  <h3>Flexibility</h3>
                  <h3>- vishalmg [Buyer -India]</h3>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-ios-star-half"></i>
                </div>
              </div>
              <div class="testimonial-single"><img class="img-circle" src="{{ asset('assets_frontend/images/testimonial3.jpg') }}" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>5 stars are for the excellent support, that is brilliant! The design is very cool and the quality of code is excellent. <br class="hidden-xs">Compliments!</p>
                  <h3>Code Quality</h3>
                  <h3>- ab69aho [Buyer -Italy]</h3>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-ios-star-half"></i>
                </div>
              </div>
              <div class="testimonial-single"><img class="img-circle" src="{{ asset('assets_frontend/images/testimonial2.jpg') }}" alt="Client Testimonoal" />
                <div class="testimonial-text">
                  <p>The product is high end and high-end specialized assistance in solving problems. <br class="hidden-xs">I would highly recommend.</p>
                  <h3>Customer Support</h3>
                  <h3>- donpavulon [Buyer -US]</h3>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                  <i class="ion ion-star"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>



    <!-- Feature Image Big -->
      <div class="feature_huge text-center">
        <div class="container nopadding">
          <div class="col-md-12">
            <img class="img-responsive wow fadeInUp" data-wow-delay="0.1s" src="{{ asset('assets_frontend/images/big_feature.png') }}" alt="" style="max-width:100%"/>
          </div>
          <div class="feature_list">
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.2s">
              <img src="{{ asset('assets_frontend/logos/feature_icon.png') }}" alt="Feature" />
              <h1>Tursted Product</h1>
              <p>
                We increasingly grow our talent and skills in admin dashboard development. 
              </p>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.4s">
              <img src="{{ asset('assets_frontend/logos/feature_icon_2.png') }}" alt="Feature" />
              <h1>Online Documentation</h1>
              <p>
                Documentation helps you in every steps on your entire project.
              </p>
            </div>
            <div class="col-sm-4 wow fadeInUp" data-wow-delay="0.6s">
              <img src="{{ asset('assets_frontend/logos/feature_icon_3.png') }}" alt="Feature" />
              <h1>Free Updates & Support</h1>
              <p>
                Fast and accurate outline during support. Low turnaround time.
              </p>
            </div>
          </div>
        </div>
      </div>

      <!-- Counter Section -->
    	<div class="counter-section">
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
    </div>
    <!-- Counter Section Ends -->



    <div class="features-section"><!-- Feature section with flex layout -->
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
    </div>


    <!-- Pricing Section -->
    <div class="pricing-section no-color text-center" id="about">
      <div class="container">
        <div class="col-md-12 col-sm-12 nopadding">
          <div class="pricing-intro">
            <h1 class="wow fadeInUp" data-wow-delay="0s">Pricing Table</h1>
            <p class="wow fadeInUp" data-wow-delay="0.2s">
              Loream ipsum dummy text loream ipsum dummy text loream ipsum dummy text <br class="hidden-xs"> loream ipsum dummy text.
              Get the right plan that suits you.
            </p>
          </div>
          <div class="col-sm-6 nopadding">
            <div class="table-left wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon">
                <img src="{{ asset('assets_frontend/logos/cart2.png') }}" alt="Icon" />
              </div>
              <div class="pricing-details">
                <h2>Beginner Plan</h2>
                <span>$5.90</span>
                <p>
                  Pay little enjoy the product <br class="hidden-xs"> for life time.
                </p>
                <ul>
                  <li>First basic feature </li>
                  <li>Second feature goes here</li>
                  <li>Any other third feature</li>
                  <li>And the last one goes here</li>
                </ul>
                <button class="btn btn-primary btn-action btn-fill">Get Plan</button>
              </div>
            </div>
          </div>
          <div class="col-sm-6 nopadding">
            <div class="table-right wow fadeInUp" data-wow-delay="0.6s">
              <div class="icon">
                <img src="{{ asset('assets_frontend/logos/cart1.png') }}" alt="Icon" />
              </div>
              <div class="pricing-details">
                <h2>Premium Plan</h2>
                <span>$19.99</span>
                <p>
                  Pay only for what you use. Flexible <br class="hidden-xs"> payment options.
                </p>
              <ul>
                <li>First premium feature </li>
                <li>Second premium one goes here</li>
                <li>Third premium feature here</li>
                <li>Final premium feature</li>
              </ul>
              <button class="btn btn-primary btn-action btn-fill">Buy Now</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!-- Client Section -->
  <div class="client-section">
    <div class="container text-center">
      <div class="clients owl-carousel owl-theme">
        <div class="single">
          <img src="{{ asset('assets_frontend/logos/logo1.png') }}" alt="" />
        </div>
        <div class="single">
          <img src="{{ asset('assets_frontend/logos/logo2.png') }}" alt="" />
        </div>
        <div class="single">
          <img src="{{ asset('assets_frontend/logos/logo3.png') }}" alt="" />
        </div>
        <div class="single">
          <img src="{{ asset('assets_frontend/logos/logo4.png') }}" alt="" />
        </div>
        <div class="single">
          <img src="{{ asset('assets_frontend/logos/logo6.png') }}" alt="" />
        </div>
        <div class="single">
          <img src="{{ asset('assets_frontend/logos/logo7.png') }}" alt="" />
        </div>
      </div>
    </div>
  </div>

<!-- Subscribe Form -->
  <div class="cta-sub text-center no-color">
    <div class="container">
      <h1 class="wow fadeInUp" data-wow-delay="0s">New product notification subscription</h1>
        <p class="wow fadeInUp" data-wow-delay="0.2s">
        We sent you daily mail about product updates / releases / version change logs<br class="hidden-xs">Please write accurate email address below.
        </p>
      <div class="form wow fadeInUp" data-wow-delay="0.3s">
        <form class="subscribe-form wow zoomIn" action="{{ asset('assets_frontend/php/subscribe.php') }}" method="post" accept-charset="UTF-8" enctype="application/x-www-form-urlencoded" autocomplete="off" novalidate>
          <input class="mail" type="email" name="email" placeholder="Email address" autocomplete="off"><input class="submit-button" type="submit" value="Subscribe">
        </form>
        <div class="success-message"></div>
			  <div class="error-message"></div>
      </div>
    </div>
  </div>

<!-- Footer Section -->
  <div class="footer">
    <div class="container">
        <div class="col-md-12 text-center">
          <img src="{{ asset('assets_frontend/logos/logo.png') }}" alt="Mash Able Logo" />
          <ul class="footer-menu">
            <li><a href="http://demo.com">Site</a></li>
            <li><a href="#">Support</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy</a></li>
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
