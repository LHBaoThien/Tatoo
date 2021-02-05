<?php
$logos= get_sub_field('logos');
?>
<!--Start Brand area-->  
<section class="brand-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="brand">
                    <?php foreach ($logos as $key => $logo) {?>
                        <!--Start single item-->
                        <div class="single-item">
                            <a href="<?php echo $logo['description']?>"><img src="<?php echo $logo['url']?>" alt="<?php echo $logo['alt']?>"></a>
                        </div>
                        <!--End single item-->
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Brand area-->     