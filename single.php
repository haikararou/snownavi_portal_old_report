<?php  $lang = $_GET['lang']; ?>
<?php if ($lang=="en"): ?>
<!-- 英語版振り分け -->
<?php get_header('en'); ?>
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
<?php get_template_part( 'en','nav' ); ?>
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
		<p align="center"><?php echo get_custom_img('news_header','stay_top'); ?></p>
		<?php endforeach; ?>
		</div>
		<div id="pageTitle">
		<h2>NEWS</h2>
		</div>
		<div id="punkuz">
		<a href="<?php echo home_url('/en');?>">HOME</a> > NEWS
		</div>
		<div id="content">
		<div class="main" id="newsMain">
		<div class="entory">
		<ul class="newsList">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
			<li>
				<div class="left">
					<p class="day pc"><span><?php echo get_post_time( 'd' ); ?></span><?php echo get_post_time( 'M.Y' ); ?></p>
					<p class="sp_day sp"><span class="<?php $cats = get_the_category(); foreach($cats as $cat){ echo $cat->slug; } ?>"><?php  $cats = get_the_category(); $cats = $cats[0]; echo $cats->cat_name; ?></span><?php echo get_post_time( 'Y.m.d' ); ?></p>
					<p class="tag pc"><span class="<?php $cats = get_the_category(); foreach($cats as $cat){ echo $cat->slug; } ?>"><?php  $cats = get_the_category(); $cats = $cats[0]; echo $cats->cat_name; ?></span></p>
				</div>
				<div class="right">
				<h4><?php the_field("en_news_title", $post->ID); ?></h4>
				<?php the_field("en_news_body", $post->ID); ?>
				</div>
			
			</li>
			<?php endwhile;endif; ?>
		</ul>
		
		
		</div>
		
<!-- pager -->
<div class="pagenate font">
<?php
    $next_post = get_next_post(TRUE,'','ennews');
    $prev_post = get_previous_post(TRUE,'','ennews');   
    if( $next_post || $prev_post ) :
?>
<?php if( $prev_post ) : ?>
<div class="next"><a href="<?php echo get_permalink( $prev_post->ID ); ?>?lang=en">PREV</a></div>
<?php endif; ?>
<?php if (is_object_in_term($post->ID, 'ennews','en-stay')): ?>
<div class="nextAll"><a href="<?php echo home_url('/ennews/en-stay/');?>">Back to list</a></div>
<?php else: ?>	
<div class="nextAll"><a href="<?php echo home_url('/ennews/en-news/');?>">Back to list</a></div>
<?php endif; ?>		
<?php if( $next_post ) : ?>
<div class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>?lang=en">NEXT</a></div>
<?php endif; ?>
<?php endif; ?>	
</div>	


		</div>
<?php get_sidebar("topics"); ?>

		</div>
		<!-- /#content -->
<?php get_footer('en'); ?>

<!-- //英語版振り分けここまで -->
<?php else: ?>
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
		<p align="center"><?php echo get_custom_img('news_header','stay_top'); ?></p>
		<?php endforeach; ?>
		</div>
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
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
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
			<?php endwhile;endif; ?>
		</ul>
		
		
		</div>
		
<!-- pager -->
<div class="pagenate font">
<div class="next"><?php previous_post_link('%link', '前の記事へ', TRUE); ?></div>
<?php if(in_category('news-stay')) : ?>	
<div class="nextAll"><a href="/category/news-stay/">一覧へ</a></div>	
<?php else: ?>	
<div class="nextAll"><a href="/category/news/">一覧へ</a></div>
<?php endif; ?>	
<div class="next"><?php next_post_link('%link', '次の記事へ', TRUE); ?></div>
</div>	


		</div>
<?php get_sidebar("topics"); ?>

		</div>
		<!-- /#content -->
<?php get_footer(); ?>
<?php endif; ?>	