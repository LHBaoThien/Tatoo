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
					$logo_text = get_field('logo_text', 'option');
					?>
					<div class="logo">
						<a class="navbar-brand animated wow wobble" data-wow-duration="1000ms" data-wow-delay="500ms" href=""><?php echo $logo_text?></a>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					<nav class="menu menu--iris">
						<?php 
                        	echo bon_get_main_menu();
                    	?>
                    </nav>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

