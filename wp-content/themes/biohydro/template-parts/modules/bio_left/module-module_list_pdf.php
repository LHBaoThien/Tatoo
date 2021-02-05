 <?php
$items= get_sub_field('items');
?>
 <!--Start single sidebar-->
<div class="single-sidebar">
    <ul class="brochures-dwn-link">
            <?php foreach ($items as $key => $item) {?>
                <li>
                    <a href="$item['file']['url']?>">
                        <div class="icon-holder">
                        </div>
                        <div class="title-holder">
                            <h5><?php echo $item['file']['title']?></h5>    
                        </div>
                    </a>
                </li>
        <?php } ?>
          
    </ul> 
</div>
<!--End single sidebar-->