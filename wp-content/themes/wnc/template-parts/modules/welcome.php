<!-- banner-bottom -->
<?php 
	$welcome_title = get_field('welcome_title');
	$content_1 = get_field('content_1');
	$content_2 = get_field('content_2');
	$button_link = get_field('button_link');
	$image = get_field('image');
	$w_repeater = get_field('w_repeater');
?>
<div class="banner-bottom">
		<div class="container">
			<div class="col-md-6 banner-bottom-left animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="banner-bottom-left1">
					<h1><?php echo $welcome_title ?></h1>
					<p><span><?php echo $content_1 ?></span>
						<?php echo $content_2 ?></p>
					<div class="more">
						<a href="<?php echo $w_repeater['button_link'] ?>"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
					</div>
					<div class="banner-bottom-left1-pos">
						<img src="<?php echo $image['url'] ?>" alt=" " class="img-responsive" />
					</div>
				</div>
			</div>
			<div class="col-md-6 banner-bottom-right animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<ul id="sti-menu" class="sti-menu">
					<li data-hovercolor="#44A790">
						<a href="<?php echo $w_repeater['link'] ?>">
							<h4 data-type="mText" class="sti-item"><?php echo $w_repeater['title'] ?></h4>
							<h3 data-type="sText" class="sti-item"><?php echo $w_repeater['description'] ?></h3>
							<span data-type="icon" class="sti-icon sti-icon-care sti-item"></span>
						</a>
					</li>
					<li data-hovercolor="#44A790">
						<a href="<?php echo $w_repeater['link'] ?>">
						<h4 data-type="mText" class="sti-item"><?php echo $w_repeater['title'] ?></h4>
							<h3 data-type="sText" class="sti-item"><?php echo $w_repeater['description'] ?></h3>
							<span data-type="icon" class="sti-icon sti-icon-alternative sti-item"></span>
						</a>
					</li>
				</ul>	
					<script type="text/javascript" src="js/jquery.iconmenu.js"></script>
					<script type="text/javascript">
						$(function() {
							$('#sti-menu').iconmenu({
								animMouseenter	: {
									'mText' : {speed : 400, easing : 'easeOutExpo', delay : 140, dir : -1},
									'sText' : {speed : 400, easing : 'easeOutExpo', delay : 280, dir : -1},
									'icon'  : {speed : 400, easing : 'easeOutExpo', delay : 0, dir : -1}
								},
								animMouseleave	: {
									'mText' : {speed : 400, easing : 'easeInExpo', delay : 140, dir : -1},
									'sText' : {speed : 400, easing : 'easeInExpo', delay : 0, dir : -1},
									'icon'  : {speed : 400, easing : 'easeInExpo', delay : 280, dir : -1}
								}
							});
						});
					</script>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //banner-bottom -->