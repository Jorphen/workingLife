(function(){
var flag = true;
var mySwiper = null;
window.mySwiper = mySwiper
function swiper_init(){
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
})
    //mySwiper.slideTo(1);
};

$(window).load(function() {
// 音乐自动播放
    $('#loading').hide();
    $('.swiper-container').height(screen_height);	
		swiper_init()
		line_svg(nth_line)		
	window.addEventListener('touchmove',function(b){
		b.preventDefault();
	},!1)
});

(function(a) {
        if (!a.requestAnimationFrame) {
                var b = 0;
                a.requestAnimationFrame = a.webkitRequestAnimationFrame ||
                function(c, d) {
                        var e = (new Date).getTime(),
                        f = Math.max(0, 16.7 - (e - b)),
                        g = a.setTimeout(function() {
                                c(e + f)
                        },
                        f);
                        return b = e + f,
                        g
                },
                a.cancelAnimationFrame = a.webkitCancelAnimationFrame || a.webkitCancelRequestAnimationFrame ||
                function(a) {
                        clearTimeout(a)
                }
        }
})(window);	
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
/*点线构造建筑图页面*/
     var svg = document.getElementById('line');
	 var lines = $('#line line'); //获取所有线条对象;
	 var line_timeLimit = [50,50,50,50,50,50,50,50,50,50,50,50]  //绘制线条时间限制;
	 var line_time_total = [200,200,200,200,200,200,200,200,200,200,200];
	 var timeLimit = [600,200,200,200,200,200,200,200,200,200,200]
	 var nth_line = 0;
	 var dis_top = 0;
	 var dis_left = 0;
	 var screen_height = document.body.clientHeight;
	 var line_coords = [
	                      {x2:80,y2:145},
						  {x2:0,y2:185},
						  {x2:750,y2:185},
						  {x2:80,y2:395},
						  {x2:750,y2:395},
						  {x2:80,y2:1559}
	                   ];	
function line_svg(num){
	     var nth_line = num;
		 var x0 = parseInt(lines.eq(nth_line).attr('x2'));
		 var y0 = parseInt(lines.eq(nth_line).attr('y2'));
		 var targetX = line_coords[nth_line].x2;
		 var targetY = line_coords[nth_line].y2;
		 var disX = targetX - x0;
		 var disY = targetY - y0;
		 var time_count = line_timeLimit[nth_line];
         var speed = 0;		 
		 switch(nth_line){
		    case 0:
				 setTimeout(function(){
					 $('#circle-handle').addClass('active');
				 },400)				 
				 break;
		    case 3:
				$('.sanhuanlu').fadeIn(600);
				 break;
			case 5:
                $('.fuchengdadao').fadeIn(600);	
				 break;		     
		}
		 if(disX == 0){
		      speed = disY / time_count;
			  requestAnimationFrame(B);
		 }else if(disY == 0){
		      speed = disX/time_count;
			  requestAnimationFrame(A);
		 }
	function A(){
		$('.light-dot2').fadeIn(500);
	    $('.light-dot2').css({'left':x0-20,'top':y0-5})
		x0+=speed;
		lines.eq(nth_line).attr('x2',x0);
		var m = requestAnimationFrame(A);		
		switch(nth_line){
			case 4:
				$('.tianfudadao').fadeIn(600);
				break;			
		}
		if(Math.abs(x0-targetX)<1){
		    $('.light-dot2').fadeOut(300);
			cancelAnimationFrame(m);			
			nth_line++;
			if(nth_line < lines.length){
				setTimeout(function(){
				   line_svg(nth_line)
				},timeLimit[nth_line-1]);
			}else{
				svg_dot_line(nth_dot)
				
			}
		}
	}
	var line_coords_2 = [
							{x2:148,y2:1252},
							{x2:148,y2:1162},
							{x2:173,y2:1076},
							{x2:173,y2:970},
							{x2:173,y2:867},
							{x2:173,y2:724},
							{x2:392,y2:788},
							{x2:581,y2:788},
							{x2:684,y2:917},
							{x:518,y2:917}
	                    ];
	function B(){
	    $('.light-dot1').fadeIn(500);
	    $('.light-dot1').css({'left':x0-5,'top':y0-40})
		y0+=speed;
		lines.eq(nth_line).attr('y2',y0);
		var m = requestAnimationFrame(B);
		switch(nth_line){
			case 5:
				$('.tianfuguoji').fadeIn(600);
				break;			
		}
		dis_top+=speed;	
		if(nth_line ==5){
			W(screen_height-1559,1000,$('#content')[0],'linear','y');
		}
		if(Math.abs(y0-targetY)<1){
		    $('.light-dot1').fadeOut();
			cancelAnimationFrame(m); 
            if(nth_line == 5){
				$('.title1').fadeIn(300);
			}			
			nth_line++;
			if(nth_line==6){
			   svg_dot_line(nth_dot)			   
			}else{
			    if(nth_line < lines.length){
				     setTimeout(function(){
			            line_svg(nth_line)
			         },timeLimit[nth_line-1]);
				}
			}			
		}
	}	
}
/*
else{			
                    svg_dot_line(nth_dot)				
				    setTimeout(function(){
					     dragScroll($('#c1')[0]);
					},200)
				}
*/

    function start_svg(){
	      setTimeout(function(){
		       line_svg(nth_line);
			   nth_line++;
		  },500)
	}

