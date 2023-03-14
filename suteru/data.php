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
<body id="sub" class="report topics summer">
<div id="container">
<?php get_template_part( 'nav' ); ?>
		<!-- /#header -->
		<div id="topArea">
		<?php global $post;
		$args = array(
		'post_type' => 'post',
		'term' => 'headerimg',
		'numberposts' => 1
		);
		$myposts = get_posts( $args );
		foreach( $myposts as $post ) :  setup_postdata($post);?>
		<p align="center" class="topicsHead"><?php echo get_custom_img('news_header','stay_top'); ?></p>
		<?php endforeach; ?>
		</div>
		<div id="pageTitle">
		<h2>最新情報あああああ</h2>
		</div>
		<div id="punkuz">
		<a href="../">HOME</a> > <a href="<?php echo home_url();?>/topics/">最新情報</a> > <?php echo get_post_time( 'Y年m月' ); ?>
		</div>
		<div id="content">
		<div class="main">
		<div class="entory">
		<h3><?php echo get_post_time( 'Y年m月' ); ?>の記事</h3>
		<ul class="month">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>">
				<p class="day"><span><?php echo get_post_time( 'd' ); ?></span><?php echo get_post_time( 'm.Y' ); ?></p>
				<h5><?php the_title(); ?> </h5>
				</a>
			</li>
		<?php endwhile;endif; ?>
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

<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>

<!-- /pager	 -->		
		</div>
<?php get_sidebar("topics"); ?>


		</div>
		<!-- /#content -->
<?php get_footer(); ?>
