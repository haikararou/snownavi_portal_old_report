		<div class="side">
		
		<div class="calendar">
		<?php get_cpt_calendar('trekkingreport'); ?>
		</div>
		<!--
		<div class="pageNav tra">
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
		-->
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
		<?php endif; ?>	
			<table>
				<tbody>
					<tr>
						<th class="th01"><?php the_field("tra_place_en", $post->ID); ?></th>
						<th class="th02">Weather</th>
						<th class="th03">Temp.</th>
					</tr>
					<tr>
						<td class="td01"><?php the_field("tra_snow01_en", $post->ID); ?></td>
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
				<h6>Main flowers to be seen now</h6>
				<?php the_field("tra_flower", $post->ID); ?>
			</div>
			<?php }?>
			
			<ul class="btn">
				<?php if (get_field("tra_w_news") != ""){ ?><li><a href="<?php the_field("tra_w_news", $post->ID); ?>" class="btn_item" target="_blank">Weather Forecast<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("tra_cam") != ""){ ?><li><a href="<?php the_field("tra_cam", $post->ID); ?>" class="btn_item" target="_blank">Live Camera<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("tra_lift") != ""){ ?><li><a href="<?php the_field("tra_lift", $post->ID); ?>" class="btn_item" target="_blank">Lift Pass Price<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("tra_map") != ""){ ?><li><a href="<?php the_field("tra_map", $post->ID); ?>" class="btn_item" target="_blank">Ski Area Map<i class="fa fa-chevron-right"></i></a></li><?php }?>
			</ul>
			<div class="box">
				<h6>Operating period</h6>
				<?php the_field("tra_time_en", $post->ID); ?>
			</div>
			<div class="box tel">
				<h6>Contact</h6>
				<?php the_field("tra_info_en", $post->ID); ?>
			</div>
			<?php if (get_field("kanko_item_en") != ""){ ?>
			<div class="box tel">
				<h6>Coverage cooperation</h6>
				<?php the_field("kanko_item_en", $post->ID); ?>
			</div>
			<?php }?>
			
			
			
			<a href="https://www.snownavi.co.jp/en/policy-photo.php" target="_blank" class="photoinfo">Request for original data of our photographs</a>
			<ul class="ticket">
				<li>
	<?php  $lang = $_GET['lang']; ?>
<?php if ($lang=="en"): ?>
					<?php if (get_field("tra_cu_img02_en") != ""){ ?><img src="<?php the_field("tra_cu_img02_en", $post->ID); ?>"/><?php }?>
					<?php if (get_field("tra_cu_url01_en") != ""){ ?><a href="<?php the_field("tra_cu_url01_en", $post->ID); ?>" class="btn_item" target="_blank"><?php the_field("tra_cu_title_en", $post->ID); ?><i class="fa fa-chevron-right"></i></a><?php }?>
					
					<?php if (get_field("tra_tik_img02_en") != ""){ ?><img src="<?php the_field("tra_tik_img02_en", $post->ID); ?>"/><?php }?>
					<?php if (get_field("tra_tik_url01_en") != ""){ ?><a href="<?php the_field("tra_tik_url01_en", $post->ID); ?>" class="btn_item" target="_blank"><?php the_field("tra_tik_title_en", $post->ID); ?><i class="fa fa-chevron-right"></i></a><?php }?>
<?php else: ?>
					<?php if (get_field("tra_cu_img02") != ""){ ?><img src="<?php the_field("tra_cu_img02", $post->ID); ?>"/><?php }?>
					<?php if (get_field("tra_cu_url01") != ""){ ?><a href="<?php the_field("tra_cu_url01", $post->ID); ?>" class="btn_item" target="_blank"><?php the_field("tra_cu_title", $post->ID); ?><i class="fa fa-chevron-right"></i></a><?php }?>
					
					<?php if (get_field("tra_tik_img02") != ""){ ?><img src="<?php the_field("tra_tik_img02", $post->ID); ?>"/><?php }?>
					<?php if (get_field("tra_tik_url01") != ""){ ?><a href="<?php the_field("tra_tik_url01", $post->ID); ?>" class="btn_item" target="_blank"><?php the_field("tra_tik_title", $post->ID); ?><i class="fa fa-chevron-right"></i></a><?php }?>
<?php endif; ?>		
				
				
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
		<?php endif; ?>	
			
			
			<!--<div class="box tel">
				<h6>Report Monthly Archive</h6>
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
