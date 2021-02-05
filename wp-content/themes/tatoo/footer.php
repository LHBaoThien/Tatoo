<?php
$a_title = get_field('about_us_title','option');
$content = get_field('content','option');
$fb = get_field('facebook','option');
$tw = get_field('twitter','option');
$pin = get_field('pinterest','option');
$rp_title = get_field('recent_post_title','option');
$list_post = get_field('list_post_ft','option');
$d_title = get_field('detail_title','option');
$c_title = get_field('contact_title','option');
$info_items = get_field('info_items','option');
$cr = get_field('copy_right','option');

?>


<!-- footer -->
<div id="footer">
	<div class="footer animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">
		<div class="footer-grids">
			<div class="container">
				<div class="col-md-3 footer-grid">
					<h4><?php echo $a_title?></h4>
					<p><?php echo $content?></p>
					<ul class="social-networks square spin-icon">
						<li><a href="<?php echo $fb?>" class="icon-linkedin"></a></li>
						<li><a href="<?php echo $tw?>" class="icon-twitter"></a></li>
						<li><a href="<?php echo $pin?>" class="icon-facebook"></a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h4><?php echo $rp_title?></h4>

					<?php foreach ($list_post as $key => $item) {
						$title_post_service = get_field('title_post_service',$item);
						$link = get_field('link',$item);
						$image_service = get_field('image_service',$item);
						?>
						<div class="footer-grid1">
							<div class="footer-grid1-left">
								<a href="<?php echo $link?>"><img src="<?php echo $image_service?>" alt=" " class="img-responsive" /></a>
							</div>
							<div class="footer-grid1-right">
								<a href="<?php echo $link?>"><?php echo $title_post_service?></a>
								<div class="more m1">
									<a href="<?php echo $link?>"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>

					<?php } ?>


				</div>
				<div class="col-md-3 footer-grid">
					<h4><?php echo $d_title?></h4>
					<ul class="foot">
						<?php 
	                        echo bon_get_footer_menu();
	                     ?>
					</ul>
				</div>
				<div class="col-md-3 footer-grid contact-grid">
						<h4><?php echo $c_title?></h4>
						<ul class="foot">
							<?php foreach ($info_items as $key => $item) {
				                $icon = $item['icon'];
				                $info = $item['info'];
							    ?>
								<li><span class="glyphicon glyphicon-<?php echo $icon?>" aria-hidden="true"></span><?php echo $info?></li>

							<?php } ?>
						</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="copy animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
		 <p><?php echo $cr;?></a></p>
	</div>
</div>
<!-- //footer -->
<!-- for bootstrap working -->
	<script src="<?php echo TEMPLATE_URL; ?>/assets/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>