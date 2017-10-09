<?php
include '../api/jssdk.php';
$jssdk = new JSSDK('wx612d369d94b7a825', '8443fb4ddb62da6659aab5b31cd068cf');
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE HTML>
<html>
<head>
      <meta charset='UTF-8'>
	  <meta name='viewport' content='width=750,user-scalable=no,maximum-scale=1.0'>
	  <link rel="stylesheet" href="css/welcom.css" type='text/css'>
	  <title>世界上最珍贵的33把钥匙，等你来找寻</title>
	  <script type='text/javascript' src='js/iscroll.js'></script>
	  <script type='text/javascript' src='js/evsetup.js'></script>
	  <script type='text/javascript' src='js/touch.js'></script>
      <script>
		 
	</script>	  
	 
</head>
<body>
    <div id="loading">
         <img src="img/loading.gif" alt="">
    </div>
    <article id='container' class=''>
	           <section class='wrapper'>
                       <div id='circle-handle' class=''></div>			   
			           <svg width="100%" height="100%" version="1.1" id='line' class='' xmlns="http://www.w3.org/2000/svg">
								<line x1="112" y1="0" x2="112" y2="0" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								<circle cx="112" cy="258" r="35" stroke="rgba(208,184,126,1)" stroke-width="3" fill="none"/>

								<line x1="77" y1="258" x2="77" y2="258" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								<line x1="147" y1="258" x2="147" y2="258" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								
								<line x1="112" y1="293" x2="112" y2="293" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								
								
								<line x1="0" y1="466" x2="0" y2="466" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								
								<line x1="112" y1="466" x2="112" y2="466" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								
								<line x1="112" y1="1620" x2="112" y2="1620" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								<line x1="695" y1="1620" x2="695" y2="1620" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								
								<line x1="695" y1="2340" x2="695" y2="2340" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								<line x1="112" y1="2340" x2="112" y2="2340" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								
								<line x1="112" y1="2766" x2="112" y2="2766" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
								<line x1="524" y1="2766" x2="524" y2="2766" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
                       </svg>
					   <img src='img2/symbol.png' class='symbol s1 hide'/>
					   <img src='img2/symbol-1.png' class='symbol s2 hide'/>
					   <img src='img2/symbol-1.png' class='symbol s3 hide'/>
					   <img src='img2/symbol.png' class='symbol s4 hide'/>
					   <img src='img2/symbol-1.png' class='symbol s5 hide'/>
					   <img src='img2/symbol.png' class='symbol s6 hide'/>
					   <img src='img2/symbol-1.png' class='symbol s7 hide'/>
					   <img src='img2/symbol.png' class='symbol s8 hide'/>
					   <img src='img2/symbol-1.png' class='symbol s9 hide'/>
					   <img src='img2/symbol.png' class='symbol s10 hide'/>
					   <img src='img2/symbol-1.png' class='symbol s11 hide'/>
					   <img src='img2/symbol.png' class='symbol s12 hide'/>
					   <!--线路文字表述-->
					   <img src='img2/sanhuanlu.png' class='symbol sanhuanlu hide'/>
					   <img src='img2/tianfudadao.png' class='symbol tianfudadao hide'/>
					   <img src='img2/fuchengdadao.png' class='symbol fuchengdadao hide'/>
					   <img src='img2/tianfuguoji.png' class='symbol tianfuguoji hide'/>
					   
					   <div class='title title1 hide'>
					         <div class='title-mask'></div>
					   </div>
					   <!--<div class='t1_mask active'></div>-->
					   <!--构建大厦部分-->					   
					   <div id='building-wrapper'>
					            <img src='img2/building/1.png' alt='' class='symbol build-1' />
								<img src='img2/building/2.png' alt='' class='symbol build-2' />
								<img src='img2/building/3.png' alt='' class='symbol build-3' />
							    <div class='dot-line'>
								        <img src='img2/building/arc-des1.png' alt='' class='arc-description des1 hide' />
										<img src='img2/building/arc-des2.png' alt='' class='arc-description des2 hide' />
										<img src='img2/building/arc-des3.png' alt='' class='arc-description des3 hide' />
										<img src='img2/building/arc-des4.png' alt='' class='arc-description des4 hide' />
										<div class='dots dot1 hide'>
											  <div class='inner'></div>
										</div>
										<div class='dots dot2 hide'>
											  <div class='inner'></div>
										</div>
										<div class='dots dot3 hide'>
											  <div class='inner'></div>
										</div>
										<div class='dots dot4 hide'>
											  <div class='inner'></div>
										</div>
										<svg width="100%" height="100%" version="1.1" id='line2' xmlns="http://www.w3.org/2000/svg">
												<line x1="110" y1="685" x2="110" y2="685" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
												<line x1="35" y1="685" x2="35" y2="685" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
												
												<line x1="328" y1="400" x2="328" y2="400" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
												<line x1="328" y1="210" x2="328" y2="210" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
												
												<line x1="143" y1="576" x2="143" y2="576" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
												<line x1="68" y1="576" x2="68" y2="576" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
												
												<line x1="143" y1="254" x2="143" y2="254" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
												<line x1="68" y1="254" x2="68" y2="254" style="stroke:rgba(208,184,126,1);stroke-width:3"/>
												
												
										</svg>						               				
		                        </div>
					   </div>
					   <!--第二部分(公园部分)-->
					   
					   <div class='title title2'>
					         <div class='title-mask'></div>
					   </div>
					   <div id='park-wrapper'>
					         <div class='park-mask'></div>
					   </div>
					   <!--第三部分-->
					   <img src='img2/t3-1.png' class='symbol t3-1'>
					   <img src='img2/t3-2.png' class='symbol t3-2'>
					   <img src='img2/t3-3.png' class='symbol t3-3'>
					   <img src='img2/t3-4.png' class='symbol t3-4'>
					   <img src='img2/t3-5.png' class='symbol t3-5'>
					   
			   </section>
	  </article>
	  <div id='next' class='hide'><a href='detail.php' ></a></div>
      <article id='mask' class='hide'></article>	
      <div id="bgm-btn">
            <audio src="audio/1.mp3" loop="loop" preload  id="music"></audio>
      </div>
      <!--移动端统计代码-->
	  <div  style="display:  none;">
				<script  src="http://s95.cnzz.com/z_stat.php?id=1261440272&web_id=1261440272"  language="JavaScript"></script>
	  </div>	  
