<?php
$title = get_sub_field('s_title');
$items = get_sub_field('items');
$list_post = get_sub_field('list_post');
?>
<!-- services -->
	<div id="services" class="services">
		<div class="container">
			<h3 class="animated wow rollIn" data-wow-duration="1000ms" data-wow-delay="500ms"><?php echo $title?></h3>
			<div class="services-grids">

				<?php foreach ($list_post as $key => $item) {
					$title_post_service = get_field('title_post_service',$item);
					$link = get_field('link',$item);
					$image_service = get_field('image_service',$item);
					$class = get_field('class',$item);
					$percent = get_field('percent',$item);
					$text_percent = get_field('text_percent',$item);
					$address = get_field('address',$item);
					$list_item_percent = get_field('list_item_percent',$item);
					?>

				<div class="col-md-4 services-grid animated wow <?php echo $class?>" data-wow-duration="1000ms" data-wow-delay="500ms">
					<div class="services-grid1">
						<a href="<?php echo $link?>"><img src="<?php echo $image_service?>" alt=" " class="img-responsive" /></a>
						<div class="services-grid1-pos">
							<h5><?php echo $percent?> <span><?php echo $text_percent?></span></h5>
						</div>
					</div>
					<div class="services-grid1-bottom">
						<h4><a href="<?php echo $link?>"><?php echo $title_post_service?></a></h4>
						<ul>
							<?php foreach ($list_item_percent as $key => $list) {
								$icons = $list['icons'];
								$items_title = $list['items_title'];
								$sale = $list['sale'];
								?>
							<li class="<?php echo $icons?>"><i> <?php echo $items_title?> <span><?php echo $sale?></span></i></li>
							<?php } ?>
						</ul>
					</div>
					<div class="address">
						<h4><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span><?php echo $address?></h4>
					</div>
				</div>

				<?php } ?>

				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //services -->