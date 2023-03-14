<?php get_header(); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/slider/jquery.bxslider.css">
<script src="<?php bloginfo( 'template_directory' ); ?>/slider/jquery.bxslider.js"></script>
<script>
jQuery(function(){
	jQuery('#slider').bxSlider({
		speed:40000,
		minSlides: 2,
		maxSlides: 35,
		slideWidth: 110,
		ticker: true
	});
});
</script>
</head>
<body id="sub" class="report green">
<div id="container">
<?php get_template_part( 'nav' ); ?>
	<!-- /#header -->
	<div id="reportBox">
	<?php if(is_date()): ?>
	<ul id="tab" class="clearfix">
		<li class="tab01"><a href="<?php echo home_url();?>/skireport/"><span>ゲレンデレポート</span><i class="fa fa-caret-down"></i></a></li>
		<li class="tab02"><a href="#reportBox" class="select"><span>トレッキングレポ（白馬）</span><i class="fa fa-caret-down"></i></a></li>
	</ul>
	<div id="pageTitle" class="pageTitle2"><h2>トレッキングレポート月別アーカイブ一覧</h2></div>
	<div class="content_wrap2"><h3><?php echo get_post_time( 'Y年m月' ); ?>の記事</h3></div>
	<div class="content_wrap">
		<div class="enBox">
			<ul class="infini">
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<?php
				$slug = $post->post_name;
				if(!preg_match('/hotel/', $slug)) {
				echo '<li class="post"><a href="';
				echo the_permalink();
				echo '"><p class="tag"><span>';
				$terms = wp_get_object_terms($post->ID,'trekking');
				foreach($terms as $term){ echo $term->name . ' '; }
				echo '</span></p>';
				echo '<p class="photo">' . get_custom_img('tra_img','ski_s') . '</p>';
				echo '<p class="time">' . get_post_time('Y.m.d') . '</p>';
				echo '<h5>';
				echo the_title();
				echo '</h5></a></li>';
				}
				?>
				<?php endwhile; endif; ?>
			</ul>
		</div>
		<div class="pagenation font">
			<?php global $wp_rewrite;
			$paginate_base = get_pagenum_link(1);
			if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
			$paginate_format = '';
			$paginate_base = add_query_arg('paged','%#%');
			}
			else{
			$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
			user_trailingslashit('page/%#%/','paged');;
			$paginate_base .= '%_%';
			}
			echo paginate_links(array(
			'base' => $paginate_base,
			'format' => $paginate_format,
			'total' => $wp_query->max_num_pages,
			'mid_size' => 4,
			'current' => ($paged ? $paged : 1),
			'prev_text' => '≪',
			'next_text' => '≫',
			)); ?>
		</div>
	</div>
	<?php else : ?>
	<ul id="tab">
		<li class="tab01"><a href="<?php echo home_url();?>/skireport/"><span>ゲレンデレポート</span><i class="fa fa-caret-down"></i></a></li>
		<li class="tab02"><a href="#reportBox" class="select"><span>トレッキングレポ（白馬）</span><i class="fa fa-caret-down"></i></a></li>
	</ul>
	<div class="content_wrap">
		<div class="enBox">
			<ul class="infini">
				<?php if(have_posts()):while(have_posts()):the_post(); ?>
				<?php
				$slug = $post->post_name;
				if(!preg_match('/hotel/', $slug)) {
				echo '<li class="post"><a href="';
				echo the_permalink();
				echo '"><p class="tag"><span>';
				$terms = wp_get_object_terms($post->ID,'trekking');
				foreach($terms as $term){ echo $term->name . ' '; }
				echo '</span></p>';
				echo '<p class="photo">' . get_custom_img('tra_img','ski_s') . '</p>';
				echo '<p class="time">' . get_post_time('Y.m.d') . '</p>';
				echo '<h5>';
				echo the_title();
				echo '</h5></a></li>';
				}
				?>
				<?php endwhile; endif; ?>
			</ul>
		</div>
		<div class="pagenation font">
			<?php global $wp_rewrite;
			$paginate_base = get_pagenum_link(1);
			if(strpos($paginate_base, '?') || ! $wp_rewrite->using_permalinks()){
			$paginate_format = '';
			$paginate_base = add_query_arg('paged','%#%');
			}
			else{
			$paginate_format = (substr($paginate_base,-1,1) == '/' ? '' : '/') .
			user_trailingslashit('page/%#%/','paged');;
			$paginate_base .= '%_%';
			}
			echo paginate_links(array(
			'base' => $paginate_base,
			'format' => $paginate_format,
			'total' => $wp_query->max_num_pages,
			'mid_size' => 4,
			'current' => ($paged ? $paged : 1),
			'prev_text' => '≪',
			'next_text' => '≫',
			)); ?>
		</div>
	</div>
	<?php endif; ?>
</div>
<!--REPORTここまで-->
<?php get_footer(); ?>
