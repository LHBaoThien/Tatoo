<!-- header -->
	<div class="header">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed animated flash" data-wow-duration="1500ms" data-wow-delay="500ms" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
					<div class="logo">
						<a class="navbar-brand animated wow wobble" data-wow-duration="1000ms" data-wow-delay="500ms" href="index.html"><span>T</span>Tattoo</a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<ul class="nav navbar-nav menu__list">
							<li class="menu__item menu__item--current"><a href="index.html" class="menu__link">Home</a></li>
							<li class="menu__item"><a href="about.html" class="menu__link">About Us</a></li>
							<li class="menu__item"><a href="short-codes.html" class="menu__link">Short Codes</a></li>
							<li class="menu__item"><a href="mail.html" class="menu__link">Mail Us</a></li>
						</ul>
					</nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>
			
			<!-- banner -->
				<div class="banner animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											<h3><span>tattoo</span> Mock Up Pack</h3>
											<p>There are many variations of passages of Lorem Ipsum 
												available, but the majority have suffered alteration in 
												some form, by injected humour, or randomised words which 
												don't look even slightly believable.</p>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="<?php echo TEMPLATE_URL; ?>/assets/images/1.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											<h3><span>tattoo</span> Mock Up Pack</h3>
											<p>There are many variations of passages of Lorem Ipsum 
												available, but the majority have suffered alteration in 
												some form, by injected humour, or randomised words which 
												don't look even slightly believable.</p>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="<?php echo TEMPLATE_URL; ?>/assets/images/2.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
								<li>
									<div class="banner-info">
										<div class="col-md-8 banner-info-left">
											<h3><span>tattoo</span> Mock Up Pack</h3>
											<p>There are many variations of passages of Lorem Ipsum 
												available, but the majority have suffered alteration in 
												some form, by injected humour, or randomised words which 
												don't look even slightly believable.</p>
											<ul class="social-networks square spin-icon">
												<li><a href="#" class="icon-linkedin"></a></li>
												<li><a href="#" class="icon-twitter"></a></li>
												<li><a href="#" class="icon-facebook"></a></li>
											</ul>
										</div>
										<div class="col-md-4 banner-info-right">
											<img src="<?php echo TEMPLATE_URL; ?>/assets/images/3.jpg" alt=" " class="img-responsive" />
										</div>
										<div class="clearfix"> </div>
									</div>
								</li>
							</ul>
						</div>
					</section>
						<!--FlexSlider-->
								<link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/assets/css/flexslider.css" type="text/css" media="screen" />
								<script defer src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.flexslider.js"></script>
								<script type="text/javascript">
								$(window).load(function(){
								  $('.flexslider').flexslider({
									animation: "slide",
									start: function(slider){
									  $('body').removeClass('loading');
									}
								  });
								});
							  </script>
						<!--End-slider-script-->
				</div>
			<!-- //banner -->
		</div>
	</div>
<!-- header -->