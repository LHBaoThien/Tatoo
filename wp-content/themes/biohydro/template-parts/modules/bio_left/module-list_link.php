 <?php
$items= get_sub_field('items');
?>
 <!--Start single sidebar-->
<div class="single-sidebar">
    <ul class="service-lists">
    	<?php foreach ($items as $key => $item) {?>
    		<li><a href="<?php echo $item['link']['url']?>" target="<?php echo $item['link']['target']?>"><?php echo $item['link']['title']?></a></li>
    	<?php } ?>
    </ul>
</div>
<!--End single sidebar-->