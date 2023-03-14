<?php  $lang = $_GET['lang']; ?>
<?php if ($lang=="en"): ?>
<!-- 英語版振り分け -->

<?php get_header('en'); ?>

</head>
<body id="sub" class="shop summer">
<div id="container">
<?php get_template_part( 'en','nav' ); ?>
		<!-- /#header -->
	<div id="topArea">
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
		'orderby' => 'rand',
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>	
<?php get_template_part( 'after','enMvitem' ); ?>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
	</div>
	<div id="pageTitle">
		<h2>Kashimayari Shop & Restaurant</h2>
	</div>
	<div id="content">
		<div id="punkuz"> <a href="<?php echo home_url();?>">HOME</a> > Kashimayari Shop & Restaurant </div>
<!-- /////////////カテゴリリストここから/////////////////// -->
		<ul id="tagList">
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop01','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	<li><a href="#shop01">Restaurant</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop02','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
			<li><a href="#shop02">Outdoor Goods Shop</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop03','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
			<li><a href="#shop03">Tune-up shop</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop04','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
			<li><a href="#shop04">Outdoor guide</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop05','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
			<li><a href="#shop05">Other</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>	
		</ul>
<!-- /////////////カテゴリリストここまで/////////////////// -->			
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop00','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section">
		<h3>PICK UP</h3>
			<?php get_template_part( 'enloop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop01','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop01">
		<h3>Restaurant</h3>
			<?php get_template_part( 'enloop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop02','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop02">
		<h3>Outdoor Goods Shop</h3>
			<?php get_template_part( 'enloop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop03','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop03">
		<h3>Tune-up shop</h3>
			<?php get_template_part( 'enloop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop04','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop04">
		<h3>Outdoor guide</h3>
			<?php get_template_part( 'enloop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop05','kashimayari','after_en') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop05">
		<h3>Other</h3>
			<?php get_template_part( 'enloop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->


		

		<div class="section">
			<?php
				$args=array(
					'tax_query' => array( 
						array(
							'taxonomy' => 'after', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'operator' => 'AND',
							'terms' => array('data','kashimayari') //表示したいタームをスラッグで指定
						),
					),
					'post_type' => 'shop', //カスタム投稿名
					'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
				);
			 ?>
			<?php query_posts( $args ); ?>
			<?php if(have_posts()): ?>
			<?php while(have_posts()):the_post(); ?>
			<h3>Restaurant</h3>
					<?php the_field("shop_data_table", $post->ID); ?>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>		
		</div>
		<div class="section">
		
			<?php
				$args=array(
					'tax_query' => array( 
						array(
							'taxonomy' => 'after', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'operator' => 'AND',
							'terms' => array('data','kashimayari','after_en') //表示したいタームをスラッグで指定
						),
					),
					'post_type' => 'shop', //カスタム投稿名
					'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
				);
			 ?>
			<?php query_posts( $args ); ?>
			<?php if(have_posts()): ?>
			<?php while(have_posts()):the_post(); ?>
			<h3>Convenience store , bakery , liquor store</h3>
					<?php the_field("shop_data_table02", $post->ID); ?>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>		
		</div>
		</div>
		<!-- /#content -->
<?php get_footer('en'); ?>

<!-- //英語版振り分けここまで -->	
<?php else: ?>
<!-- //ここから日本語版 -->	



<?php get_header(); ?>

</head>
<body id="sub" class="shop summer">
<div id="container">
<?php get_template_part( 'nav' ); ?>
		<!-- /#header -->
	<div id="topArea">
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => 'kashimayari' //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
		'orderby' => 'rand',
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>	
<?php get_template_part( 'after','jpMvitem' ); ?>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
	</div>
	<div id="pageTitle">
		<h2><?php if(is_tax()) {
	$taxonomy = get_taxonomy(get_query_var('after'));
	echo sprintf('%s', mb_strstr(single_term_title('', false),'｜',true));
} ?>で食べる・買う</h2>
	</div>
	<div id="content">
		<div id="punkuz"> <a href="<?php echo home_url();?>">HOME</a> > <?php if(is_tax()) {
	$taxonomy = get_taxonomy(get_query_var('after'));
	echo sprintf('%s', mb_strstr(single_term_title('', false),'｜',true));
} ?>で食べる・買う </div>
<!-- /////////////カテゴリリストここから/////////////////// -->
		<ul id="tagList">
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop01','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	<li><a href="#shop01">飲食店</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop02','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
			<li><a href="#shop02">アウトドア用品店</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop03','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
			<li><a href="#shop03">チューンナップ店</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop04','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
			<li><a href="#shop04">アウトドアガイド</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop05','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
			<li><a href="#shop05">その他</a></li>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>	
		</ul>
<!-- /////////////カテゴリリストここまで/////////////////// -->		
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop00','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section">
		<h3>PICK UP</h3>
			<?php get_template_part( 'loop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop01','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop01">
		<h3>飲食店</h3>
			<?php get_template_part( 'loop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop02','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop02">
		<h3>アウトドア用品店</h3>
			<?php get_template_part( 'loop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop03','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop03">
		<h3>チューンナップ店</h3>
			<?php get_template_part( 'loop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop04','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop04">
		<h3>アウトドアガイド</h3>
			<?php get_template_part( 'loop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->
<!-- ///////////////////////////////////////////////////// -->
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'after', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
				'operator' => 'AND',
                'terms' => array('shop05','kashimayari') //表示したいタームをスラッグで指定
            ),
        ),
        'post_type' => 'shop', //カスタム投稿名
        'posts_per_page'=> -1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>
	
		<div class="section" id="shop05">
		<h3>その他</h3>
			<?php get_template_part( 'loop', 'after' ); ?>
		</div>
<?php endwhile; endif; ?>
<?php wp_reset_query(); ?>		
<!-- ///////////////////////////////////////////////////// -->


		

		<div class="section">
			<?php
				$args=array(
					'tax_query' => array( 
						array(
							'taxonomy' => 'after', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'operator' => 'AND',
							'terms' => array('data','kashimayari') //表示したいタームをスラッグで指定
						),
					),
					'post_type' => 'shop', //カスタム投稿名
					'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
				);
			 ?>
			<?php query_posts( $args ); ?>
			<?php if(have_posts()): ?>
			<?php while(have_posts()):the_post(); ?>
			<h3>飲食店</h3>
					<?php the_field("shop_data_table", $post->ID); ?>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>		
		</div>
		<div class="section">
		
			<?php
				$args=array(
					'tax_query' => array( 
						array(
							'taxonomy' => 'after', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'operator' => 'AND',
							'terms' => array('data','kashimayari') //表示したいタームをスラッグで指定
						),
					),
					'post_type' => 'shop', //カスタム投稿名
					'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
				);
			 ?>
			<?php query_posts( $args ); ?>
			<?php if(have_posts()): ?>
			<?php while(have_posts()):the_post(); ?>
			<h3>コンビニ・パン屋・酒屋</h3>
					<?php the_field("shop_data_table02", $post->ID); ?>
			<?php endwhile; endif; ?>
			<?php wp_reset_query(); ?>		
		</div>
		</div>
		<!-- /#content -->
<?php get_footer(); ?>
<?php endif; ?>