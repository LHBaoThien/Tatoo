<?php
$title = get_sub_field('title');
$slide_left = get_sub_field('slide_left');
$slide_right = get_sub_field('slide_right');
?>
<!--Start project single area-->
<section id="project-single-area">
    <div class="container">
    <div class="sec-title">
            <h1><span><?php echo $title?></span></h1><br>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="project-single-carousel">
                    <?php foreach ($slide_left as $key => $logo) {?>
                        <!--Start single item-->
                        <div class="single-project-item">
                            <div class="img-holder">
                                <img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>">
                            </div>
                        </div>
                        <!--End single item-->
                    <?php }?>
                    
                </div>
            </div>
            
            <div class="col-md-6">
                <div class="project-single-carousel">
                    <?php foreach ($slide_right as $key => $logo) {?>
                        <!--Start single item-->
                        <div class="single-project-item">
                            <div class="img-holder">
                                <img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>">
                            </div>
                        </div>
                        <!--End single item-->
                    <?php }?>
                </div>
            </div>
            
        </div>
                              
    </div>
</section>                                                                      
<!--End project single area-->   