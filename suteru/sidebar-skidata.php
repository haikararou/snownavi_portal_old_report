		<div class="side">
		<div class="calendar">
		<?php get_cpt_calendar('skireport'); ?>
		</div>
			<div class="box tel">
				<h6>ゲレンデレポート月別アーカイブ</h6>
				<ul>
				<?php wp_get_archives('type=monthly&post_type=skireport&show_post_count=true'); ?>
				</ul>
			</div>
		</div>
