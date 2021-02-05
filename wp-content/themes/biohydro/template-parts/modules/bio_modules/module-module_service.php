<?php
$title = get_sub_field('title');
$sub_title = get_sub_field('sub_title');
$items = get_sub_field('list_items');
?>
<!--Start services area-->
<section class="services-area">
    <div class="container">
        <div class="sec-title center text-center">
            <h1><span><?php echo $title?> <br><?php echo $sub_title?>
</span></h1>
        </div>
        <div class="row">
            <!--Start single item-->
            <?php foreach ($items as $key => $item) {?>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="single-item" data-wow-delay="0.5s" data-wow-duration="1s" data-wow-offset="0">
                        <div class="icon-holder">
                            <div class="icon-box">
                                <div class="icon">
                                    <div class="icon-bg">
                                        <span class="<?php echo $item['icon']?>"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="text-holder">
                           <?php echo $item['content']?>
                        </div>
                    </div>
                </div>
            <?php }?>
            
            <!--End single item-->
            
        </div>
        
    </div>
</section>
<!--End services area-->