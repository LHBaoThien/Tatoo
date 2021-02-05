<?php
get_header();
?>
      
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