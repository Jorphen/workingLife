(function(){
var flag = true,
mySwiper = new Swiper('.swiper-container', {
    lazyLoading : true,
    lazyLoadingInPrevNext : true,
    lazyLoadingOnTransitionStart : true,
    direction : 'vertical',
    nextButton:'.next',
    noSwiping : true,
    noSwipingClass : 'stop',
    onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
        swiperAnimateCache(swiper); //隐藏动画元素 
        swiperAnimate(swiper); //初始化完成开始动画
    }, 
    onSlideChangeEnd: function(swiper){ 
        swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
    },
    onProgress: function(swiper) {
            for (var i = 0; i < swiper.slides.length; i++) {
                var slide = swiper.slides[i];
                var progress = slide.progress;
                var translate, boxShadow;

                translate = progress * swiper.height * 0.8;
                scale = 1 - Math.min(Math.abs(progress * 0.2), 1);
                boxShadowOpacity = 0;

                slide.style.boxShadow = '0px 0px 10px rgba(0,0,0,' + boxShadowOpacity + ')';

                if (i == swiper.myactive) {
                    es = slide.style;
                    es.webkitTransform = es.MsTransform = es.msTransform = es.MozTransform = es.OTransform = es.transform = 'translate3d(0,' + (translate) + 'px,0) scale(' + scale + ')';
                    es.zIndex=0;
                }else{
                    es = slide.style;
                    es.webkitTransform = es.MsTransform = es.msTransform = es.MozTransform = es.OTransform = es.transform ='';
                    es.zIndex=1;
                }
            }
        },
        onTransitionEnd: function(swiper, speed) {
            for (var i = 0; i < swiper.slides.length; i++) {
            }
            swiper.myactive = swiper.activeIndex;
            if (swiper.activeIndex == 1 && flag) {
                flag = false;
                mySwiper.removeSlide(0);
            }

        },
        onSetTransition: function(swiper, speed) {

            for (var i = 0; i < swiper.slides.length; i++) {
                //if (i == swiper.myactive) {

                    es = swiper.slides[i].style;
                    es.webkitTransitionDuration = es.MsTransitionDuration = es.msTransitionDuration = es.MozTransitionDuration = es.OTransitionDuration = es.transitionDuration = speed + 'ms';
                //}
            }

        }

});

$(window).load(function() {
// 音乐自动播放
    $('#loading').hide();
    mySwiper.slideTo(1);
});

// 音乐自动播放
    var btn = document.querySelector('#bgm-btn');
    var f = 1;
    var audio = document.getElementById('music');

    function audioAutoPlay(id){
        audio.play();
        document.addEventListener("WeixinJSBridgeReady", function () {
            audio.play();
        }, false);
        btn.classList.toggle('rotate');
    }

    audioAutoPlay('music');
    btn.addEventListener('touchend', function(){
                btn.classList.toggle('rotate');
                if (f) {   
                audio.pause();
                f = 0;
                } else {
                    audio.play();
                    f = 1;
                }
    });
	function timeCount(){
		var str = '';
		var date = new Date();
		var year = date.getFullYear();
		var week = date.getDay();
		var day = date.getUTCDate();
		var month = date.getMonth()+1;
		switch(week){
			case 0 : week = '天';
					 break;		
			case 1 : week = '一';
					 break;
			case 2 : week = '二';
					 break;
			case 3 : week = '三';
					 break;
			case 4 : week = '四';
					 break;
			case 5 : week = '五';
					 break;
			case 6 : week = '六';
					 break;
		}
		$('.year').html(year+'');
		$('.month').html(month+'月'+day+'号');
		$('.week').html('礼拜'+week);		
	}
	var timer = setInterval(function(){
		timeCount();
	},3000)
})();