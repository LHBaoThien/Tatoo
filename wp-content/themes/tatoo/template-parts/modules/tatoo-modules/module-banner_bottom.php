	<div class="banner-bottom">
		<div class="container">
			<div class="col-md-6 banner-bottom-left animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="banner-bottom-left1">
					<h1>Welcome</h1>
					<p><span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do 
						eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
						 Ut enim ad minim 
						veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea 
						commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
						esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat 
						cupidatat non proident, sunt in culpa qui officia deserunt mollit anim 
						id est laborum.</p>
					<div class="more">
						<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
					</div>
					<div class="banner-bottom-left1-pos">
						<img src="<?php echo TEMPLATE_URL; ?>/assets/images/4.jpg" alt=" " class="img-responsive" />
					</div>
				</div>
			</div>
			<div class="col-md-6 banner-bottom-right animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<ul id="sti-menu" class="sti-menu">
					<li data-hovercolor="#44A790">
						<a href="single.html">
							<h4 data-type="mText" class="sti-item">bland itiis praesentium</h4>
							<h3 data-type="sText" class="sti-item">Personalized to your needs</h3>
							<span data-type="icon" class="sti-icon sti-icon-care sti-item"></span>
						</a>
					</li>
					<li data-hovercolor="#44A790">
						<a href="single.html">
							<h4 data-type="mText" class="sti-item">earum rerum hic tenetur</h4>
							<h3 data-type="sText" class="sti-item">Holistic approaches</h3>
							<span data-type="icon" class="sti-icon sti-icon-alternative sti-item"></span>
						</a>
					</li>
				</ul>	
					<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.iconmenu.js"></script>
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