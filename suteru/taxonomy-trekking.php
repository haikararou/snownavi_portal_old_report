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
		<div id="pageTitle">
		<h2><?php $terms = wp_get_object_terms($post->ID,'trekking'); foreach($terms as $term){echo $term->name . ' ';} ?>　レポート</h2>
		</div>
				<div class="content_wrap">
					<div class="enBox">
					<ul class="infini">
					<?php if(have_posts()):while(have_posts()):the_post(); ?>
						<li class="post">
							<a href="<?php the_permalink(); ?>">
								<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID,'trekking'); foreach($terms as $term){echo $term->name . ' ';} ?></span></p>
								<p class="photo"><?php echo get_custom_img('tra_img','ski_s'); ?></p>
								<p class="time"><?php echo get_post_time( 'Y.m.d' ); ?></p>
								<h5><?php the_title(); ?></h5>
							</a>
						</li>
					<?php endwhile;endif; ?>
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
			</div>
			<!--REPORTここまで-->
<?php get_footer(); ?>
