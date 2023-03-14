		<div class="side">
		<!--
		<div class="pageNav ski">
		<?php
			$next_post = get_next_post(TRUE,'','enskireport');
			$prev_post = get_previous_post(TRUE,'','enskireport');   
			if( $next_post || $prev_post ) :
		?>
		<ul>
		<?php if( $prev_post ) : ?>
			<li class="prev"><a href="<?php echo get_permalink( $prev_post->ID ); ?>?lang=en">PREV</a></li>
		<?php endif; ?>
		<li class="back"><a href="<?php echo home_url();?>/enskireport/<?php $terms = wp_get_object_terms($post->ID,'report'); foreach($terms as $term){echo $term->slug . ' ';} ?>">BACK to LIST</a></li><?php if( $next_post ) : ?>
				<li class="next"><a href="<?php echo get_permalink( $next_post->ID ); ?>?lang=en">NEXT</a></li>
		<?php endif; ?>
		</ul>
		<?php endif; ?>	
		</div>
		-->
		
		<div class="calendar">
		<?php get_cpt_calendar('skireport'); ?>
		</div>
		
		<?php if (is_object_in_term($post->ID, 'report', 'sanosaka')): ?>
		<?php get_template_part( 'sidebn', 'sanosaka' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'cortina')): ?>
		<?php get_template_part( 'sidebn', 'cortina' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'yanaba')): ?>
		<?php get_template_part( 'sidebn', 'yanaba' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'goryu47')): ?>
		<?php get_template_part( 'sidebn', 'goryu47' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'happo')): ?>
		<?php get_template_part( 'sidebn', 'happo' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'iwatake')): ?>
		<?php get_template_part( 'sidebn', 'iwatake' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'tsugaike')): ?>
		<?php get_template_part( 'sidebn', 'tsugaike' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'jiigatake')): ?>
		<?php get_template_part( 'sidebn', 'jiigatake' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'hakunori')): ?>
		<?php get_template_part( 'sidebn', 'hakunori' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'kashimayari')): ?>
		<?php get_template_part( 'sidebn', 'kashimayari' ); ?>
		<?php elseif(is_object_in_term($post->ID, 'report', 'other')): ?>
		<?php get_template_part( 'sidebn', 'other' ); ?>
		<?php endif; ?>	
		
			<table>
				<tbody>
					<tr>
						<th class="th01">Snowfall</th>
						<th class="th02">Weather</th>
						<th class="th03">Temp.</th>
					</tr>
					<tr>
						<td class="td01"><?php the_field("ski_snow_en01", $post->ID); ?></td>
						<td class="td02">
						<?php if( in_array( 'we01', get_field('ski_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/fine.gif" alt="晴れ"/>';
						}
						?>
						<?php if( in_array( 'we02', get_field('ski_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/cloudy.gif" alt="曇り"/>';
						}
						?>
						<?php if( in_array( 'we03', get_field('ski_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/snow.gif" alt="雪"/>';
						}
						?>
						<?php if( in_array( 'we04', get_field('ski_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/rain.gif" alt="雨"/>';
						}
						?>
						<?php if( in_array( 'we05', get_field('ski_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/drizzle.gif" alt="小雨"/>';
						}
						?>
						<?php if( in_array( 'we06', get_field('ski_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/sleet.gif" alt="みぞれ"/>';
						}
						?>
						<?php if( in_array( 'we07', get_field('ski_weather01') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/thunder.gif" alt="雷/>';
						}
						?>
						</td>
						<td class="td03"><?php the_field("ski_temp01", $post->ID); ?>℃</td>
					</tr>
					<tr>
						<td class="td01"><?php the_field("ski_snow_en02", $post->ID); ?></td>
						<td class="td02">
						<?php if( in_array( 'we01', get_field('ski_weather02') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/fine.gif" alt="晴れ"/>';
						}
						?>
						<?php if( in_array( 'we02', get_field('ski_weather02') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/cloudy.gif" alt="曇り"/>';
						}
						?>
						<?php if( in_array( 'we03', get_field('ski_weather02') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/snow.gif" alt="雪"/>';
						}
						?>
						<?php if( in_array( 'we04', get_field('ski_weather02') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/rain.gif" alt="雨"/>';
						}
						?>
						<?php if( in_array( 'we05', get_field('ski_weather02') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/drizzle.gif" alt="小雨"/>';
						}
						?>
						<?php if( in_array( 'we06', get_field('ski_weather02') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/sleet.gif" alt="みぞれ"/>';
						}
						?>
						<?php if( in_array( 'we07', get_field('ski_weather02') ) )
						{
							echo '<img src="' .get_stylesheet_directory_uri(). '/img/thunder.gif" alt="雷/>';
						}
						?>
						</td>
						<?php if (get_field("ski_temp02") != ""){ ?><td class="td03"><?php the_field("ski_temp02", $post->ID); ?>℃</td><?php }?>
					</tr>
				</tbody>
			</table>
			<ul class="btn">
				<?php if (get_field("ski_w_news") != ""){ ?><li><a href="<?php the_field("ski_w_news", $post->ID); ?>" class="btn_item" target="_blank">Weather Forecast<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("ski_cam") != ""){ ?><li><a href="<?php the_field("ski_cam", $post->ID); ?>" class="btn_item" target="_blank">Live Camera<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("ski_lift") != ""){ ?><li><a href="<?php the_field("ski_lift", $post->ID); ?>" class="btn_item" target="_blank">Lift Pass Price<i class="fa fa-chevron-right"></i></a></li><?php }?>
				<?php if (get_field("ski_map") != ""){ ?><li><a href="<?php the_field("ski_map", $post->ID); ?>" class="btn_item" target="_blank">Ski Area Map<i class="fa fa-chevron-right"></i></a></li><?php }?>
			</ul>
			<div class="box">
				<h6>Operating Period</h6>
				<?php the_field("ski_time_en", $post->ID); ?>
			</div>
			<div class="box tel">
				<h6>Contact</h6>
				<?php the_field("ski_info_en", $post->ID); ?>
			</div>
			<a href="https://www.snownavi.co.jp/en/policy-photo.php" target="_blank" class="photoinfo">Request for original data of our photographs</a>
			<ul class="ticket">
				<li>
					<?php if (get_field("ski_cu_img01_en") != ""){ ?><img class="pc" src="<?php the_field("ski_cu_img01_en", $post->ID); ?>"/><?php }?>
					<?php if (get_field("ski_cu_url01_en") != ""){ ?><a href="<?php the_field("ski_cu_url01_en", $post->ID); ?>" class="btn_item" target="_blank">CUPON<i class="fa fa-chevron-right"></i></a><?php }?>
				</li>
				<li>
					<?php if (get_field("ski_cu_img01_02_en") != ""){ ?><img class="pc" src="<?php the_field("ski_cu_img01_02_en", $post->ID); ?>"/><?php }?>
					<?php if (get_field("ski_cu_url01_02_en") != ""){ ?><a href="<?php the_field("ski_cu_url01_02_en", $post->ID); ?>" class="btn_item" target="_blank">CUPON<i class="fa fa-chevron-right"></i></a><?php }?>
				</li>
				<li>
					<?php if (get_field("ski_cu_img02_en") != ""){ ?><img class="pc" src="<?php the_field("ski_cu_img02_en", $post->ID); ?>"/><?php }?>
					<?php if (get_field("ski_cu_url02_en") != ""){ ?><a href="<?php the_field("ski_cu_url02_en", $post->ID); ?>" class="btn_item" target="_blank">CUPON<i class="fa fa-chevron-right"></i></a><?php }?>
				</li>
			</ul>
			<?php if (is_object_in_term($post->ID, 'report', 'sanosaka')): ?>
			<?php get_template_part( 'sidebn02', 'sanosaka' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'cortina')): ?>
			<?php get_template_part( 'sidebn02', 'cortina' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'yanaba')): ?>
			<?php get_template_part( 'sidebn02', 'yanaba' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'goryu47')): ?>
			<?php get_template_part( 'sidebn02', 'goryu47' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'happo')): ?>
			<?php get_template_part( 'sidebn02', 'happo' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'iwatake')): ?>
			<?php get_template_part( 'sidebn02', 'iwatake' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'tsugaike')): ?>
			<?php get_template_part( 'sidebn02', 'tsugaike' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'jiigatake')): ?>
			<?php get_template_part( 'sidebn02', 'jiigatake' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'hakunori')): ?>
			<?php get_template_part( 'sidebn02', 'hakunori' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'kashimayari')): ?>
			<?php get_template_part( 'sidebn02', 'kashimayari' ); ?>
			<?php elseif(is_object_in_term($post->ID, 'report', 'other')): ?>
			<?php get_template_part( 'sidebn02', 'other' ); ?>
			<?php endif; ?>	
			<?php wp_reset_query() ?>
			<!-- <div class="box tel">
				<h6>Ski Area Report Monthly Archives</h6>
				<ul>
				<?php wp_get_archives('type=monthly&post_type=skireport&show_post_count=true'); ?>
				</ul>
			</div> -->
		</div>
