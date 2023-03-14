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
<body id="sub" class="report green summer">
<div id="container">
<?php get_template_part( 'en','nav' ); ?>
		<!-- /#header -->

		<div id="pageTitle">
		<h2><?php $terms = wp_get_object_terms($post->ID,'entrekking'); foreach($terms as $term){echo $term->slug . ' ';} ?> Report</h2>
		</div>
		<div id="punkuz">
		<a href="<?php echo home_url();?>/en/">HOME</a> > <a href="<?php echo home_url();?>/entrekking/en">trekkingreport</a> > <?php $terms = wp_get_object_terms($post->ID,'entrekking'); foreach($terms as $term){echo $term->slug . ' ';} ?>
		</div>
		<div id="content">
		<div class="main">
		<div class="entory">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<h3><?php the_field("tra_title_en", $post->ID); ?><span class="time"><?php echo get_post_time( 'Y.M.d' ); ?></span></h3>
		<?php the_field("tra_body_en", $post->ID); ?>
		
		</div>
		
		<div id="pageNav">
		
<?php
    $next_post = get_next_post(TRUE,'','entrekking');
    $prev_post = get_previous_post(TRUE,'','entrekking');   
    if( $next_post || $prev_post ) :
?>
<ul>
<?php if( $prev_post ) : ?>
    <li class="prev"><a href="<?php echo get_permalink( $prev_post->ID ); ?>?lang=en">PREV</a></li>
<?php endif; ?>
<li class="back"><a href="<?php echo home_url();?>/entrekking/<?php $terms = wp_get_object_terms($post->ID,'trekking'); foreach($terms as $term){echo $term->slug . ' ';} ?>">BACK to LIST</a></li><?php if( $next_post ) : ?>
        <li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>?lang=en">NEXT</a></li>
<?php endif; ?>
</ul>
<?php endif; ?>	
		</div>
		</div>
		<?php endwhile;endif; ?>
<?php get_sidebar("entrakkingreport"); ?>

		</div>
<?php get_footer('en'); ?>


<?php else: ?>
<!-- //英語版振り分けここまで -->	

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
<body id="sub" class="report green summer">
<div id="container">
<?php get_template_part( 'nav' ); ?>
		<!-- /#header -->
		
<?php if (is_object_in_term($post->ID, 'trekking', 'outdoor')): ?>
<?php get_template_part( 'trbanner', 'outdoor' ); ?>
<?php elseif(is_object_in_term($post->ID, 'trekking', 'goryu')): ?>
<?php get_template_part( 'trbanner', 'goryu' ); ?>
<?php elseif(is_object_in_term($post->ID, 'trekking', 'happo')): ?>
<?php get_template_part( 'trbanner', 'happo' ); ?>
<?php elseif(is_object_in_term($post->ID, 'trekking', 'iwatake')): ?>
<?php get_template_part( 'trbanner', 'iwatake' ); ?>
<?php elseif(is_object_in_term($post->ID, 'trekking', 'tsugaike')): ?>
<?php get_template_part( 'trbanner', 'tsugaike' ); ?>
<?php elseif(is_object_in_term($post->ID, 'trekking', 'mount')): ?>
<?php get_template_part( 'trbanner', 'mount' ); ?>
<?php elseif(is_object_in_term($post->ID, 'trekking', 'tourism')): ?>
<?php get_template_part( 'trbanner', 'tourism' ); ?>
<?php elseif(is_object_in_term($post->ID, 'trekking', 'sugadaira')): ?>
<?php get_template_part( 'trbanner', 'sugadaira' ); ?>
<?php endif; ?>	

	
		<div id="pageTitle">
		<h2><?php $terms = wp_get_object_terms($post->ID,'trekking'); foreach($terms as $term){echo $term->name . ' ';} ?>　レポート</h2>
		</div>
		<div id="punkuz">
		<a href="<?php echo home_url();?>">HOME</a> > <a href="<?php echo home_url();?>/trekkingreport/">トレッキングレポート</a> > <?php the_title();?>　
		</div>
		<div id="content">
		<div class="main">
		<div class="entory">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<h3><?php the_title();?><span class="time"><?php echo get_post_time( 'Y.m.d' ); ?></span></h3>
		<?php the_content(); ?>
		
		</div>
		
		<div id="pageNav">
		
		<ul>
		<li class="prev"><?php previous_post_link('%link', 'PREV<i class="fa fa-angle-double-left"></i>',TRUE,'','trekking'); ?></li>
		<li class="back"><a href="<?php echo home_url();?>/trekking/<?php $terms = wp_get_object_terms($post->ID,'trekking'); foreach($terms as $term){echo $term->slug . ' ';} ?>">BACK to LIST</a></li>
		<li class="next"><?php next_post_link('%link', 'NEXT<i class="fa fa-angle-double-right"></i>',TRUE,'','trekking'); ?></li>
		</ul>
		</div>
		</div>
		<?php endwhile;endif; ?>
<!-- ?php get_sidebar("trakkingreport"); ? -->
<div id="sidebar">
	<div class="side">
		<div class="box tel">
			<h6>トレッキングレポート月別アーカイブ</h6>
			<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
			<option value=""><?php echo attribute_escape(__('Select Month')); ?></option>
			<?php wp_get_archives('type=monthly&post_type=trekkingreport&format=option&show_post_count=true'); ?>
			</select>
		</div>
		<div class="btm30">
			<a href="<?php echo home_url(); ?>/skireport/" class="btn_item">ゲレンデレポート一覧<i class="fa fa-chevron-right"></i></a>
			<a href="<?php echo home_url(); ?>/trekkingreport/" class="btn_item">トレッキングレポート一覧<i class="fa fa-chevron-right"></i></a>
		</div>
	</div>
</div>

		</div>
<?php get_footer(); ?>
		<?php endif; ?>	
