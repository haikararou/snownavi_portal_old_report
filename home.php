<?php get_header(); ?>
</head>

<body id="top" class="winter ver02">
	<div id="container">
		<?php get_template_part('nav'); ?>

		<div id="content">
			<div id="reportBox">
				<ul id="tab">
					<li class="tab01"><a href="#reportBox" class="select"><span>ゲレンデレポート</span><i class="fa fa-caret-down"></i></a></li>
					<li class="tab02"><a href="#reportBox"><span>トレッキングレポ（白馬）</span><i class="fa fa-caret-down"></i></a></li>
				</ul><!--// #tab -->

				<div class="content_wrap gereBox">
					<div class="sidenav">
						<div class="btm30">
							<a href="<?php echo home_url(); ?>/skireport/" class="btn_item">ゲレンデレポート一覧<i class="fa fa-chevron-right"></i></a>
							<a href="<?php echo home_url(); ?>/trekkingreport/" class="btn_item">トレッキングレポート一覧<i class="fa fa-chevron-right"></i></a>
						</div><!--//.btm30 -->

					</div><!--//.sidenav -->

					<div class="enBox">
						<h3 class="area_ttl ac_ttl">白馬<span class="viga">HAKUBA</span></h3>
						<div class="ac_cnt">
							<ul>
							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'report',
									'term' => 'cortina',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'report',
									'term' => 'hakunori',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'report',
									'term' => 'tsugaike',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'report',
									'term' => 'iwatake',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'report',
									'term' => 'happo',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'report',
									'term' => 'goryu47',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'report',
									'term' => 'sanosaka',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>

							<!-- <?php global $post;
								$args = array(
									'post_type' => 'skireport',
									'taxonomy' => 'report',
									'term' => 'kashimayari',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?> -->

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'numberposts' => 1,
									'tax_query' => array(
										array(
											'taxonomy' => 'report',
											'field' => 'slug',
											'terms' => array('jiigatake','other')
										)
									)
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php endif; ?>
							</ul>
						</div><!--//白馬エリアここまで -->

						<h3 class="area_ttl ac_ttl">妙高＆北信<span class="viga">MYOKO & HOKUSHIN</span></h3>
						<div class="ac_cnt">
							<ul>
							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'akakura',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>akakura/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'madarao',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>madarao/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'kurohime',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>kurohime/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'togari',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>togari/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'shiga',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>shiga/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'nozawaonsen',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>nozawaonsen/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'ryuo',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>ryuo/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'other_mh',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span>その他</span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>other_mh/準備中</li> -->
							<?php endif; ?>
							</ul>
						</div><!--//妙高&北信エリアここまで -->

						<h3 class="area_ttl ac_ttl">東信＆中央道<span class="viga">TOHSHIN & CHUODO</span></h3>
						<div class="ac_cnt">
							<ul>
							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'sugadaira',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>sugadaira/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'ninja',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>ninja/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'nomugitouge',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>nomugitouge/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'ontake2240',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>ontake2240/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'kurumayama',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>kurumayama/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'fujimipanorama',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'report');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>fujimipanorama/準備中</li> -->
							<?php endif; ?>

							<?php global $post;
								$args = array(
									'post_type' => 'skireport',
									//'post_status' => array('publish','draft'),
									'taxonomy' => 'report',
									'term' => 'other_tc',
									'numberposts' => 1
								);
								$myposts = get_posts($args); ?>
								<?php if($myposts): ?>
								<?php foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li><a href="<?php the_permalink(); ?>">
									<p class="tag"><span>その他</span></p>
									<p class="photo"><?php echo get_custom_img('ski_img', 'ski_s'); ?></p>
									<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
									<h5><?php the_title(); ?></h5>
								</a></li>
							<?php endforeach; ?>
							<?php else : ?>
								<!-- <li>other_tc/準備中</li> -->
							<?php endif; ?>
							</ul>
						</div><!--//東信＆中央道エリアここまで -->

						<!-- <p class="sp repoBtn"><a href="<?php echo home_url(); ?>/skireport/" class="btn_item">ゲレンデレポート一覧<i class="fa fa-chevron-right"></i></a></p> -->
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
									'taxonomy' => 'trekking',
									'term' => 'happo',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink(); ?>">白馬八方尾根
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'tsugaike',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink(); ?>">栂池高原
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'goryu',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink(); ?>">白馬五竜
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'iwatake',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink(); ?>">白馬岩岳
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'mount',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink(); ?>">登山
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'tourism',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink(); ?>">観光＆アウトドア
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'sugadaira',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink(); ?>">菅平高原
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'outdoor',
									'numberposts' => 1
								);
								$myposts = get_posts($args);
								foreach ($myposts as $post) :  setup_postdata($post); ?>
									<a href="<?php the_permalink(); ?>">アウトドア
										<span><?php the_field("ski_snow_top", $post->ID); ?></span>
									</a>
								<?php endforeach; ?>
							</li>
						</ul>

						<div class="btm30">
							<a href="<?php echo home_url(); ?>/skireport/" class="btn_item">ゲレンデレポート一覧<i class="fa fa-chevron-right"></i></a>
							<a href="<?php echo home_url(); ?>/trekkingreport/" class="btn_item">トレッキングレポート一覧<i class="fa fa-chevron-right"></i></a>
							<a href="<?php echo home_url(); ?>/trekking/facility/" class="btn_item">コロナ対策施設レポート一覧<i class="fa fa-chevron-right"></i></a>
						</div><!--//.btm30 -->

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
								<?php if (get_field("top_repo_01") != "") { ?><li><a href="<?php the_field("top_re_link_01", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_01', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_02") != "") { ?><li><a href="<?php the_field("top_re_link_02", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_02', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_03") != "") { ?><li><a href="<?php the_field("top_re_link_03", $post->ID); ?>" target="_blank"><?php echo get_custom_img('top_repo_03', 'Bn_top02'); ?></a></li><?php } ?>
								<?php if (get_field("top_repo_04") != "") { ?><li><a href="<?php the_field("top_re_link_04", $post->ID); ?>" target="_self"><?php echo get_custom_img('top_repo_04', 'Bn_top02'); ?></a></li><?php } ?>
							<?php endforeach; ?>
						</ul><!--//.sidebn -->
					</div><!--//.sidenav summer -->

					<div class="enBox">
						<ul class="pc">
							<?php global $post;
							$args = array(
								'post_type' => 'trekkingreport',
								'numberposts' => 16,
								'tax_query' => array(
									array(
										'taxonomy' => 'trekking',
										'field' => 'slug', //ターム名をスラッグで指定する
										'operator' => 'IN',
										'terms' => array('outdoor', 'tsugaike', 'mount', 'goryu', 'happo', 'iwatake', 'tourism','sugadaira'), //表示したいタームをスラッグで指定
									)
								)

							);
							$myposts = get_posts($args);
							foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink(); ?>">
										<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'trekking');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
										<p class="photo"><?php echo get_custom_img('tra_img', 'ski_s'); ?></p>
										<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
										<h5><?php the_title(); ?></h5>
									</a>
								</li>
							<?php endforeach; ?>
						</ul><!--//.pc -->

						<ul class="sp">
							<?php global $post;
							$args = array(
								'post_type' => 'trekkingreport',
								'numberposts' => 8,
								'tax_query' => array(
									array(
										'taxonomy' => 'trekking',
										'field' => 'slug', //ターム名をスラッグで指定する
										'operator' => 'IN',
										'terms' => array('outdoor', 'tsugaike', 'mount', 'goryu', 'happo', 'iwatake', 'tourism','sugadaira'), //表示したいタームをスラッグで指定
									)
								)
							);
							$myposts = get_posts($args);
							foreach ($myposts as $post) :  setup_postdata($post); ?>
								<li>
									<a href="<?php the_permalink(); ?>">
										<p class="tag"><span><?php $terms = wp_get_object_terms($post->ID, 'trekking');foreach ($terms as $term) {echo $term->name . ' ';} ?></span></p>
										<p class="photo"><?php echo get_custom_img('tra_img', 'ski_s'); ?></p>
										<p class="time"><?php echo get_post_time('Y.m.d'); ?></p>
										<h5><?php the_title(); ?></h5>
									</a>
								</li>
							<?php endforeach; ?>
						</ul><!--//.sp -->

						<!-- <p class="sp repoBtn"><a href="<?php echo home_url(); ?>/trekkingreport/" class="btn_item sp">
						トレッキングレポート一覧<i class="fa fa-chevron-right"></i></a></p>
						<p class="sp repoBtn"><a href="<?php echo home_url(); ?>/trekking/facility/" class="btn_item sp">
						コロナ対策施設レポート一覧<i class="fa fa-chevron-right"></i></a></p> -->

					</div><!--//.enBox -->
				</div><!--//.content_wrap -->

			</div><!--//#reportBox -->
			<!-- REPORTここまで -->

		</div>
		<!-- /#content -->
		<?php get_footer(); ?>
