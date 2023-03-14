		<div class="side">
		<div class="calendar">
		<?php get_cpt_calendar('trekkingreport'); ?>
		</div>
			<div class="box tel">
				<h6>トレッキングレポート月別アーカイブ</h6>
				<ul>
				<?php wp_get_archives('type=monthly&post_type=trekkingreport&show_post_count=true'); ?>
				</ul>
			</div>
		</div>
