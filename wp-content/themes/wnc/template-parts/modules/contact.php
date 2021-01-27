<!-- primary -->
<?php
	$contact_title = get_field('acontact_title');
	$address = get_field('address');
	$mail = get_field('mail');
	$phone = get_field('phone');
	$info_repeater = get_field('info_repeater');
?>
<div class="primary">
		<div class="container">
			<div class="col-md-4 primary-left animated wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="primary-left1">
					<h2><?php echo $contact_title ?></h2>
					<ul>
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php echo $address ?></li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:<?php echo $mail ?>"><?php echo $mail ?></a></li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span><?php echo $phone ?></li>
					</ul>
				</div>
			</div>
			<div class="col-md-8 primary-right animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<?php foreach ($info_repeater as $key => $item) { ?>
					<div class="col-md-6 primary-right-grid">
					<a href="<?php echo $info_repeater['link'] ?>"><img src="<?php echo $info_repeater['image'] ?>" alt=" " class="img-responsive" /></a>
					<h4><a href="<?php echo $info_repeater['link'] ?>"><?php echo $info_repeater['title'] ?></a></h4>
					<p><?php echo $info_repeater['content'] ?></p>
				</div>
				<?php } ?>
				
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //primary -->