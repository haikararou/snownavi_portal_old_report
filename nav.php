<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70847490-1', 'auto');
  ga('send', 'pageview');

</script>
	<div id="spHead">
	<h1><a href="/"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo_w.svg" alt="白馬のスキー場、登山、観光、宿泊ならスノーナビ"/></a></h1>
			<div id="dl-menu" class="dl-menuwrapper">
				<button class="dl-trigger">Open Menu</button>
				<ul class="dl-menu">
					<li>
						<a href="/en/">English</a>
					</li>
					<li>
						<a href="<?php echo home_url();?>/skireport/">REPORT<span>レポート</span></a>
						<ul class="dl-submenu">
							<li><a href="<?php echo home_url();?>/skireport/">SKI AREAS<span>ゲレンデレポート</span></a>
								<ul class="dl-submenu">
					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'kashimayari',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">鹿島槍<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>
					<!-- <?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'yanaba',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">ヤナバ<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?> -->

					<!-- <?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'sanosaka',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">さのさか<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?> -->

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'goryu47',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">五竜・47<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'happo',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">八方<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'iwatake',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">岩岳<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'tsugaike',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">栂池<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'hakunori',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">白馬乗鞍<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'cortina',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">コルチナ<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'jiigatake',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">爺ガ岳<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'other',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">その他エリア<?php if (get_field("navi_gelande_name") != "") { ?><span class="navi_gelande_name">（<?php the_field("navi_gelande_name", $post->ID); ?>）</span><?php } ?>
					<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'akakura',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">赤倉観光<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'madarao',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">斑尾高原<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'kurohime',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">黒姫高原<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'togari',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">戸狩温泉<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'nozawaonsen',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">野沢温泉<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'ryuo',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">竜王<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'shiga',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">志賀高原<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'other_mh',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">その他エリア<?php if (get_field("navi_gelande_name") != "") { ?><span class="navi_gelande_name">（<?php the_field("navi_gelande_name", $post->ID); ?>）</span><?php } ?>
					<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'sugadaira',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">菅平高原<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'ninja',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">ニンジャ<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'nomugitouge',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">野麦峠<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

					<?php global $post;
					$args = array(
						'post_type' => 'skireport',
						'taxonomy' => 'report',
						'term' => 'other_tc',
						'numberposts' => 1
					);
					$myposts = get_posts( $args );
					foreach( $myposts as $post ) :  setup_postdata($post);?>
					<li><a href="<?php the_permalink(); ?>">その他エリア<?php if (get_field("navi_gelande_name") != "") { ?><span class="navi_gelande_name">（<?php the_field("navi_gelande_name", $post->ID); ?>）</span><?php } ?>
					<span>SKI REPORT</span></a></li>
					<?php endforeach; ?><?php wp_reset_query() ?>

								</ul>
							</li>
							<li><a href="<?php echo home_url();?>/trekkingreport/">TREKKING AREAS<span>トレッキングレポート</span></a>
								<ul class="dl-submenu">
									<li><a href="<?php echo home_url();?>/trekking/happo/">八方<span>TREKKING REPORT</span></a></li>
									<li><a href="<?php echo home_url();?>/trekking/tsugaike/">栂池<span>TREKKING REPORT</span></a></li>
									<li><a href="<?php echo home_url();?>/trekking/goryu/">五竜<span>TREKKING REPORT</span></a></li>
									<li><a href="<?php echo home_url();?>/trekking/iwatake/">岩岳<span>TREKKING REPORT</span></a></li>
									<li><a href="<?php echo home_url();?>/trekking/mount/">登山<span>TREKKING REPORT</span></a></li>
									<li><a href="<?php echo home_url();?>/trekking/tourism/">観光<span>TREKKING REPORT</span></a></li>
									<li><a href="<?php echo home_url();?>/trekking/outdoor/">アウトドア<span>TREKKING REPORT</span></a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href="https://snownavi.co.jp/">ADVANCE TICKET<span>早割リフト券</span></a>
					</li>
					<li>
						<a href="https://snownavi.shop/">DIGITAL TICKET<span>電子チケット</span></a>
					</li>
				</ul>
			</div>
		</div><!-- /スマホ用ヘッダー -->
		<div id="header" class="clearfix">
			<div class="black">
				<p><a href="/en/" target="_blank">English</a> | <a href="https://www.snownavi.co.jp/lift.php" target="_blank">Advance Ticket</a> | <a href="https://snownavi.shop/" target="_blank">Digital Ticket</a> |  <a href="https://www.snownavi.co.jp/coupon/" target="_blank">Coupon</a> | <a href="mailto:info@snownavi.com">E-mail</a></p>
			</div>
			<div class="box">
			<h1><a href="/"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" alt="白馬のスキー場、登山、観光、宿泊ならスノーナビ" width="157"/></a></h1>
			<ul id="nav">
				<li><a>REPORT</a>
					<div class="clearfix">
						<!--スキーレポートここから-->
						<h3>SKI AREAS</h3>
						<ul>
							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'kashimayari',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">鹿島槍</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>
							<!-- <?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'yanaba',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">ヤナバ</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?> -->

							<!-- <?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'sanosaka',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">さのさか</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?> -->

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'goryu47',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">五竜・47</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'happo',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">八方</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'iwatake',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">岩岳</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'tsugaike',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">栂池</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'hakunori',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">白馬乗鞍</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'cortina',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">コルチナ</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'jiigatake',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">爺ガ岳</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'other',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">その他エリア
							<?php if (get_field("navi_gelande_name") != "") { ?><span class="navi_gelande_name">（<?php the_field("navi_gelande_name", $post->ID); ?>）</span><?php } ?>
						</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'akakura',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">赤倉観光</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'madarao',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">斑尾高原</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'kurohime',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">黒姫高原</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'togari',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">戸狩温泉</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'nozawaonsen',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">野沢温泉</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'ryuo',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">竜王</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'shiga',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">志賀高原</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'other_mh',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">その他エリア
							<?php if (get_field("navi_gelande_name") != "") { ?><span class="navi_gelande_name">（<?php the_field("navi_gelande_name", $post->ID); ?>）</span><?php } ?>
						</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'sugadaira',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">菅平高原</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'ninja',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">ニンジャ</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'nomugitouge',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">野麦峠</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'report',
								'term' => 'other_tc',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php the_permalink(); ?>">その他エリア
							<?php if (get_field("navi_gelande_name") != "") { ?><span class="navi_gelande_name">（<?php the_field("navi_gelande_name", $post->ID); ?>）</span><?php } ?>
						</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

						</ul>
						<!--スキーレポートここまで-->
						<!--トレッキングレポートここから-->
						<!--<h3>TREKKING AREAS</h3>
						<ul>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'happo',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php the_permalink();?>">八方
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'tsugaike',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php the_permalink();?>">栂池
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'goryu',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php the_permalink();?>">五竜
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'iwatake',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php the_permalink();?>">岩岳
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'tourism',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php the_permalink();?>">観光＆アウトドア
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>

							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'mount',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php the_permalink();?>">登山
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'trekking',
									'term' => 'outdoor',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php the_permalink();?>">アウトドア
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
						</ul>-->
						<!--トレッキングレポートここまで-->
						<p>
							<a class="btn" href="<?php echo home_url();?>/skireport/">ゲレンデレポート一覧<i class="fa fa-chevron-right"></i></a>
							<a class="btn" href="<?php echo home_url();?>/trekkingreport/">トレッキングレポート一覧<i class="fa fa-chevron-right"></i></a>
						</p>
					</div>
				</li>
				<li class="sns"><a href="https://twitter.com/snownavi" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/img/btn_tw.gif" alt="twitter"/></a></li>
				<li class="sns"><a href="https://www.facebook.com/snownavijp" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/img/btn_fb.gif" alt="facebook"/></a></li>
				<li class="sns"><a href="https://www.instagram.com/snownavi/" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/img/btn_insta.png" alt="Instagram"/></a></li>
			</ul>
			</div>
		</div>
