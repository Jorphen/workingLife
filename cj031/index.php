<?php
include '../api/jssdk.php';
$jssdk = new JSSDK('wx612d369d94b7a825', '8443fb4ddb62da6659aab5b31cd068cf');
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE HTML>
<html>
      <head>
	         <meta charset='utf-8'>
			 <meta name='viewport' content='width=750,maximum-scale=1.0,user-scalable=no'>
			 <link href='css/style.css' type='text/css' rel='stylesheet'>
			 <link rel="stylesheet" href="css/swiper.min.css">
             <link rel="stylesheet" href="css/animate.min.css">
			 <title>一起走过的1095天，感谢有你!</title>
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
					document.documentElement.style.fontSize = c /13.34  + 'px'
				};
				window.size_rate = size_rate;
				b();
				//a(window, 'resize', b);				
			</script>	  
	  </head>
	  <body>
	        <div id="loading">
				<img src="img/loading.gif" alt="">
			</div>
	         <!--
	         <article id='container'>
			          <div class='scene'></div>
					  <div class='light'></div>
			 </article>
			 -->
			 <div class="swiper-container">
					<div class="swiper-wrapper">
							<div class="swiper-slide"></div>
							<div class="swiper-slide s1">
							      <div class='blue-light pic'></div>
								  <img src='img/bg.jpg' class='pic p1 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="10s" swiper-animate-delay=".5s"/>	  
								  
								  <img src='img/baby.png' class='pic p3 ani' swiper-animate-effect="babyShow" swiper-animate-duration="2s" swiper-animate-delay="5s">
								  <img src='img/p1/1.png' class='pic p4 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="2s" swiper-animate-delay="0s"/>
								  <img src='img/p1/2.png' class='pic p5 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="2s" swiper-animate-delay="2s"/>
								  <img src='img/p1/kid.png' class='pic p6 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="7s">
								  <div class='pic p2 ani' swiper-animate-effect="fly-1" swiper-animate-duration="8s" swiper-animate-delay="0s">
								          <img src='img/light.png' />
								  </div>
								  <img src="img/arrow.png" alt="" class="arrow">
							</div>
							<div class="swiper-slide s2">
								  <div class='pic p1 ani' swiper-animate-effect="fly-2" swiper-animate-duration="8s" swiper-animate-delay="0s">
								          <img src='img/light.png' />
								  </div>
								  <img src='img/p2/1.png' class='pic p2 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="1s" swiper-animate-delay=".5s"/>
								  <img src='img/p2/2.png' class='pic p3 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="1s" swiper-animate-delay="2s"/>
								  <img src='img/p2/cry.png' class='pic p4 ani' swiper-animate-effect="woman" swiper-animate-duration="2s" swiper-animate-delay="3s"/>
								  <img src='img/p2/old.png' class='pic p5 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="5s"/>
							      <img src="img/arrow.png" alt="" class="arrow">
							</div>
							<div class="swiper-slide s3">
								  <img src='img/p3/1.png' class='pic p1 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="2s" swiper-animate-delay="0s"/>
								  <img src='img/p3/cake.png' class='pic p2 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="2s"/>
								  <img src='img/p3/btn.png' id='ipt-id' class='pic p3 ani' swiper-animate-effect="fadeIn" swiper-animate-duration=".1s" swiper-animate-delay="8s"/>
                                  <img src='img/logo.png' class='pic p4 ani' swiper-animate-effect="fadeIn" swiper-animate-duration=".1s" swiper-animate-delay="8s" />	
 								  
								  <img src='img/p3/canddle.png' class='pic p6 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="2s" swiper-animate-delay="6s"/>
								  <div class='pic p7 ani' swiper-animate-effect='fadeIn' swiper-animate-duration='2s' swiper-animate-delay='6s'>
								        <img src='img/p3/canddle_bg.png' class='canddle-bg'/>
								  </div>
								  <div class='pic p8 ani' swiper-animate-effect="fly-3" swiper-animate-duration="4s" swiper-animate-delay="2s">
								          <img src='img/light.png' />
								  </div>
								  <img src="img/arrow_top.png" alt="" class="arrow">
							</div>
						</div>
			</div>
			<div id='id' class='hide'>
				  <p>请输入你的姓名和工号</p>
				  <div class='form'>
				         <label for='username'>姓名:</label>
						 <input type='text' id='username' />
						 <label for='userid'>工号:</label>
						 <input type='text' id='userId' />
				  </div>
				  <div class='button'>
				        <img src='img/commit.png' id='commit'/>
				  </div>
				  <div class='quit'></div>
		    </div>
			<!--抽奖-->
			<div id='prize' class='hide'>
			        <img src='img/dial.png' class='dial' />
					      <img src='img/pointer.png' class='pointer' />
					
					<img src='img/start_prize.png' class='go' />
					<img src='img/logo.png' class='logo' />
			</div>
			<!--排名段位-->
			<div id='rank' class='hide'>
			       <div class='leave'></div>
				   <div class='content'>
				           <p class='time'></p>
						   <p class='rank-position'></p>
						   <p class='comment'></p>
				   </div>
				   <div class='confirm'>
				        <img src='img/confirm.png' id='confirm'/>
				  </div>
			</div>
			<!--中奖结果-->
			<div id='result' class='hide'>
			      <div class='cancel'></div>
				  <div class='content'>
				           <div class='con'>恭喜你!</div>
						   <p class='prize-info'>获得带薪假期1天，</p>
						   <p class='comment'>准备去哪“浪”啊！！！</p>
				  </div>
			</div>
			<!--结束页面-->
			<div id='end' class='hide'>
			      <div class='delete'></div>
				  <div class='content'>
				           <div class='con'>恭喜你!</div>
				           <p>你加入创家已满三年，</p>
						   <p>为感谢你的不离不弃，</p>
						   <p>公司将额外送上一份特殊的礼物！</p>
				  </div>
			</div>
			<div id='mask' class='hide'></div>
			<div id="bgm-btn">
					<audio src="audio/bg.mp3" loop="loop" preload="" id="music"></audio>
			</div>
	  </body>
	  <script type="text/javascript" src="js/jquery.min.js"></script>
	  <script type="text/javascript" src="js/swiper.jquery.js"></script>
	  <script type="text/javascript" src="js/swiper.animate1.0.2.min.js"></script>
	  <script type='text/javascript' src='js/app.js'></script>
	  <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"> </script>
	  <script type="text/javascript">
	  			/*
				 wx.config({
					 debug: false,
					 appId: 'wx612d369d94b7a825',
					 timestamp: 1503838350,
					 nonceStr: 'Wg22ZpxQCYcWA3l6',
					 signature: 'a2fdbfb48ffafa17c4d0abc622a7454acc5e0441',
					 jsApiList: [
					   'onMenuShareTimeline',
					   'onMenuShareAppMessage'
					 ]
				 });

				 wx.ready(function () {
					var shareData = {
					 title: '一起走过的1095天，感谢有你!',
					 desc: '一起走过的1095天，感谢有你!',
					 link: 'http://prj.chuangjia.me/cj031/index.php',
					 imgUrl: 'http://prj.chuangjia.me/cj031/img/cj_logo.png'
				   };
				   wx.onMenuShareAppMessage(shareData);
				   wx.onMenuShareTimeline(shareData);
				 });
				*/


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
		             title: '一起走过的1095天，创家感谢有你!',
		             desc: '2017年8月28日，创家live+三岁啦！',
		             link: 'http://prj.chuangjia.me/cj031/index.php',
		             imgUrl: 'http://prj.chuangjia.me/cj031/img/cj_logo.png'
		           };
		           wx.onMenuShareAppMessage(shareData);
		           wx.onMenuShareTimeline(shareData);
		         });

		</script>
</html>
