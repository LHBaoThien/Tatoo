

<?php
$logo_f =  get_field('logo_footer', 'option');
?>
<!--Start footer area-->  
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-btm">
                    <div class="footer-logo">
                        <a href="<?php echo get_home_url()?>" title="<?php echo get_bloginfo()?>">
                            <img src="<?php echo $logo_f['url']?>" alt="<?php echo $logo_f['alt']?>">
                        </a>
                    </div>
                    <div class="our-info">
                        <?php echo get_field('content_left','option');?>
                    </div>
                </div>
            </div>
            <!--End single footer widget-->
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget mar-btm">
                    <div class="title">
                        <h3><?php echo get_field('title_box_mid','option');?></h3>
                    </div>
                    <?php 
                        echo bon_get_footer_menu();
                      ?>
                  
                </div>
            </div>
            <!--Start single footer widget-->
           
            <!--Start single footer widget-->
            <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <div class="single-footer-widget martop">
                    <div class="title">
                        <h3><?php echo get_field('title_col_right','option');?></h3>
                    </div>
                    <?php echo get_field('content_right','option');?>
                   <!-- <ul class="footer-contact-info">
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-placeholder"></span>
                            </div>
                            
                            <div class="text-holder">
                                <h5>NO:6 Jalan Delima 10/KS9,<br>
Bandar Parklands, <br>
Pandamar 41200 Klang,<br>
Selangor, Malaysia.</h5>
                            </div>
                        </li>
                        
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-smartphone"></span>
                            </div>
                            <div class="text-holder">
                                <h5>+6013 811 8004</h5>
                            </div>
                        </li>
                        <li>
                            <div class="icon-holder">
                                <span class="flaticon-mail"></span>
                            </div>
                            <div class="text-holder">
                                <h5>info@biohydro.com.my</h5>
                            </div>
                        </li>
                        
                    </ul> -->
                </div>
            </div>
            <!--End single footer widget-->
        </div>
    </div>
</footer>   
<!--End footer area-->

<!--Start footer bottom area--> 
<section class="footer-bottom-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-bottom">
                    <div class="copyright-text pull-left">
                        <?php echo get_field('copy_right','option');?>
                    </div>
                    <div class="footer-social-links pull-right">
                        <ul>
                           
                            <li><a href="https://www.google.com/maps/uv?hl=en&pb=!1s0x31cdac3da088511f:0x1d4a9833881b8afe!2m22!2m2!1i80!2i80!3m1!2i20!16m16!1b1!2m2!1m1!1e1!2m2!1m1!1e3!2m2!1m1!1e5!2m2!1m1!1e4!2m2!1m1!1e6!3m1!7e115!4shttps://lh5.googleusercontent.com/p/AF1QipO10Q5bopAaEhu8mmMv_OjC7xMDixLmCJ228tIv%3Dw284-h160-k-no!5sbiohydro+aircond+-+Google+Search&imagekey=!1e10!2sAF1QipO10Q5bopAaEhu8mmMv_OjC7xMDixLmCJ228tIv&sa=X&ved=0ahUKEwi0pYfdzpvaAhWDso8KHczFCkwQoioIgwEwDw"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            
                        </ul>
                    </div>
                </div>    
            </div>
        </div>
    </div>    
</section> 
<!--End footer bottom area-->  


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!-- main jQuery -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.js"></script>
<!-- Wow Script -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/wow.min.js"></script>
<!-- bootstrap -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/bootstrap.min.js"></script>
<!-- bx slider -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.bxslider.min.js"></script>
<!-- count to -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.countTo.js"></script>
<!-- owl carousel -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/owl.carousel.min.js"></script>
<!-- validate -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/validation.js"></script>
<!-- mixit up -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.mixitup.min.js"></script>
<!-- easing -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.easing.min.js"></script>
<!-- gmap helper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHzPSV2jshbjI8fqnC_C4L08ffnj5EN3A"></script>
<!--gmap script-->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/gmaps.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/map-helper.js"></script>
<!-- video responsive script -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.fitvids.js"></script>
<!-- jQuery ui js -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/jquery-ui-1.11.4/jquery-ui.js"></script>
<!-- Language Switche  -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/language-switcher/jquery.polyglot.language.switcher.js"></script>
<!-- fancy box -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.appear.js"></script>
<!-- isotope script-->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/isotope.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/jquery.prettyPhoto.js"></script> 
<!-- jQuery timepicker js -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/timepicker/timePicker.js"></script>
<!-- Bootstrap select picker js -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/bootstrap-sl-1.12.1/bootstrap-select.js"></script>                               


<!-- revolution slider js -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo TEMPLATE_URL; ?>/assets/assets/revolution/js/extensions/revolution.extension.video.min.js"></script>



<!-- thm custom script -->
<script src="<?php echo TEMPLATE_URL; ?>/assets/js/custom.js"></script>


<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            facebook: "404353663336919", // Facebook page ID
            whatsapp: "+60138118004", // WhatsApp number
            company_logo_url: "//storage.whatshelp.io/widget/43/43ec/43ecf220a23ab303ea9a1f6e96cf5406/29541249_439082326530719_6943503460517754159_n.jpg", // URL of company logo (png, jpg, gif)
            greeting_message: "Hello, how may we help you? Just send us a message now to get assistance.", // Text of greeting message
            call_to_action: "Message us", // Call to action
            button_color: "#129BF4", // Color of button
            position: "left", // Position may be 'right' or 'left'
            order: "facebook,whatsapp", // Order of buttons
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127310558-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-127310558-1');
</script>

  <?php wp_footer(); ?>
  <?php echo get_field('before_close_body','option'); ?>

</body>

</html>
<!-- end footer -->