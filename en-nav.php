<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-70847490-1', 'auto');
  ga('send', 'pageview');

</script>
			<div id="spHead">
			<h1><a href="<?php echo home_url();?>/en"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo_w.svg" alt="白馬のスキー場、登山、観光、宿泊ならスノーナビ"/></a></h1>
					<div id="dl-menu" class="dl-menuwrapper">
						<button class="dl-trigger">Open Menu</button>
						<ul class="dl-menu">
							<li>
								<a href="<?php echo home_url();?>">Japanese</span></a>
							</li>
							<li>
								<a href="<?php echo home_url();?>/skireport/?lang=en">REPORT</a>
								<ul class="dl-submenu">
									<li><a href="<?php echo home_url();?>/skireport/?lang=en">SKI AREAS</a>
										<ul class="dl-submenu">
										
							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'enskireport',
								'term' => 'happo',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">Happo<span>SKI REPORT</span></a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>
										
							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'enskireport',
								'term' => 'iwatake',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">Iwatake<span>SKI REPORT</span></a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>
							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'enskireport',
								'term' => 'tsugaike',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">Tsugaike<span>SKI REPORT</span></a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>

<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'enskireport', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => 'en_other',//表示したいタームをスラッグで指定
            ),
            array(
                'taxonomy' => 'enskireport', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array('happo','iwatake','tsugaike'), //表示したいタームをスラッグで指定
				'operator' => 'NOT IN'//特定のタームを除外
            ),
        ),
        'post_type' => 'skireport', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>								
							
							<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">Other Area<span>SKI REPORT</span></a></li>
							<?php endwhile; endif; ?><?php wp_reset_query() ?>
										</ul>
									</li>
									<li><a href="<?php echo home_url();?>/skireport/?lang=en">TREKKING AREAS</a>
										<ul class="dl-submenu">
											<li><a href="<?php echo home_url();?>/entrekking/happo/?lang=en">Happo<span>TREKKING REPORT</span></a></li>
											<li><a href="<?php echo home_url();?>/entrekking/tsugaike/?lang=en">Tsugaike<span>TREKKING REPORT</span></a></li>
											<li><a href="<?php echo home_url();?>/entrekking/goryu/?lang=en">Goryu47<span>TREKKING REPORT</span></a></li>
											<li><a href="<?php echo home_url();?>/entrekking/iwatake/?lang=en">Iwatake<span>TREKKING REPORT</span></a></li>
											<li><a href="<?php echo home_url();?>/entrekking/mount/?lang=en">mount<span>TREKKING REPORT</span></a></li>
											<li><a href="<?php echo home_url();?>/entrekking/tourism/?lang=en">tourism<span>TREKKING REPORT</span></a></li>
											<li><a href="<?php echo home_url();?>/entrekking/outdoor/?lang=en">outdoor<span>TREKKING REPORT</span></a></li>
										</ul>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">STAY What’s New</a>
								<ul class="dl-submenu">
									<li><a href="<?php echo home_url();?>/ennews/en-stay/">What’ New</a></li>
									<li><a href="<?php echo home_url();?>/tokusen/">Characteristic Choice Hotel</a></li>
									
									<li><a href="">STAY AREAS</a>
										<ul class="dl-submenu">
											<li><a href="<?php echo home_url();?>/stay/omachi/?lang=en">Omachi<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/kashimayari/?lang=en">Kashimayari<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/sanosaka/?lang=en">Sanosaka<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/goryu47/?lang=en">Goryu47<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/misorano/?lang=en">Echoland<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/hakuba/?lang=en">Hakuba Sta.<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/happo/?lang=en">Happo<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/iwatake/?lang=en">Iwatake<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/tsugaike/?lang=en">Tsugaike<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/hakunori/?lang=en">Hakunori<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/cortina/?lang=en">Cortina<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/kurohime/?lang=en">Kurohime<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/sugadaira/?lang=en">Sugadaira<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/shiga/?lang=en">Sugadaira<span>STAY</span></a></li>
											<li><a href="<?php echo home_url();?>/stay/nozawa/?lang=en">Sugadaira<span>STAY</span></a></li>
											<!-- <li><a href="<?php echo home_url();?>/stay/other/?lang=en">Other Areas<span>STAY</span></a></li> -->
										</ul>
									</li>
									
								</ul>
							</li>
							<li>
								<a href="#">SHOPPING &amp; RESTAURANT</a>
								<ul class="dl-submenu">
									<li><a href="<?php echo home_url();?>/ennews/en-eat/">What’s New</a></li>
									<li><a href="<?php echo home_url();?>/restaurant/?lang=en">Recommended Restaurant</a></li>
									<li><a href="<?php echo home_url();?>/job/?lang=en">Recruitment</a></li>
									<li><a href="<?php echo home_url();?>/enonsen/">Onsen (Hot Spring)</a></li>
									
									<li><a href="#">AREAS<span>SHOPPING &amp; RESRAURANT</span></a>
										<ul class="dl-submenu">
											<li><a href="<?php echo home_url();?>/after/omachi/?lang=en">Omachi<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/kashimayari/?lang=en">Kashimayari<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/sanosaka/?lang=en">Sanosaka<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/goryu47/?lang=en">Goryu47<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/misorano/?lang=en">Echoland<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/hakuba/?lang=en">Hakuba Sta.<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/happo/?lang=en">Happo<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/iwatake/?lang=en">Iwatake<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/tsugaike/?lang=en">Tsugaike<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/hakunori/?lang=en">Hakunori<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/cortina/?lang=en">Cortina<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/kitaotari/?lang=en">Kita Otari<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/shiga/?lang=en">Kita Otari<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/nozawa/?lang=en">Kita Otari<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<li><a href="<?php echo home_url();?>/after/otherareas/?lang=en">Matsumoto<span>SHOPPING &amp; RESRAURANT</span></a></li>
											<!-- <li><a href="<?php echo home_url();?>/after/hokushin/?lang=en">Other Areas<span>SHOPPING &amp; RESRAURANT</span></a></li> -->
										</ul>
									</li>
									
								</ul>
							</li>
							<li>
								<a href="#">MAP</a>
								<ul class="dl-submenu">
									<li><a href="<?php echo home_url();?>/map/jiigatake/?lang=en">Jiigatake<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/kashimayari/?lang=en">Kashimayari<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/sanosaka/?lang=en">Sanosaka<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/goryu47/?lang=en">Goryu47<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/misorano/?lang=en">Echoland<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/hakuba/?lang=en">Hakuba<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/happo/?lang=en">Happo<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/iwatake/?lang=en">Iwatake<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/tsugaike/?lang=en">Tsugaike<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/hakunori/?lang=en">Hakunori<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/cortina/?lang=en">Cortina<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/kitaotari/?lang=en">Kita Otari<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/matsumoto/?lang=en">Matsumoto<span>MAP</span></a></li>
									<li><a href="<?php echo home_url();?>/map/hokushin/?lang=en">Other Areas<span>MAP</span></a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div><!-- /スマホ用ヘッダー -->
	
	
	
		<div id="header" class="clearfix">
			<div class="black">
				<p><a href="<?php echo home_url();?>" target="_blank">Japanese</a> | <a href="https://www.snownavi.co.jp/en/" target="_blank">Advance Ticket</a> | <a href="https://www.snownavi.co.jp/en/" target="_blank">Coupon</a> | <a href="https://www.yahoo.com/news/weather/japan/nagano-prefecture/hakuba-mura-26256330" target="_blank">Weather</a> | <a href="http://www.hakubavalley.jp/livecam/" target="_blank">Webcams</a> | <a href="<?php echo home_url();?>/job/?lang=en">Jobs</a> | <a href="mailto:info@snownavi.com">E-mail</a></p>
			</div>
			<div class="box">
			<h1><a href="<?php echo home_url();?>/en"><img src="<?php bloginfo( 'template_directory' ); ?>/img/logo.png" alt="白馬のスキー場、登山、観光、宿泊ならスノーナビ" width="157"/></a></h1>
			<ul id="nav">
				<li><a>REPORT</a>
					<div class="clearfix">
						
						<!--ゲレンデレポート -->
						<h3>SKI AREAS</h3>
						<ul>
							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'enskireport',
								'term' => 'happo',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">Happo</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>
										
							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'enskireport',
								'term' => 'iwatake',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">Iwatake</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>
										
							<?php global $post;
							$args = array(
								'post_type' => 'skireport',
								'taxonomy' => 'enskireport',
								'term' => 'tsugaike',
								'numberposts' => 1
							);
							$myposts = get_posts( $args );
							foreach( $myposts as $post ) :  setup_postdata($post);?>
							<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">Tsugaike</a></li>
							<?php endforeach; ?><?php wp_reset_query() ?>
							
