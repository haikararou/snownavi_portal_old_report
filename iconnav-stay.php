<?php  $lang = $_GET['lang']; ?>
<?php if ($lang=="en"): ?>
<!-- 英語版振り分け -->
		<div id="iconNav_en">
		<img src="<?php bloginfo( 'template_directory' ); ?>/img/en_stay_icon.png" alt="天然温泉"/>
		</div>
<?php else: ?>
<!-- //ここから日本語版 -->	
		<div id="iconNav">
			<ul>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_01_a.png" alt="天然温泉"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_02_a.png" alt="人工温泉"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_03_a.png" alt="ペット歓迎"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_04_a.png" alt="ゲレンデ徒歩1分"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_05_a.png" alt="常時送迎"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_06_a.png" alt="宿横に駐車場"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_07_a.png" alt="素泊まり可能"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_08_a.png" alt="洗浄トイレ"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_09_a.png" alt="Wifi完備"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_10_a.png" alt="専任シェフ"/></li>
				<li><img src="<?php bloginfo( 'template_directory' ); ?>/img/stay/stay_i_11_a.png" alt="クレジットカード利用可能"/></li>
			</ul>
		</div>
<?php endif; ?>