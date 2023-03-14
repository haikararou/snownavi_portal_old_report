		<div class="side">
		<!--
		<div class="pageNav tra">
		<ul>
		<li class="prev"><?php previous_post_link('%link', '<i class="fa fa-angle-double-left"></i> PREV',TRUE,'','trekking'); ?></li>
		<li class="back"><a href="<?php echo home_url();?>/trekking/<?php $terms = wp_get_object_terms($post->ID,'trekking'); foreach($terms as $term){echo $term->slug . ' ';} ?>">BACK to LIST</a></li>
		<li class="next"><?php next_post_link('%link', 'NEXT <i class="fa fa-angle-double-right"></i>',TRUE,'','trekking'); ?></li>
		</ul>
		</div>
		-->
		<div class="calendar">
		<?php get_cpt_calendar('trekkingreport'); ?>
		</div>
		
		<?php if (is_object_in_term($post->ID, 'trekking', 'outdoor')): ?>
		<?php get_template_part( 'sidebntr', 'outdoor' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'goryu')): ?>
		<?php get_template_part( 'sidebntr', 'goryu' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'happo')): ?>
		<?php get_template_part( 'sidebntr', 'happo' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'iwatake')): ?>
		<?php get_template_part( 'sidebntr', 'iwatake' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'happo')): ?>
		<?php get_template_part( 'sidebntr', 'happo' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'tsugaike')): ?>
		<?php get_template_part( 'sidebntr', 'tsugaike' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'mount')): ?>
		<?php get_template_part( 'sidebntr', 'mount' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'tourism')): ?>
		<?php get_template_part( 'sidebntr', 'tourism' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'sugadaira')): ?>
		<?php get_template_part( 'sidebntr', 'sugadaira' ); ?>
		<?php endif; ?>	
			<table>
				<tbody>
					<tr>
						<th class="th01"><?php the_field("tra_place", $post->ID); ?></th>
						<th class="th02">天候</th>
						<th class="th03">気温</th>
					</tr>
					<tr>
						<td class="td01"><?php the_field("tra_snow01", $post->ID); ?></td>
						<td class="td02">
						<?php if( in_array( 'we01', get_field('tra_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/fine.gif" alt="晴れ"/>';
						}
						?>
						<?php if( in_array( 'we02', get_field('tra_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/cloudy.gif" alt="曇り"/>';
						}
						?>
						<?php if( in_array( 'we03', get_field('tra_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/snow.gif" alt="雪"/>';
						}
						?>
						<?php if( in_array( 'we04', get_field('tra_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/rain.gif" alt="雨"/>';
						}
						?>
						<?php if( in_array( 'we05', get_field('tra_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/drizzle.gif" alt="小雨"/>';
						}
						?>
						<?php if( in_array( 'we06', get_field('tra_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/sleet.gif" alt="みぞれ"/>';
						}
						?>
						<?php if( in_array( 'we07', get_field('tra_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/thunder.gif" alt="雷/>';
						}
						?>
						</td>
						<td class="td03"><?php the_field("tra_temp01", $post->ID); ?>℃</td>
					</tr>
				</tbody>
			</table>
			<?php if (get_field("tra_flower") != ""){ ?>
			<div class="box tel">
				<h6>今見られる主な花</h6>
				<?php the_field("tra_flower", $post->ID); ?>
			</div>
			<?php }?>
			
			<ul class="btn">
				<?php if (get_field("tra_w_news") != ""){ ?><li><a href="<?php the_field("tra_w_news", $post->ID); ?>" class="btn_item" target="_blank">天気予報<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("tra_cam") != ""){ ?><li><a href="<?php the_field("tra_cam", $post->ID); ?>" class="btn_item" target="_blank">ライブカメラ<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("tra_lift") != ""){ ?><li><a href="<?php the_field("tra_lift", $post->ID); ?>" class="btn_item" target="_blank">リフト料金<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("tra_map") != ""){ ?><li><a href="<?php the_field("tra_map", $post->ID); ?>" class="btn_item" target="_blank">マップを見る<i class="fa fa-chevron-right"></i></a></li><?php }?>
			</ul>
			<div class="box">
				<h6>営業期間</h6>
				<?php the_field("tra_time", $post->ID); ?>
			</div>
			<div class="box tel">
				<h6>お問い合わせ先</h6>
				<?php the_field("tra_info", $post->ID); ?>
			</div>
			<?php if (get_field("kanko_item") != ""){ ?>
			<div class="box tel">
				<h6>取材協力</h6>
				<?php the_field("kanko_item", $post->ID); ?>
			</div>
			<?php }?>
			
			<a href="https://www.snownavi.co.jp/policy-photo.php" target="_blank" class="photoinfo">写真元素材ご希望の方へ</a>
			<ul class="ticket tra">
				<li>
					<?php if (get_field("tra_cu_img02") != ""){ ?><img src="<?php the_field("tra_cu_img02", $post->ID); ?>"/><?php }?>
					<?php if (get_field("tra_cu_url01") != ""){ ?><a href="<?php the_field("tra_cu_url01", $post->ID); ?>" class="btn_item" target="_blank"><?php the_field("tra_cu_title", $post->ID); ?><i class="fa fa-chevron-right"></i></a><?php }?>
<div style="margin-top: 10px;"></div>					
					<?php if (get_field("tra_tik_img02") != ""){ ?><img src="<?php the_field("tra_tik_img02", $post->ID); ?>"/><?php }?>
					<?php if (get_field("tra_tik_url01") != ""){ ?><a href="<?php the_field("tra_tik_url01", $post->ID); ?>" class="btn_item" target="_blank"><?php the_field("tra_tik_title", $post->ID); ?><i class="fa fa-chevron-right"></i></a><?php }?>
				</li>
			</ul>
		<?php if (is_object_in_term($post->ID, 'trekking', 'outdoor')): ?>
		<?php get_template_part( 'sidebntr02', 'outdoor' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'goryu')): ?>
		<?php get_template_part( 'sidebntr02', 'goryu' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'happo')): ?>
		<?php get_template_part( 'sidebntr02', 'happo' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'iwatake')): ?>
		<?php get_template_part( 'sidebntr02', 'iwatake' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'happo')): ?>
		<?php get_template_part( 'sidebntr02', 'happo' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'tsugaike')): ?>
		<?php get_template_part( 'sidebntr02', 'tsugaike' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'mount')): ?>
		<?php get_template_part( 'sidebntr02', 'mount' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'tourism')): ?>
		<?php get_template_part( 'sidebntr02', 'tourism' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'trekking', 'sugadaira')): ?>
		<?php get_template_part( 'sidebntr02', 'sugadaira' ); ?>
		<?php endif; ?>	
			
			
		<!--	<div class="box tel">
				<h6>ゲレンデレポート月別アーカイブ</h6>
				<ul>
				<?php wp_get_archives('type=monthly&post_type=trekkingreport&show_post_count=true'); ?>
				</ul>
			</div>-->
			
			<!--<ul class="bn01">
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/side_dammy_bn.gif" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/side_dammy_bn.gif" alt=""/></a></li>
				<li><a href=""><img src="<?php bloginfo( 'template_directory' ); ?>/img/bn/side_dammy_bn.gif" alt=""/></a></li>
			</ul>-->
		</div>
