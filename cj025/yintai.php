<?php
include '../api/jssdk.php';
$jssdk = new JSSDK('wx612d369d94b7a825', '8443fb4ddb62da6659aab5b31cd068cf');
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html lang="zh-Hans">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=750,maximum-scale=1.0,user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <title>世界上最珍贵的33把钥匙，等你来找寻</title>
    <link rel="stylesheet" href="css/last.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
	<script>
	      var size_rate=1;
        function a(d, c, e) {
            if (d.addEventListener) {
                d.addEventListener(c, e, false)
            } else {
                d.attachEvent('on' + c, e)
            }
        };
        function b() {
            var c = document.documentElement.clientHeight || document.body.clientHeight;
			//alert(c)
			size_rate=c/1280;
			//alert(size_rate)
            document.documentElement.style.fontSize = c /12.8  + 'px'
        };
		window.size_rate = size_rate;
        b();
        a(window, 'resize', b);
	</script>
</head>
<body>
<div id="loading"></div>
<article id='content'>
       <section id='c1'>
	            <div id='circle-handle' class=''></div>
				<div class='bg hide'></div>
				<svg width="100%" height="100%" version="1.1" id='line' class='' xmlns="http://www.w3.org/2000/svg">
						<line x1="80" y1="0" x2="80" y2="0" style="stroke:rgba(255,255,255,1);stroke-width:3"/>
						<circle cx="80" cy="185" r="38" style="stroke:rgba(255,255,255,1)" stroke-width="3" fill="none"/>

						<line x1="43" y1="185" x2="43" y2="185" style="stroke:rgba(255,255,255,1);stroke-width:3"/>
						<line x1="118" y1="185" x2="118" y2="185" style="stroke:rgba(255,255,255,1);stroke-width:3"/>
						
						<line x1="80" y1="222" x2="80" y2="222" style="stroke:rgba(255,255,255,1);stroke-width:3"/>
						
						
						<line x1="0" y1="395" x2="0" y2="395" style="stroke:rgba(255,255,255,1);stroke-width:3"/>
						
						<line x1="80" y1="395" x2="80" y2="395" style="stroke:rgba(255,255,255,1);stroke-width:3"/>
						
	            </svg>
				<img src='img2/symbol.png' class='light-dot light-dot1 hide'/>
				<img src='img2/symbol.png' class='light-dot light-dot2 hide'/>
				<!--线路文字表述-->
			    <img src='img2/sanhuanlu.png' class='sanhuanlu hide'/>
			    <img src='img2/tianfudadao.png' class='tianfudadao hide'/>
			    <img src='img2/fuchengdadao.png' class='fuchengdadao hide'/>
			    <img src='img2/tianfuguoji.png' class='tianfuguoji hide'/>					   
			    <div class='title title1 hide'></div>
				<!--构建大厦-->
				<img src='img2/building/a.png' alt='' class='build-1' />
				<img src='img2/building/b.png' alt='' class='build-2' />
				<img src='img2/building/c.png' alt='' class='build-3' />
				<img src='img2/building/d.png' alt='' class='build-4' />
				<img src='img2/building/e.png' alt='' class='build-5' />
				<img src='img2/building/arc-des1.png' alt='' class='arc-description des1 hide' />
				<img src='img2/building/arc-des2.png' alt='' class='arc-description des2 hide' />
				<img src='img2/building/arc-des3.png' alt='' class='arc-description des3 hide' />
				<img src='img2/building/arc-des4.png' alt='' class='arc-description des4 hide' />
				<img src='img2/building/arc-des5.png' alt='' class='arc-description des5 hide' />
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
				<div class='dots dot5 hide'>
					  <div class='inner'></div>
				</div>
				<svg width="100%" height="100%" version="1.1" id='line2' xmlns="http://www.w3.org/2000/svg">
						<line x1="212" y1="1252" x2="212" y2="1252" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						<line x1="148" y1="1252" x2="148" y2="1252" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						
						<line x1="236" y1="1076" x2="236" y2="1076" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						<line x1="173" y1="1076" x2="173" y2="1076" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						
						<line x1="236" y1="867" x2="236" y2="867" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						<line x1="173" y1="867" x2="173" y2="867" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						
						<line x1="392" y1="1020" x2="392" y2="1020" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						<line x1="392" y1="788" x2="392" y2="788" style="stroke:rgba(255,255,255,.8);stroke-width:2" />												
				 
						<line x1="684" y1="1382" x2="684" y2="1382" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						<line x1="684" y1="917" x2="684" y2="917" style="stroke:rgba(255,255,255,.8);stroke-width:2"/>
						
				</svg>						               							   
				<img src="img3/arrow.png" alt="" class="part1-arrow hide">
	   </section>
	   <section id='c2' class="swiper-container">
	            <div class="swiper-wrapper">
						<div class="swiper-slide"></div>
						<div class="swiper-slide s0">
						      <img src='img3/p0/1.png' class='pic p1 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0.8s"/>
							  <img src='img3/p0/2.png' class='pic p2 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="1.6s"/>
							  <img src='img3/p0/3.png' class='pic p3 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.4s" swiper-animate-delay="2s"/>
							  <img src='img3/p0/4.png' class='pic p4 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="2.4s"/>
							  <img src='img3/p0/5.png' class='pic p5 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="2.4s"/>
							  <img src='img3/p0/6.png' class='pic p6 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="2.8s"/>
							  <img src='img3/p0/7.png' class='pic p7 ani' swiper-animate-effect="buildScale" swiper-animate-duration="0.8s" swiper-animate-delay="3.2s"/>
							  <div class='pic p8 ani' swiper-animate-effect="planeFly" swiper-animate-duration="2s" swiper-animate-delay="4s"></div>
							  <img src="img3/arrow.png" alt="" class="arrow">
						</div>
						<div class="swiper-slide s1">
							  <img src='img3/p1/1.png' class='pic p1 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0.8s"/>
							  <img src='img3/p1/2.png' class='pic p2 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="1.6s"/>
							  <img src='img3/p1/3.png' class='pic p3 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="2s"/>
							  <img src='img3/p1/4.png' class='pic p4 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="2s"/>
							  <img src='img3/p1/5.png' class='pic p5 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="2s"/>
							  <img src='img3/p1/6.png' class='pic p6 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="2s"/>
							  <img src='img3/p1/7.jpg' class='pic p7 ani' swiper-animate-effect="lightSpeedIn" swiper-animate-duration="0.8s" swiper-animate-delay="2.4s"/>
							  <img src="img3/arrow.png" alt="" class="arrow">
						</div>
						<div class="swiper-slide s3">
							  <img src='img3/p3/1.png' class='pic p1 ani' swiper-animate-effect="flipInX" swiper-animate-duration="2.4s" swiper-animate-delay="0.4s"/>
							  <img src='img3/p3/2.png' class='pic p2 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.2s" swiper-animate-delay="0.8s"/>
							  <img src='img3/p3/3.png' class='pic p3 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.2s" swiper-animate-delay="0.8s"/>
							  <img src='img3/p3/4.png' class='pic p4 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.2s" swiper-animate-delay="0.8s"/>
							  <img src='img3/p3/5.png' class='pic p5 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.2s" swiper-animate-delay="0.8s"/>
							  <img src='img3/p3/6.png' class='pic p6 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.2s" swiper-animate-delay="0.8s"/>
							  <!--<img src='img3/p3/7.png' class='pic p7 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="2.2s"/>-->
							  <div class='pic p7 ani' swiper-animate-effect="bounceInLeft" swiper-animate-duration="1s" swiper-animate-delay="1.5s" >
							        <div id='print'></div>
							  </div>
							  <img src='img3/p3/8.gif' class='pic p8 ani' id='gif' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="2.6s"/>
							  <img src="img3/arrow.png" alt="" class="arrow">       
					   </div>
						<div class="swiper-slide s4">
							  <img src='img3/p4/1.png' class='pic p1 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
							  <img src='img3/p4/2.png' class='pic p2 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
							  <img src='img3/p4/3.png' class='pic p3 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
							  <img src='img3/p4/4.png' class='pic p4 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
							  <img src='img3/p4/5.png' class='pic p5 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
							  <a href='game.php' class='pic p6 ani' swiper-animate-effect="bounceIn" swiper-animate-duration="0.8s" swiper-animate-delay="1s">
								  <img src='img3/p4/6.png'/>
								  <img src='img3/hand.png' id='hand'/>
							  </a>
							  <img src='img3/p4/7.jpg' class='pic p7 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
							  <img src="img3/arrow_top.png" alt="" class="arrow">       
					   </div>
				</div>
	   </section>
