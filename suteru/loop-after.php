		<div class="item">
			<div class="left">
				<ul>
				<?php if( get_field('shop_link_url' ,$post_id)): ?>
					<li><a href="<?php the_field("shop_link_url", $post->ID); ?>" target="_blank"><?php echo get_custom_img('shop_img01','after_s'); ?></a></li>
					<li><a href="<?php the_field("shop_link_url", $post->ID); ?>" target="_blank"><?php echo get_custom_img('shop_img02','after_s'); ?></a></li>
				<?php else: ?>
					<li><?php echo get_custom_img('shop_img01','after_s'); ?></li>
					<li><?php echo get_custom_img('shop_img02','after_s'); ?></li>
				<?php endif; ?>
				</ul>
				<div class="textBox">
				<?php the_content();?>
				</div>
				</div>
			<div class="right">
				<?php if( get_field('shop_link_url' ,$post_id)): ?>
				<h4><a href="<?php the_field("shop_link_url", $post->ID); ?>" target="_blank"><?php the_title(); ?></a></h4>
				<?php else: ?>
				<h4><?php the_title(); ?></h4>
				<?php endif; ?>
				
				<ul>
					<li><i class="fa fa-clock-o"></i> <?php the_field("shop_time", $post->ID); ?></li>
					<li><i class="fa fa-phone"></i> <?php the_field("shop_tel", $post->ID); ?></li>
					<li><i class="fa fa-info-circle"></i> 定休日：<?php the_field("shop_day", $post->ID); ?></li>
					<li>
					<?php if( get_field('googlemap_link' ,$post_id)): ?>
					<a href="<?php the_field("googlemap_link", $post->ID); ?>" target="_blank"><i class="fa fa-map-marker"></i> マップを見る</a>
					<?php endif; ?>
					</li>
				</ul>
					<h5>メニュー</h5>
					<?php the_field("shop_menu", $post->ID); ?>
				
			</div>
		</div>