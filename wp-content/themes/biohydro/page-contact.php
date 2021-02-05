<?php
/*
 * Template Name: Contact Page
 * description: >-
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
      
<!--Start contact area-->
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="contact-info">
                    <div class="title">
                        <h2><?php echo get_field('title_feed')?></h2>
                    </div>
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4><?php echo get_field('sub_title_feed')?></h4></div>
                            <div class="accord-content collapsed">
                                <?php echo get_field('content_feed')?>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <?php echo do_shortcode(get_field('form'));?>
                </div>
            </div>
        </div>
    </div>
</section>
<style type="text/css">
     .wpcf7-submit.thm-btn{
            width: 100%;
            padding: 19px 0 18px;
    }
</style>
<!--End contact area-->
<?php echo get_field('google_map')?>
    
<?php
get_footer();
?>