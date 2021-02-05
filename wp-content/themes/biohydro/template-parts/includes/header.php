<!--Start header area-->
<?php
$logo =  get_field('logo_image', 'option');
$make_an_appointment = get_field('make_an_appointment', 'option');
?>
<header class="header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="logo">
                    <a href="<?php echo get_home_url()?>" title="<?php echo get_bloginfo()?>">
                            <img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>">
                        </a>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="header-contact-info pull-left">
                             <ul>
                                <li>
                                    <div class="iocn-holder">
                                        <span class="flaticon-phone-call"></span>
                                    </div>
                                    <div class="text-holder">
                                         <?php echo get_field('phone_box','option');?>
                                    </div>
                                </li>
                                
                                <li>
                                    <div class="iocn-holder">
                                        <span class="flaticon-mail"></span>
                                    </div>
                                    <div class="text-holder">
                                         <?php echo get_field('email_box','option');?>
                                    </div>
                                </li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>  
<!--End header area-->

<!--Start header-search  area-->

<!--End header-search  area-->    

<!--Start mainmenu area-->
<section class="mainmenu-area stricky">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <!--Start mainmenu-->
                <nav class="main-menu">
                    <div class="navbar-header">     
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse clearfix">
                      <?php 
                        echo bon_get_main_menu();
                      ?>
                    </div>
                </nav>
                <!--End mainmenu-->
                <div class="appoinment-button">
                    <a target="<?php echo $make_an_appointment['target']?>" href="<?php echo $make_an_appointment['url']?>"><?php echo $make_an_appointment['title']?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End mainmenu area-->  