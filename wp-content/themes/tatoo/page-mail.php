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

<!-- mail -->
	<div class="mail">
		<div class="container">
			<div class="col-md-6 mail-left animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo get_field('view_title');?></h3>
				<p><?php echo get_field('view_content');?></p>
				<?php echo get_field('map');?>
			</div>
			<div class="col-md-6 mail-right animated wow fadeInLeftBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo get_field('contact_title');?></h3>
				<p><?php echo get_field('contact_content');?></p>
				<form>
					<?php
						$contact_form = do_shortcode(get_field('contact_form'));
                        $contact_form = str_replace('name="your-email"', 'name="your-email" style="margin-left: .6em;"', $contact_form);
                        $contact_form = str_replace('name="your-subject"', 'name="your-subject" style="width: 100%; margin: .5em 0px;"', $contact_form);
						echo $contact_form;
					?>
				</form>
			</div>
			<div class="clearfix"> </div>
			<!--end -->
			
			<!-- Info -->
			<div class="mail-bottom">
				<?php
				$info_contact = get_field('info_contact');
				?>
				<?php foreach ($info_contact as $key => $item) {
				    $class = $item['class'];
				    $icon = $item['icon'];
				    $title = $item['title'];
				    $info = $item['info'];  
					?>

					<div class="col-md-4 mail-bottom-left animated wow <?php echo $class?>" data-wow-duration="1000ms" data-wow-delay="500ms">
						<div class="mail-bottom-left1">
							<span class="glyphicon glyphicon-<?php echo $icon?>" aria-hidden="true"></span>
						</div>
						<h4><?php echo $title?></h4>
						<p><?php echo $info?></p>
					</div>

				<?php } ?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //mail -->

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