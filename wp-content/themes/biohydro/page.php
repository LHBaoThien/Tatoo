<?php
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
      
<?php	
if ( have_posts() ) : the_post();		
    if ( have_rows('bio_modules') ) :
      while ( have_rows('bio_modules') ) : the_row();
        echo get_template_part('template-parts/modules/bio_modules/module', get_row_layout());
      endwhile;
  endif; 
endif;
?>
<?php
get_footer();
?>