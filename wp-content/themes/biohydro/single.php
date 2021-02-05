<?php
/*
 * Template Name: News Feed Page
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

<!--Start blog single area-->
<section id="blog-area" class="blog-area blog-single-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="blog-post">
                    <div class="single-blog-post">
                    <?php	
                    
                    if ( have_posts() ) : the_post();		
                        the_content();
                    endif;
                    ?>
                    </div>
                </div>
            </div>
            <!--Start sidebar Wrapper-->
            <div class="col-lg-4 col-md-4 col-sm-7 col-xs-12">
                <div class="sidebar-wrapper">
                    <!--Start single sidebar-->
                   
                    <!--End single sidebar-->
                    <!--Start single sidebar-->
                    
                    <!--End single sidebar-->
                    <!--Start single sidebar--> 
                   
                    <!--End single sidebar-->
                    <!--Start single-sidebar-->
                    <div class="contact-area1">
                       
                       
                             <div class="contact-info">
                    <div class="title">
                        <h2><?php echo get_field('title_feed',191)?></h2>
                    </div>
                    <div class="accordion-box">
                        <!--Start single accordion box-->
                        <div class="accordion accordion-block">
                            <div class="accord-btn active"><h4><?php echo get_field('sub_title_feed',191)?></h4></div>
                            <div class="accord-content collapsed">
                                <?php echo get_field('content_feed',191)?>
                            </div>
                        </div>
                        <!--End single accordion box-->
                        
                    </div>
                </div>
            </div>
                    </div> 
                    <!--End single-sidebar-->  
                    <!--Start single-sidebar-->
                   
            </div>
        </div>
    </div>
</section>
            <!--End Sidebar Wrapper-->  
<?php
get_footer();
?>