//点线部分绘制;

window.addEventListener('load',function(){
   var svg = $('#line')[0];
   $('#mask').bind('click',function(){
       alert(111)
   })
   var width = $(svg).width();
   //alert(width)
  // svg.style.backgroundColor = 'Red';
    setTimeout(function(){
	//    line_svg(nth_line);
	},1200)
		
},!1);
	function getStyles(a, b) {
                var c = a.ownerDocument.defaultView.getComputedStyle(a, null);
                return b ? c.getPropertyValue(b) || c[b] : c
        };
   function W(a, b, c) {
	        var orientation = arguments[4] || 'x';
			var rate = arguments[3] || 'linear';
				c = c && c.style;
				c.webkitTransitionTimingFunction = c.MozTransitionTimingFunction = c.msTransitionTimingFunction = c.OTransitionTimingFunction = c.transitionTimingFunction = rate;
				c.webkitTransitionTimingDelay = c.MozTransitionTimingDelay = c.msTransitionTimingDelay = c.OTransitionTimingDelay = c.transitionTimingDelay = '1s';
				c.webkitTransitionDuration = c.MozTransitionDuration = c.msTransitionDuration = c.OTransitionDuration = c.transitionDuration = b + "ms";
            switch(orientation){
				case 'x':
				     c.webkitTransform = "translate(" + a + "px,0)" + "translateZ(0)";
                     c.msTransform = c.MozTransform = c.OTransform = "translateX(" + a + "px)";
			         break;
				case 'y':
				     c.webkitTransform = "translate(0," + a + "px)" + "translateZ(0)";
                     c.msTransform = c.MozTransform = c.OTransform = "translateY(" + a + "px)";
			         break;
			}
    }
//对页面进行拖拽；
function dragScroll(obj){
	    var distance = 0;
		var height = $('#c1').height();
		var disY = -height+screen_height;
		var total = disY;
		var speed = 0;
		var deltaY = 0;
		var inter = 200;
		      obj.addEventListener('dragstart',function(b){
			         tob.gestures.session.firstTouch.center.y -= disY;
			  },!1)
			  obj.addEventListener('drag',function(b){			     
					   deltaY = b.detail.center.y - tob.gestures.session.firstTouch.center.y;				       
                       if(deltaY<=0 && deltaY >= total){
						   disY = deltaY;
						   W(deltaY,0,$('#content')[0],'linear','y')
					   }				   
			  },!1);
			  obj.addEventListener('dragend',function(b){
			        var timestamp = b.detail.deltaTime;					
					var speed = b.detail.deltaY/timestamp;
					var velocityY = Math.abs(b.detail.velocityY);  //速度;
					var a = velocityY/timestamp; //加速度
					var dis = 0;	
					if(timestamp < inter){
						if(b.detail.direction == 'down'){
							 disY = 0;
							 W(disY,1000,$('#content')[0],'ease','y')
						}else if(b.detail.direction == 'up'){
							 disY = total;								 
							 W(disY,1000,$('#content')[0],'ease','y');
						}
					}					
			  },!1);
			  obj.addEventListener('touchend',function(b){				  
				  var dis = b.changedTouches[0].pageY - tob.gestures.session.firstTouch.center.y;
				  if(disY == total && dis < 0 && Math.abs(dis) > 50){
					  W(-height,1000,$('#content')[0],'ease','y');
					  mySwiper.slideTo(1)
				  }
			  },!1)
	}
	//画点线部分;
