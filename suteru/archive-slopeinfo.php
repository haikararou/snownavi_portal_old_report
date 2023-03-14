<?php
$post_slug = get_post_type(); //投稿タイプのスラッグを取得
$post_url = get_post_type_archive_link( $post_slug ); //アーカイブリンク取得
$post_label = get_post_type_object( $post_slug )->label; //投稿タイプ名を取得
$post_name = get_post_type_object( $post_slug )->name; //投稿タイプ名を取得
$categories = get_the_category();

?>
<?php $lang = $_GET['lang']; ?>
<?php if ($lang=="en"): ?>
<!-- 英語版振り分け -->
<?php get_header('en'); ?>
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_directory' ); ?>/slider/jquery.bxslider.css">
<script src="<?php bloginfo( 'template_directory' ); ?>/slider/jquery.bxslider.js"></script>
<script>
jQuery(function(){
	jQuery('.page-slider').bxSlider({
    auto: true,
    autoControls: true,
		speed: 4000,
		pager: false,
		controls: false,
    //minSlides: 5,
    //maxSlides: 5,
    //moveSlides: 1,
		randomStart: true,
	});
});
</script>
</head>
<body id="sub" class="slopeinfo en">
<div id="container">
<?php get_template_part( 'en','nav' ); ?>
		<!-- /#header -->
	<div id="topArea">        
		<!-- <div class="wideslider">
			<ul>
