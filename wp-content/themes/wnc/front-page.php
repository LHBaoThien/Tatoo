<!DOCTYPE html>
<html lang="en">
<title><?php echo get_field('title-page') ?></title>
<?php
get_header();
get_template_part( 'template-parts/modules/banner');
?>

    <?php 
    get_template_part( 'template-parts/modules/welcome');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/services');
    ?>

    <?php 
    get_template_part( 'template-parts/modules/left-right-image');
    ?>
    
    <?php 
    get_template_part( 'template-parts/modules/contact');
    ?>

 <?php
get_footer(); ?> 
</body>

</html>