</body>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
<script type="text/javascript">
		 wx.config({
             debug: false,
             appId: '<?php echo $signPackage["appId"];?>',
             timestamp: <?php echo $signPackage["timestamp"];?>,
             nonceStr: '<?php echo $signPackage["nonceStr"];?>',
             signature: '<?php echo $signPackage["signature"];?>',
             jsApiList: [
               'onMenuShareTimeline',
               'onMenuShareAppMessage'
             ]
         });

         wx.ready(function () {
            var shareData = {
             title: '世界上最珍贵的33把钥匙，等你来找寻',
             desc: '华尔道夫的难忘故事，7月31日开启。',
             link: 'http://prj.chuangjia.me/cj024/welcom.php',
             imgUrl: 'http://prj.chuangjia.me/cj024/img/logo.jpg'
           };
           wx.onMenuShareAppMessage(shareData);
           wx.onMenuShareTimeline(shareData);
         });
</script>
<script>
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
     function myScroll(){
		     var myScroll;			
				myScroll = new IScroll('#container', {
					scrollX: false,
					scrollY: true
				});
            document.addEventListener('touchmove',function(b){
		        b.preventDefault();
		    },!1)				
	}
     //线条跑起来;
	 var svg = document.getElementById('line');
	 var lines = $('#line line'); //获取所有线条对象;
	 var line_timeLimit = [30,30,40,30,30,50,50,50,50,50,50,50]  //绘制线条时间限制;
	 var line_time_total = [200,200,200,200,200,200,200,200,200,200,200];
	 var timeLimit = [600,200,200,200,200,200,200,200,200,200,200]
	 var nth_line = 0;
	 var dis_top = 0;
	 var dis_left = 0;
	 var screen_height = $('#container').height();
	 var line_coords = [
	                      {x2:112,y2:222},
//						  {x2:0,y2:0},
						  {x2:0,y2:258},
						  {x2:750,y2:258},
						  {x2:112,y2:466},
						  {x2:750,y2:466},
						  {x2:112,y2:1620},				  
						  {x2:695,y2:1620},
						  {x2:695,y2:2340},
						  {x2:112,y2:2340},
						  {x2:112,y2:2766},
						  {x2:524,y2:2766},
						  {x2:524,y2:3100}
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
				 $('#circle-handle').addClass('active');				 
				 break;
		    case 3:
				$('.sanhuanlu').fadeIn(600);
				 break;
			case 5:
                $('.fuchengdadao').fadeIn(600);	
				$('.title1').fadeIn(300);
				//$('.title-mask').addClass('active');
				 break;
			case 11:
				$('.t3-5').addClass('active');			   
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
		$('.s2').fadeIn(500);
	    $('.s2').css({'left':x0-20,'top':y0-5})
		x0+=speed;
		lines.eq(nth_line).attr('x2',x0);
		var m = requestAnimationFrame(A);		
		switch(nth_line){
			case 4:
				$('.tianfudadao').fadeIn(600);
				break;
			case 6:
                 $('.tianfuguoji').fadeIn(600);				
				break;
		}
		if(Math.abs(x0-targetX)<1){
		    $('.s2').fadeOut(300);
			cancelAnimationFrame(m);			
			nth_line++;
			setTimeout(function(){
			   line_svg(nth_line)
			},timeLimit[nth_line-1]);
		}
	}
	function B(){
	    $('.s1').fadeIn(500);
	    $('.s1').css({'left':x0-5,'top':y0-40})
		y0+=speed;
		lines.eq(nth_line).attr('y2',y0);
		var m = requestAnimationFrame(B);
		dis_top+=speed;	
		if(dis_top>466 && dis_top < 2997){
		    if(nth_line===5){
			     W(-466,2000,$('.wrapper')[0],'linear','y')
			}else if(nth_line===7){
			     W(-1620,1000,$('.wrapper')[0],'linear','y');
				 $('.t2').delay(1000).fadeIn(1000);
				 $('.park-mask').delay(1000).addClass('active');
			}else if(nth_line===11){
			    W(-2997+screen_height,1000,$('.wrapper')[0],'linear','y')			
			}
		}
		if(Math.abs(y0-targetY)<1){
		    $('.s1').fadeOut();
			cancelAnimationFrame(m); 			
			nth_line++;
			if(nth_line==6){
			   svg_dot_line(nth_dot);
			   setTimeout(function(){
			        line_svg(nth_line)
			    },4000);
			}else{
			    if(nth_line < lines.length){
				     setTimeout(function(){
			            line_svg(nth_line)
			         },timeLimit[nth_line-1]);
				}else{				    
				    setTimeout(function(){
					   $('#next').show();
					   W(0,2000,$('.wrapper')[0],'linear','y');
					   setTimeout(function(){
					       myScroll();
					   },2100)
					   //$('#mask').hide();
					},2100)
				}
			}			
		}
	}	
}
    function start_svg(){
	      setTimeout(function(){
		       line_svg(nth_line);
			   nth_line++;
		  },500)
	}


