	<?php  $lang = $_GET['lang']; ?>
<?php if ($lang=="en"): ?>
				<?php if (get_field("sidebn_top_01_en") != ""){ ?><li><a href="<?php the_field("sidebn_toplink_01_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('sidebn_top_01_en','bn_sidebar'); ?></a></li><?php }?>
				<?php if (get_field("sidebn_top_02_en") != ""){ ?><li><a href="<?php the_field("sidebn_toplink_02_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('sidebn_top_02_en','bn_sidebar'); ?></a></li><?php }?>
				<?php if (get_field("sidebn_top_03_en") != ""){ ?><li><a href="<?php the_field("sidebn_toplink_03_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('sidebn_top_03_en','bn_sidebar'); ?></a></li><?php }?>
<?php else: ?>
				<?php if (get_field("sidebn_top_01") != ""){ ?><li><a href="<?php the_field("sidebn_toplink_01", $post->ID); ?>" target="_blank"><?php echo get_custom_img('sidebn_top_01','bn_sidebar'); ?></a></li><?php }?>
				<?php if (get_field("sidebn_top_02") != ""){ ?><li><a href="<?php the_field("sidebn_toplink_02", $post->ID); ?>" target="_blank"><?php echo get_custom_img('sidebn_top_02','bn_sidebar'); ?></a></li><?php }?>
				<?php if (get_field("sidebn_top_03") != ""){ ?><li><a href="<?php the_field("sidebn_toplink_03", $post->ID); ?>" target="_blank"><?php echo get_custom_img('sidebn_top_03','bn_sidebar'); ?></a></li><?php }?>
<?php endif; ?>		
