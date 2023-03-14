<?php get_header('en'); ?>
</head>

<body id="top" class="winter ver02">
	<div id="container">
		<?php get_template_part('en', 'nav'); ?>
		<!-- /#header -->
		<div class="wideslider">
			<ul>
				<?php
				$args = array(
					'tax_query' => array(
						array(
							'taxonomy' => 'mv_cat', //タクソノミーを指定
							'field' => 'slug', //ターム名をスラッグで指定する
							'terms' => 'mv_en' //表示したいタームをスラッグで指定
						),
					),
					'post_type' => 'mv', //カスタム投稿名
					'posts_per_page' => 1 //表示件数（-1で全ての記事を表示）
				);
				?>
				<?php query_posts($args); ?>
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>
						<?php if (get_field("mv01_en") != "") { ?>
							<li>
								<a href="<?php the_field("mv_l_en01", $post->ID); ?>
								<?php if (in_array('blank01', get_field('blank_link01_en'))) { echo '" target="_blank';} ?>">
									<div class="text">
										<h2><?php the_field("mv_t_en01", $post->ID); ?></h2><?php the_field("mv_c_en01", $post->ID); ?><span>See Details<i class="fa fa-chevron-right"></i></span>
									</div>
									<img src="<?php the_field("mv01_en", $post->ID); ?>" alt="<?php the_field("mv_t_en01", $post->ID); ?>" />
								</a>
							</li>
						<?php } ?>
						<?php if (get_field("mv02_en") != "") { ?>
							<li>
								<a href="<?php the_field("mv_l_en02", $post->ID); ?>
								<?php if (in_array('blank02', get_field('blank_link02_en'))) { echo '" target="_blank';} ?>">
									<div class="text">
										<h2><?php the_field("mv_t_en02", $post->ID); ?></h2><?php the_field("mv_c_en02", $post->ID); ?><span>See Details<i class="fa fa-chevron-right"></i></span>
									</div>
									<img src="<?php the_field("mv02_en", $post->ID); ?>" alt="<?php the_field("mv_t_en02", $post->ID); ?>" />
								</a>
							</li>
						<?php } ?>
						<?php if (get_field("mv03_en") != "") { ?>
							<li>
								<a href="<?php the_field("mv_l_en03", $post->ID); ?>
								<?php if (in_array('blank03', get_field('blank_link03_en'))) {echo '" target="_blank';} ?>">
									<div class="text">
										<h2><?php the_field("mv_t_en03", $post->ID); ?></h2><?php the_field("mv_c_en03", $post->ID); ?><span>See Details<i class="fa fa-chevron-right"></i></span>
									</div>
									<img src="<?php the_field("mv03_en", $post->ID); ?>" alt="<?php the_field("mv_t_en03", $post->ID); ?>" />
								</a>
							</li>
						<?php } ?>
						<?php if (get_field("mv04_en") != "") { ?>
							<li>
								<a href="<?php the_field("mv_l_en04", $post->ID); ?>
								<?php if (in_array('blank04', get_field('blank_link04_en'))) {echo '" target="_blank';} ?>">
									<div class="text">
										<h2><?php the_field("mv_t_en04", $post->ID); ?></h2><?php the_field("mv_c_en04", $post->ID); ?><span>See Details<i class="fa fa-chevron-right"></i></span>
									</div>
									<img src="<?php the_field("mv04_en", $post->ID); ?>" alt="<?php the_field("mv_t_en04", $post->ID); ?>" />
								</a>
							</li>
						<?php } ?>
						<?php if (get_field("mv05_en") != "") { ?>
							<li>
								<a href="<?php the_field("mv_l_en05", $post->ID); ?>
								<?php if (in_array('blank05', get_field('blank_link05_en'))) {echo '" target="_blank';} ?>">
									<div class="text">
										<h2><?php the_field("mv_t_en05", $post->ID); ?></h2><?php the_field("mv_c_en05", $post->ID); ?><span>See Details<i class="fa fa-chevron-right"></i></span>
									</div>
									<img src="<?php the_field("mv05_en", $post->ID); ?>" alt="<?php the_field("mv_t_en05", $post->ID); ?>" />
								</a>
							</li>
						<?php } ?>
				<?php endwhile;
				endif; ?>
				<?php wp_reset_query(); ?>
			</ul>
		</div>

		<div id="content">
			<div id="section01">
				<div id="topNews">
					<div class="h2box">
						<h2>NEWS</h2>
						<a href="<?php echo home_url(); ?>/ennews/en-news/">See the list<i class="fa fa-chevron-right"></i></a>
					</div>
					<div class="scroll_area pc">
						<ul>
							<?php
							$args = array(
								'tax_query' => array(
									array(
										'taxonomy' => 'ennews', //タクソノミーを指定
										'field' => 'slug', //ターム名をスラッグで指定する
										'terms' => 'en-news' //表示したいタームをスラッグで指定
									),
								),
								'post_type' => 'post', //カスタム投稿名
								'posts_per_page' => 10 //表示件数（-1で全ての記事を表示）
							);
							?>
							<?php query_posts($args); ?>
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<li><a href="<?php echo the_permalink(); echo "?lang=en"; ?>">
									<span><?php echo get_post_time('M.d,Y'); ?></span><?php the_field("en_news_title", $post->ID); ?>
								</a></li>
							<?php endwhile;
							endif; ?>
							<?php wp_reset_query(); ?>
						</ul>
					</div>
					<ul class="sp">
						<?php
						$args = array(
							'tax_query' => array(
								array(
									'taxonomy' => 'ennews', //タクソノミーを指定
									'field' => 'slug', //ターム名をスラッグで指定する
									'terms' => 'en-news' //表示したいタームをスラッグで指定
								),
							),
							'post_type' => 'post', //カスタム投稿名
							'posts_per_page' => 1 //表示件数（-1で全ての記事を表示）
						);
						?>
						<?php query_posts($args); ?>
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">
								<span><?php echo get_post_time('M.d,Y'); ?></span><?php the_field("en_news_title", $post->ID); ?>
							</a></li>
						<?php endwhile;
						endif; ?>
						<?php wp_reset_query(); ?>
					</ul>
				</div>
				<!-- <div id="topBn">
					<ul>
					<?php global $post;
					$args = array(
						'post_type' => 'banner',
						'taxonomy' => 'bannercat',
						'term' => 'toppage',
						'numberposts' => 1
					);
					$myposts = get_posts($args);
					foreach ($myposts as $post) :  setup_postdata($post); ?>
						<li><a href="<?php the_field("top_link_01_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_bn_01_en', 'Bn_top01'); ?></a></li>
						<li><a href="<?php the_field("top_link_02_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_bn_02_en', 'Bn_top01'); ?></a></li>
						<li><a href="<?php the_field("top_link_03_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_bn_03_en', 'Bn_top01'); ?></a></li>
						<li><a href="<?php the_field("top_link_04_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_bn_04_en', 'Bn_top01'); ?></a></li>
						<?php endforeach; ?>
					</ul>
				</div> -->
			</div>
			<div id="reportBox">
				<ul id="tab">
					<li class="tab01"><a href="#reportBox" class="select"><span>Ski Area Report</span><i class="fa fa-caret-down"></i></a></li>
					<li class="tab02"><a href="#reportBox"><span>Trekking Report (Hakuba)</span><i class="fa fa-caret-down"></i></a></li>
				</ul>

				<div class="content_wrap gereBox" >
					<div class="sidenav">
						<ul class="sidebn">
							<?php global $post;
							$args = array(
								'post_type' => 'banner',
								'taxonomy' => 'bannercat',
								'term' => 'toppage',
								'numberposts' => 1
							);
							$myposts = get_posts($args);
							foreach ($myposts as $post) :  setup_postdata($post); ?>
								<?php if (get_field("top_repo_01_en") != "") { ?>
									<li><a href="<?php the_field("top_re_link_01_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_01_en', 'Bn_top02'); ?></a></li>
								<?php } ?>
								<?php if (get_field("top_repo_02_en") != "") { ?>
									<li><a href="<?php the_field("top_re_link_02_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_02_en', 'Bn_top02'); ?></a></li>
								<?php } ?>
								<?php if (get_field("top_repo_03_en") != "") { ?>
									<li><a href="<?php the_field("top_re_link_03_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_03_en', 'Bn_top02'); ?></a></li>
								<?php } ?>
								<?php /*if (get_field("top_repo_04_en") != "") { ?>
									<li><a href="<?php the_field("top_re_link_04_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_04_en', 'Bn_top02'); ?></a></li>
								<?php } */ ?>
							<?php endforeach; ?>
						</ul><!-- /.sidebn -->

						<!-- <h3 class="area_ttl viga">SKI AREAS</h3> -->
						<h3 class="area_ttl">HAKUBA
						<?php global $post;
								$args = array(
									// 'post_type' => 'skireport',
									'post_type' => 'page',
									'pagename' => 'skireport_update',
									'post_status' => array('publish','draft'),
									// 'tax_query' => array(
									// 	array(
									// 		'taxonomy' => 'enskireport',
									// 		'field' => 'slug',
									// 		'terms' => array('cortina','hakunori','tsugaike','iwatake','happo','goryu47','kashimayari','jiigatake')
									// 	)
									// ),
									// 'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
							<span class="update">UPDATE：<?php the_field("hakuba_area_update", $post->ID); ?></span>
							<?php endforeach; ?>
						</h3>

						<ul class="snow_list">
								<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'cortina',
									'numberposts' => 1
								);
								$myposts = get_posts($args);?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink();echo "?lang=en" ?>">
									<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
									<?php if(get_field('ski_snow_top_en')): ?>
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									<?php else: ?>
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									<?php endif; ?>
									</a>
									</li>
								<?php endforeach; ?>
								<?php endif; ?>
								<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'hakunori',
									'numberposts' => 1
								);
								$myposts = get_posts($args);?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink();echo "?lang=en" ?>">
									<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
									<?php if(get_field('ski_snow_top_en')): ?>
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									<?php else: ?>
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									<?php endif; ?>
									</a>
									</li>
								<?php endforeach; ?>
								<?php endif; ?>

								<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'tsugaike',
									'numberposts' => 1
								);
								$myposts = get_posts($args);?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink();echo "?lang=en" ?>">
									<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
									<?php if(get_field('ski_snow_top_en')): ?>
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									<?php else: ?>
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									<?php endif; ?>
									</a>
									</li>
								<?php endforeach; ?>
								<?php endif; ?>
								<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'iwatake',
									'numberposts' => 1
								);
								$myposts = get_posts($args);?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink();echo "?lang=en" ?>">
									<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
									<?php if(get_field('ski_snow_top_en')): ?>
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									<?php else: ?>
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									<?php endif; ?>
									</a>
									</li>
								<?php endforeach; ?>
								<?php endif; ?>

								<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'happo',
									'numberposts' => 1
								);
								$myposts = get_posts($args);?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink();echo "?lang=en" ?>">
									<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
									<?php if(get_field('ski_snow_top_en')): ?>
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									<?php else: ?>
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									<?php endif; ?>
									</a>
									</li>
								<?php endforeach; ?>
								<?php endif; ?>

								<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'goryu47',
									'numberposts' => 1
								);
								$myposts = get_posts($args);?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink();echo "?lang=en" ?>">
									<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
									<?php if(get_field('ski_snow_top_en')): ?>
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									<?php else: ?>
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									<?php endif; ?>
									</a>
									</li>
								<?php endforeach; ?>
								<?php endif; ?>

								<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'kashimayari',
									'numberposts' => 1
								);
								$myposts = get_posts($args);?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink();echo "?lang=en" ?>">
									<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
									<?php if(get_field('ski_snow_top_en')): ?>
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									<?php else: ?>
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									<?php endif; ?>
									</a>
								</li>
								<?php endforeach; ?>
								<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'jiigatake',
									'numberposts' => 1
								);
								$myposts = get_posts($args);?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li>
							<a href="<?php the_permalink();echo "?lang=en" ?>">
								<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
								<?php if(get_field('ski_snow_top_en')): ?>
									<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
								<?php else: ?>
									<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								<?php endif; ?>
							</a>
							</li>
							<?php endforeach; ?>
							<?php endif; ?>
							<!-- <li>
								<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'en_other',
									'numberposts' => 1
								);
								// $args = array(
								// 	'tax_query' => array(
								// 		array(
								// 			'taxonomy' => 'enskireport', //タクソノミーを指定
								// 			'field' => 'slug', //ターム名をスラッグで指定する
								// 			'terms' => 'en_other', //表示したいタームをスラッグで指定
								// 		),
								// 		array(
								// 			'taxonomy' => 'enskireport', //タクソノミーを指定
								// 			'field' => 'slug', //ターム名をスラッグで指定する
								// 			'terms' => array('happo', 'iwatake', 'tsugaike'), //表示したいタームをスラッグで指定
								// 			'operator' => 'NOT IN' //特定のタームを除外
								// 		),
								// 	),
								// 	'post_type' => 'skireport', //カスタム投稿名
								// 	'posts_per_page' => 1 //表示件数（-1で全ての記事を表示）
								// );
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink();echo "?lang=en" ?>">
									<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li> -->
						</ul><!--//白馬エリアここまで -->

						<h3 class="area_ttl">MYOKO＆HOKUSHIN
							<?php global $post;
								$args = array(
									// 'post_type' => 'skireport',
									'post_type' => 'page',
									'pagename' => 'skireport_update',
									'post_status' => array('publish','draft')
									// 'tax_query' => array(
									// 	array(
									// 		'taxonomy' => 'enskireport',
									// 		'field' => 'slug',
									// 		'terms' => array('akakura','madarao','kurohime','togari','nozawaonsen','ryuo','shiga')
									// 	)
									// ),
									// 'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
							<span class="update">UPDATE：<?php the_field("myokohokushin_area_update", $post->ID); ?></span>
							<?php endforeach; ?>
						</h3>
						<ul class="snow_list">
						<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								//'post_status' => array('publish','draft'),
								'taxonomy' => 'enskireport',
								'term' => 'akakura',
								'numberposts' => 1
							);
							$myposts = get_posts($args); ?>
							<?php if($myposts): ?>
							<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
							<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
							<?php else: ?>
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
							<?php endif; ?>
							</a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								//'post_status' => array('publish','draft'),
								'taxonomy' => 'enskireport',
								'term' => 'madarao',
								'numberposts' => 1
							);
							$myposts = get_posts($args); ?>
							<?php if($myposts): ?>
							<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
							<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
							<?php else: ?>
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
							<?php endif; ?>
							</a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								//'post_status' => array('publish','draft'),
								'taxonomy' => 'enskireport',
								'term' => 'kurohime',
								'numberposts' => 1
							);
							$myposts = get_posts($args); ?>
							<?php if($myposts): ?>
							<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
							<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
							<?php else: ?>
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
							<?php endif; ?>
							</a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								//'post_status' => array('publish','draft'),
								'taxonomy' => 'enskireport',
								'term' => 'togari',
								'numberposts' => 1
							);
							$myposts = get_posts($args); ?>
							<?php if($myposts): ?>
							<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
							<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
							<?php else: ?>
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
							<?php endif; ?>
							</a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								//'post_status' => array('publish','draft'),
								'taxonomy' => 'enskireport',
								'term' => 'nozawaonsen',
								'numberposts' => 1
							);
							$myposts = get_posts($args); ?>
							<?php if($myposts): ?>
							<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
							<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
							<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
							<?php else: ?>
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
							<?php endif; ?>
							</a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								//'post_status' => array('publish','draft'),
								'taxonomy' => 'enskireport',
								'term' => 'ryuo',
								'numberposts' => 1
							);
							$myposts = get_posts($args); ?>
							<?php if($myposts): ?>
							<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
							<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
							<?php else: ?>
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
							<?php endif; ?>
							</a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								//'post_status' => array('publish','draft'),
								'taxonomy' => 'enskireport',
								'term' => 'shiga',
								'numberposts' => 1
							);
							$myposts = get_posts($args); ?>
							<?php if($myposts): ?>
							<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
							<?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) { echo $term->description . ' ';} ?>
							<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
							<?php else: ?>
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
							<?php endif; ?>
							</a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								//'post_status' => array('publish','draft'),
								'taxonomy' => 'enskireport',
								'term' => 'other_mh',
								'numberposts' => 1
							);
							$myposts = get_posts($args); ?>
							<?php if($myposts): ?>
							<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
							<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
								<?php if(get_field('ski_snow_top_en')): ?>
								<?php the_field("ski_snow_top_en", $post->ID); ?>
								<?php else: ?>
								<?php the_field("ski_snow_top", $post->ID); ?>
								<?php endif; ?>
							</a></li>
						<?php endforeach; ?>
						<?php endif; ?>

						</ul><!--//妙高北信エリアここまで -->

						<h3 class="area_ttl">TOSHIN＆CHUODO
							<?php global $post;
								$args = array(
									// 'post_type' => 'skireport',
									'post_type' => 'page',
									'pagename' => 'skireport_update',
									'post_status' => array('publish','draft')
									// 'tax_query' => array(
									// 	array(
									// 		'taxonomy' => 'enskireport',
									// 		'field' => 'slug',
									// 		'terms' => array('sugadaira','nomugitouge','ontake2240','fujimipanorama','kurumayama')
									// 	)
									// ),
									// 'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
							<span class="update">UPDATE：<?php the_field("toshinchuo_area_update", $post->ID); ?></span>
							<?php endforeach; ?>
						</h3>
						<ul class="snow_list">
							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'sugadaira',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
								<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
								<?php else: ?>
									<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								<?php endif; ?>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'ninja',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
								<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
								<?php else: ?>
									<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								<?php endif; ?>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'nomugitouge',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
								<?php if(get_field('ski_snow_top_en')): ?>
								<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
								<?php else: ?>
									<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								<?php endif; ?>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'ontake2240',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
								<?php if(get_field('ski_snow_top_en')): ?>
									<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
								<?php else: ?>
									<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								<?php endif; ?>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'kurumayama',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
								<?php if(get_field('ski_snow_top_en')): ?>
									<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
								<?php else: ?>
									<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								<?php endif; ?>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'fujimipanorama',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<!-- <li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
								<?php if(get_field('ski_snow_top_en')): ?>
									<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
								<?php else: ?>
									<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								<?php endif; ?>
								</a></li> -->
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'other_tc',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>"><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?>
								<?php if(get_field('ski_snow_top_en')): ?>
									<?php the_field("ski_snow_top_en", $post->ID); ?>
								<?php else: ?>
									<?php the_field("ski_snow_top", $post->ID); ?>
								<?php endif; ?>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

						</ul><!--//東信中央エリアここまで -->


						<div class="btm30">
							<a href="<?php echo home_url(); ?>/enskireport/en" class="btn_item">Ski Area Report<i class="fa fa-chevron-right"></i></a>
							<a href="<?php echo home_url(); ?>/entrekking/en" class="btn_item">Trekking Report (Hakuba)<i class="fa fa-chevron-right"></i></a>
							<!-- <a href="<?php echo home_url(); ?>/trekking/facility/" class="btn_item">COVID?19 Secure facilities Report<i class="fa fa-chevron-right"></i></a> -->
						</div>
						<?php /* ?>
						<ul class="sidebn">
							<?php global $post;
							$args = array(
								'post_type' => 'banner',
								'taxonomy' => 'bannercat',
								'term' => 'toppage',
								'numberposts' => 1
							);
							$myposts = get_posts($args);
							foreach ($myposts as $post) :  setup_postdata($post); ?>
								<?php if (get_field("top_repo_01_en") != "") { ?><li><a href="<?php the_field("top_re_link_01_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_01_en', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_02_en") != "") { ?><li><a href="<?php the_field("top_re_link_02_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_02_en', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_03_en") != "") { ?><li><a href="<?php the_field("top_re_link_03_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_03_en', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_04_en") != "") { ?><li><a href="<?php the_field("top_re_link_04_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_04_en', 'Bn_top02'); ?></a></li><?php } ?>
							<?php endforeach; ?>
						</ul>
						<?php */ ?>
					</div><!--//.sidenav -->

					<div class="enBox">
						<h3 class="area_ttl ac_ttl viga">HAKUBA</h3>
						<div class="ac_cnt">
							<ul>
							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'enskireport',
									'term' => 'cortina',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>
							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'enskireport',
									'term' => 'hakunori',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'enskireport',
									'term' => 'tsugaike',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'enskireport',
									'term' => 'iwatake',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'enskireport',
									'term' => 'happo',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'enskireport',
									'term' => 'goryu47',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<!-- <?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'enskireport',
									'term' => 'sanosaka',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?> -->

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'enskireport',
									'term' => 'kashimayari',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'numberposts' => 1,
									'tax_query' => array(
										array(
											'taxonomy' => 'enskireport',
											'field' => 'slug',
											'terms' => array('jiigatake','other')
										)
									)
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>
							</ul>
						</div><!--//白馬エリアここまで -->

						<h3 class="area_ttl ac_ttl viga">MYOKO & HOKUSHIN</h3>
						<div class="ac_cnt">
							<ul>
							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'akakura',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>akakura/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'madarao',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>madarao/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'kurohime',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>kurohime/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'togari',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>togari/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'shiga',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>shiga/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'nozawaonsen',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>nozawaonsen/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'ryuo',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>ryuo/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'other_mh',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span>Others</span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>other_mh/準備中</li> -->
							<?php endif; ?>
							</ul>
						</div><!--//妙高&北信エリアここまで -->

						<h3 class="area_ttl ac_ttl viga">TOHSHIN & CHUODO</h3>
						<div class="ac_cnt">
							<ul>
							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'sugadaira',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>sugadaira/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'ninja',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>ninja/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'nomugitouge',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>nomugitouge/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'ontake2240',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>ontake2240/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'kurumayama',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>kurumayama/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'fujimipanorama',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'enskireport');foreach ($terms as $term) {echo $term->description . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>fujimipanorama/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'enskireport',
									'term' => 'other_tc',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); echo "?lang=en" ?>">
									<p class="tag"><span>Others</span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_field("ski_title_en", $post->ID); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>other_tc/準備中</li> -->
							<?php endif; ?>
							</ul>
						</div><!--//東信＆中央道エリアここまで -->

						<!--<p class="sp repoBtn"><a href="<?php echo home_url(); ?>/skireport/" class="btn_item">Ski Area Report<i class="fa fa-chevron-right"></i></a></p>-->
						<!-- <p class="sp repoBtn"><a href="<?php echo home_url(); ?>/enskireport/en" class="btn_item">Ski Area Report<i class="fa fa-chevron-right"></i></a></p> -->
					</div><!--//.enBox -->
				</div><!--//.content_wrap gereBox -->

				<div class="content_wrap disnon">
					<div class="sidenav summer">
						<h3 class="viga">TREKKING AREAS</h3>
						<ul>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'happo',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php echo the_permalink();
														echo "?lang=en"; ?>">Happo
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'tsugaike',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php echo the_permalink();
														echo "?lang=en"; ?>">Tsugaike
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'goryu',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php echo the_permalink();
														echo "?lang=en"; ?>">Goryu
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'iwatake',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php echo the_permalink();
														echo "?lang=en"; ?>">Iwatake
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'mount',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php echo the_permalink();
														echo "?lang=en"; ?>">Mount
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'tourism',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php echo the_permalink();
														echo "?lang=en"; ?>">Tourism
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'outdoor',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php echo the_permalink();
														echo "?lang=en"; ?>">Outdoor
										<span><?php the_field("ski_snow_top_en", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
						</ul>

						<div class="btm30">
							<a href="<?php echo home_url(); ?>/enskireport/en" class="btn_item">Ski Area Report<i class="fa fa-chevron-right"></i></a>
							<a href="<?php echo home_url(); ?>/entrekking/en" class="btn_item">Trekking Report<i class="fa fa-chevron-right"></i></a>
						</div>
						<ul class="sidebn">
							<?php global $post;
							$args = array(
								'post_type' => 'banner',
								'taxonomy' => 'bannercat',
								'term' => 'toppage',
								'numberposts' => 1
							);
							$myposts = get_posts($args);
							foreach ($myposts as $post) :  setup_postdata($post); ?>
								<?php if (get_field("top_repo_01_en") != "") { ?><li><a href="<?php the_field("top_re_link_01_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_01_en', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_02_en") != "") { ?><li><a href="<?php the_field("top_re_link_02_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_02_en', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_03_en") != "") { ?><li><a href="<?php the_field("top_re_link_03_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_03_en', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_04_en") != "") { ?><li><a href="<?php the_field("top_re_link_04_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_04_en', 'Bn_top02'); ?></a></li><?php } ?>

							<?php endforeach; ?>
						</ul>
					</div>
					<div class="enBox">
						<ul class="pc">
							<?php
							$args = array(
								'tax_query' => array(
									array(
										'taxonomy' => 'entrekking', //タクソノミーを指定
										'field' => 'slug', //ターム名をスラッグで指定する
										'terms' => 'en' //表示したいタームをスラッグで指定
									),
								),
								'post_type' => 'trekkingreport', //カスタム投稿名
								'posts_per_page' => 16 //表示件数（-1で全ての記事を表示）
							);
							?>
							<?php query_posts($args); ?>
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<li>
										<a href="<?php echo the_permalink();
															echo "?lang=en"; ?>">
											<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'entrekking');
																						foreach ($terms as $term) {
																							echo $term->slug . ' ';
																						} ?></span></p>
											<p class="photo"><?php echo get_custom_img('tra_img', 'ski_s'); ?></p>
											<p class="time"><?php echo get_post_time('M.d,Y'); ?></p>
											<h5><?php the_field("tra_title_en", $post->ID); ?></h5>
										</a>
									</li>
							<?php endwhile;
							endif; ?>
							<?php wp_reset_query(); ?>
						</ul>

						<ul class="sp">
							<?php
							$args = array(
								'tax_query' => array(
									array(
										'taxonomy' => 'entrekking', //タクソノミーを指定
										'field' => 'slug', //ターム名をスラッグで指定する
										'terms' => 'en' //表示したいタームをスラッグで指定
									),
								),
								'post_type' => 'trekkingreport', //カスタム投稿名
								'posts_per_page' => 8 //表示件数（-1で全ての記事を表示）
							);
							?>
							<?php query_posts($args); ?>
							<?php if (have_posts()) : ?>
								<?php while (have_posts()) : the_post(); ?>
									<li>
										<a href="<?php echo the_permalink();
															echo "?lang=en"; ?>">
											<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'entrekking');
																						foreach ($terms as $term) {
																							echo $term->slug . ' ';
																						} ?></span></p>
											<p class="photo"><?php echo get_custom_img('tra_img', 'ski_s'); ?></p>
											<p class="time"><?php echo get_post_time('M.d,Y'); ?></p>
											<h5><?php the_field("tra_title_en", $post->ID); ?></h5>
										</a>
									</li>
							<?php endwhile;
							endif; ?>
							<?php wp_reset_query(); ?>
						</ul>
						<!--<p class="sp repoBtn"><a href="<?php echo home_url(); ?>/trekkingreport/" class="btn_item sp">Trakking Report<i class="fa fa-chevron-right"></i></a></p>-->
						<p class="sp repoBtn"><a href="<?php echo home_url(); ?>/entrekking/en" class="btn_item sp">Trakking Report<i class="fa fa-chevron-right"></i></a></p>
					</div>
				</div>
			</div>
			<!--REPORTここまで-->

			<div id="stay_food">
				<div class="s_f_box">
					<div class="sidenav">
						<ul class="sidebn">
							<?php global $post;
							$args = array(
								'post_type' => 'banner',
								'taxonomy' => 'bannercat',
								'term' => 'toppage',
								'numberposts' => 1
							);
							$myposts = get_posts($args);
							foreach ($myposts as $post) :  setup_postdata($post); ?>
								<?php if (get_field("top_repo_01") != "") { ?>
									<li class="sp"><a href="<?php the_field("top_re_link_01_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_01_en', 'Bn_top02'); ?></a></li>
								<?php } ?>
								<?php if (get_field("top_repo_02") != "") { ?>
									<li class="sp"><a href="<?php the_field("top_re_link_02_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_02_en', 'Bn_top02'); ?></a></li>
								<?php } ?>
								<li><a href="<?php the_field("top_bo_link_01_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_bottom_01_en', 'Bn_top02'); ?></a></li>
								<li><a href="<?php the_field("top_bo_link_02_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_bottom_02_en', 'Bn_top02'); ?></a></li>
								<li><a href="<?php the_field("top_bo_link_03_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_bottom_03_en', 'Bn_top02'); ?></a></li>
								<li><a href="<?php the_field("top_bo_link_04_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_bottom_04_en', 'Bn_top02'); ?></a></li>
								<?php if (get_field("top_lift_bn_en") != "") { ?><li><a href="<?php the_field("top_lift_link_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_lift_bn_en', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_cupon_bn_en") != "") { ?><li><a href="<?php the_field("top_cupon_link_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_cupon_bn_en', 'Bn_top02'); ?></a></li><?php } ?>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="enBox">
						<div class="stay">
							<h3 class="viga">STAY</h3>
							<ul class="bn">
								<li class="case">
									<img src="<?php bloginfo('template_directory'); ?>/img/s_f_bg.png" alt="" />
									<?php
									$args = array(
										'tax_query' => array(
											array(
												'taxonomy' => 'ennews', //タクソノミーを指定
												'field' => 'slug', //ターム名をスラッグで指定する
												'terms' => 'en-stay' //表示したいタームをスラッグで指定
											),
										),
										'post_type' => 'post', //カスタム投稿名
										'posts_per_page' => 1 //表示件数（-1で全ての記事を表示）
									);
									?>
									<?php query_posts($args); ?>
									<?php if (have_posts()) : ?>
										<?php while (have_posts()) : the_post(); ?>
											<a href="<?php echo home_url(); ?>/ennews/en-stay/">
												<p class="photo"><img src="<?php echo catch_that_image(); ?>" /></p>
												<p class="text">
													<span><?php echo get_post_time('M.d,Y'); ?></span><?php the_field("en_news_title", $post->ID); ?>
												</p>
											</a>
									<?php endwhile;
									endif; ?>
									<?php wp_reset_query() ?>



								</li>
								<li><a href="<?php echo home_url(); ?>/tokusen/?lang=en"><img src="<?php bloginfo('template_directory'); ?>/img/side_bn_stay_en.png" alt="特徴のある宿選び" /></a></li>
							</ul>
							<!--
							<div class="btm20">
							<p class="link"><a href="<?php echo home_url(); ?>/panorama/index.php"><i class="fa fa-chevron-right"></i>パノラマで見る宿</a></p>
							<p class="link"><a href="<?php echo home_url(); ?>/pet/index.php"><i class="fa fa-chevron-right"></i>ペットと利用できる宿</a></p>
							</div>
							-->
							<div class="btm20">
								<p class="link"><a href="<?php echo home_url(); ?>/job/?lang=en"><i class="fa fa-chevron-right"></i>Recruitment</a></p>
								<p class="link"><a href="<?php echo home_url(); ?>/restaurant/?lang=en#rest01"><i class="fa fa-chevron-right"></i>Sports Gym</a></p>
							</div>
							<ul class="accordion">
								<li>
									<p class="btn_item">Stay Area List<span><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span></p>
									<ul>
										<li><a href="<?php echo home_url(); ?>/stay/jiigatake/?lang=en">Jiigatake</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/kashimayari/?lang=en">Kashimayari</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/sanosaka/?lang=en">Sanosaka</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/goryu47/?lang=en">Goryu47</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/misorano/?lang=en">Misorano</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/hakuba/?lang=en">Hakuba St.</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/happo/?lang=en">Happo</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/iwatake/?lang=en">Iwatake</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/tsugaike/?lang=en">Tsugaike</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/hakunori/?lang=en">Hakuba Norikura</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/cortina/?lang=en">Cortina</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/kurohime/?lang=en">Kurohime</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/sugadaira/?lang=en">Sugadaira</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/madarao/?lang=en">Madarao</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/shiga/?lang=en">Shiga</a></li>
										<li><a href="<?php echo home_url(); ?>/stay/nozawa/?lang=en">Nozawa</a></li>
									</ul>
								</li>
							</ul>
							<?php global $post;
							$args = array(
								'post_type' => 'banner',
								'taxonomy' => 'bannercat',
								'term' => 'toppage',
								'numberposts' => 1
							);
							$myposts = get_posts($args);
							foreach ($myposts as $post) :  setup_postdata($post); ?>
								<p class="big_bn"><a href="<?php the_field("top_stay_link_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_stay_bn_en', 'Bn_top03'); ?></a></p>
							<?php endforeach; ?>
						</div>
						<div class="stay food">
							<h3 class="viga">SHOPPING & RESTAURANT</h3>
							<ul class="bn">
								<li class="case">
									<img src="<?php bloginfo('template_directory'); ?>/img/s_f_bg.png" alt="" />
									<?php
									$args = array(
										'tax_query' => array(
											array(
												'taxonomy' => 'ennews', //タクソノミーを指定
												'field' => 'slug', //ターム名をスラッグで指定する
												'terms' => 'en-eat' //表示したいタームをスラッグで指定
											),
										),
										'post_type' => 'post', //カスタム投稿名
										'posts_per_page' => 1 //表示件数（-1で全ての記事を表示）
									);
									?>
									<?php query_posts($args); ?>
									<?php if (have_posts()) : ?>
										<?php while (have_posts()) : the_post(); ?>
											<a href="<?php echo home_url(); ?>/ennews/en-eat/">
												<p class="photo"><img src="<?php echo catch_that_image(); ?>" /></p>
												<p class="text">
													<span><?php echo get_post_time('M.d,Y'); ?></span><?php the_field("en_news_title", $post->ID); ?>
												</p>
											</a>
									<?php endwhile;
									endif; ?>
									<?php wp_reset_query() ?>
								</li>
								<li><a href="<?php echo home_url(); ?>/restaurant/?lang=en"><img src="<?php bloginfo('template_directory'); ?>/img/top_bn_food2_en.png" alt="" /></a></li>
							</ul>
							<div class="btm20">
								<p class="link"><a href="<?php echo home_url(); ?>/enonsen/"><i class="fa fa-chevron-right"></i>Onsen（Hot Spring）</a></p>
								<p class="link"><a href="<?php echo home_url(); ?>/restaurant/?lang=en#rest02"><i class="fa fa-chevron-right"></i>Outdoor</a></p>
							</div>

							<ul class="accordion">
								<li>
									<p class="btn_item">Shopping & Restaurant Area List<span><i class="fa fa-plus"></i><i class="fa fa-minus"></i></span></p>
									<ul>
										<li><a href="<?php echo home_url(); ?>/after/jiigatake/?lang=en">Jiigatake</a></li>
										<li><a href="<?php echo home_url(); ?>/after/kashimayari/?lang=en">Kashimayari</a></li>
										<li><a href="<?php echo home_url(); ?>/after/sanosaka/?lang=en">Sanosaka</a></li>
										<li><a href="<?php echo home_url(); ?>/after/goryu47/?lang=en">Goryu47</a></li>
										<li><a href="<?php echo home_url(); ?>/after/misorano/?lang=en">Misorano</a></li>
										<li><a href="<?php echo home_url(); ?>/after/hakuba/?lang=en">Hakuba St.</a></li>
										<li><a href="<?php echo home_url(); ?>/after/happo/?lang=en">Happo</a></li>
										<li><a href="<?php echo home_url(); ?>/after/iwatake/?lang=en">Iwatake</a></li>
										<li><a href="<?php echo home_url(); ?>/after/tsugaike/?lang=en">Tsugaike</a></li>
										<li><a href="<?php echo home_url(); ?>/after/hakunori/?lang=en">Hakuba Norikura</a></li>
										<li><a href="<?php echo home_url(); ?>/after/cortina/?lang=en">Cortina</a></li>
										<li><a href="<?php echo home_url(); ?>/after/shiga/?lang=en">Shiga</a></li>
										<li><a href="<?php echo home_url(); ?>/after/Nozawa/?lang=en">Nozawa</a></li>
										<li><a href="<?php echo home_url(); ?>/after/otherareas/?lang=en">Other Areas</a></li>
									</ul>
								</li>
							</ul>
							<?php global $post;
							$args = array(
								'post_type' => 'banner',
								'taxonomy' => 'bannercat',
								'term' => 'toppage',
								'numberposts' => 1
							);
							$myposts = get_posts($args);
							foreach ($myposts as $post) :  setup_postdata($post); ?>
								<p class="big_bn"><a href="<?php the_field("top_rest_link_en", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_rest_bn_en', 'Bn_top03'); ?></a></p>
							<?php endforeach; ?>

						</div>
					</div>
				</div>
			</div>
			<div id="areaMap">
				<h3 class="viga">AREA MAP
					<!--<a href="">エリアマップ一覧<i class="fa fa-chevron-right"></i></a>-->
				</h3>
				<div class="mapBox">
					<!-- <?php echo do_shortcode('[put_wpgm id=2]'); ?> -->
				</div>
				<p class="other" style="padding:10px 0 0;"><span class="viga">Other Area：</span><a href="<?php echo home_url(); ?>/map/jiigatake/?lang=en">Jiigatake</a>　<a href="<?php echo home_url(); ?>/map/kashimayari/?lang=en">Kashimayari</a>　<a href="<?php echo home_url(); ?>/map/sanosaka/?lang=en">Sanosaka</a>　<a href="<?php echo home_url(); ?>/map/goryu47/?lang=en">Goryu47</a>　<a href="<?php echo home_url(); ?>/map/misorano/?lang=en">Misorano</a>　<a href="<?php echo home_url(); ?>/map/hakuba/?lang=en">Hakuba St.</a>　<a href="<?php echo home_url(); ?>/map/happo/?lang=en">Happo</a>　<a href="<?php echo home_url(); ?>/map/iwatake/?lang=en">Iwatake</a>　<a href="<?php echo home_url(); ?>/map/tsugaike/?lang=en">Tsugaike</a>　<a href="<?php echo home_url(); ?>/map/hakunori/?lang=en">Hakuba Norikura</a>　<a href="<?php echo home_url(); ?>/map/cortina/?lang=en">Cortina</a>　<a href="<?php echo home_url(); ?>/map/otherareas/?lang=en">Other Areas</a></p>
			</div>
			<div class="botoomBn">
				<ul>
					<li><a target='new' href="https://protectourwinters.jp/"><IMG border="0" alt="POW" src="https://www.snownavi.com/img/banner_pow_s.jpg"></a></li>
					<li><a target='new' href="https://linksynergy.jrs5.com/fs-bin/click?id=sZFllLsHyHQ&offerid=284640.93&subid=0&type=4"><IMG border="0" alt="パタゴニア" src="https://ad.linksynergy.com/fs-bin/show?id=sZFllLsHyHQ&bids=284640.93&subid=0&type=4&gridnum=6"></a></li>
					<!-- <li><a target='new' href="https://linksynergy.jrs5.com/fs-bin/click?id=sZFllLsHyHQ&offerid=262409.6&type=4&subid=0"><IMG alt="Burtonオンラインストア" border="0" src="https://www.burton.co.jp/members/img/affiliate/Burton-logo-120x60.jpg"></a><IMG border="0" width="1" height="1" src="https://ad.linksynergy.com/fs-bin/show?id=sZFllLsHyHQ&bids=262409.6&type=4&subid=0"></li> -->
					<!-- <li><a target='new' href="https://click.linksynergy.com/fs-bin/click?id=sZFllLsHyHQ&offerid=100006.10001480&type=4&subid=0"><IMG alt="アウトドア＆フィッシング　ナチュラム" border="0" src="https://www.naturum.co.jp/ls/link/01top/17winter/120_60_201711.gif"></a><IMG border="0" width="1" height="1" src="https://ad.linksynergy.com/fs-bin/show?id=sZFllLsHyHQ&bids=100006.10001480&type=4&subid=0"></li> -->
				</ul>
			</div>
		</div>
		<!-- /#content -->
		<?php get_footer('en'); ?>
