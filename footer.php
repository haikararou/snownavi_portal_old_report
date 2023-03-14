<div class="sp">
	<div id="sp_footer">
		<div class="item">
			<p><a href="https://www.snownavi.co.jp/company.php" target="_blank">About Us</a><a href="https://www.snownavi.co.jp/contact.php" target="_blank">Advertisement</a><a href="https://www.snownavi.co.jp/policy.php" target="_blank">Privacy Policy</a></p>
			<h3><img src="<?php bloginfo('template_directory'); ?>/img/logo_b.svg" alt="" /></h3>
			<h3 style="margin-top:20px;" class="sns_Btn">
			<a href="https://www.facebook.com/snownavijp" target="_blank"><img src="https://www.snownavi.co.jp/img/btn_fb.png" width="40" alt=""></a>&nbsp;&nbsp;&nbsp;
			<a href="https://twitter.com/snownavi" target="_blank"><img src="https://www.snownavi.co.jp/img/btn_tw.png" width="40" alt="" data-pin-nopin="true"></a>&nbsp;&nbsp;&nbsp;
			<a href="https://www.instagram.com/snownavi/" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/img/btn_insta.png" width="40" alt="" ></a>
			<?php if (is_page('toptest')) : ?>
			<?php endif; ?>
		</h3>
		</div>
		<div class="box">
			<p class="info">Snownavi Co., Ltd. 6330-3, Hokujo, Hakuba-mura Kitaazumi-gun, NAGANO　TEL.0261-71-1302　（8:30-17:00　 Holidays: Sat. & Sun.）</p>
		</div>
	</div><!-- /#sp_footer -->
</div>
<!-- /.sp -->

<p id="pageTop" class="pc"><a href="#container"><img src="<?php bloginfo('template_directory'); ?>/img/pagetop.png" alt="" /></a></p>
<div id="footer" class="pc">
	<div class="box">
		<div class="leftBox">
			<h3><img src="<?php bloginfo('template_directory'); ?>/img/f_logo.png" alt="" /></h3>
			株式会社スノーナビ<br>
			〒399-9301　長野県北安曇郡白馬村北城6330-3<br>
			TEL：0261-71-1302　FAX：0261-71-1312<br>
		</div>
		<div class="rightBox">
			<p class="sns">
				<a href="https://www.instagram.com/snownavi/" target="_blank"><i class="fa fa-instagram"></i></a>
				<a href="https://twitter.com/snownavi" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="https://www.facebook.com/snownavijp" target="_blank"><i class="fa fa-facebook"></i></a>
			</p>
			<p class="copy">&copy; <script type="text/javascript">
					document.write(new Date().getFullYear());
				</script> snownavi</p>
		</div>
	</div>
</div>
<!-- /#footer -->

</div><!-- /#container -->
<!-- </div> -->
<!-- /#wrapper -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDAvGQoaW5LqZiHMvQQhIkLa12Y5SODUro"></script>
<?php if(is_post_type_archive('map') || is_singular('map')): ?>
<?php else: ?>
<?php endif; ?>
<?php wp_footer(); ?>
</body>
</html>
