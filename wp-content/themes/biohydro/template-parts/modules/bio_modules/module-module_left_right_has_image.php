<?php
$image_left= get_sub_field('image_left');
$content_left = get_sub_field('content_left');
$image_right = get_sub_field('image_right');
$content_right = get_sub_field('content_right');
?>
<div class="testimonial-area testimonial-page">
                
      
                
                
                  <div class="masonary-layout">
           
           
         
         
            <!--Start single testimonial item-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="<?php echo $image_left['url']?>" alt="<?php echo $image_left['alt']?>">
                    </div>
                    <div class="text-holder">
                        <?php echo $content_left?>
                    </div>
                   
                </div>
            </div>
            <!--End single testimonial item-->
            <!--Start single testimonial item-->
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single-item text-center">
                    <div class="img-holder">
                        <img src="<?php echo $image_right['url']?>" alt="<?php echo $image_right['alt']?>">
                    </div>
                    <div class="text-holder">
                        <?php echo $content_right?>
                    </div>
                   
                </div>
            </div>
            <!--End single testimonial item-->

            
        </div>
                </div>