</article>
<div id="mask"></div>
<!-- bgm -->
<div id="bgm-btn">
    <audio src="audio/1.mp3" loop="loop" preload  id="music"></audio>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/swiper.jquery.js"></script>
<script type="text/javascript" src="js/swiper.animate1.0.2.min.js"></script>
<script type='text/javascript' src='js/evsetup.js'></script>

<!-- App -->
<script type="text/javascript" src="js/app.js"></script>
<script> 
    var gif = [
	             'img3/gif/1.jpg',
				 'img3/gif/2.jpg',
				 'img3/gif/3.jpg',
				 'img3/gif/4.jpg',
				 'img3/gif/5.jpg'
	          ]
	var pic = document.getElementById('gif');
	var nth_gif = 0;
	var timer = setInterval(function(){
	    if(nth_gif >gif.length-1){
		    nth_gif = 0;
		}
		pic.src = gif[nth_gif];
		nth_gif++;
	},1200);
</script>
<!--移动端统计代码-->
<div  style="display:  none;">
        <script  src="http://s95.cnzz.com/z_stat.php?id=1261440272&web_id=1261440272"  language="JavaScript"></script>
</div>
</body>
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
             link: 'http://prj.chuangjia.me/cj025/yintai.php',
             imgUrl: 'http://prj.chuangjia.me/cj025/img/logo.jpg'
           };
           wx.onMenuShareAppMessage(shareData);
           wx.onMenuShareTimeline(shareData);
         });
</script>
</html>