<?php  $lang = $_GET['lang']; ?>
<?php if ($lang=="en"): ?>
<!-- 英語版振り分け -->
<div id="topArea">

	<div class="imgBox">
		<div class="banner">
		<h4 class="viga pc">special sponsors</h4>
			<ul class="pc">
		<!-- //////////////////////バナーPC用//////////////////////// -->
		<?php
			$args=array(
				'tax_query' => array( 
					array(
						'taxonomy' => 'bannercat', //タクソノミーを指定
						'field' => 'slug', //ターム名をスラッグで指定する
						'operator' => 'AND',
						'terms' => array('banner_top','bn_summer_01') //表示したいタームをスラッグで指定
					),
				),
				'post_type' => 'banner', //カスタム投稿名
				'orderby' => rand ,
				'posts_per_page'=> 10 //表示件数（-1で全ての記事を表示）
			);
		 ?>
		<?php query_posts( $args ); ?>
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
				<?php if (get_field("bn_img_en") != ""){ ?><li><a href="<?php the_field("link_bn_img_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('bn_img_en','Banner10'); ?></a></li><?php }?>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>		
		<!-- ///////////////////////////////////////////////////// -->
			</ul>
			<div id="slider" class="sp">
		<!-- /////////////////////バナースマホ用//////////////////////// -->
		<?php
			$args=array(
				'tax_query' => array( 
					array(
						'taxonomy' => 'bannercat', //タクソノミーを指定
						'field' => 'slug', //ターム名をスラッグで指定する
						'operator' => 'AND',
						'terms' => array('banner_top','bn_summer_01') //表示したいタームをスラッグで指定
					),
				),
				'post_type' => 'banner', //カスタム投稿名
				'orderby' => rand ,
				'posts_per_page'=> 10 //表示件数（-1で全ての記事を表示）
			);
		 ?>
		<?php query_posts( $args ); ?>
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
				<?php if (get_field("bn_img_en") != ""){ ?><div><a href="<?php the_field("link_bn_img_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('bn_img_en','Banner10'); ?></a></div><?php }?>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>		
		<!-- ///////////////////////////////////////////////////// -->
			</div>
		</div>
	</div>
	
	
	<!-- ////////////////////////イメージ写真のみ/////////////////////////// -->
		<?php
			$args=array(
				'tax_query' => array( 
					array(
						'taxonomy' => 'bannercat', //タクソノミーを指定
						'field' => 'slug', //ターム名をスラッグで指定する
						'operator' => 'AND',
						'terms' => array('banner_none','bn_summer_01') //表示したいタームをスラッグで指定
					),
				),
				'post_type' => 'banner', //カスタム投稿名
				'orderby' => rand ,
				'posts_per_page'=> 10 //表示件数（-1で全ての記事を表示）
			);
		 ?>
		<?php query_posts( $args ); ?>
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
			<?php if (get_field("banner_img") != ""){ ?><p align="center"><?php echo get_custom_img('banner_img','stay_top'); ?></p><?php }?>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>		
		<!-- ///////////////////////////////////////////////////// -->	
</div>
<!-- //英語版振り分けここまで -->	
<?php else: ?>

<div id="topArea">

	<div class="imgBox">
		<div class="banner">
		<h4 class="viga pc">special sponsors</h4>
			<ul class="pc">
		<!-- //////////////////////バナーPC用//////////////////////// -->
		<?php
			$args=array(
				'tax_query' => array( 
					array(
						'taxonomy' => 'bannercat', //タクソノミーを指定
						'field' => 'slug', //ターム名をスラッグで指定する
						'operator' => 'AND',
						'terms' => array('banner_top','bn_summer_01') //表示したいタームをスラッグで指定
					),
				),
				'post_type' => 'banner', //カスタム投稿名
				'orderby' => rand ,
				'posts_per_page'=> 10 //表示件数（-1で全ての記事を表示）
			);
		 ?>
		<?php query_posts( $args ); ?>
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
				<?php if (get_field("bn_img") != ""){ ?><li><a href="<?php the_field("link_bn_img", $post->ID); ?>" target="_blank"><?php echo get_custom_img('bn_img','Banner10'); ?></a></li><?php }?>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>		
		<!-- ///////////////////////////////////////////////////// -->
			</ul>
			<div id="slider" class="sp">
		<!-- /////////////////////バナースマホ用//////////////////////// -->
		<?php
			$args=array(
				'tax_query' => array( 
					array(
						'taxonomy' => 'bannercat', //タクソノミーを指定
						'field' => 'slug', //ターム名をスラッグで指定する
						'operator' => 'AND',
						'terms' => array('banner_top','bn_summer_01') //表示したいタームをスラッグで指定
					),
				),
				'post_type' => 'banner', //カスタム投稿名
				'orderby' => rand ,
				'posts_per_page'=> 10 //表示件数（-1で全ての記事を表示）
			);
		 ?>
		<?php query_posts( $args ); ?>
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
				<?php if (get_field("bn_img") != ""){ ?><div><a href="<?php the_field("link_bn_img", $post->ID); ?>" target="_blank"><?php echo get_custom_img('bn_img','Banner10'); ?></a></div><?php }?>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>		
		<!-- ///////////////////////////////////////////////////// -->
			</div>
		</div>
	</div>
	
	
	<!-- ////////////////////////イメージ写真のみ/////////////////////////// -->
		<?php
			$args=array(
				'tax_query' => array( 
					array(
						'taxonomy' => 'bannercat', //タクソノミーを指定
						'field' => 'slug', //ターム名をスラッグで指定する
						'operator' => 'AND',
						'terms' => array('banner_none','bn_summer_01') //表示したいタームをスラッグで指定
					),
				),
				'post_type' => 'banner', //カスタム投稿名
				'orderby' => rand ,
				'posts_per_page'=> 10 //表示件数（-1で全ての記事を表示）
			);
		 ?>
		<?php query_posts( $args ); ?>
		<?php if(have_posts()): ?>
		<?php while(have_posts()):the_post(); ?>
			<?php if (get_field("banner_img") != ""){ ?><p align="center"><?php echo get_custom_img('banner_img','stay_top'); ?></p><?php }?>
		<?php endwhile; endif; ?>
		<?php wp_reset_query(); ?>		
		<!-- ///////////////////////////////////////////////////// -->	
</div>
<?php endif; ?>	