var img = new Image();
img.style = '../img2/bg_colorful.jpg';
var lines_2 = $('#line2 line');
var nth_dot = 0;
var time_limit_2 = [20,20,20,20,20,20,20,20,20,20];
var time_line = [600,200,200,200,200,200,200,200,200]
var line_coords_2 = [
						{x2:148,y2:1252},
						{x2:148,y2:1162},
						{x2:173,y2:1076},
						{x2:173,y2:970},
						{x2:173,y2:867},
						{x2:173,y2:724},
						{x2:392,y2:788},
						{x2:581,y2:788},
						{x2:684,y2:917},
						{x2:518,y2:917}
	                ];						
function svg_dot_line(num){
	     var nth_line = num;
		 var x0 = parseInt(lines_2.eq(nth_line).attr('x2'));
		 var y0 = parseInt(lines_2.eq(nth_line).attr('y2'));
		 var targetX = line_coords_2[nth_line].x2;
		 var targetY = line_coords_2[nth_line].y2;
		 var disX = targetX - x0;
		 var disY = targetY - y0;
		 var time_count = time_limit_2[nth_line];
		 var speed = 0;
		 switch(nth_line){
		     case 0:
			       $('.build-3').fadeIn(200)
			       $('.dot1').show();
				   break;
			 case 2:
			       $('.build-2').fadeIn(200);
			       $('.dot2').show();
				   break;
		     case 4:
			       $('.build-1').fadeIn(200);
			       $('.dot3').show();
				   break;
             case 6:
			       $('.build-4').fadeIn(200);
			       $('.dot4').show();
				   break;
             case 8:
			       $('.build-5').fadeIn(200);
			       $('.dot5').show();
				   break;				   
			
		 }
		 if(disX == 0){
		      speed = disY / time_count;
			  requestAnimationFrame(D);
		 }else if(disY == 0){
		      speed = disX/time_count;
			  requestAnimationFrame(C);
		 }
		 function C(){
		     x0+=speed;
			 lines_2.eq(nth_line).attr('x2',x0);
			 var m = requestAnimationFrame(C);
			 if(Math.abs(x0-targetX)<1){
				cancelAnimationFrame(m); 
                switch(num){
					case 7:
					      $('.des4').fadeIn(300);
						  break;
					case 9:
					      $('.des5').fadeIn(300);
						  break;
				}				
				num++;
				if(num<lines_2.length){
				    setTimeout(function(){
						svg_dot_line(num);
					},time_line[num-1]);
				}else{
						$('.build-1').addClass('active');
						$('.build-2').addClass('active');
						$('.build-3').addClass('active');
						$('.build-4').addClass('active');
						$('.build-5').addClass('active');
						setTimeout(function(){
							$('.bg').fadeIn(600);
							$('.part1-arrow').show();
							dragScroll($('#c1')[0]);							
						},4000)
					}				
			}
		 }
		 function D(){
		     y0+=speed;
			 lines_2.eq(nth_line).attr('y2',y0);
			 var m = requestAnimationFrame(D);
			 if(Math.abs(y0-targetY)<1){
					cancelAnimationFrame(m);
                    switch(num){
					    case 1:
						       $('.des1').fadeIn(300);
							   break;
						case 3:
						       $('.des2').fadeIn(300);
							   break;
                        case 5:
						       $('.des3').fadeIn(300);
							   break;						   
					}					
					num++;
					if(num<lines_2.length){
					    setTimeout(function(){
							svg_dot_line(num);
						},time_line[num-1]);
					}
				}
		 }
}
})();