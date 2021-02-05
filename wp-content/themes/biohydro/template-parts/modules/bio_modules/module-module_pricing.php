<?php
$title_left = get_sub_field('title_left');
$content_left = get_sub_field('content_left');
$title_right = get_sub_field('title_right');
$content_right = get_sub_field('content_right');
?>
<!--Start choose us area-->
<section class="pricing-plan-area">
    <div class="container">
        <div class="row">
            <!--Start single price box-->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                <div class="single-price-box" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-offset="0">
                    <div class="table-header">
                        <div class="top1">
                            <h3><?php echo $title_left?></h3>
                        </div>
                        
                    </div>
                    <div class="price-list">
                       <?php echo $content_left?>
                    </div>
                    
                </div>
            </div>
            <!--End single price box-->
            <!--Start single price box-->
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 text-center">
                <div class="single-price-box" data-wow-delay="1s" data-wow-duration="1s" data-wow-offset="0">
                    <div class="table-header">
                        <div class="top2">
                            <h3><?php echo $title_right?></h3>
                        </div>
                       
                    </div>
                    <div class="price-list">
                        <?php echo $content_right?>
                    </div>
                    
                </div>
            </div>
            <!--End single price box-->
            
        </div>
        
    </div>    
</section>
<!--End pricing plan area-->