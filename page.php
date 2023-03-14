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
		<div class="imgBox">
		<div class="banner">
		<h4 class="viga">special sponsors</h4>
			<ul class="pc">
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_01.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_02.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_03.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_01.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_02.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_03.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_01.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_02.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_03.jpg" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_01.jpg" alt=""/></a></li>
			</ul>
			<div id="slider" class="sp">
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_01.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_02.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_03.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_01.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_02.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_03.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_01.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_02.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_03.jpg" width="110" alt=""/></a></div>
				<div><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/bn_01.jpg" width="110" alt=""/></a></div>
			</div>
		</div>
		</div>
		</div>
		<div id="pageTitle">
		<h2>最新情報</h2>
		</div>
		<div id="punkuz">
		<a href="../">HOME</a> > 最新情報
		</div>
		<div id="content">
		<div class="main">
		<div class="entory">
		<ul class="newsList">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
			<li>
				<div class="left">
					<p class="day"><span><?php echo get_post_time( 'd' ); ?></span><?php echo get_post_time( 'm.Y' ); ?></p>
					<p class="tag"><span class="<?php $cats = get_the_category(); foreach($cats as $cat){ echo $cat->slug; } ?>"><?php  $cats = get_the_category(); $cats = $cats[0]; echo $cats->cat_name; ?></span></p>
				</div>
				<div class="right">
				<h4><?php the_title(); ?></h4>
				<?php the_content(); ?>
				</div>
			
			</li>
			<?php endwhile;endif; ?>
		</ul>
		
		
		</div>
		
<!--		<div id="pageNav">
			<ul>
				<li class="prev"><a href=""><i class="fa fa-angle-double-left"></i> PREV</a></li>
				<li class="next"><a href="">NEXT <i class="fa fa-angle-double-right"></i></a></li>
			</ul>
			<ul class="nunber">
			<li><a href="">1</a></li>
			<li><a href="">2</a></li>
			<li><a href="">3</a></li>
			<li><a href="">4</a></li>
			<li><a href="">5</a></li>
			</ul>
		</div>
-->
<!-- pager -->

<?php if (function_exists("pagination")) {
    pagination($additional_loop->max_num_pages);
} ?>

<!-- /pager	 -->		
		</div>
		<div class="side">
		<div class="calendar">
		ここにカレンダーが入ります
		</div>
			<ul class="bn01">
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/side_dammy_bn.gif" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/side_dammy_bn.gif" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/side_dammy_bn.gif" alt=""/></a></li>
			</ul>
		</div>


		</div>
		<!-- /#content -->
<?php get_footer(); ?>
