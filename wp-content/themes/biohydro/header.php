<!-- begin header -->
<!doctype html>
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">

  <!-- responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <?php wp_head(); ?>
  <!-- master stylesheet -->
  <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/assets/css/style.css">
  <!-- Responsive stylesheet -->
  <link rel="stylesheet" href="<?php echo TEMPLATE_URL; ?>/assets/css/responsive.css">
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo TEMPLATE_URL; ?>/assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="<?php echo TEMPLATE_URL; ?>/assets/images/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="<?php echo TEMPLATE_URL; ?>/assets/images/favicon/favicon-16x16.png" sizes="16x16">
        <!-- Import cp-advertising.css -->
            <!-- Import cp-advertising.css -->
    <link href="<?php echo TEMPLATE_URL; ?>/assets/css/cp-advertising.css" rel="stylesheet">
   <link href="<?php echo TEMPLATE_URL; ?>/assets/mystyle.css" rel="stylesheet">
    <!-- Fixing Internet Explorer-->
    <!--[if lt IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <script src="js/html5shiv.js"></script>
    <![endif]-->

  
  <?php echo get_field('in_head','option'); ?>

</head>
<body <?php body_class(); ?>>

   <!-- Advertising -->
  <input type="checkbox" id="cp-advertising-close">
  <label for="cp-advertising-close" class="cp-advertising-close right">X</label><!-- Can be aligned left or right -->
  <?php
$make_an_appointment = get_field('make_an_appointment', 'option');
?>
  <a href="<?php echo $make_an_appointment['url']?>" target="<?php echo $make_an_appointment['target']?>" class="cp-advertising right"><!-- Can be aligned left or right -->
    <img src="<?php echo TEMPLATE_URL; ?>/assets/images/advertising.jpg" alt="">
    <p>BioHydro Aircond Safeguard | Book Now</p>
  </a>
  <!-- End Advertising -->

  <?php echo get_field('after_open_body','option'); ?>

<?php echo get_template_part( 'template-parts/includes/header' ); ?>


    