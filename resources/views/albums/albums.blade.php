<!DOCTYPE html>
<html lang="en">
<head>
<title>Albums</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Music template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="shortcut icon" href="{{ asset('images/laravel-icon.png') }}">
<link href="{{asset('css/albums.css')}}" rel="stylesheet" type="text/css"/>
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
							<a href="/" class="d-flex flex-row align-items-end justify-content-start">
								<span class="logo_bars d-flex flex-row align-items-end justify-content-between"><span></span><span></span><span></span><span></span><span></span></span>
								<span class="logo_text">music</span>
							</a>
						</div>

						<!-- Main Navigation -->
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="/">Home</a></li>
								<li><a href="/artists">Artists</a></li>
								<li class="active"><a href="#">Albums</a></li>
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
						<li><a href="/">Home</a></li>
						<li><a href="/artists">Artists</a></li>
						<li><a href="#">Albums</a></li>
						<li><a href="/news">News</a></li>
						<li><a href="/contact">Contact</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</div>

	<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/artists.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_title">Albums</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Search -->

	<div class="search">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="search_form_container">
						<form action="#" class="search_form" id="search_form">
							<div class="d-flex flex-md-row flex-column align-items-center justify-content-between">
								<input type="text" class="search_input search-title" placeholder="Album" required="required">
								<button class="button search_button"><span>search</span></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Artists -->

	<div class="artists">
		<div class="letters">
			<ul class="d-flex flex-row align-items-start justify-content-center flex-wrap">
				<li><a href="#">a</a></li>
				<li><a href="#">b</a></li>
				<li><a href="#">c</a></li>
				<li><a href="#">d</a></li>
				<li><a href="#">e</a></li>
				<li><a href="#">f</a></li>
				<li><a href="#">g</a></li>
				<li><a href="#">h</a></li>
				<li><a href="#">i</a></li>
				<li><a href="#">j</a></li>
				<li><a href="#">k</a></li>
				<li><a href="#">l</a></li>
				<li><a href="#">m</a></li>
				<li><a href="#">n</a></li>
				<li><a href="#">o</a></li>
				<li><a href="#">p</a></li>
				<li><a href="#">q</a></li>
				<li><a href="#">r</a></li>
				<li><a href="#">s</a></li>
				<li><a href="#">t</a></li>
				<li><a href="#">u</a></li>
				<li><a href="#">v</a></li>
				<li><a href="#">w</a></li>
				<li><a href="#">x</a></li>
				<li><a href="#">y</a></li>
				<li><a href="#">z</a></li>
			</ul>
		</div>
		<div class="artists_container">
			<div class="container">
				<div class="row">
					<div class="col" id="list">
					
					@php ($count = 0)
                    @foreach ( $albums as $album )
			            @php ($count++)
						
						<!-- Album -->
						<div class="artist artist{{ $count }}">
							<div class="row">
								
								<!-- Album Image -->
								<div class="col-lg-6">
									<div class="artist_image"><a href="/album_{{ $album }}"><img src="images/albums/{{ $album }}.jpg" alt=""></a></div>
								</div>

								<!-- Album Content -->
								<div class="col-lg-6 artist_col">
									<div class="artist_content">
										<div class="artist_info">
											<div class="artist_name"><h1><a href="/album_{{ $album }}">{{ $album }}</a></h1></div>
											<div class="artist_text">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi condimentum, neque ac porttitor scelerisque, nisi nisl tincidunt enim, non aliquet diam neque sed urna. 
												   Interdum et malesuada fames ac ante ipsum primis in faucibus. Viverra nibh cras pulvinar mattis nunc. Ultrices sagittis orci a scelerisque purus semper eget duis. 
												   Scelerisque viverra mauris in aliquam sem fringilla ut. Leo a diam sollicitudin tempor id eu nisl. Mattis nunc sed blandit libero volutpat. Cras adipiscing enim eu turpis egestas pretium. 
												   Odio tempor orci dapibus ultrices in. Penatibus et magnis dis parturient montes. Mauris ultrices eros in cursus. In mollis nunc sed id semper risus.</p>
											</div>
											<div class="artist_store d-flex flex-row align-items-start justify-content-start flex-wrap">
												<div class="store"><a href="#"><img src="images/appstore.png" alt=""></a></div>
												<div class="store"><a href="#"><img src="images/googleplay.png" alt=""></a></div>
											</div>
										</div>

										<!-- Player -->
										<div class="single_player_container">
											<div class="single_player">
												<div class="jp-jplayer jplayer" data-title="{{ $songs[$count-1] }}" data-artist="{{ $artists[$count-1] }}" data-ancestor=".jp_container_{{ $count }}" data-url="files/bensound-betterdays.mp3"></div>
												<div class="jp-audio jp_container_{{ $count }}" role="application" aria-label="media player">
													<div class="jp-gui jp-interface single_player_inner d-flex flex-row align-items-center justify-content-start">

														<!-- Player Controls -->
														<div class="player_controls_box">
															<div class="jp-controls-holder player_controls d-flex flex-row align-items-start justify-content-start">
																<button class="jp-play player_button" tabindex="0"></button>
																<button class="jp-stop player_button" tabindex="0"></button>
															</div>
														</div>

														<!-- Progress Bar -->
														<div class="player_bars d-flex flex-row align-items-start justify-content-start">
															<div class="player_progress_box">
																<div class="jp-current-time" role="timer" aria-label="time">00:00</div>
																<div class="song_info">
																	<div class="jp-title" aria-label="title"></div>
																</div>
																<div class="jp-progress">
																	<div class="jp-seek-bar">
																		<div>
																			<div class="jp-play-bar"><span></span></div>
																		</div>
																	</div>
																</div>
																<div class="jp-duration ml-auto" role="timer" aria-label="duration">00:00</div>
															</div>

															<!-- Volume Controls -->
															<div class="jp-volume-controls ml-auto">
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
					
                    @endforeach

						

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
<script src="{{ asset('js/main-albums.js') }}"></script>
</body>
</html>