<?php
    $args=array(
        'tax_query' => array( 
            array(
                'taxonomy' => 'enskireport', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => 'en_other',//表示したいタームをスラッグで指定
            ),
            array(
                'taxonomy' => 'enskireport', //タクソノミーを指定
                'field' => 'slug', //ターム名をスラッグで指定する
                'terms' => array('happo','iwatake','tsugaike'), //表示したいタームをスラッグで指定
				'operator' => 'NOT IN'//特定のタームを除外
            ),
        ),
        'post_type' => 'skireport', //カスタム投稿名
        'posts_per_page'=> 1 //表示件数（-1で全ての記事を表示）
    );
 ?>
<?php query_posts( $args ); ?>
<?php if(have_posts()): ?>
<?php while(have_posts()):the_post(); ?>								
							
							<li><a href="<?php echo the_permalink();echo "?lang=en"; ?>">Other Area</a></li>
							<?php endwhile; endif; ?><?php wp_reset_query() ?>
										
						</ul>
						<!--// ゲレンデレポート -->
						<!--トレッキングレポート-->
						<!--<h3>TREKKING AREAS</h3>
						<ul>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'happo',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php echo the_permalink();echo "?lang=en"; ?>">Happo
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'tsugaike',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php echo the_permalink();echo "?lang=en"; ?>">Tsugaike
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
							<!--<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'goryu',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php the_permalink();?>">Goryu
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>-->
							<!--<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'iwatake',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php echo the_permalink();echo "?lang=en"; ?>">Iwatake
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>-->
							<!--<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'mount',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php echo the_permalink();echo "?lang=en"; ?>">Mount
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>-->
							<!--<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'tourism',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php echo the_permalink();echo "?lang=en"; ?>">Tourism
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
							<li>
								<?php global $post;
								$args = array(
									'post_type' => 'trekkingreport',
									'taxonomy' => 'entrekking',
									'term' => 'outdoor',
									'numberposts' => 1
								);
								$myposts = get_posts( $args );
								foreach( $myposts as $post ) :  setup_postdata($post);?>
								<a href="<?php echo the_permalink();echo "?lang=en"; ?>">Outdoor
								<span><?php the_field("ski_snow_top", $post->ID); ?></span>
								</a>
								<?php endforeach; ?><?php wp_reset_query() ?>
							</li>
						</ul>-->
						<!-- //トレッキングレポート -->
						<p><a class="btn" href="<?php echo home_url();?>/enskireport/en/">Ski Area Report<i class="fa fa-chevron-right"></i></a><a class="btn" href="<?php echo home_url();?>/entrekking/en/">Trekking Report<i class="fa fa-chevron-right"></i></a></p>
					</div>
				</li>
				<li><a>TOPICS</a>
					<div class="s">
						<ul>
							<li><a href="<?php echo home_url();?>/ennews/en-news/">NEWS</a></li>
							<li><a href="<?php echo home_url();?>/ennews/en-stay/">STAY What’s New</a></li>
							<li><a href="<?php echo home_url();?>/ennews/en-eat/">SHOPPING &amp; RESTAURANT What’s New</a></li>
						</ul>
					</div>
				</li>
				<li><a>STAY</a>
					<div class="clearfix">
					
						<h3>AREAS</h3>
						<ul>
							<li><a href="<?php echo home_url();?>/stay/omachi/?lang=en">Omachi</a></li>
							<li><a href="<?php echo home_url();?>/stay/kashimayari/?lang=en">Kashimayari</a></li>
							<li><a href="<?php echo home_url();?>/stay/sanosaka/?lang=en">Sanosaka</a></li>
							<li><a href="<?php echo home_url();?>/stay/goryu47/?lang=en">Goryu47</a></li>
							<li><a href="<?php echo home_url();?>/stay/misorano/?lang=en">Echoland</a></li>
							<li><a href="<?php echo home_url();?>/stay/hakuba/?lang=en">Hakuba Sta.</a></li>
							<li><a href="<?php echo home_url();?>/stay/happo/?lang=en">Happo</a></li>
							<li><a href="<?php echo home_url();?>/stay/iwatake/?lang=en">Iwatake</a></li>
							<li><a href="<?php echo home_url();?>/stay/tsugaike/?lang=en">Tsugaike</a></li>
							<li><a href="<?php echo home_url();?>/stay/hakunori/?lang=en">Hakunori</a></li>
							<li><a href="<?php echo home_url();?>/stay/cortina/?lang=en">Cortina</a></li>
							<li><a href="<?php echo home_url();?>/stay/kurohime/?lang=en">Kurohime</a></li>
							<li><a href="<?php echo home_url();?>/stay/sugadaira/?lang=en">Sugadaira</a></li>
							<li><a href="<?php echo home_url();?>/stay/shiga/?lang=en">Shiga</a></li>
							<li><a href="<?php echo home_url();?>/stay/nozawa/?lang=en">Nozawa</a></li>
							<!-- <li><a href="<?php echo home_url();?>/stay/other/?lang=en">Other Areas</a></li> -->
						</ul>
						
						<p><a class="btn" href="<?php echo home_url();?>/ennews/en-stay/">What’ New<i class="fa fa-chevron-right"></i></a><a class="btn" href="<?php echo home_url();?>/tokusen/?lang=en">Characteristic Choice Hotel<i class="fa fa-chevron-right"></i></a></p>
					</div>
				</li>
				<li><a>SHOPPING &amp; RESTAURANT</a>
					<div class="clearfix">
					
						<h3>AREAS</h3>
						<ul>
							<li><a href="<?php echo home_url();?>/after/omachi/?lang=en">Omachi</a></li>
							<li><a href="<?php echo home_url();?>/after/kashimayari/?lang=en">Kashimayari</a></li>
							<li><a href="<?php echo home_url();?>/after/sanosaka/?lang=en">Sanosaka</a></li>
							<li><a href="<?php echo home_url();?>/after/goryu47/?lang=en">Goryu47</a></li>
							<li><a href="<?php echo home_url();?>/after/misorano/?lang=en">Echoland</a></li>
							<li><a href="<?php echo home_url();?>/after/hakuba/?lang=en">Hakuba Sta.</a></li>
							<li><a href="<?php echo home_url();?>/after/happo/?lang=en">Happo</a></li>
							<li><a href="<?php echo home_url();?>/after/iwatake/?lang=en">Iwatake</a></li>
							<li><a href="<?php echo home_url();?>/after/tsugaike/?lang=en">Tsugaike</a></li>
							<li><a href="<?php echo home_url();?>/after/hakunori/?lang=en">Hakunori</a></li>
							<li><a href="<?php echo home_url();?>/after/cortina/?lang=en">Cortina</a></li>
							<li><a href="<?php echo home_url();?>/after/kitaotari/?lang=en">Kita Otari</a></li>
							<li><a href="<?php echo home_url();?>/after/otherareas/?lang=en">Matsumoto</a></li>
							<li><a href="<?php echo home_url();?>/after/shiga/?lang=en">Shiga</a></li>
							<li><a href="<?php echo home_url();?>/after/nozawa/?lang=en">Nozawa</a></li>
							<!-- <li><a href="<?php echo home_url();?>/after/hokushin/?lang=en">Other Areas</a></li> -->
						</ul>
					
						<p><a class="btn" href="<?php echo home_url();?>/ennews/en-eat/">What’s New<i class="fa fa-chevron-right"></i></a><a class="btn" href="<?php echo home_url();?>/restaurant/?lang=en">Recommended Restaurant<i class="fa fa-chevron-right"></i></a></p>
						<p><a class="btn" href="<?php echo home_url();?>/job/?lang=en">Recruitment<i class="fa fa-chevron-right"></i></a><a class="btn" href="<?php echo home_url();?>/enonsen/">Onsen (Hot Spring)<i class="fa fa-chevron-right"></i></a></p>
					</div>
				</li>
				<li><a>MAP</a>
					<div class="clearfix map">
						<h3>AREAS</h3>
						<ul>
							<li><a href="<?php echo home_url();?>/map/jiigatake/?lang=en">Jiigatake</a></li>
							<li><a href="<?php echo home_url();?>/map/kashimayari/?lang=en">Kashimayari</a></li>
							<li><a href="<?php echo home_url();?>/map/sanosaka/?lang=en">Sanosaka</a></li>
							<li><a href="<?php echo home_url();?>/map/goryu47/?lang=en">Goryu47</a></li>
							<li><a href="<?php echo home_url();?>/map/misorano/?lang=en">Echoland</a></li>
							<li><a href="<?php echo home_url();?>/map/hakuba/?lang=en">Hakuba</a></li>
							<li><a href="<?php echo home_url();?>/map/happo/?lang=en">Happo</a></li>
							<li><a href="<?php echo home_url();?>/map/iwatake/?lang=en">Iwatake</a></li>
							<li><a href="<?php echo home_url();?>/map/tsugaike/?lang=en">Tsugaike</a></li>
							<li><a href="<?php echo home_url();?>/map/hakunori/?lang=en">Hakunori</a></li>
							<li><a href="<?php echo home_url();?>/map/cortina/?lang=en">Cortina</a></li>
							<li><a href="<?php echo home_url();?>/map/kitaotari/?lang=en">Kita Otari</a></li>
							<li><a href="<?php echo home_url();?>/map/matsumoto/?lang=en">Matsumoto</a></li>
							<li><a href="<?php echo home_url();?>/map/hokushin/?lang=en">Other Areas</a></li>
						</ul>
					</div>
				</li>
				<li class="sns"><a href="https://twitter.com/snownavi" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/img/btn_tw.gif" alt="twitter"/></a></li>
				<li class="sns"><a href="https://www.facebook.com/snownavijp" target="_blank"><img src="<?php bloginfo( 'template_directory' ); ?>/img/btn_fb.gif" alt="facebook"/></a></li>
			</ul>
			</div>
		</div>
