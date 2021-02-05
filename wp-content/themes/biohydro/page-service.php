<?php
/*
 * Template Name: Service Page
 * description: 
  Page template without sidebar
 */
get_header();
?>
<?php if(!is_front_page()):?>
<!--Start breadcrumb area-->     
<section class="breadcrumb-area">
	<div class="container text-center">
		<h1><?php echo get_the_title()?></h1>
	</div>
</section>
<!--End breadcrumb area-->

<!--Start breadcrumb bottom area-->
<section class="breadcrumb-botton-area">
    <div class="container">
        <div class="left">
            <ul>
                <li><a href="/">Home</a></li>
                <li><i class="fa fa-caret-right" aria-hidden="true"></i></li>
                <li class="active"><?php echo get_the_title()?></li>
            </ul>    
        </div>
    </div>
</section>
<!--End breadcrumb bottom area-->
<?php endif;?>
<section id="service-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12 pull-right">      
			<?php	
			if ( have_posts() ) : the_post();		
			    if ( have_rows('bio_modules') ) :
			      while ( have_rows('bio_modules') ) : the_row();
			        echo get_template_part('template-parts/modules/bio_modules/module', get_row_layout());
			      endwhile;
			  endif; 
			endif;
			?>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-7 col-xs-12 pull-left">
				<div class="service-single-sidebar">
				<?php	
				// var_dump(have_rows('module_left_sidebar'));die;
				// if ( have_posts() ) : the_post();		
					
				    if ( have_rows('module_left_sidebar') ) :
				      while ( have_rows('module_left_sidebar') ) : the_row();
				        echo get_template_part('template-parts/modules/bio_left/module', get_row_layout());
				      endwhile;
				  endif; 
				// endif;
				?>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="service-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 pull-right">
            	<?php	
				// if ( have_posts() ) : the_post();		
				    if ( have_rows('modules_service') ) :
				      while ( have_rows('modules_service') ) : the_row();
				        echo get_template_part('template-parts/modules/bio_bottom/module', get_row_layout());
				      endwhile;
				  endif; 
				// endif;
				?>
        	</div>
        </div>
    </div>
</section>

<?php
get_footer();
?>