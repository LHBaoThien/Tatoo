<!-- footer -->
	<div class="footer animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">
		<div class="footer-grids">
			<div class="container">
				<div class="col-md-3 footer-grid">
					<h4>About Us</h4>
					<p>Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus 
						saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
					<ul class="social-networks square spin-icon">
						<li><a href="#" class="icon-linkedin"></a></li>
						<li><a href="#" class="icon-twitter"></a></li>
						<li><a href="#" class="icon-facebook"></a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid">
					<h4>Recent Posts</h4>
					<div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="single.html"><img src="<?php echo TEMPLATE_URL; ?>/assets/images/7.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid1-right">
							<a href="single.html">eveniet ut molestiae</a>
							<div class="more m1">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="single.html"><img src="<?php echo TEMPLATE_URL; ?>/assets/images/6.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid1-right">
							<a href="single.html">qui dolorem fugiat</a>
							<div class="more m1">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="footer-grid1">
						<div class="footer-grid1-left">
							<a href="single.html"><img src="<?php echo TEMPLATE_URL; ?>/assets/images/8.jpg" alt=" " class="img-responsive" /></a>
						</div>
						<div class="footer-grid1-right">
							<a href="single.html">voluptas nulla paria</a>
							<div class="more m1">
								<a href="single.html"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-3 footer-grid">
					<h4>More details</h4>
					<ul class="foot">
						<li><a href="about.html">About us</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li><a href="#services" class="scroll">Featured Services</a></li>
						<li><a href="mail.html">Map</a></li>
					</ul>
				</div>
				<div class="col-md-3 footer-grid contact-grid">
						<h4>Contact us</h4>
						<ul class="foot">
							<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
								1234 Avenue, 2K Street,<i>4th Cross Building, London.</i></li>
							<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
							<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>+1234 567 789</li>
						</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<div class="copy animated wow bounceInDown" data-wow-duration="1000ms" data-wow-delay="500ms">
		 <p>Copyright © 2016 Tattoo. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
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