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
// �y�[�W�g�b�v
jQuery(function () {
  var topBtn = jQuery('#pageTop');
  topBtn.hide();
  //�X�N���[����100�ɒB������{�^���\��
  jQuery(window).scroll(function () {
    if (jQuery(this).scrollTop() > 100) {
      topBtn.fadeIn();
    } else {
      topBtn.fadeOut();
    }
  });
  //�X�N���[�����ăg�b�v
  topBtn.click(function () {
    jQuery('body,html').animate({
      scrollTop: 0
    }, 700);
    return false;
  });
});


//�A�R�[�f�B�I��
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


// �Œ�t�b�^�[
jQuery(function () {
  jQuery(window).bind("scroll", function () {

    /*	jQuery("#pagetop_sp").hide();
         // ���y�[�W�g�b�v�{�^�����\���ɂ���
     
        jQuery(window).on("scroll", function() {
     
            if (jQuery(this).scrollTop() > 100) {
                // �� �X�N���[���ʒu��100�����������ꍇ�Ɉȉ��̏���������
                jQuery('#pagetop_sp').slideDown("fast");
                // �� (100��菬��������)�y�[�W�g�b�v�{�^�����X���C�h�_�E��
            } else {
                jQuery('#pagetop_sp').slideUp("fast");
                // �� ����ȊO�̏ꍇ�̏ꍇ�̓X���C�h�A�b�v����B
            }*/

    // �t�b�^�[�Œ肷�� 
    scrollHeight = jQuery(document).height();
    // �h�L�������g�̍���
    scrollPosition = jQuery(window).height() + jQuery(window).scrollTop();
    //�@�E�B���h�E�̍���+�X�N���[�������������@���݂̃g�b�v����̈ʒu
    footHeight = jQuery("#sp_footer").innerHeight();
    // �t�b�^�[�̍���

    if (scrollHeight - scrollPosition <= footHeight) {
      // ���݂̉�����ʒu���A�t�b�^�[�̍����̈ʒu�ɂ͂�������
      //  ".gotop"��position��absolute�ɕύX���A�t�b�^�[�̍����̈ʒu�ɂ���        
      jQuery("#pagetop_sp").css({
        "position": "absolute",
        "bottom": footHeight
      });
    } else {
      // ����ȊO�̏ꍇ�͌���css�X�^�C�����w��
      jQuery("#pagetop_sp").css({
        "position": "fixed",
        "bottom": "0px"
      });
    }
  });
});
