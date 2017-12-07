@extends("layouts.default")
@section("content")
		<!--=== Slider ===-->
		<div class="slider-inner">
			<div id="da-slider" class="da-slider">
				<div class="da-slide">
					<h2><i>Success will be</i> <br /> <i>within</i> <br /> <i>your reach</i></h2>
					<p><i>Only when you start</i> <br /> <i>reaching out</i> <br /> <i>for it </i></p>
					<div class="da-img"><img class="img-responsive" src="{{url('')}}/preview/akawana/assets/plugins/parallax-slider/img/01.png" alt=""></div>
				</div>
				<div class="da-slide">
					<h2><i>RESPONSIVE VIDEO</i> <br /> <i>SUPPORT AND</i> <br /> <i>MANY MORE</i></h2>
					<p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i></p>
					<div class="da-img">
						<iframe src="http://player.vimeo.com/video/47911018" width="530" height="300" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
					</div>
				</div>
				<div class="da-slide">
					<h2><i>USING BEST WEB</i> <br /> <i>SOLUTIONS WITH</i> <br /> <i>HTML5/CSS3</i></h2>
					<p><i>Lorem ipsum dolor amet</i> <br /> <i>tempor incididunt ut</i> <br /> <i>veniam omnis </i></p>
					<div class="da-img"><img src="{{url('')}}/preview/akawana/assets/plugins/parallax-slider/img/html5andcss3.png" alt="image01" /></div>
				</div>
				<div class="da-arrows">
					<span class="da-arrows-prev"></span>
					<span class="da-arrows-next"></span>
				</div>
			</div>
		</div><!--/slider-->
		<!--=== End Slider ===-->

		<!--=== Purchase Block ===-->
		<div class="purchase">
			<div class="container overflow-h">
				<div class="row">
					<div class="col-md-8 animated fadeInLeft">
						<span>PHILOSOPHY OF AKANWANNA.</span>
						<p align="justify">The issues of development, poverty and death are common perennial questions which Church mechanisms cannot handle alone. Consequently, many in their desperate strait have sought protective and economic solutions from alien sources at the cost of their eternal privileges. It is defeatist however, if we recoil from these challenges without providing grander and legitimate options for succor and socialization of our own to arrest breach or compromise of Adventism.</p>
						<br>
						<p align="justify">Therefore, <b>AKANWANNA JIDE AKANWANNA WELFARE ASSOCIATION</b> is a bible based generic concept of some well-intentioned Adventists who were moved by prevailing physical and spiritual necessities and the conscience of the three angels messages to mobilize capacity and critical thinking for Welfare, Evangelism and Development primarily to ensure warmth, growth, stability and empowerment in our missionary zeal.</p>
						<br>
						<p align="justify">This welfare-centric principle is calculated to add strategic values, familial taste and appeal to our corporate existence. It enjoins all to shun introversions and show liberal and self-denying spirit by joining clean hands for effective response to felt needs. Hence, <b>AKANWANNA JIDE AKANWANNA</b> is a relational stewardship imperative – and more particularly, a discreet call to be effectually passionate in the concerns of others and the Church (and nothing more!).</p>
						
					</div>
					<div class="col-md-4 animated fadeInRight">
						<span>PREAMBLE:</span>
						<p align="justify">We the Seventh-Day Adventist Church members from Eastern Nigeria Union Conference- (ENUC), Delta regions and Diaspora having realized the need to promote the welfare of members agreed on 15th of November 1982 to form a non-discriminating voluntary Association guided by SDAC tenets. This Association is not a tribal confederacy to denature the integral profile of the Church, nor an isolationist cult to fan new answers to salvation, but a supportive self-financing umbrella to hedge the incidental challenges of members and foster deeper relationships and development initiatives while waiting for the sure return of Jesus Christ.</p>
						<br>
						<p align="justify">Hence this constitution was enacted and is reviewed this 2016 to shore up operational capacity of the Association, work understandingly and improve due process de facto</p>
					</div>
				</div>
			</div>
		</div><!--/row-->
		<!-- End Purchase Block -->

		<!--=== Content Part ===-->
		<div class="container content-sm">
			<!-- Service Blocks -->
			<div class="row margin-bottom-30">
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-compress service-icon"></i>
						<div class="desc">
							<h4>Our Mission</h4>
							<p>@if(!empty($mission)){{$mission->description}}@endif...</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-cogs service-icon"></i>
						<div class="desc">
							<h4>Our Vission</h4>
							<p>@if(!empty($vission)){{$vission->description}}@endif...</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<i class="fa fa-rocket service-icon"></i>
						<div class="desc">
							<h4>Our Goals</h4>
							<p>@if(!empty($goal)){{$goal->description}}@endif...</p>
						</div>
					</div>
				</div>
			</div>
			<!-- End Service Blokcs -->
			<!-- Recent Works -->
			<div class="row">
			<div class="col-md-12">
			<div class="headline"><h2>Upcomming Events</h2></div>
			 @if($myevents)
            @foreach($myevents as $event)
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnails thumbnail-style thumbnail-kenburn">
                        <div class="thumbnail-img">
                            <div class="overflow-hidden">
                                <img  class="img-responsive" @if(!empty($event->image)) src="{{url('')}}/preview/akawana/assets/img/main/{{$event->image}}" @else src="{{url('')}}/preview/akawana/assets/img/main/img12.jpg" @endif alt="">
                            </div>
                            <a class="btn-more hover-effect" href="{{url('')}}/events/details/{{$event->permalink}}">read more +</a>
                        </div>
                        <div class="caption">
                            <h3><a class="hover-effect" href="{{url('')}}/events/details/{{$event->permalink}}"><b>{{$event->title}}</b></a></h3>
                            <p>{{$event->caption}}...</p>
                        </div>
                    </div>
                </div>
            @endforeach
            @endif
            </div>
			</div>
			

			

			
		</div><!--/container-->
		<!-- Info Blokcs -->
			<div class="row margin-bottom-30">
				<div class="col-md-12">
					<!-- Welcome Block -->
					<div class="col-md-8 md-margin-bottom-40">
						<div class="headline"><h2>Welcome To Akanwanna</h2></div>
						<div class="row">
							<div class="col-sm-4">
								<img class="img-responsive margin-bottom-20" src="{{url('')}}/preview/akawana/assets/img/main/img18.jpg" alt="">
							</div>
							<div class="col-sm-8">
							<p>Our focus as a Seventh Day Adventist Organization in Nigeria is to serve as agent for positive change in the areas of;</p>
								<ul class="list-unstyled margin-bottom-20">
									<li><i class="fa fa-check color-green"></i> Human development</li>
									<li><i class="fa fa-check color-green"></i> Social justice</li>
									<li><i class="fa fa-check color-green"></i> Spiritual growth</li>
									<li><i class="fa fa-check color-green"></i> and Economic empowerment.</li>
								</ul>
							</div>
						</div>

						<blockquote class="hero-unify">
							<p>We follow our course by strenthening our membership through spiritual growth,  and membership empowerment programs</p>
							<small>President</small>
						</blockquote>
					</div><!--/col-md-8-->

					<!-- Latest Shots -->
					<div class="col-md-4">
						<div class="headline"><h2>Latest Shots</h2></div>
						<div id="myCarousel" class="carousel slide carousel-v1">
							<div class="carousel-inner">
								<div class="item active">
									<img src="{{url('')}}/preview/akawana/assets/img/main/img4.jpg" alt="">
									<div class="carousel-caption">
										<p>Facilisis odio, dapibus ac justo acilisis gestinas.</p>
									</div>
								</div>
								<div class="item">
									<img src="{{url('')}}/preview/akawana/assets/img/main/img2.jpg" alt="">
									<div class="carousel-caption">
										<p>Cras justo odio, dapibus ac facilisis into egestas.</p>
									</div>
								</div>
								<div class="item">
									<img src="{{url('')}}/preview/akawana/assets/img/main/img24.jpg" alt="">
									<div class="carousel-caption">
										<p>Justo cras odio apibus ac afilisis lingestas de.</p>
									</div>
								</div>
							</div>

							<div class="carousel-arrow">
								<a class="left carousel-control" href="#myCarousel" data-slide="prev">
									<i class="fa fa-angle-left"></i>
								</a>
								<a class="right carousel-control" href="#myCarousel" data-slide="next">
									<i class="fa fa-angle-right"></i>
								</a>
							</div>
						</div>
					</div><!--/col-md-4-->
				</div>
			</div>
			<!-- End Info Blokcs -->
		<!-- End Content Part -->
@stop