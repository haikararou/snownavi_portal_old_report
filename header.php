<!doctype html>
<html lang="ja">

<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link rel="shortcut icon" href="/img/favicon.ico" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-L7DM1EBH8H"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-L7DM1EBH8H');
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<?php if (is_page('toptest')) : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/top_test.js"></script>
<?php endif; ?>
<?php if (is_home()) : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/top.js"></script>
<?php endif; ?>
<?php if (get_post_type() === 'slopeinfo') : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/wideslider.js"></script>
<?php endif; ?>
<script type="text/javascript">
jQuery(document).ready(function(jQuery) {
jQuery('#container').fadeIn(10, function() {});
});
</script>
<link href="https://fonts.googleapis.com/css?family=Viga" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" media="print" href="<?php bloginfo('template_directory'); ?>/css/pc.css?<?php echo date('Ymd-Hi'); ?>">
<link href="<?php bloginfo('template_directory'); ?>/css/pc.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" media="all and (min-width:921px)" />
<link href="<?php bloginfo('template_directory'); ?>/css/sp.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" media="screen and (max-width:920px)" />
<link href="<?php bloginfo('template_directory'); ?>/css/sp-only.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" media="screen and (max-width:479px)" />
<link href="<?php bloginfo('template_directory'); ?>/css/common.css?<?php echo date('Ymd-Hi'); ?>" rel="stylesheet" media="all" />
<!-- <link href="<?php bloginfo('template_directory'); ?>/css/summer.css" rel="stylesheet" media="all" /> --><!-- 冬切替時にはコメントアウトする -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/matchMedia.js"></script><!-- 非対応ブラウザで window.matchMediaを使用する -->
<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/component.css" />
<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/js/jquery.dlmenu.js"></script>
<script type="text/javascript">
if (location.protocol == 'http:') {
location.replace(location.href.replace(/http:/, 'https:'));
}
</script>
<script>
if (window.matchMedia('(max-width:1024px)').matches) {
(function($) {
	$(function() {
		$('#dl-menu').dlmenu();
	});
})(jQuery);
}
</script>
<script>
function uaLinkChanger($id, $url) {
var link = document.getElementById($id);
var ua = navigator.userAgent;
if ((ua.indexOf('iPhone') > 0 && ua.indexOf('iPad') == -1) ||
	ua.indexOf('iPod') > 0 || ua.indexOf('Android') > 0) {
	link.href = $url;
}
}
</script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/common.js"></script>
<?php if (is_home() || is_page('toptest')) : ?>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.mousewheel.js"></script>
<script type="text/javascript">
jQuery(function($) {
	$('.scroll_area').jScrollPane();
});
</script>
<script type="text/javascript">
jQuery(function() {
	jQuery("#tab li a").click(function() {
		var num = $("#tab li a").index(this);
		jQuery(".content_wrap").addClass('disnon');
		jQuery(".content_wrap").eq(num).removeClass('disnon');
		jQuery("#tab li a").removeClass('select');
		jQuery(this).addClass('select')
	});

});
</script>
<?php endif; ?>
<?php if (is_home() || is_page('toptest')) : ?>
<script>
$(window).on('load', function() {
var window_w = $(window).width();
//アコーディオン
if (window_w < 768) {
  // 最初のコンテンツは表示
  $('.ac_cnt:first-of-type').css('display', 'block');
  $('.ac_ttl:first-of-type').addClass('is-open');
	$('.ac_ttl').click(function() {
		$(this).next('.ac_cnt').slideToggle().toggleClass('is-open');
		$(this).toggleClass('is-open');
	});
}
});
</script>
<?php endif; ?>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
<?php if(is_singular('map')): ?>
<?php else: ?>
<?php endif; ?>
