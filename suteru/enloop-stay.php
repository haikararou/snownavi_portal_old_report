			<h3><a href="<?php the_field("stay_url", $post->ID); ?>" target="_blank"><?php the_field("stay_title_en", $post->ID); ?></a></h3>
			<ul class="icon_b">
<?php if( in_array( 'check01', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_01_b.png" alt="天然温泉"/></li>';
}
?>
<?php if( in_array( 'check02', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_02_b.png" alt="人工温泉"/></li>';
}
?>
<?php if( in_array( 'check03', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_03_b.png" alt="ペット歓迎"/></li>';
}
?>			
<?php if( in_array( 'check04_0', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_04_b_0.png" alt="ゲレンデ徒歩0分"/></li>';
}
?>
<?php if( in_array( 'check04', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_04_b.png" alt="ゲレンデ徒歩1分"/></li>';
}
?>
<?php if( in_array( 'check04_2', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_04_b_2.png" alt="ゲレンデ徒歩2分"/></li>';
}
?>
<?php if( in_array( 'check04_3', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_04_b_3.png" alt="ゲレンデ徒歩3分"/></li>';
}
?>
<?php if( in_array( 'check04_4', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_04_b_4.png" alt="ゲレンデ徒歩4分"/></li>';
}
?>
<?php if( in_array( 'check04_5', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_04_b_5.png" alt="ゲレンデ徒歩5分"/></li>';
}
?>
<?php if( in_array( 'check05', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_05_b.png" alt="常時送迎"/></li>';
}
?>			
<?php if( in_array( 'check06', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_06_b.png" alt="宿横に駐車場"/></li>';
}
?>
<?php if( in_array( 'check07', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_07_b.png" alt="素泊まり可能"/></li>';
}
?>			
<?php if( in_array( 'check08', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_08_b.png" alt="洗浄トイレ"/></li>';
}
?>
<?php if( in_array( 'check09', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_09_b.png" alt="Wifi完備"/></li>';
}
?>			
<?php if( in_array( 'check10', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_10_b.png" alt="専任シェフ"/></li>';
}
?>
<?php if( in_array( 'check11', get_field('stay_check') ) )
{
    echo '<li><img src="' .get_stylesheet_directory_uri(). '/img/stay/stay_i_11_b.png" alt="クレジットカード利用可能"/></li>';
}
?>			
			</ul>
			<div class="inBox">
				<div class="left">
					<p class="photo"><a href="<?php the_field("stay_url", $post->ID); ?>" target="_blank"><?php echo get_custom_img('stay_top','stay_l'); ?></a></p>
					<p class="photo_01"><a href="<?php the_field("stay_url", $post->ID); ?>" target="_blank"><?php echo get_custom_img('stay_img02','stay_s'); ?></a></p>
					<p class="photo_02"><a href="<?php the_field("stay_url", $post->ID); ?>" target="_blank"><?php echo get_custom_img('stay_img03','stay_s'); ?></a></p>
					<div class="text01"><?php the_field("stay_body_en", $post->ID); ?></div>
					<?php if (get_field("en_stay_url") != ""){ ?>
					<a href="<?php the_field("en_stay_url", $post->ID); ?>" class="btn_item" target="_blank">Reservation and Inquiry</a>
					<?php } else { ?>
					<a href="<?php the_field("stay_url", $post->ID); ?>" class="btn_item" target="_blank">Reservation and Inquiry</a>
					<?php }?>
				</div>
				
				<div class="right">
					<div class="box">
						<h4>Charge<span>Per person (tax included)</span></h4>
						<?php the_field("stay_price_en", $post->ID); ?></div>
					<div class="box">
						<h4>Hotel Information</h4>
						<?php the_field("stay_spec_en", $post->ID); ?></div>
					<div class="box">
						<h4>Access/Contact
					<?php if( get_field('googlemap_link' ,$post_id)): ?>
					<span><a href="<?php the_field("googlemap_link", $post->ID); ?>" target="_blank">map <i class="fa fa-caret-right"></i></a></span>
					<?php endif; ?>
						
						</h4>
						<?php the_field("stay_access_en", $post->ID); ?></div>
					<ul class="accordion">
						<li>
							<p><span>Ski/Snowboard Info<i class="fa fa-plus"></i><i class="fa fa-minus"></i></span></p>
							<ul>
								<li><?php the_field("stay_ski_en", $post->ID); ?></li>
							</ul>
						</li>
					</ul>
					<ul class="accordion">
						<li>
							<p><span>Trekking Info<i class="fa fa-plus"></i><i class="fa fa-minus"></i></span></p>
							<ul>
								<li><?php the_field("stay_trakking_en", $post->ID); ?></li>
							</ul>
						</li>
					</ul>
					<?php if (get_field("en_stay_url01") != ""){ ?><a class="btn_item" href="<?php the_field("en_stay_url01", $post->ID); ?>">Characteristic Choice Hotel<i class="fa fa-chevron-right"></i></a><?php }?>
					<!--<?php if (get_field("stay_url02") != ""){ ?><a class="btn_item" href="<?php the_field("stay_url02", $post->ID); ?>">パノラマで見るとっておきの宿<i class="fa fa-chevron-right"></i></a><?php }?>
					<?php if (get_field("stay_url03") != ""){ ?><a class="btn_item" href="<?php the_field("stay_url03", $post->ID); ?>">トピックス<i class="fa fa-chevron-right"></i></a> <?php }?>--></div>
			</div>
