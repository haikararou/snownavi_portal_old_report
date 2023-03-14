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
<body id="sub" class="report winter">
<div id="container">
<?php get_template_part( 'nav' ); ?>
		<!-- /#header -->
			<div id="reportBox">
			
		<?php if(is_date()): ?><!--月別アーカイブの場合-->
			<div id="pageTitle"><h2>ゲレンデレポート月別アーカイブ一覧</h2></div>	
	<div id="content">
		<div class="main">
		<div class="entory">
		<h3><?php echo get_post_time( 'Y年m月' ); ?>の記事</h3>
		<ul class="month">
			
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
				<p class="day"><span><?php echo get_post_time( 'd' ); ?></span><?php echo get_post_time( 'm.Y' ); ?></p>
				<h5><?php the_title(); ?><span class="tag"><?php $terms = wp_get_object_terms($post->ID,'report'); foreach($terms as $term){echo $term->name . ' ';} ?></span></h5>
				<p class="photo"><?php echo get_custom_img('ski_img','ski_s'); ?></p>
				</a>
			</li>
		<?php endwhile;endif; ?>
		<?php wp_reset_query() ?>
		</ul>
		
		
		</div>
<!-- pager -->
<div class="pagenate font">
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
		'prev_text' => '<i class="fa fa-angle-double-left"></i> PREV',
		'next_text' => 'NEXT <i class="fa fa-angle-double-right"></i>',
	)); ?>
</div>	
<!-- pager -->


<!-- /pager	 -->		
		</div>
<!-- ?php get_sidebar("skidata"); ? -->
<div id="sidebar">
	<div class="side">
		<div class="box tel">
			<h6>ゲレンデレポート月別アーカイブ</h6>
			<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
			<option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
			<?php wp_get_archives('type=monthly&post_type=skireport&format=option&show_post_count=true'); ?>
			</select>
		</div>
		<div class="btm30">
			<a href="<?php echo home_url(); ?>/skireport/" class="btn_item">ゲレンデレポート一覧<i class="fa fa-chevron-right"></i></a>
			<a href="<?php echo home_url(); ?>/trekkingreport/" class="btn_item">トレッキングレポート一覧<i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
</div>


		</div>
		<!-- /#content -->			
	<?php else : ?>	<!-- アーカイブのとき -->		
				<ul id="tab">
					<li class="tab01"><a href="#reportBox" class="select"><span>ゲレンデレポート</span><i class="fa fa-caret-down"></i></a></li>
					<li class="tab02"><a href="<?php echo home_url();?>/trekkingreport/"><span>トレッキングレポ（白馬）</span><i class="fa fa-caret-down"></i></a></li>
				</ul>
			
				<div class="content_wrap gereBox">
					<div class="enBox">
					<ul class="infini">
						<?php if(have_posts()):while(have_posts()):the_post(); ?>
						<li class="post">
							<a href="<?php the_permalink(); ?>">
								<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID,'report'); foreach($terms as $term){echo $term->name . ' ';} ?></span></p>
								<p class="photo"><?php echo get_custom_img('ski_img','ski_s'); ?></p>
								<p class="time"><?php echo get_post_time( 'Y.m.d' ); ?></p>
								<h5><?php the_title(); ?></h5>
							</a>
						</li>
					<?php endwhile;endif; ?>
					<?php wp_reset_postdata(); ?>											
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
								'prev_text' => '«',
								'next_text' => '»',
							)); ?>
						</div>			

				</div>
				<?php endif; ?>
			</div>
			<!--REPORTここまで-->
<?php get_footer(); ?>
