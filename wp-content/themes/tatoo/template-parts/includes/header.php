<!-- header -->
	<?php
	    $bg_image = get_field('bg_image','option');
	?>
	<div class="header" style="background: url(<?php echo $bg_image['url']?>) no-repeat 0px 0px;">
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

