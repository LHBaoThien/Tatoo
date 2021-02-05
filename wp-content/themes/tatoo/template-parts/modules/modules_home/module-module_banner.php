
			<?php
				$items= get_sub_field('intro_repeater');
			?>

			<!-- banner -->
				<div class="banner animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<section class="slider">
						<div class="flexslider">
							<ul class="slides">
								<?php foreach ($items as $key => $item) {
									$image = $item['image']['url'];
					                $sub = $item['sub_title'];
					                $title = $item['title'];
					                $content = $item['content'];
					                $fb = $item['facebook'];
					                $tw = $item['twitter'];
					                $pin = $item['pinterest'];
					                ?>
									<li>
										<div class="banner-info">
											<div class="col-md-8 banner-info-left">
												<h3><span><?php echo $sub?></span> <?php echo $title?></h3>
												<p><?php echo $content?></p>
												<ul class="social-networks square spin-icon">
													<li><a href="<?php echo $fb?>" class="icon-linkedin"></a></li>
													<li><a href="<?php echo $tw?>" class="icon-twitter"></a></li>
													<li><a href="<?php echo $pin?>" class="icon-facebook"></a></li>
												</ul>
											</div>
											<div class="col-md-4 banner-info-right">
												<img src="<?php echo $image?>" alt=" " class="img-responsive" />
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