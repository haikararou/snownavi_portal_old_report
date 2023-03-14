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
		slideWidth: 150,
		ticker: true
	});
});
</script>
</head>
<body id="sub" class="report winter">
<div id="container">
<?php get_template_part( 'en','nav' ); ?>
		<!-- /#header -->

		<div id="pageTitle">
		<h2><?php $terms = wp_get_object_terms($post->ID,'enskireport'); foreach($terms as $term){echo $term->slug . ' ';} ?> Report</h2>
		</div>
		<div id="punkuz">
		<a href="<?php echo home_url();?>/en/">HOME</a> > <a href="<?php echo home_url();?>/enskireport/en/">Ski Area Report</a> > <?php $terms = wp_get_object_terms($post->ID,'enskireport'); foreach($terms as $term){echo $term->slug . ' ';} ?>　
		</div>
		<div id="content">
		<div class="main">
		<div class="entory">
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
		<h3><?php the_field("ski_title_en", $post->ID); ?><span class="time"><?php echo get_post_time( 'Y.M.d' ); ?></span></h3>
		<?php the_field("ski_body_en", $post->ID); ?>
		
		</div>
		
		<div id="pageNav">
	
<?php
    $next_post = get_next_post(TRUE,'','enskireport');
    $prev_post = get_previous_post(TRUE,'','enskireport');   
    if( $next_post || $prev_post ) :
?>
<ul>
<?php if( $prev_post ) : ?>
    <li class="prev"><a href="<?php echo get_permalink( $prev_post->ID ); ?>?lang=en">PREV</a></li>
<?php endif; ?>
<li class="back"><a href="<?php echo home_url();?>/enskireport/<?php $terms = wp_get_object_terms($post->ID,'enskireport'); foreach($terms as $term){echo $term->slug . ' ';} ?>">BACK to LIST</a></li><?php if( $next_post ) : ?>
        <li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>?lang=en">NEXT</a></li>
<?php endif; ?>
</ul>
<?php endif; ?>	
	</div>
		</div>

		<?php endwhile;endif; ?>
<?php get_sidebar("enskireport"); ?>

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
		slideWidth: 150,
		ticker: true
	});
});
</script>
</head>
<body id="sub" class="report winter">
<div id="container">
<?php get_template_part( 'nav' ); ?>
		<!-- /#header -->
		
<?php if (is_object_in_term($post->ID, 'report', 'sanosaka')): ?>
<?php get_template_part( 'banner', 'sanosaka' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'cortina')): ?>
<?php get_template_part( 'banner', 'cortina' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'yanaba')): ?>
<?php get_template_part( 'banner', 'yanaba' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'goryu47')): ?>
<?php get_template_part( 'banner', 'goryu47' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'happo')): ?>
<?php get_template_part( 'banner', 'happo' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'iwatake')): ?>
<?php get_template_part( 'banner', 'iwatake' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'tsugaike')): ?>
<?php get_template_part( 'banner', 'tsugaike' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'jiigatake')): ?>
<?php get_template_part( 'banner', 'jiigatake' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'hakunori')): ?>
<?php get_template_part( 'banner', 'hakunori' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'kashimayari')): ?>
<?php get_template_part( 'banner', 'kashimayari' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'other')): ?>
<?php get_template_part( 'banner', 'other' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'akakura')): ?>
<?php get_template_part( 'banner', 'akakura' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'kurohime')): ?>
<?php get_template_part( 'banner', 'kurohime' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'sugadaira')): ?>
<?php get_template_part( 'banner', 'sugadaira' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'madarao')): ?>
<?php get_template_part( 'banner', 'madarao' ); ?>
<?php elseif(is_object_in_term($post->ID, 'report', 'ryuo')): ?>
<?php get_template_part( 'banner', 'ryuo' ); ?>
<?php endif; ?>	

	
		<div id="pageTitle">
		<h2><?php $terms = wp_get_object_terms($post->ID,'report'); foreach($terms as $term){echo $term->name . ' ';} ?>　ゲレンデレポート</h2>
		</div>
		<div id="punkuz">
		<a href="<?php echo home_url();?>">HOME</a> > <a href="<?php echo home_url();?>/skireport/">ゲレンデレポート</a> > <?php $terms = wp_get_object_terms($post->ID,'report'); foreach($terms as $term){echo $term->name . ' ';} ?>　
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
		<li class="prev"><?php previous_post_link('%link', 'PREV<i class="fa fa-angle-double-left"></i>',TRUE,'','report'); ?></li>
		<li class="back"><a href="<?php echo home_url();?>/report/<?php $terms = wp_get_object_terms($post->ID,'report'); foreach($terms as $term){echo $term->slug . ' ';} ?>">BACK to LIST</a></li>
		<li class="next"><?php next_post_link('%link', 'NEXT<i class="fa fa-angle-double-right"></i>',TRUE,'','report'); ?></li>
		</ul>
		</div>
		</div>

		<?php endwhile;endif; ?>
<!-- ?php get_sidebar("skireport"); ? -->
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
<?php get_footer(); ?>
		<?php endif; ?>
