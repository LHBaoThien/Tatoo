<!-- services -->
<?php
	$s_title = get_field('s_title');
	$repeater = get_field('repeater');
	$sub_repeater = get_field('sub_repeater');
?>
<div id="services" class="services">
		<div class="container">
			<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo $s_title ?></h3>
			<div class="services-grids">
				<div class="col-md-4 services-grid animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="services-grid1">
						<a href="<?php echo $repeater['link'] ?>"><img src="<?php echo $repeater['image'] ?>" alt=" " class="img-responsive" /></a>
						<div class="services-grid1-pos">
							<h5><?php echo $repeater['text'] ?></h5>
						</div>
					</div>
					<div class="services-grid1-bottom">
						<h4><a href="<?php echo $repeater['link'] ?>"><?php echo $repeater['sub_title'] ?></a></h4>
						<ul>
							<li><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
							<li class="<?php echo $sub_repeater['icon'] ?>"><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
							<li class="<?php echo $sub_repeater['icon'] ?>"><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
						</ul>
					</div>
					<div class="address">
						<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php echo $repeater['address'] ?></h4>
					</div>
				</div>
				<div class="col-md-4 services-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="services-grid1">
						<a href="<?php echo $repeater['link'] ?>"><img src="<?php echo $repeater['image'] ?>" alt=" " class="img-responsive" /></a>
						<div class="services-grid1-pos">
							<h5><?php echo $repeater['text'] ?></h5>
						</div>
					</div>
					<div class="services-grid1-bottom">
						<h4><a href="<?php echo $repeater['link'] ?>"><?php echo $repeater['sub_title'] ?></a></h4>
						<ul>
							<li><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
							<li class="<?php echo $sub_repeater['icon'] ?>"><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
							<li class="<?php echo $sub_repeater['icon'] ?>"><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
						</ul>
					</div>
					<div class="address">
						<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php echo $repeater['address'] ?></h4>
					</div>
				</div>
				<div class="col-md-4 services-grid animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="services-grid1">
						<a href="single.html"><img src="images/8.jpg" alt=" " class="img-responsive" /></a>
						<div class="services-grid1-pos">
							<h5>30% <span>Off /-</span></h5>
						</div>
					</div>
					<div class="services-grid1-bottom">
						<h4><a href="<?php echo $repeater['link'] ?>"><?php echo $repeater['sub_title'] ?></a></h4>
						<ul>
							<li><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
							<li class="<?php echo $sub_repeater['icon'] ?>"><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
							<li class="<?php echo $sub_repeater['icon'] ?>"><i> <?php echo $sub_repeater['text'] ?> <span><?php echo $sub_repeater['number'] ?></span></i></li>
						</ul>
					</div>
					<div class="address">
						<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php echo $repeater['address'] ?></h4>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->