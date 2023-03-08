
@extends('website.layouts.master')

@section('content')


    <!-- ################# Slider Starts Here#######################--->
     <div class="slider">
        <!-- Set up your HTML -->
        <div class="owl-carousel ">
            <div class="slider-img">
                <div class="item">
                    <div class="slider-img"><img src="{{URL::asset('website/assets/images/slider/slider-1.jpg')}}" alt=""></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                                <div class="slider-captions">
                                    <h1 class="slider-title">Feeling stress or anxious?</h1>
                                    <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                    <a href="#" class="btn btn-success hidden-xs">View All Therapies</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"><img src="{{URL::asset('website/assets/images/slider/slider-2.jpg')}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">It's time for better help.</h1>
                                <p class="slider-text hidden-xs">We can help you conquer a wide range of psychological and emotional problems.</p>
                                <a href="#" class="btn btn-success hidden-xs">Schedule A Visit</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="slider-img"> <img src="{{URL::asset('website/assets/images/slider/slider-3.jpg')}}" alt=""></div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-offset-2 col-lg-8 col-md-offset-2 col-md-8 col-sm-12 col-xs-12">
                            <div class="slider-captions">
                                <h1 class="slider-title">Meet our psychiatrists</h1>
                                <p class="slider-text hidden-xs">Our psychiatrists are highly skilled to meet your unique needs.</p>
                                <a href="#" class="btn btn-success hidden-xs">Meet Psychiatrists</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="our-blog container-fluid">
  		<div class="container">
  		<div class="session-title row">
  		    <h2>Our Services</h2>
  		    <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p>
  		</div>
  			<div class="col-sm-12 blog-cont">
  				<div class="row no-margin">
  					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="{{URL::asset('website/assets/images/services/service-1.jpg')}}" alt="">

							<div class="blog-single-det">

								<h6>Deperssion</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>
					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="{{URL::asset('website/assets/images/services/service-2.jpg')}}" alt="">

							<div class="blog-single-det">

								<h6>Anxity</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>

					<div class="col-lg-4 col-md-6 blog-smk">
						<div class="blog-single">

								<img src="{{URL::asset('website/assets/images/services/service-3.jpg')}}" alt="">

							<div class="blog-single-det">

								<h6>Relationship Issue</h6>
								<p>Not the answer you're looking for? Browse other questions tagged  is simply dummy text of the printing and typesetting in</p>
								<a href="blog_single.html">
									<button class="btn btn-success btn-sm">More Detail</button>
								</a>
							</div>
						</div>
					</div>






  				</div>
  			</div>

  		</div>
  	</section>

  	<!-- ################# Doctors Message Starts Here#######################--->


    <div class="doctor-message">
        <div class="inner-lay">
            <div class="container">
                <div class="row">


                    <div class="col-md-6 col-sm-12 doc-img">
                        <img  src="{{URL::asset('website/assets/images/doctt.png')}}" alt="">
                    </div>
                    <div class="col-md-6 col-sm-12 doc-det">
                        <h2>Hello, I’m Doctor Sanjay</h2>
                        <span>Expert Clinical Psychologist in Manhattan</span>

                        <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>

                        <h4>Call me on : +123 98 8887</h4>
                    </div>
                </div>
            </div>

        </div>

    </div>

      	<!-- ################# Mission Vision Starts Here#######################--->

  	<div class="mosion-vision">
  	    <div class="container">
  	        <div class="row">
  	            <div class="col-lg-4 col-md-12">
  	                <div class="single-dd">
  	                    <h4>Our Mission</h4>
  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of the printing and Ipsum is simply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>


  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Our Vision</h4>
  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of ply text of the Ipsum is simply text of thetypesetting Ipsum is simply text of the stry simply <br>dummy text of the printing and typesetting industry. Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of </p>


  	                </div>
  	            </div>
  	            <div class="col-lg-4 col-md-12">
  	                 <div class="single-dd">
  	                    <h4>Why Choos Us ?</h4>
  	                    <p>Effective Psychological Therapy with a minimum of 5 years post qualification experience. </p>

  	                    <p>Ipsum is simply text of the Lorem Ipsum is simply my text of ply text</p>

  	                    <p>Lorem Ipsum is simply text of the Lorem Ipsum is simply my text of ply text of the Ipsum f the Lorem Ipsum is simply my text of ply text </p>


  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</div>

 	<!-- ################# Our Session Starts Here#######################--->

  	<section class="sesion-type">
  	    <div class="container">
             <div class="session-title row">
  		    <h2>Our Session Types</h2>
  		    <p>Not the answer you're looking for? Printing and typesetting inLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s Lorem</p>
  		</div>
  	        <div class="row">
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{URL::asset('website/assets/images/session/therapy-1.jpg')}}" alt="">
  	                    <p>Individual Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{URL::asset('website/assets/images/session/therapy-2.jpg')}}" alt="">
  	                    <p>Cuple Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{URL::asset('website/assets/images/session/therapy-3.jpg')}}" alt="">
  	                    <p>online Session</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{URL::asset('website/assets/images/session/therapy-4.jpg')}}" alt="">
  	                    <p>Group Therapy</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess">
  	                    <img src="{{URL::asset('website/assets/images/session/therapy-5.jpg')}}" alt="">
  	                    <p>All Age Group</p>
  	                </div>
  	            </div>
  	            <div class="col-md-4 col-sm-6">
  	                <div class="single-sess sess-ok">
  	                   <h4>Start Your Session today</h4>
  	                    <p>Take the first step on your journey to feeling better. </p>
  	                    <button class="btn btn-success">Book an Appointment</button>
  	                </div>
  	            </div>
  	        </div>
  	    </div>
  	</section>

  	<!-- ################# Testimonial Starts Here#######################--->


  <section class="latest-podcast-section section-padding pb-0" id="section_2">
            <div class="container">
                <div class="row justify-content-center">

                    <div class="col-lg-12 col-12">
                        <div class="section-title-wrap mb-5">
                            <h4 class="section-title">Lastest episodes</h4>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{URL::asset('website/assets/images/talk/images/podcast/27670664_7369753.jpg')}}" class="custom-block-image img-fluid"
                                            alt="">

                                        <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a>
                                    </a>
                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-clock-fill custom-icon"></i>
                                        15 Minutes
                                    </small>

                                    <small>Episode <span class="badge">45</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                        Daily Talk
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="{{URL::asset('website/assets/images/talk/images/profile/handsome-asian-man-listening-music-through-headphones.jpg')}}"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>William
                                        <strong>Vlogger</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>140k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>22.4k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>16k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>62k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-6 col-12">
                        <div class="custom-block d-flex">
                            <div class="">
                                <div class="custom-block-icon-wrap">
                                    <div class="section-overlay"></div>
                                    <a href="detail-page.html" class="custom-block-image-wrap">
                                        <img src="{{URL::asset('website/assets/images/talk/images/podcast/11683425_4790593.jpg')}}" class="custom-block-image img-fluid"
                                            alt="">

                                        <a href="#" class="custom-block-icon">
                                            <i class="bi-play-fill"></i>
                                        </a>
                                    </a>
                                </div>

                                <div class="mt-2">
                                    <a href="#" class="btn custom-btn">
                                        Subscribe
                                    </a>
                                </div>
                            </div>

                            <div class="custom-block-info">
                                <div class="custom-block-top d-flex mb-1">
                                    <small class="me-4">
                                        <i class="bi-clock-fill custom-icon"></i>
                                        15 Minutes
                                    </small>

                                    <small>Episode <span class="badge">45</span></small>
                                </div>

                                <h5 class="mb-2">
                                    <a href="detail-page.html">
                                       Vintage Show
                                    </a>
                                </h5>

                                <div class="profile-block d-flex">
                                    <img src="{{URL::asset('website/assets/images/talk/images/profile/woman-posing-black-dress-medium-shot.jpg')}}"
                                        class="profile-block-image img-fluid" alt="">

                                    <p>Elsa
                                        <strong>Influencer</strong>
                                    </p>
                                </div>

                                <p class="mb-0">Lorem Ipsum dolor sit amet consectetur</p>

                                <div class="custom-block-bottom d-flex justify-content-between mt-3">
                                    <a href="#" class="bi-headphones me-1">
                                        <span>140k</span>
                                    </a>

                                    <a href="#" class="bi-heart me-1">
                                        <span>22.4k</span>
                                    </a>

                                    <a href="#" class="bi-chat me-1">
                                        <span>16k</span>
                                    </a>

                                    <a href="#" class="bi-download">
                                        <span>62k</span>
                                    </a>
                                </div>
                            </div>

                            <div class="d-flex flex-column ms-auto">
                                <a href="#" class="badge ms-auto">
                                    <i class="bi-heart"></i>
                                </a>

                                <a href="#" class="badge ms-auto">
                                    <i class="bi-bookmark"></i>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>

@endsection
