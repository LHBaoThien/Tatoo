<!DOCTYPE html>
<html>
<head>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php wp_head(); ?>

<meta name="keywords" content="Tattoo Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo TEMPLATE_URL; ?>/assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo TEMPLATE_URL; ?>/assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- animation-effect -->
<link href="<?php echo TEMPLATE_URL; ?>/assets/css/animate.min.css" rel="stylesheet"> 
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Antic+Slab' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>/assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo TEMPLATE_URL; ?>/assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>
	
<body>
<!-- header -->
	<?php
	    $bg_image_about = get_field('bg_image_about','option');
	?>
	<div class="header1" style="background: url(<?php echo $bg_image_about['url']?>) no-repeat 0px 0px;">
		<div class="container">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  	<button type="button" class="navbar-toggle collapsed animated flash" data-wow-duration="1500ms" data-wow-delay="500ms" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  	</button>

				  	<?php
					$logo_text_1 = get_field('logo_text_1', 'option');
                    $logo_text_2 = get_field('logo_text_2', 'option');
					?>
					<div class="logo">
						<a class="navbar-brand animated wow wobble" data-wow-duration="1000ms" data-wow-delay="500ms" href=""><span><?php echo $logo_text_1?></span><?php echo $logo_text_2?></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<?php 
                        	$menu = bon_get_main_menu();
                        	$menu = str_replace('navigation clearfix', 'nav navbar-nav menu__list" style="font-size: 110%;', $menu);
                        	$menu = str_replace('menu-item', 'menu__item', $menu);
                        	$menu = str_replace('<a','<a class="menu__link"', $menu);
                        	$menu = str_replace('current-menu__item','menu__item--current', $menu);
							echo $menu;
                    	?>
                    </nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<div class="banner1-info animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h1><?php echo get_the_title()?></h1>
				<p><?php echo get_field('banner_content');?></p>
			</div>
		</div>
	</div>
<!-- header -->

<!-- about -->
	<div class="about">
		<div class="container">
			<div class="col-md-6 about-left animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="about-left1">
					<h3><?php echo get_field('intro_title');?></h3>
					<div class="about-left1-grids">
						<?php
					    	$images = get_field('image');
					    ?>
					    <?php foreach ($images as $key => $item) { ?>
							<div class="col-md-4 about-left1-grid">	
								<img src="<?php echo $item['url']?>" alt=" " class="img-responsive" />
							</div>
						<?php } ?>
						<div class="clearfix"> </div>
					</div>
					<p><?php echo get_field('intro_content');?></p>
				</div>
			</div>
			<div class="col-md-6 about-right">
				<h3 class="animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms"><span><?php echo get_field('title_left');?></span> <?php echo get_field('title_right');?></h3>
				<div class="about-right-grids animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
					<?php
					    $data_repeater = get_field('data_repeater');
					?>
					<?php foreach ($data_repeater as $key => $item) { 
						$name = $item['name'];
					    $number = $item['number'];
					    $class = $item['class'];
						?>

						<div class="about-right-grid">
							<h4><?php echo $name?> <span class="<?php echo $class?>"><?php echo $number?>%</span></h4>
							<div class="progress progress1">
							  <div class="progress-bar progress-bar1" role="progressbar" aria-valuenow="<?php echo $number?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $number?>%;">
								<span class="sr-only"><?php echo $number?>% Complete</span>
							  </div>
							</div>
						</div>

					<?php } ?>

				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!--end-->
	<?php
		$title = get_field('title');
	?>
	<!--Features-->
	<div class="about-bottom">
		<div class="container">
			<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo $title?></h3>
			<div class="about-bottom-grids">
				<?php
					$items_features = get_field('items_features');
				?>

				<?php foreach ($items_features as $key => $item) {
					$amination = get_field('class_amination',$item);
					$icon = get_field('class_icon',$item);
					$link = get_field('link',$item);
					$title_fea = get_field('title_fea',$item);
					$content_fea = get_field('content_fea',$item);
					?>

				<div class="col-md-4 about-bottom-grid animated wow <?php echo $amination?>" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="col-xs-4 about-bottom-grid-<?php echo $icon?>">
						<span></span>
					</div>
					<div class="col-xs-8 about-bottom-grid-right">
						<h4><a href="<?php echo $link?>"><?php echo $title_fea?></a></h4>
						<p><?php echo $content_fea?></p>
						<div class="more m1 m2">
							<a href="<?php echo $link?>"><span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span></a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>

				<?php } ?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-->

	<!--subscribe-->
	<div class="subscribe">
		<div class="container">
			<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo get_field('subcribe_title');?></h3>
			<div class="subscribe-grid animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="subscribe-grid1">
					<h4><?php echo get_field('subcribe_sub_title');?></h4>
					<p><?php echo get_field('subcribe_content');?></p>
					<form>
						<?php
						    echo do_shortcode(get_field('subcribe_form'));
						?>
						<div class="clearfix"> </div>
					</form>
				</div>
				<div class="subscribe-grid-1"> </div>
				<div class="subscribe-grid-2"> </div>
			</div>
		</div>
	</div>

<!-- //about -->

<?php	
if ( have_posts() ) : the_post();		
    if ( have_rows('modules_home') ) :
      while ( have_rows('modules_home') ) : the_row();
        echo get_template_part('template-parts/modules/modules_home/module', get_row_layout());
      endwhile;
  endif; 
endif;
?>

<?php
get_footer();
?>