<?php if (get_field("mv01", 45695) || get_field("mv02", 45695) || get_field("mv03", 45695) || get_field("mv04", 45695) || get_field("mv05", 45695) ) : ?>			
      <?php if (get_field("mv01", 45695) != ""){ ?>
				<li>
        <a href="<?php the_field("mv_l_01", 45695); ?><?php if( in_array( 'blank01', get_field('blank_link01') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_01", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_01", 45695); ?></h2>
						<?php if (get_field("mv_c_01", 45695) != ""){ ?><?php the_field("mv_c_01", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv01", 45695); ?>" alt="<?php the_field("mv_t_01", 45695); ?>" />
			</a></li>
			<?php }?>
			
      <?php if (get_field("mv02", 45695) != ""){ ?>
				<li>
        <a href="<?php the_field("mv_l_02", 45695); ?><?php if( in_array( 'blank02', get_field('blank_link02') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_02", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_02", 45695); ?></h2>
						<?php if (get_field("mv_c_02", 45695) != ""){ ?><?php the_field("mv_c_02", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv02", 45695); ?>" alt="<?php the_field("mv_t_02", 45695); ?>" />
			</a></li>
			<?php }?>
        
      <?php if (get_field("mv03", 45695) != ""){ ?>
				<li>
        <a href="<?php the_field("mv_l_03", 45695); ?><?php if( in_array( 'blank03', get_field('blank_link03') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_03", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_03", 45695); ?></h2>
						<?php if (get_field("mv_c_03", 45695) != ""){ ?><?php the_field("mv_c_03", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv03", 45695); ?>" alt="<?php the_field("mv_t_03", 45695); ?>" />
			</a></li>
			<?php }?>
      <?php if (get_field("mv04", 45695) != ""){ ?>
				<li>
        <a href="<?php the_field("mv_l_04", 45695); ?><?php if( in_array( 'blank04', get_field('blank_link04') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_04", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_04", 45695); ?></h2>
						<?php if (get_field("mv_c_04", 45695) != ""){ ?><?php the_field("mv_c_04", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv04", 45695); ?>" alt="<?php the_field("mv_t_04", 45695); ?>" />
			</a></li>
			<?php }?>
        
      <?php if (get_field("mv05", 45695) != ""){ ?>
				<li>
        <a href="<?php the_field("mv_l_05", 45695); ?><?php if( in_array( 'blank05', get_field('blank_link05') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_05", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_05", 45695); ?></h2>
						<?php if (get_field("mv_c_05", 45695) != ""){ ?><?php the_field("mv_c_05", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv05", 45695); ?>" alt="<?php the_field("mv_t_05", 45695); ?>" />
			</a></li>
			<?php }?>
					<?php else: ?>					
			
				<li>
        <img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/mv01.png">
      </li>	
	<?php endif; ?>			
    </div> -->
	</div>
		<!-- /#topArea -->
	
	<div id="pageTitle">
		<h2>Snow Report</h2>
	</div>
		<!-- /#pageTitle -->
	
		<div id="content">
      <div id="punkuz"> <a href="<?php echo home_url();?>">HOME</a> > Snow Report</div>
      <!-- /#punkuz -->
			
<!--	<div id="pagemv">
    <img src="<?php bloginfo( 'template_directory' ); ?>/img/slopeinfo-pagetitle_en.jpg" alt="Snow Report" >		
	</div> -->
		<!-- /#pagemv -->
			<?php if( get_field('slopeinfo_notice_en', 45695) ) { ?>
      <div id="slopeinfo_notice">
				<?php the_field("slopeinfo_notice_en", 45695); ?>
        <!--<ul>
          <li>※毎朝7～10時に更新します。</li>
          <li>※積雪量と気温はスキー場公式発表値です。更新前には前日の値が表示されます。</li>
          <li>※運行予想と遅延理由は現地取材情報に公式発表情報を踏まえた独自のものです。</li>
          <li>※運行予想対象リフトはコルチナが第2クワッド、ハクノリが第5高速ペア、栂池・岩岳・八方・五竜47がゴンドラ、鹿島槍が第6クワッドとなります。</li>
          <li>※周辺道路は主要道からスキー場駐車場にかけての区間が対象です。</li>
        </ul>-->
      </div>
        <!-- /#slopeinfo_notice -->			
<?php }?>				
			
		<div class="main">			
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
    <div class="inBox slope-data">
      <div class="update-box">				
        <div class="update">
					<p>UPDATE</p>
					<p><span><?php echo get_post_time( 'Y.m.d,H:i' ); ?></span>
						<!-- <?php if (get_field("update_place_en") != ""){ ?><span><?php the_field("update_place_en"); ?></span><?php }?> --> </p>
				</div>
<?php if (get_field("gelande_closed_en") != ""){ ?>				
        <div class="update">
					<p>CLOSED FOR SEASON</p>
					<p><span><?php the_field("gelande_closed_en"); ?></span></p>
				</div>
<?php }?>				
				</div>
        <h3><span class="logo-gelande">
    <?php if (get_field("logo_gelande") != ""){ ?>
					<img src="<?php the_field("logo_gelande"); ?>" alt="<?php the_field("gelande_name_en"); ?>" style="width:80px;">					
					<?php } else { ?>					
					<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/logo.png" alt="Snownavi Hakuba - Ski Resort Information and Accommodation at HAKUBA Happo-one, Tsugaike and Goryu" >
        <?php }?>														
					</span>
					<span><?php the_field("gelande_name_en"); ?></span></h3>	
        <div class="column col04 icon-box">
					<div class="col-item">
            <h4>Depth</h4>
          <?php if (get_field("snow_top") != ""){ ?>						
						<p class="snow_top"><?php the_field("snow_top"); ?></p>
          <?php }?>						
					</div>
          <!--<div class="col-item">
            <h4>BASE</h4>
          <?php if (get_field("snow_base") != ""){ ?>												
						<p class="snow_base"><?php the_field("snow_base"); ?></p>
          <?php }?>												
					</div>-->
          <div class="col-item">
            <h4>24hr</h4>
          <?php if (get_field("snow_24h") != ""){ ?>																		
						<p class="snow_24h"><?php the_field("snow_24h"); ?></p>
          <?php }?>																		
					</div>
          <div class="col-item">
            <h4>Weather</h4>						
          <?php if (get_field("gelande_weather") != ""){ ?>		
<p class="gelande_weather">						
<?php
    $cat = get_field('gelande_weather');
    if ($cat == 'sun') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-sun.svg" alt="" >';
    } elseif ($cat == 'cloud') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-cloud.svg" alt="" >';
    } elseif ($cat == 'lightsnow') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-lightsnow.svg" alt="" >';
    } elseif ($cat == 'snow') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-snow.svg" alt="" >';
    } elseif ($cat == 'rain') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-rain.svg" alt="" >';
    } elseif ($cat == 'lightrain') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-lightrain.svg" alt="" >';
    } elseif ($cat == 'sleet') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-sleet.svg" alt="" >';
    } elseif ($cat == 'thunder') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-thunder.svg" alt="" >';
    } else {
    }
 ?>						
						</p>
          <?php }?>																		
					</div>
          <div class="col-item">
            <h4>Temp.</h4>												
          <?php if (get_field("gelande_temp") != ""){ ?>																		
						<p class="gelande_temp"><?php the_field("gelande_temp"); ?></p>
          <?php }?>																		
					</div>
      </div>
		<!-- // column -->			
        <div class="column col05 data-box">
					<div class="col-item">
            <h4>Snow Quality</h4>
          <?php if (get_field("snow_quality_en") != ""){ ?>						
						<p class="snow_quality">
						<?php
              $field = get_field_object('snow_quality_en');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo $label; // ラベルを表示
            ?></p>														
          <?php }?>						
					</div>
					<div class="col-item">
            <h4>Lift Operation</h4>
          <?php if (get_field("lift_operation_en") != ""){ ?>						
						<p class="lift_operation">
						<?php
              $field = get_field_object('lift_operation_en');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo $label; // ラベルを表示
            ?></p>							
          <?php }?>						
					</div>
					<div class="col-item">
            <h4>Delay Reason</h4>
          <?php if (get_field("lift_delay_reason_en") != ""){ ?>						
						<p class="lift_delay_reason">
							<?php
              $field = get_field_object('lift_delay_reason_en');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo $label; // ラベルを表示
            ?></p>							
          <?php }?>						
					</div>
					<div class="col-item">
            <h4>Road Condition</h4>
          <?php if (get_field("road_condition_en") != ""){ ?>						
						<p class="road_condition">
							<?php
              $field = get_field_object('road_condition_en');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo $label; // ラベルを表示
            ?></p>
          <?php }?>						
					</div>
          <div class="col-item">
            <h4>Wind Level</h4>
						<p class="wind">
          <?php
              $field = get_field_object('wind_en');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-wind-'.$value.'.svg" alt="" >'; // ラベルを表示
            ?>
						</p>
					</div>										
					
      </div>
		<!-- // column -->			
      <h3 class="backnumber-tit">NEW SNOW BACK NUMBER</h3>				
      <div class="column col04 backnumber-box">
					<div class="col-item day01">
          <?php if (get_field("day01_update_en") != ""){ ?><h4><?php the_field("day01_update_en"); ?></h4><?php }?>
          <?php if (get_field("day01_snow_en") != ""){ ?>						
						<p><?php the_field("day01_snow_en"); ?></p>
          <?php }?>						
					</div>				
					<div class="col-item day02">
					<?php if (get_field("day02_update_en") != ""){ ?><h4><?php the_field("day02_update_en"); ?></h4><?php }?>
          <?php if (get_field("day02_snow_en") != ""){ ?>						
						<p><?php the_field("day02_snow_en"); ?></p>
          <?php }?>						
					</div>				
					<div class="col-item day03">
					<?php if (get_field("day03_update_en") != ""){ ?><h4><?php the_field("day03_update_en"); ?></h4><?php }?>
          <?php if (get_field("day03_snow_en") != ""){ ?>						
						<p><?php the_field("day03_snow_en"); ?></p>
          <?php }?>						
					</div>				
					<div class="col-item day04">
					<?php if (get_field("day04_update_en") != ""){ ?><h4><?php the_field("day04_update_en"); ?></h4><?php }?>
          <?php if (get_field("day04_snow_en") != ""){ ?>						
						<p><?php the_field("day04_snow_en"); ?></p>
          <?php }?>						
					</div>				
      </div>
		<!-- // column -->			
        <?php if (get_field("livecamera_url") != ""){ ?>
				<a class="btn_item" href="<?php the_field("livecamera_url"); ?>" target="_blank">LIVE CAMERA<i class="fa fa-chevron-right"></i></a>
				<?php }?>
      
        <?php if (get_field("gelande_report_url_en") != ""){ ?>
         <a class="btn_item" href="<?php the_field("gelande_report_url_en"); ?>">
					Ski Area Report<i class="fa fa-chevron-right"></i></a>
        <?php }?>
      
			<!-- <?php if( has_term( array( 'happo', 'iwatake', 'tsugaike' ), 'report' ) ) { ?>
        <a class="btn_item" href="<?php echo home_url();?>/enskireport/<?php $term = wp_get_object_terms($post->ID,'report');$term_slug = $term[0]->slug;echo $term_slug; ?>/">
					Ski Area Report<i class="fa fa-chevron-right"></i></a>	
          <?php } else { ?>
        <a class="btn_item" href="<?php echo home_url();?>/enskireport/en_other/">
					Ski Area Report<i class="fa fa-chevron-right"></i></a>	
				<?php }?> -->
			
    </div>
		<!-- // inBox -->						
	<?php endwhile;endif; ?>
  <?php wp_reset_postdata(); ?>					
			
		<div class="side sp">			
<?php get_sidebar("slopeinfo_en"); ?>
		</div>
			
    <div id="local-banner">
      <div class="column col02">
    <?php if (get_field("bn_img01_en", 45695) != ""){ ?>				
        <div class="col-item">
					<?php if (get_field("link_bn_img01_en", 45695) != ""){ ?>
					<a href="<?php the_field("link_bn_img01_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("bn_img01_en", 45695); ?>"></div>
					<?php if (get_field("bn_txt01_en", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt01_en", 45695); ?></div><?php }?>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("bn_img01_en", 45695); ?>"></div>	
					<?php if (get_field("bn_txt01_en", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt01_en", 45695); ?></div><?php }?>					
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("bn_img02_en", 45695) != ""){ ?>				
        <div class="col-item">
					<?php if (get_field("link_bn_img02_en", 45695) != ""){ ?>
					<a href="<?php the_field("link_bn_img02_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("bn_img02_en", 45695); ?>"></div>
					<?php if (get_field("bn_txt02_en", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt02_en", 45695); ?></div><?php }?>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("bn_img02_en", 45695); ?>"></div>	
					<?php if (get_field("bn_txt02_en", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt02_en", 45695); ?></div><?php }?>					
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("bn_img03_en", 45695) != ""){ ?>				
        <div class="col-item">
					<?php if (get_field("link_bn_img03_en", 45695) != ""){ ?>
					<a href="<?php the_field("link_bn_img03_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("bn_img03_en", 45695); ?>"></div>
					<?php if (get_field("bn_txt03_en", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt03_en", 45695); ?></div><?php }?>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("bn_img03_en", 45695); ?>"></div>	
					<?php if (get_field("bn_txt03_en", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt03_en", 45695); ?></div><?php }?>					
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("bn_img04_en", 45695) != ""){ ?>				
        <div class="col-item">
					<?php if (get_field("link_bn_img04_en", 45695) != ""){ ?>
					<a href="<?php the_field("link_bn_img04_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("bn_img04_en", 45695); ?>"></div>
					<?php if (get_field("bn_txt04_en", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt04_en", 45695); ?></div><?php }?>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("bn_img04_en", 45695); ?>"></div>	
					<?php if (get_field("bn_txt04_en", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt04_en", 45695); ?></div><?php }?>					
        <?php }?>									
				</div>
      <?php }?>	
      </div>
		<!-- // column -->				
    </div>			
		<!-- // #local-banner -->
			
  </div>
  <!-- // main -->
		
		<div class="side pc">			
			<div class="side-item">
    <?php if (get_field("sidebn_top_01_en", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_01_en", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_01_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_01_en", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_01_en", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("sidebn_top_02_en", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_02_en", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_02_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_021_en", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_02_en", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	

    <?php if (get_field("sidebn_top_03_en", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_03_en", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_03_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_03_en", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_03_en", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("sidebn_top_04_en", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_04_en", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_04_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_04_en", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_04_en", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("sidebn_top_05_en", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_05_en", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_05_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_05_en", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_05_en", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("sidebn_top_06_en", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_06_en", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_06_en", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_06_en", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_06_en", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
			</div>
		</div>
			
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
	jQuery('.page-slider').bxSlider({
    auto: true,
    autoControls: true,
		speed: 4000,
		pager: false,
		controls: false,
    //minSlides: 5,
    //maxSlides: 5,
    //moveSlides: 1,
		randomStart: true,
	});
});
</script>
</head>
<body id="sub" class="slopeinfo">
<div id="container">
<?php get_template_part( 'nav' ); ?>
		<!-- /#header -->
	<div id="topArea">
		<!-- <div class="wideslider">
			<ul>
<?php if (get_field("mv01", 45695) || get_field("mv02", 45695) || get_field("mv03", 45695) || get_field("mv04", 45695) || get_field("mv05", 45695) ) : ?>			
      <?php if (get_field("mv01", 45695) != ""){ ?>
      <li>
        <a href="<?php the_field("mv_l_01", 45695); ?><?php if( in_array( 'blank01', get_field('blank_link01') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_01", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_01", 45695); ?></h2>
						<?php if (get_field("mv_c_01", 45695) != ""){ ?><?php the_field("mv_c_01", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv01", 45695); ?>" alt="<?php the_field("mv_t_01", 45695); ?>" />
			</a></li>
			<?php }?>
			
      <?php if (get_field("mv02", 45695) != ""){ ?>
      <li>
        <a href="<?php the_field("mv_l_02", 45695); ?><?php if( in_array( 'blank02', get_field('blank_link02') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_02", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_02", 45695); ?></h2>
						<?php if (get_field("mv_c_02", 45695) != ""){ ?><?php the_field("mv_c_02", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv02", 45695); ?>" alt="<?php the_field("mv_t_02", 45695); ?>" />
			</a></li>
			<?php }?>
        
      <?php if (get_field("mv03", 45695) != ""){ ?>
      <li>
        <a href="<?php the_field("mv_l_03", 45695); ?><?php if( in_array( 'blank03', get_field('blank_link03') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_03", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_03", 45695); ?></h2>
						<?php if (get_field("mv_c_03", 45695) != ""){ ?><?php the_field("mv_c_03", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv03", 45695); ?>" alt="<?php the_field("mv_t_03", 45695); ?>" />
			</a></li>
			<?php }?>
        
      <?php if (get_field("mv04", 45695) != ""){ ?>
      <li>
        <a href="<?php the_field("mv_l_04", 45695); ?><?php if( in_array( 'blank04', get_field('blank_link04') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_04", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_04", 45695); ?></h2>
						<?php if (get_field("mv_c_04", 45695) != ""){ ?><?php the_field("mv_c_04", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv04", 45695); ?>" alt="<?php the_field("mv_t_04", 45695); ?>" />
			</a></li>
			<?php }?>
        
      <?php if (get_field("mv05", 45695) != ""){ ?>
      <li>
        <a href="<?php the_field("mv_l_05", 45695); ?><?php if( in_array( 'blank05', get_field('blank_link05') ) ) {	echo '" target="_blank';}?>">
        <?php if (get_field("mv_t_05", 45695) != ""){ ?>
					<div class="text">
						<h2><?php the_field("mv_t_05", 45695); ?></h2>
						<?php if (get_field("mv_c_05", 45695) != ""){ ?><?php the_field("mv_c_05", 45695); ?><?php }?>
						<span>See Details<i class="fa fa-chevron-right"></i></span>
					</div>
					<?php }?>	
        <img src="<?php the_field("mv05", 45695); ?>" alt="<?php the_field("mv_t_05", 45695); ?>" />
			</a></li>
			<?php }?>
					<?php else: ?>					
			
      <li>
        <img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/mv01.png">
      </li>	
	<?php endif; ?>			
    </div> -->
	</div>
		<!-- /#topArea -->
	
	<div id="pageTitle">
		<h2>朝イチゲレンデ速報</h2>
	</div>
		<!-- /#pageTitle -->
	
		<div id="content">
      <div id="punkuz"> <a href="<?php echo home_url();?>">HOME</a> > 朝イチゲレンデ速報</div>
      <!-- /#punkuz -->
			
	
		<!-- /#pagemv -->
			<?php if (get_field("slopeinfo_notice", 45695) != ""){ ?>	
      <div id="slopeinfo_notice">
				<?php the_field("slopeinfo_notice", 45695); ?>				
        <!--<ul>
          <li>※毎朝7～10時に更新します。</li>
          <li>※積雪量と気温はスキー場公式発表値です。更新前には前日の値が表示されます。</li>
          <li>※運行予想と遅延理由は現地取材情報に公式発表情報を踏まえた独自のものです。</li>
          <li>※運行予想対象リフトはコルチナが第2クワッド、ハクノリが第5高速ペア、栂池・岩岳・八方・五竜47がゴンドラ、鹿島槍が第6クワッドとなります。</li>
          <li>※周辺道路は主要道からスキー場駐車場にかけての区間が対象です。</li>
        </ul>-->
      </div>
        <!-- /#slopeinfo_notice -->
<?php }?>				
			
		<div class="main">
		
		<?php if(have_posts()):while(have_posts()):the_post(); ?>
			<div class="inBox slope-data">
      <div class="update-box">				
        <div class="update">
					<p>UPDATE</p>
					<p><span><?php echo get_post_time( 'Y.m.d,H:i' ); ?></span>
						<!-- <?php if (get_field("update_place") != ""){ ?><span><?php the_field("update_place"); ?></span><?php }?> --> </p>
				</div>
<?php if (get_field("gelande_closed") != ""){ ?>				
        <div class="update">
					<p>CLOSED FOR SEASON</p>
					<p><span><?php the_field("gelande_closed"); ?></span></p>
				</div>
<?php }?>				
				</div>
        <h3><span class="logo-gelande">
    <?php if (get_field("logo_gelande") != ""){ ?>
					<img src="<?php the_field("logo_gelande"); ?>" alt="<?php the_title(); ?>"  style="width:80px;">					
					<?php } else { ?>					
					<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/logo.png" alt="白馬のスキー場、登山、観光、宿泊ならスノーナビ" >
        <?php }?>														
					</span>
					<span><?php the_title(); ?></span></h3>
        <div class="column col04 icon-box">
					<div class="col-item">
            <h4>積雪</h4>
          <?php if (get_field("snow_top") != ""){ ?>						
						<p class="snow_top"><?php the_field("snow_top"); ?></p>
          <?php }?>						
					</div>
          <!--<div class="col-item">
            <h4>BASE</h4>
          <?php if (get_field("snow_base") != ""){ ?>												
						<p class="snow_base"><?php the_field("snow_base"); ?></p>
          <?php }?>												
					</div>-->
          <div class="col-item">
            <h4>新雪</h4>
          <?php if (get_field("snow_24h") != ""){ ?>																		
						<p class="snow_24h"><?php the_field("snow_24h"); ?></p>
          <?php }?>																		
					</div>
          <div class="col-item">
            <h4>天気</h4>						
          <?php if (get_field("gelande_weather") != ""){ ?>		
<p class="gelande_weather">						
<?php
    $cat = get_field('gelande_weather');
    if ($cat == 'sun') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-sun.svg" alt="" >';
    } elseif ($cat == 'cloud') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-cloud.svg" alt="" >';
    } elseif ($cat == 'lightsnow') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-lightsnow.svg" alt="" >';
    } elseif ($cat == 'snow') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-snow.svg" alt="" >';
    } elseif ($cat == 'rain') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-rain.svg" alt="" >';
    } elseif ($cat == 'lightrain') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-lightrain.svg" alt="" >';
    } elseif ($cat == 'sleet') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-sleet.svg" alt="" >';
    } elseif ($cat == 'thunder') {
        echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-thunder.svg" alt="" >';
    } else {
    }
 ?>						
						</p>
          <?php }?>																		
					</div>
          <div class="col-item">
            <h4>気温</h4>												
          <?php if (get_field("gelande_temp") != ""){ ?>																		
						<p class="gelande_temp"><?php the_field("gelande_temp"); ?></p>
          <?php }?>																		
					</div>
      </div>
		<!-- // column -->			
        <div class="column col05 data-box">
					<div class="col-item">
            <h4>雪質</h4>
          <?php if (get_field("snow_quality") != ""){ ?>						
						<p class="snow_quality">
						<?php
              $field = get_field_object('snow_quality');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo $label; // ラベルを表示
            ?></p>														
          <?php }?>						
					</div>
					<div class="col-item">
            <h4>リフト運行</h4>
          <?php if (get_field("lift_operation") != ""){ ?>						
						<p class="lift_operation">
						<?php
              $field = get_field_object('lift_operation');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo $label; // ラベルを表示
            ?></p>							
          <?php }?>						
					</div>
					<div class="col-item">
            <h4>遅延理由</h4>
          <?php if (get_field("lift_delay_reason") != ""){ ?>						
						<p class="lift_delay_reason">
							<?php
              $field = get_field_object('lift_delay_reason');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo $label; // ラベルを表示
            ?></p>							
          <?php }?>						
					</div>
					<div class="col-item">
            <h4>周辺道路状況</h4>
          <?php if (get_field("road_condition") != ""){ ?>						
						<p class="road_condition">
							<?php
              $field = get_field_object('road_condition');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo $label; // ラベルを表示
            ?></p>
          <?php }?>						
					</div>
          <div class="col-item">
            <h4>風の強さ</h4>
						<p class="wind">
          <?php
              $field = get_field_object('wind');
              $value = $field['value'];
              $label = $field['choices'][ $value ]; // ラベルの取得
              echo '<img src="https://www.snownavi.com/cms/wp-content/themes/snownavi/img/icon/icon-wind-'.$value.'.svg" alt="" >'; // ラベルを表示
            ?>
						</p>
					</div>										
					
      </div>
		<!-- // column -->			
      <h3 class="backnumber-tit">新雪バックナンバー</h3>				
      <div class="column col04 backnumber-box">
					<div class="col-item day01">
          <?php if (get_field("day01_update") != ""){ ?><h4><?php the_field("day01_update"); ?></h4><?php }?>
          <?php if (get_field("day01_snow") != ""){ ?>						
						<p><?php the_field("day01_snow"); ?></p>
          <?php }?>						
					</div>				
					<div class="col-item day02">
					<?php if (get_field("day02_update") != ""){ ?><h4><?php the_field("day02_update"); ?></h4><?php }?>
          <?php if (get_field("day02_snow") != ""){ ?>						
						<p><?php the_field("day02_snow"); ?></p>
          <?php }?>						
					</div>				
					<div class="col-item day03">
					<?php if (get_field("day03_update") != ""){ ?><h4><?php the_field("day03_update"); ?></h4><?php }?>
          <?php if (get_field("day03_snow") != ""){ ?>						
						<p><?php the_field("day03_snow"); ?></p>
          <?php }?>						
					</div>				
					<div class="col-item day04">
					<?php if (get_field("day04_update") != ""){ ?><h4><?php the_field("day04_update"); ?></h4><?php }?>
          <?php if (get_field("day04_snow") != ""){ ?>						
						<p><?php the_field("day04_snow"); ?></p>
          <?php }?>						
					</div>				
      </div>
		<!-- // column -->			
        <?php if (get_field("livecamera_url") != ""){ ?>
				<a class="btn_item" href="<?php the_field("livecamera_url"); ?>" target="_blank">LIVE CAMERA<i class="fa fa-chevron-right"></i></a>
				<?php }?>
        <?php if (get_field("gelande_report_url") != ""){ ?>
         <a class="btn_item" href="<?php the_field("gelande_report_url"); ?>">
					ゲレンデレポート<i class="fa fa-chevron-right"></i></a>
        <?php }?>
    </div>
		<!-- // inBox -->
	<?php endwhile;endif; ?>
  <?php wp_reset_postdata(); ?>					
			
		<div class="side sp">			
<?php get_sidebar("slopeinfo"); ?>
		</div>
			
    <div id="local-banner">
      <div class="column col02">
    <?php if (get_field("bn_img01", 45695) != ""){ ?>				
        <div class="col-item">
					<?php if (get_field("link_bn_img01", 45695) != ""){ ?>
					<a href="<?php the_field("link_bn_img01", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("bn_img01", 45695); ?>"></div>
					<?php if (get_field("bn_txt01", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt01", 45695); ?></div><?php }?>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("bn_img01", 45695); ?>"></div>	
					<?php if (get_field("bn_txt01", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt01", 45695); ?></div><?php }?>					
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("bn_img02", 45695) != ""){ ?>				
        <div class="col-item">
					<?php if (get_field("link_bn_img02", 45695) != ""){ ?>
					<a href="<?php the_field("link_bn_img02", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("bn_img02", 45695); ?>"></div>
					<?php if (get_field("bn_txt02", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt02", 45695); ?></div><?php }?>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("bn_img02", 45695); ?>"></div>	
					<?php if (get_field("bn_txt02", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt02", 45695); ?></div><?php }?>					
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("bn_img03", 45695) != ""){ ?>				
        <div class="col-item">
					<?php if (get_field("link_bn_img03", 45695) != ""){ ?>
					<a href="<?php the_field("link_bn_img03", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("bn_img03", 45695); ?>"></div>
					<?php if (get_field("bn_txt03", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt03", 45695); ?></div><?php }?>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("bn_img03", 45695); ?>"></div>	
					<?php if (get_field("bn_txt03", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt03", 45695); ?></div><?php }?>					
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("bn_img04", 45695) != ""){ ?>				
        <div class="col-item">
					<?php if (get_field("link_bn_img04", 45695) != ""){ ?>
					<a href="<?php the_field("link_bn_img04", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("bn_img04", 45695); ?>"></div>
					<?php if (get_field("bn_txt04", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt04", 45695); ?></div><?php }?>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("bn_img04", 45695); ?>"></div>	
					<?php if (get_field("bn_txt04", 45695) != ""){ ?><div class="txt"><?php the_field("bn_txt04", 45695); ?></div><?php }?>					
        <?php }?>									
				</div>
      <?php }?>	
      </div>
		<!-- // column -->				
    </div>			
		<!-- // #local-banner -->
			
  </div>
  <!-- // main -->
			
		<div class="side pc">			
<?php /*?><?php get_sidebar("slopeinfo"); ?><?php */?>
			<div class="side-item">
    <?php if (get_field("sidebn_top_01", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_01", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_01", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_01", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_01", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("sidebn_top_02", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_02", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_02", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_02", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_02", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	

    <?php if (get_field("sidebn_top_03", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_03", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_03", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_03", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_03", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("sidebn_top_04", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_04", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_04", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_04", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_04", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("sidebn_top_05", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_05", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_05", 45695); ?>" target="_blank">
					<div class="thum"><img src="<?php the_field("sidebn_top_05", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_05", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
    <?php if (get_field("sidebn_top_06", 45695) != ""){ ?>				
        <div class="bn-item">
					<?php if (get_field("sidebn_toplink_06", 45695) != ""){ ?>
					<a href="<?php the_field("sidebn_toplink_06", 45695); ?>">
					<div class="thum"><img src="<?php the_field("sidebn_top_06", 45695); ?>"></div>
          </a>
					<?php } else { ?>
					<div class="thum"><img src="<?php the_field("sidebn_top_06", 45695); ?>"></div>	
        <?php }?>									
				</div>
      <?php }?>	
				
			</div>			
		</div>
			

		</div>
  <!-- /#content -->
<?php get_footer(); ?>
<?php endif; ?>	