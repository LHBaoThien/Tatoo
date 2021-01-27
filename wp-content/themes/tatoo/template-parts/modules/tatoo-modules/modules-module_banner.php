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
						<a class="navbar-brand animated wow wobble" data-wow-duration="1000ms" data-wow-delay="500ms" href="index.html"><?php echo get_sub_field('title_page')?></a>
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
			
			<?php
				$items= get_sub_field('intro_repeater');
			?>

			<!-- banner -->
				<div class="banner animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<?php foreach ($items as $key => $item) {?>
									<li>
										<div class="banner-info">
											<div class="col-md-8 banner-info-left">
												<h3><span><?php echo $item['sub_title']?></span> <?php echo $item['title']?></h3>
												<p><?php echo $item['content']?></p>
												<ul class="social-networks square spin-icon">
													<li><a href="<?php echo $item['facebook']?>" class="icon-linkedin"></a></li>
													<li><a href="<?php echo $item['twitter']?>" class="icon-twitter"></a></li>
													<li><a href="<?php echo $item['pinterest']?>" class="icon-facebook"></a></li>
												</ul>
											</div>
											<div class="col-md-4 banner-info-right">
												<img src="<?php echo $item['image']?>" alt=" " class="img-responsive" />
											</div>
											<div class="clearfix"> </div>
										</div>
									</li>
								<?php }?>
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