//点线部分绘制;

window.addEventListener('load',function(){
    setTimeout(function(){
	     line_svg(nth_line);
	},1200)
		
},!1);
	function getStyles(a, b) {
                var c = a.ownerDocument.defaultView.getComputedStyle(a, null);
                return b ? c.getPropertyValue(b) || c[b] : c
        };
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
//画点线部分;
var lines_2 = $('#line2 line');
var nth_dot = 0;
var time_limit_2 = [20,20,20,20,20,20,20,20];
var time_line = [600,200,200,200,200,200,200]
var line_coords_2 = [
	                        {x2:35,y2:685},
							{x2:35,y2:785},
							{x2:328,y2:210},
							{x2:528,y2:210},
							{x2:68,y2:576},
							{x2:68,y2:453},
							{x2:68,y2:254},
							{x2:68,y2:90}							
	                     ]
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
			       $('.build-1').addClass('active');
			       $('.dot1').show();
				   break;
			 case 2:
			       $('.build-3').addClass('active');
			       $('.dot4').show();
				   break;
			case 3:
				   $('.des4').fadeIn(300);
				   break;
			 case 4:
			       $('.build-2').addClass('active');
			       $('.dot2').show();
				   break;
			 case 6:			       
			       $('.dot3').show();
				   break;
			 case 7:
				   $('.des3').fadeIn(300);
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
			 console.log(nth_line)
			 lines_2.eq(nth_line).attr('x2',x0);
			 var m = requestAnimationFrame(C);
			 if(Math.abs(x0-targetX)<1){
				cancelAnimationFrame(m);			
				num++;
				if(num<lines_2.length){
				    setTimeout(function(){
						svg_dot_line(num);
					},time_line[num-1]);
				}
			}
		 }
		 function D(){
		     y0+=speed;
			 console.log(nth_line)
			 lines_2.eq(nth_line).attr('y2',y0);
			 var m = requestAnimationFrame(D);
			 if(Math.abs(y0-targetY)<1){
					cancelAnimationFrame(m);
                    switch(num){
					    case 1:
						       $('.des1').fadeIn(300);
							   break;
						case 5:
						       $('.des2').fadeIn(300);
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
    window.addEventListener('load',function(b){
		$('#loading').hide();
		document.addEventListener('touchmove',function(b){
		    b.preventDefault();
		},!1)
	},!1)	
</script>
</html>