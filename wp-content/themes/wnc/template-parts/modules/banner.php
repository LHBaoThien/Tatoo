<!-- banner -->
<?php
	$bg_image = get_field('bg_image');
	$intro_repeater = get_field('intro_repeater');
?>
<div class="banner animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
	<section class="slider">
		<div class="flexslider">
			<ul class="slides">
				<li>
					<div class="banner-info">
						<div class="col-md-8 banner-info-left">
							<?php
								foreach ($intro_repeater as $key => $item) { ?>
									<h3><span><?php echo $item['sub_title'] ?></span> <?php echo $item['title'] ?></h3>
									<p><?php echo $item['content'] ?></p>
									<ul class="social-networks square spin-icon">
										<li><a href="<?php echo $item['facebook'] ?>" class="icon-linkedin"></a></li>
										<li><a href="<?php echo $item['twitter'] ?>" class="icon-twitter"></a></li>
										<li><a href="<?php echo $item['pinterest'] ?>" class="icon-facebook"></a></li>
									</ul>
								<?php } ?>
						</div>
						<div class="col-md-4 banner-info-right">
							<img src="<?php echo $bg_image ?>" alt=" " class="img-responsive" />
						</div>
						<div class="clearfix"> </div>
					</div>
				</li>
			</ul>
		</div>
	</section>
		<!--FlexSlider-->
				<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
				<script defer src="js/jquery.flexslider.js"></script>
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