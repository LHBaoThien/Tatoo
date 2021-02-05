<?php
$title = get_sub_field('contact_title');
$info_contact = get_sub_field('info_contact');
$info_repeater = get_sub_field('info_repeater');
?>
<!-- primary -->
	<div class="primary">
		<div class="container">
			<div class="col-md-4 primary-left animated wow flipInY" data-wow-duration="1000ms" data-wow-delay="500ms">
				<div class="primary-left1">
					<h2><?php echo $title?></h2>
					<ul>
						<?php foreach ($info_contact as $key => $item) {
				            $icon = $item['icon'];
				            $info = $item['info'];
							?>
								<li><span class="glyphicon glyphicon-<?php echo $icon?>" aria-hidden="true"></span><?php echo $info?></li>
						<?php } ?>
					</ul>
				</div>
			</div>
			<div class="col-md-8 primary-right animated wow fadeInRightBig" data-wow-duration="1000ms" data-wow-delay="500ms">
				<?php foreach ($info_repeater as $key => $list){
					$image = $list['image']['url'];
					$link = $list['link'];
					$title = $list['title'];
					$content = $list['content']; ?>

					<div class="col-md-6 primary-right-grid">
						<a href="<?php echo $link?>"><img src="<?php echo $image?>" alt=" " class="img-responsive" /></a>
						<h4><a href="<?php echo $link?>"><?php echo $title?></a></h4>
						<p><?php echo $content?></p>
					</div>

				<?php } ?>

				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //primary -->