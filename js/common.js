jQuery(function () {

  jQuery('a[href^=#]').click(function () {

    var myHref, myPos, duration;
    myHref = jQuery(this).attr('href');
    myPos = jQuery(myHref).offset().top;

    duration = 700;

    jQuery('html, body').animate({
      scrollTop: myPos
    }, duration);
    return false;
  });

});
// ページトップ
jQuery(function () {
  var topBtn = jQuery('#pageTop');
  topBtn.hide();
  //スクロールが100に達したらボタン表示
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  //スクロールしてトップ
  topBtn.click(function () {
    jQuery('body,html').animate({
      scrollTop: 0
    }, 700);
    return false;
  });
});


//アコーディオン
jQuery(function () {

  jQuery(".accordion p").click(function () {
    jQuery(this).next("ul").slideToggle();
    jQuery(this).children("span").toggleClass("open");
  });

  jQuery(".accordion dt").click(function () {
    jQuery(this).next("dd").slideToggle();
    jQuery(this).next("dd").siblings("dd").slideUp();
    jQuery(this).toggleClass("open");
    jQuery(this).siblings("dt").removeClass("open");
  });

});


// 固定フッター
jQuery(function () {
  jQuery(window).bind("scroll", function () {

    /*	jQuery("#pagetop_sp").hide();
         // ↑ページトップボタンを非表示にする
     
        jQuery(window).on("scroll", function() {
     
            if (jQuery(this).scrollTop() > 100) {
                // ↑ スクロール位置が100よりも小さい場合に以下の処理をする
                jQuery('#pagetop_sp').slideDown("fast");
                // ↑ (100より小さい時は)ページトップボタンをスライドダウン
            } else {
                jQuery('#pagetop_sp').slideUp("fast");
                // ↑ それ以外の場合の場合はスライドアップする。
            }*/

    // フッター固定する 
    scrollHeight = jQuery(document).height();
    // ドキュメントの高さ
    scrollPosition = jQuery(window).height() + jQuery(window).scrollTop();
    //　ウィンドウの高さ+スクロールした高さ→　現在のトップからの位置
    footHeight = jQuery("#sp_footer").innerHeight();
    // フッターの高さ

    if (scrollHeight - scrollPosition <= footHeight) {
      // 現在の下から位置が、フッターの高さの位置にはいったら
      //  ".gotop"のpositionをabsoluteに変更し、フッターの高さの位置にする        
      jQuery("#pagetop_sp").css({
        "position": "absolute",
        "bottom": footHeight
      });
    } else {
      // それ以外の場合は元のcssスタイルを指定
      jQuery("#pagetop_sp").css({
        "position": "fixed",
        "bottom": "0px"
      });
    }
  });
});
