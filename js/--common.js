
// ページトップ
jQuery(function() {
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
 }, 500);
 return false;
 });
 });
 
// スクロールバー
jQuery(function(){
	jQuery('.scroll_area').jScrollPane();
});
//アコーディオン
jQuery(function(){
     
jQuery(".accordion p").click(function(){
    jQuery(this).next("ul").slideToggle();
    jQuery(this).children("span").toggleClass("open");
}); 
 
jQuery(".accordion dt").click(function(){
    jQuery(this).next("dd").slideToggle();
    jQuery(this).next("dd").siblings("dd").slideUp();
    jQuery(this).toggleClass("open");    
    jQuery(this).siblings("dt").removeClass("open");
});
 
});

// スライドショー
jQuery(function(){
	jQuerysetElm = jQuery('.wideslider');
	baseWidth = 1200;
	baseHeight = 575;
	minWidth = 320;

	slideSpeed = 900;
	delayTime = 9000;
	easing = 'linear';
	autoPlay = '1'; // notAutoPlay = '0'

	flickMove = '1'; // notFlick = '0'

	btnOpacity = 0.5;
	pnOpacity = 0.5;

	ua = navigator.userAgent;

	jQuery(window).load(function(){
		jQuerysetElm.find('img').css({display:'block'});
		jQuerysetElm.each(function(){
			targetObj = jQuery(this);
			targetObj.children('ul').wrapAll('<div class="wideslider_base"><div class="wideslider_wrap"></div><div class="slider_prev"></div><div class="slider_next"></div></div>');

			var findBase = targetObj.find('.wideslider_base'),
			findWrap = targetObj.find('.wideslider_wrap'),
			findPrev = targetObj.find('.slider_prev'),
			findNext = targetObj.find('.slider_next');

			var pagination = jQuery('<div class="pagination"></div>');
			targetObj.append(pagination);

			var baseList = findWrap.find('li'),
			baseListLink = findWrap.find('li').children('a'),
			baseListCount = findWrap.find('li').length;

			baseList.each(function(i){
				jQuery(this).css({width:(baseWidth),height:(baseHeight)});
				pagination.append('<a href="javascript:void(0);" class="pn'+(i+1)+'"></a>');
			});

			var findPagi = targetObj.find('.pagination');

			setSlide();
			function setSlide(){
				windowWidth = jQuery(window).width();
				findList = findWrap.find('li');
				setParts = (findBase,findWrap,findPrev,findNext,jQuerysetElm);

				setWrapLeft = parseInt(findWrap.css('left'));
				setlistWidth = findList.find('img').width();
				setLeft = setWrapLeft / setlistWidth;

				if(windowWidth < baseWidth){
					if(windowWidth > minWidth){
						findList.css({width:(windowWidth)});
						var reImgHeight = findList.find('img').height();
						findList.css({height:(reImgHeight)});
						setParts.css({height:(reImgHeight)});
					} else if(windowWidth <= minWidth){
						findList.css({width:(minWidth)});
						var reImgHeight = findList.find('img').height();
						findList.css({height:(reImgHeight)});
						setParts.css({height:(reImgHeight)});
					}
				} else if(windowWidth >= baseWidth){
					findList.css({width:(baseWidth),height:(baseHeight)});
					setParts.css({height:(baseHeight)});
				}

				setWidth = findList.find('img').width();
				setHeight = findList.find('img').height();
				baseWrapWidth = (setWidth)*(baseListCount);

				ulCount = findWrap.find('ul').length;
				if(ulCount == 1){
					var makeClone = findWrap.children('ul');
					makeClone.clone().prependTo(findWrap);
					makeClone.clone().appendTo(findWrap);
					findWrap.children('ul').eq('1').addClass('mainList');
					var mainList = findWrap.find('.mainList').children('li');
					mainList.eq('0').addClass('mainActive')

					allListCount = findWrap.find('li').length;
				}
				allLWrapWidth = (setWidth)*(allListCount),
				posAdjust = ((windowWidth)-(setWidth))/2;

				findBase.css({left:(posAdjust),width:(setWidth),height:(setHeight)});
				findPrev.css({left:-(posAdjust),width:(posAdjust),height:(setHeight),opacity:(btnOpacity)});
				findNext.css({right:-(posAdjust),width:(posAdjust),height:(setHeight),opacity:(btnOpacity)});

				findWrap.css({width:(allLWrapWidth),height:(setHeight)});
				findWrap.children('ul').css({width:(baseWrapWidth),height:(setHeight)});

				posResetNext = -(baseWrapWidth)*2,
				posResetPrev = -(baseWrapWidth)+(setWidth);

				adjLeft = setWidth * setLeft;
				findWrap.css({left:(adjLeft)});

			}
			findWrap.css({left:-(baseWrapWidth)});

			var pnPoint = pagination.children('a'),
			pnFirst = pagination.children('a:first'),
			pnLast = pagination.children('a:last'),
			pnCount = pagination.children('a').length;

			if(ua.search(/iPhone/) != -1 || ua.search(/iPad/) != -1 || ua.search(/iPod/) != -1 || ua.search(/Android/) != -1){
				pnPoint.css({opacity:(pnOpacity)});
			} else {
				pnPoint.css({opacity:(pnOpacity)}).hover(function(){
					jQuery(this).stop().animate({opacity:'1'},300);
				}, function(){
					jQuery(this).stop().animate({opacity:(pnOpacity)},300);
				});
			}

			pnFirst.addClass('active');
			pnPoint.click(function(){
				if(autoPlay == '1'){clearInterval(wsSetTimer);}
				var setNum = pnPoint.index(this),
				moveLeft = ((setWidth)*(setNum))+baseWrapWidth;
				findWrap.stop().animate({left: -(moveLeft)},slideSpeed,easing);
				pnPoint.removeClass('active');
				jQuery(this).addClass('active');
				activePos();
				if(autoPlay == '1'){wsTimer();}
			});

			if(autoPlay == '1'){wsTimer();}

			function wsTimer(){
				wsSetTimer = setInterval(function(){
					findNext.click();
				},delayTime);
			}
			findNext.click(function(){
				findWrap.not(':animated').each(function(){
					if(autoPlay == '1'){clearInterval(wsSetTimer);}
					var posLeft = parseInt(jQuery(findWrap).css('left')),
					moveLeft = ((posLeft)-(setWidth));
					findWrap.stop().animate({left:(moveLeft)},slideSpeed,easing,function(){
						var adjustLeft = parseInt(jQuery(findWrap).css('left'));
						if(adjustLeft <= posResetNext){
							findWrap.css({left: -(baseWrapWidth)});
						}
					});

					var pnPointActive = pagination.children('a.active');
					pnPointActive.each(function(){
						var pnIndex = pnPoint.index(this),
						listCount = pnIndex+1;
						if(pnCount == listCount){
							pnPointActive.removeClass('active');
							pnFirst.addClass('active');
						} else {
							pnPointActive.removeClass('active').next().addClass('active');
						}
					});
					activePos();

					if(autoPlay == '1'){wsTimer();}
				});
			}).hover(function(){
				jQuery(this).stop().animate({opacity:((btnOpacity)+0.1)},100);
			}, function(){
				jQuery(this).stop().animate({opacity:(btnOpacity)},100);
			});

			findPrev.click(function(){
				findWrap.not(':animated').each(function(){
					if(autoPlay == '1'){clearInterval(wsSetTimer);}

					var posLeft = parseInt(jQuery(findWrap).css('left')),
					moveLeft = ((posLeft)+(setWidth));
					findWrap.stop().animate({left:(moveLeft)},slideSpeed,easing,function(){
						var adjustLeft = parseInt(jQuery(findWrap).css('left')),
						adjustLeftPrev = (posResetNext)+(setWidth);
						if(adjustLeft >= posResetPrev){
							findWrap.css({left: (adjustLeftPrev)});
						}
					});

					var pnPointActive = pagination.children('a.active');
					pnPointActive.each(function(){
						var pnIndex = pnPoint.index(this),
						listCount = pnIndex+1;
						if(1 == listCount){
							pnPointActive.removeClass('active');
							pnLast.addClass('active');
						} else {
							pnPointActive.removeClass('active').prev().addClass('active');
						}
					});
					activePos();

					if(autoPlay == '1'){wsTimer();}
				});
			}).hover(function(){
				jQuery(this).stop().animate({opacity:((btnOpacity)+0.1)},100);
			}, function(){
				jQuery(this).stop().animate({opacity:(btnOpacity)},100);
			});

			function activePos(){
				var posActive = findPagi.find('a.active');
				posActive.each(function(){
					var posIndex = pnPoint.index(this),
					setMainList = findWrap.find('.mainList').children('li');
					setMainList.removeClass('mainActive').eq(posIndex).addClass('mainActive');
				});
			}

			jQuery(window).on('resize',function(){
				if(autoPlay == '1'){clearInterval(wsSetTimer);}
				setSlide();
				if(autoPlay == '1'){wsTimer();}
			}).resize();

			if(flickMove == '1'){
				var isTouch = ('ontouchstart' in window);
				findWrap.on(
					{'touchstart mousedown': function(e){
						if(findWrap.is(':animated')){
							e.preventDefault();
						} else {
							if(autoPlay == '1'){clearInterval(wsSetTimer);}
							if(!(ua.search(/iPhone/) != -1 || ua.search(/iPad/) != -1 || ua.search(/iPod/) != -1 || ua.search(/Android/) != -1)){
								e.preventDefault();
							}
							this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
							this.leftBegin = parseInt(jQuery(this).css('left'));
							this.left = parseInt(jQuery(this).css('left'));
							this.touched = true;
						}
					},'touchmove mousemove': function(e){
						if(!this.touched){return;}
						e.preventDefault();
						this.left = this.left - (this.pageX - (isTouch ? event.changedTouches[0].pageX : e.pageX) );
						this.pageX = (isTouch ? event.changedTouches[0].pageX : e.pageX);
						jQuery(this).css({left:this.left});
					},'touchend mouseup mouseout': function(e){
						if (!this.touched) {return;}
						this.touched = false;

						var setThumbLiActive = pagination.children('a.active'),
						listWidth = parseInt(baseList.css('width')),leftMax = -((listWidth)*((baseListCount)-1));

						if(((this.leftBegin)-30) > this.left && (!((this.leftBegin) === (leftMax)))){
							jQuery(this).stop().animate({left:((this.leftBegin)-(listWidth))},slideSpeed,easing,function(){
								var adjustLeft = parseInt(jQuery(findWrap).css('left'));
								if(adjustLeft <= posResetNext){
									findWrap.css({left: -(baseWrapWidth)});
								}
							});

							setThumbLiActive.each(function(){
								var pnIndex = pnPoint.index(this),
								listCount = pnIndex+1;
								if(pnCount == listCount){
									setThumbLiActive.removeClass('active');
									pnFirst.addClass('active');
								} else {
									setThumbLiActive.removeClass('active').next().addClass('active');
								}
							});
							activePos();
						} else if(((this.leftBegin)+30) < this.left && (!((this.leftBegin) === 0))){
							jQuery(this).stop().animate({left:((this.leftBegin)+(listWidth))},slideSpeed,easing,function(){
								var adjustLeft = parseInt(jQuery(findWrap).css('left')),
								adjustLeftPrev = (posResetNext)+(setWidth);
								if(adjustLeft >= posResetPrev){
									findWrap.css({left: (adjustLeftPrev)});
								}
							});
							setThumbLiActive.each(function(){
								var pnIndex = pnPoint.index(this),
								listCount = pnIndex+1;
								if(1 == listCount){
									setThumbLiActive.removeClass('active');
									pnLast.addClass('active');
								} else {
									setThumbLiActive.removeClass('active').prev().addClass('active');
								}
							});
							activePos();
						} else {
							jQuery(this).stop().animate({left:(this.leftBegin)},slideSpeed,easing);
						}
						compBeginLeft = this.leftBegin;
						compThisLeft = this.left;
						baseListLink.click(function(e){
							if(!(compBeginLeft == compThisLeft)){
								e.preventDefault();
							}
						});
						if(autoPlay == '1'){wsTimer();}
					}
				});
			}
			setTimeout(function(){setSlide();},500);
		});
	});
});
