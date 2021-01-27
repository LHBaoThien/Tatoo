<!-- services-bottom -->
<?php
	$lr_repeater = get_field('lr_repeater');
	$link = get_field('link');
	$content = get_field('content');
?>
<div class="services-bottom">
		<div class="col-md-6 services-bottom-left animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
			<div class="services-bottom-left1">
				<h3><?php echo $lr_repeater['title'] ?></h3>
				<div class="more m1">
					<a href="<?php echo $link ?>"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
				</div>
			</div>
			<div class="services-bottom-left2">
				<img src="<?php echo $lr_repeater['image'] ?>" alt=" " class="img-responsive animated wow rubberBand" data-wow-duration="1000ms" data-wow-delay="1000ms" />
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 services-bottom-right animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
			<div class="services-bottom-left1">
				<h3><?php echo $lr_repeater['title'] ?></h3>
				<p><?php echo $lr_repeater['content'] ?>.</p>
			</div>
			<div class="services-bottom-left2">
				<img src="<?php echo $lr_repeater['image'] ?>" alt=" " class="img-responsive animated wow rubberBand" data-wow-duration="1000ms" data-wow-delay="1000ms" />
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //services-bottom -->