<?php
$content = get_sub_field('content');
$button = get_sub_field('button');
?>

<!--Start caption box area-->
<section class="caption-box-area">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-holder pull-left">
                   <?php echo $content?>
                </div>
                <div class="button pull-right">
                    <a target="<?php echo $button['target']?>" href="<?php echo $button['url']?>"><?php echo $button['title']?></a>    
                </div>
            </div>
        </div>
    </div>
</section>
<!--End caption box area-->


<br><br><br>