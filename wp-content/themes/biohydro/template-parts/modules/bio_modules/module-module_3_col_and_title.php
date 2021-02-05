<?php
$title = get_sub_field('title');
$left = get_sub_field('left');
$center = get_sub_field('center');
$right = get_sub_field('right');
?>
<section class="about-us-area">
    <div class="container">
        <?php if(!empty($title)):?>
        <div class="sec-title">
            <h1><span><?php echo $title?></span></h1>
        </div>
    <?php endif;?>
        <div class="row">
            <div class="col-md-4">
               <?php echo $left?>
            </div>
            <div class="col-md-4">
                <div class="middle-text-box">
                    <div class="single-item top">
                       
                       <?php echo $center?>

                         </div> 
                       
                </div>
            </div>
           
                 <div class="col-md-4">
               <?php echo $right?> 
            </div>   
                    
                   
            </div>
        </div>
       
    </div>
</section>
<!--End about us area-->





