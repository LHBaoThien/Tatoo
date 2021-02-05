<?php
$link = get_sub_field('link');
$content_left = get_sub_field('content_left');
$image_left = get_sub_field('image_left');
$content_right = get_sub_field('content_right');
$sub_content = get_sub_field('sub_content');
$image_right = get_sub_field('image_right');
?>

<!-- services-bottom -->
	<div class="services-bottom">
		<div class="col-md-6 services-bottom-left animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
			<div class="services-bottom-left1">
				<h3><?php echo $content_left?></h3>
				<div class="more m1">
					<a href="<?php echo $link?>"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
				</div>
			</div>
			<div class="services-bottom-left2">
				<img src="<?php echo $image_left?>" alt=" " class="img-responsive animated wow rubberBand" data-wow-duration="1000ms" data-wow-delay="1000ms" />
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="col-md-6 services-bottom-right animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
			<div class="services-bottom-left1">
				<h3><?php echo $content_right?></h3>
				<p><?php echo $sub_content?></p>
			</div>
			<div class="services-bottom-left2">
				<img src="<?php echo $image_right?>" alt=" " class="img-responsive animated wow rubberBand" data-wow-duration="1000ms" data-wow-delay="1000ms" />
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //services-bottom -->