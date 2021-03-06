<!DOCTYPE html>
<html lang="en">
<head>
<title>Home</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{ asset('images/laravel-icon.png') }}">
<link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css"/>

</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-center">

						<!-- Logo -->
						<div class="logo">
							<a href="#" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">music</span>
							</a>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li class="active"><a href="#">Home</a></li>
								<li><a href="/artists">Artists</a></li>
								<li><a href="/albums">Albums</a></li>
								<li><a href="/news">News</a></li>
								<li><a href="/contact">Contact</a></li>
							</ul>
						</nav>

						<!-- User area -->
						<div class="log_reg d-flex flex-row align-items-center justify-content-start">
							<ul class="d-flex flex-row align-items-start justify-content-start">
							@if( auth()->check() )
                                <li><a href="#">Hi, {{ auth()->user()->name }}</a></li>
							    <li><a href="/signout">Logout</a></li>
                            @else
								<li><a href="/login">Login</a></li>
								<li><a href="/signup">Register</a></li>
							@endif
							</ul>

							<!-- Hamburger -->
							<div class="hamburger d-flex flex-column align-items-end justify-content-between"><div></div><div></div><div></div></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Menu -->

	<div class="menu">
		<div class="menu_container">
			<div class="menu_background"></div>
			<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
			<div class="menu_content d-flex flex-column align-items-center justify-content-start">
				<nav class="menu_nav">
					<ul class="d-flex flex-column align-items-center justify-content-start">
						<li><a href="#">Home</a></li>
						<li><a href="/artists">Artists</a></li>
						<li><a href="/albums">Albums</a></li>
						<li><a href="/news">News</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title_container text-center">
											<div class="home_title islive text-center"><h1>your <span>music.</span></h1></div>
										</div>
										<!--<div class="tickets_form_container">
											<form action="#" class="tickets_form">
												<div class="d-flex flex-md-row flex-column align-items-start justify-content-md-between justify-content-start">
													<div class="tickets_form_inputs d-flex flex-row align-items-start justify-content-between">
														<div class="custom_dropdown tickets_form_input cdd">
															<div class="custom_dropdown_selected cdd">Event</div>
															<ul class="cdd">
																<li>Event 1</li>
																<li>Event 2</li>
																<li>Event 3</li>
															</ul>
														</div>
														<input type="text" class="tickets_form_input" placeholder="Tickets" required="required">
													</div>
													<button class="tickets_form_button button"><span>get your tickets</span></button>
												</div>
											</form>
										</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title_container text-center">
											<div class="home_title islive text-center"><h1>your <span>music.</span></h1></div>
										</div>
										<!--<div class="tickets_form_container">
											<form action="#" class="tickets_form">
												<div class="d-flex flex-md-row flex-column align-items-start justify-content-md-between justify-content-start">
													<div class="tickets_form_inputs d-flex flex-row align-items-start justify-content-between">
														<div class="custom_dropdown tickets_form_input cdd">
															<div class="custom_dropdown_selected cdd">Event</div>
															<ul class="cdd">
																<li>Event 1</li>
																<li>Event 2</li>
																<li>Event 3</li>
															</ul>
														</div>
														<input type="text" class="tickets_form_input" placeholder="Tickets" required="required">
													</div>
													<button class="tickets_form_button button"><span>get your tickets</span></button>
												</div>
											</form>
										</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url(images/index.jpg)"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								<div class="col">
									<div class="home_content">
										<div class="home_title_container text-center">
											<div class="home_title islive text-center"><h1>your <span>music.</span></h1></div>
										</div>
										<!--<div class="tickets_form_container">
											<form action="#" class="tickets_form">
												<div class="d-flex flex-md-row flex-column align-items-start justify-content-md-between justify-content-start">
													<div class="tickets_form_inputs d-flex flex-row align-items-start justify-content-between">
														<div class="custom_dropdown tickets_form_input cdd">
															<div class="custom_dropdown_selected cdd">Event</div>
															<ul class="cdd">
																<li>Event 1</li>
																<li>Event 2</li>
																<li>Event 3</li>
															</ul>
														</div>
														<input type="text" class="tickets_form_input" placeholder="Tickets" required="required">
													</div>
													<button class="tickets_form_button button"><span>get your tickets</span></button>
												</div>
											</form>
										</div>-->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- Home Slider Navigation 
			<div class="home_slider_nav"><i class="fa fa-angle-right" aria-hidden="true"></i></div> -->

			<!-- Home Social -->
			<div class="home_social">
				<div class="d-flex flex-row align-items-center justify-content-start">
					<div class="home_social_text">follow</div>
					<div class="home_social_list">
						<ul class="d-flex flex-row align-items-center justify-content-start">
							<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<!-- Scroll Down -->
			<div class="scroll_down scroll_down_link" data-scroll-to=".tours">
				<a href="#"></a>
				<div class="d-flex flex-row align-items-center justify-content-start">
					<div>scroll down</div>
					<div class="scroll_arrows d-flex flex-column align-items-start justify-content-start">
						<img src="images/arrow_down.png" alt="">
						<img src="images/arrow_down.png" alt="">
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Song -->

	<div class="song">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/song.jpg" data-speed="0.8"></div>
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="song_content">

						<!-- Player -->
						<div class="single_player_container">
							<div class="single_player d-flex flex-row align-items-center justify-content-start">
								<div id="jplayer_1" class="jp-jplayer"></div>
								<div id="jp_container_1" class="jp-audio" role="application" aria-label="media player">
									<div class="jp-gui jp-interface d-flex flex-lg-row flex-column align-items-start justify-content-start">

										<!-- Player Controls -->
										<div class="player_controls_box d-flex flex-row align-items-start justify-content-start">
											<div class="order-lg-1 order-2">
												<div class="player_title">top 100 song | Billboard</div>
												<div class="jp-controls-holder player_controls ml-auto d-flex flex-row align-items-start justify-content-start">
													<button class="jp-play player_button" tabindex="0"></button>
													<button class="jp-stop player_button" tabindex="0"></button>
												</div>
											</div>
											<div class="song_image ml-lg-auto order-lg-2 order-1"><img src="images/blinding_lights.jpg" alt=""></div>
										</div>

										<!-- Progress Bar -->
										<div class="player_bars d-flex flex-row align-items-start justify-content-start">
											<div class="player_progress_box">
												<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
												<div class="song_info">
													<div class="jp-artist" aria-label="title">The Weeknd</div>
													<div class="jp-title" aria-label="title">Blinding Lights</div>
												</div>
												<div class="jp-progress">
													<div class="jp-seek-bar">
														<div>
															<div class="jp-play-bar"><span></span></div>
														</div>
													</div>
												</div>
												<div class="jp-duration ml-auto" role="timer" aria-label="duration">02:33</div>
											</div>

											<!-- Volume Controls -->
											<div class="jp-volume-controls ml-lg-auto">
												<div class="mute_button">
													<button class="jp-mute" tabindex="0"></button>
												</div>
												<div class="d-flex flex-row align-items-center justify-content-start">
													<div class="jp-volume-bar">
														<div>
															<div class="jp-volume-bar-value"></div>
														</div>
													</div>
												</div>
											</div>
										</div>
										
									</div>
									<div class="jp-no-solution">
										<span>Update Required</span>
										To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>



	<!-- App -->

	<div class="app">
		<div class="container">
			<div class="row row-lg-eq-height">
				
				<!-- App Image -->
				<div class="col-lg-6 order-lg-1 order-2 app_col">
					<div class="app_image">
						<img src="images/app.jpg" alt="">
					</div>
				</div>

				<!-- App Content -->
				<div class="col-lg-6 order-lg-2 order-1">
					<div class="app_content d-flex flex-column align-items-start justify-content-center">
						<div class="section_title"><h1>Get Your Music Right Now!</h1></div>
						<div class="app_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi condimentum, neque ac porttitor scelerisque, nisi nisl tincidunt enim, non aliquet diam neque sed urna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Suspendisse nec faucibus velit. Quisque eleifend orci ipsum, a bibendum lacus suscipit sit amet</p>
						</div>
						<div class="stores d-flex flex-row align-items-start justify-content-start flex-wrap">
							<div class="store"><a href="#"><img src="images/appstore.png" alt=""></a></div>
							<div class="store"><a href="#"><img src="images/googleplay.png" alt=""></a></div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Featured -->

	<div class="featured" >
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title text-center"><h1>Featured Albums</h1></div>
					<div class="featured_list">
						<div id="jplayer_2" class="jp-jplayer"></div>
						<div id="jp_container_2" class="jp-audio" role="application" aria-label="media player">
							<div class="jp-type-playlist">
								<div class="jp-playlist">
									<ul class="d-flex flex-row align-items-start justify-content-start flex-wrap">
										<li></li>
									</ul>
								</div>
								<div class="jp-no-solution">
									<span>Update Required</span>
									To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="section_title"><h1>Latest News</h1></div>
				</div>
			</div>
			<div class="row news_row">
				
				<!-- News Post -->
				<div class="col-xl-4 col-md-6">
					<div class="news_post image_top">
						<div class="news_post_image"><img src="{{ $images[0] }}" alt=""></div>
						<div class="news_post_content">
							<div class="news_post_date"><p>{{ $dates[0] }}</p></div>
							<div class="news_post_title"><a href="https://www.billboard.com{{ $urls[0] }}">{{ $titles[0] }}</a></div>
							<div class="news_post_text">
								<p>{{ $descriptions[0] }}</p>
							</div>
						</div>
					</div>
				</div>

				<!-- News Post -->
				<div class="col-xl-4 col-md-6">
					<div class="news_post image_bottom d-flex flex-column align-items-start justify-content-start">
						<div class="news_post_content order-md-1 order-2">
							<div class="news_post_date"><p>{{ $dates[1] }}</p></div>
							<div class="news_post_title"><a href="https://www.billboard.com{{ $urls[1] }}">{{ $titles[1] }}</a></div>
							<div class="news_post_text">
								<p>{{ $descriptions[1] }}</p>
							</div>
						</div>
						<div class="news_post_image order-md-2 order-1"><img src="{{ $images[1] }}" alt=""></div>
					</div>
				</div>

				<!-- News Post -->
				<div class="col-xl-4 col-md-6">
					<div class="news_post image_top">
						<div class="news_post_image"><img src="{{ $images[2] }}" alt=""></div>
						<div class="news_post_content">
							<div class="news_post_date"><p>{{ $dates[2] }}</p></div>
							<div class="news_post_title"><a href="https://www.billboard.com{{ $urls[2] }}">{{ $titles[2] }}</a></div>
							<div class="news_post_text">
								<p>{{ $descriptions[2] }}</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Newsletter -->

	<div class="newsletter">
		<div class="container">
			<div class="row">

				<!-- Newsletter Content -->
				<div class="col-xl-6">
					<div class="newsletter_content">
						<div class="section_title"><h1>Subscribe & Follow</h1></div>
						<div class="newsletter_text">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi condimentum, neque ac porttitor scelerisque.</p>
						</div>
					</div>
				</div>

				<!-- Newsletter Form -->
				<div class="col-xl-6 nl_col">
					<div class="newsletter_form_container d-flex flex-column align-items-start justify-content-end">
						<form action="{{ route('subscribe') }}" class="newsletter_form" id="newsletter_form" method="post">
						    @csrf <!-- {{ csrf_field() }} -->
							<div class="d-flex flex-row align-items-start justify-content-between">
								<input type="email" class="newsletter_input" placeholder="Your E-mail" name="email" required="required">
								<button class="button newsletter_button" type="submit" value="Submit"><span>subscribe</span></button>
							</div>
						</form>
					</div>
				</div>

			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="background_image" style="background-image:url(images/footer.jpg)"></div>
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col text-center">

						<!-- Logo -->
						<div class="logo">
							<a href="#" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">music</span>
							</a>
						</div>

						<!-- Footer Social -->
						<div class="footer_social">
							<ul class="d-flex flex-row align-items-center justify-content-center">
								<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
								<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
		<div class="footer_bar">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="copyright text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a> | Developed by Aureliu Mocanu
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
					</div>
				</div>
			</div>
		</div>
			
	</footer>
</div>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/jplayer/jquery.jplayer.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jplayer/2.9.2/add-on/jplayer.playlist.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>
<script src="{{ asset('js/main-app.js') }}"></script>


</body>
</html>