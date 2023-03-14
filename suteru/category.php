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
<?php query_posts('showposts=1&cat=109&orderby=DESC&paged='.$paged);?>
<?php if(have_posts()):while(have_posts()):the_post();?>	
		<p align="center" class="topicsHead"><?php echo get_custom_img('news_header','stay_top'); ?></p>
		<?php endwhile;endif;?>
			<?php wp_reset_query() ?>
		<div id="pageTitle">
		<h2>最新情報</h2>
		</div>
		<div id="punkuz">
		<a href="<?php echo home_url();?>">HOME</a> > 最新情報
		</div>
		<div id="content">
		<div class="main" id="newsMain">
		<div class="entory">
		<ul class="newsList">
		
<?php if(have_posts()):while(have_posts()):the_post();?>
			<li>
				<div class="left">
					<p class="day pc"><span><?php echo get_post_time( 'd' ); ?></span><?php echo get_post_time( 'm.Y' ); ?></p>
					<p class="sp_day sp"><span class="<?php $cats = get_the_category(); foreach($cats as $cat){ echo $cat->slug; } ?>"><?php  $cats = get_the_category(); $cats = $cats[0]; echo $cats->cat_name; ?></span><?php echo get_post_time( 'Y.m.d' ); ?></p>
					<p class="tag pc"><span class="<?php $cats = get_the_category(); foreach($cats as $cat){ echo $cat->slug; } ?>"><?php  $cats = get_the_category(); $cats = $cats[0]; echo $cats->cat_name; ?></span></p>
				</div>
				<div class="right">
				<h4><?php the_title(); ?></h4>
				<?php the_content(); ?>
				</div>
			
			</li>
			<?php endwhile;endif;?>
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
		'end_size' => 1,		
		'mid_size' => 0,
		'current' => ($paged ? $paged : 1),
		'prev_text' => '<i class="fa fa-angle-double-left"></i> PREV',
		'next_text' => 'NEXT <i class="fa fa-angle-double-right"></i>',
	)); ?>
</div>


		</div>
<?php get_sidebar("topics"); ?>

		</div>
		<!-- /#content -->
<?php get_footer(); ?>
