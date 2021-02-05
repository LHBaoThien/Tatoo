<?php
$title_left= get_sub_field('title_left');
$content_left= get_sub_field('content_left');
$title_right= get_sub_field('title_right');
$content_right= get_sub_field('content_right');
?>
<div class="service-single-content">
    <!--Start top content -->
    <div class="row middle-content">
       
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="text-holder">
                <div class="title">
                    <h2><?php echo $title_left?></h2>
                </div>
                <div class="text">
                    <?php echo $content_left?>
                </div>
            </div>
        </div>

    
        <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="text-holder">
               <?php echo $title_right?>
                <div class="text">
                    <?php echo $content_right?>
                </div>
            </div>
        </div>
       </div>
    
  
   
 
</div>