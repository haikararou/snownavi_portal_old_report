		<div class="side">
		<!--
		<div class="pageNav ski">
		<ul>
		<li class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> PREV',TRUE,'','report'); ?></li>
		<li class="back"><a href="<?php echo home_url();?>/report/<?php $terms = wp_get_object_terms($post->ID,'report'); foreach($terms as $term){echo $term->slug . ' ';} ?>">BACK to LIST</a></li>
		<li class="next"><?php next_post_link('%link', 'NEXT <i class="fa fa-angle-double-right"></i>',TRUE,'','report'); ?></li>
		</ul>
		</div>
		-->

			<ul class="btn">
				<?php if (get_field("ski_w_news") != ""){ ?><li><a href="<?php the_field("ski_w_news", $post->ID); ?>" class="btn_item" target="_blank">天気予報<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("ski_cam") != ""){ ?><li><a href="<?php the_field("ski_cam", $post->ID); ?>" class="btn_item" target="_blank">ライブカメラ<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("ski_lift") != ""){ ?><li class="none"><a href="<?php the_field("ski_lift", $post->ID); ?>" class="btn_item" target="_blank">リフト料金<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("ski_map") != ""){ ?><li class="none"><a href="<?php the_field("ski_map", $post->ID); ?>" class="btn_item" target="_blank">ゲレンデマップ<i class="fa fa-chevron-right"></i></a></li><?php }?>
			</ul>
			<div class="box">
				<h6>営業期間</h6>
				<?php the_field("ski_time", $post->ID); ?>
			</div>
			<div class="box tel">
				<h6>問い合わせ先</h6>
				<?php the_field("ski_info", $post->ID); ?>
			</div>
			<a href="https://www.snownavi.co.jp/policy-photo.php" target="_blank" class="photoinfo">写真元素材ご希望の方へ</a>
			<ul class="ticket">
				<li>
					<?php if (get_field("ski_cu_img01") != ""){ ?><img class="pc" src="<?php the_field("ski_cu_img01", $post->ID); ?>"/><?php }?>
					<?php if (get_field("ski_cu_url01") != ""){ ?><a href="<?php the_field("ski_cu_url01", $post->ID); ?>" class="btn_item" target="_blank">印刷して使える割引クーポン<i class="fa fa-chevron-right"></i></a><?php }?>
				</li>
				<li>
					<?php if (get_field("ski_cu_img01_02") != ""){ ?><img class="pc" src="<?php the_field("ski_cu_img01_02", $post->ID); ?>"/><?php }?>
					<?php if (get_field("ski_cu_url01_02") != ""){ ?><a href="<?php the_field("ski_cu_url01_02", $post->ID); ?>" class="btn_item" target="_blank">印刷して使える割引クーポン<i class="fa fa-chevron-right"></i></a><?php }?>
				</li>
				<li>
					<?php if (get_field("ski_cu_img02") != ""){ ?><img class="pc" src="<?php the_field("ski_cu_img02", $post->ID); ?>"/><?php }?>
					<?php if (get_field("ski_cu_url02") != ""){ ?><a href="<?php the_field("ski_cu_url02", $post->ID); ?>" class="btn_item" target="_blank">印刷して使える割引クーポン<i class="fa fa-chevron-right"></i></a><?php }?>
				</li>
			</ul>
			<?php wp_reset_query() ?>
			<!--<div class="box tel">
				<h6>ゲレンデレポート月別アーカイブ</h6>
				<ul>
				<?php wp_get_archives('type=monthly&post_type=skireport&show_post_count=true'); ?>
				</ul>
			</div>-->
		</div>
