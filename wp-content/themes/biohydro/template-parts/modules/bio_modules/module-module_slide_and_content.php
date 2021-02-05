<?php
$items= get_sub_field('slide_items');
$content= get_sub_field('content');
$design =  get_sub_field('design');
?>
<!--Start middle content--><br>
<?php if($design=='left'):?>
                    <div class="row top-content">
                        <div class="col-md-7">
                            <?php echo $content?>
                        </div>
                         <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="project-single-carousel">
                                <?php foreach ($items as $key => $item) {?>
                                <!--Start single project item-->
                                <div class="single-project-item">
                                    <div class="img-holder">
                                        <img src="<?php echo $item['url']?>" alt="<?php echo $item['alt']?>">
                                    </div> 
                                </div>
                                <!--End single project item-->
                                <?php } ?>
                </div>
                        </div>
                    </div>
                    <!--End middle content-->
<?php else:?>

    <!--Start top content -->
                    <div class="row top-content">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <div class="project-single-carousel">
                                <?php foreach ($items as $key => $item) {?>
                                <!--Start single project item-->
                                <div class="single-project-item">
                                    <div class="img-holder">
                                        <img src="<?php echo $item['url']?>" alt="<?php echo $item['alt']?>">
                                    </div> 
                                </div>
                                <!--End single project item-->
                                <?php } ?>
                   
                </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="text-holder">
                              <?php echo $content?>
                            </div>
                        </div>
                    </div>
                    <!--End top content -->
<?php endif;?>