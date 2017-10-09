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
    <title>商业领袖和操盘精英们 《总编十问》约您访谈了</title>
    <link rel="stylesheet" href="css/style.css?build=4">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
</head>
<body>
<div id="loading">
    <img src="img/loading.gif" alt="">
</div>
<div class="swiper-container">
    <div class="swiper-wrapper">
	    <div class="swiper-slide"></div>
        <div class="swiper-slide s1">
              <img src='img/p1/inviteBg.jpg' class='pic p1 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			  <img src='img/p1/inviteWords.png' class='pic p2 ani' swiper-animate-effect="flash" swiper-animate-duration="0.4s" swiper-animate-delay="0.8s"/>
			  <img src='img/p1/invitation.png' class='pic p3 ani' swiper-animate-effect="bounceInLeft" swiper-animate-duration="0.8s" swiper-animate-delay="1.6s"/>
			  <img src='img/p1/hourseBg.jpg' class='pic p4 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="1s" swiper-animate-delay="2.4s"/>
			  <img src='img/p1/hourse.png' class='pic p5 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.6s" swiper-animate-delay="3.4s"/>
			  <div id='time' class='ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="4s">
			         <h3 class='year'>2017</h3>
					 <p class='month'>6月15日</p>
					 <p class='week'>礼拜四</p>
			  </div>
			  <img src='img/p1/news.png' class='pic p6 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="4.8s"/>
			  <img src='img/p1/erweima.jpg' class='pic p7 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="5.2s"/>
			  <img src='img/p1/masters.png' class='pic p8 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="4.4s"/>
			  <img src="img/arrow.png" alt="" class="arrow">
        </div>
         <div class="swiper-slide s2">
             <img src='img/p2/title.png' class='pic p1 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			 <img src='img/p2/content01.png' class='pic p2 ani' swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.4s" swiper-animate-delay="0.8s"/>
			 <img src='img/p2/content02.png' class='pic p3 ani' swiper-animate-effect="fadeInRight" swiper-animate-duration="0.4s" swiper-animate-delay="1.2s"/>
			 <img src='img/p2/content03.png' class='pic p4 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="1.6s"/>
			 <img src="img/arrow.png" alt="" class="arrow">
        </div>
		<div class="swiper-slide s3">
             <img src='img/p3/title.png' class='pic p1 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			 <img src='img/p3/boy.jpg' class='pic p2 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="1.6s"/>
			 <img src='img/p3/canddle.png' class='pic p3 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.8s"/>
			 <img src='img/p3/intro.png' class='pic p4 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="1.2s"/>
			 <img src="img/arrow.png" alt="" class="arrow">
        </div>
		<div class="swiper-slide s4">
             <img src='img/p4/1.jpg' class='pic p1 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			 <img src='img/p4/2.jpg' class='pic p2 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.8s"/>
			 <img src='img/p4/3.jpg' class='pic p3 ani' swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.4s" swiper-animate-delay="1.6s"/>
			 <img src='img/p4/4.jpg' class='pic p4 ani' swiper-animate-effect="fadeInRight" swiper-animate-duration="0.4s" swiper-animate-delay="2.0s"/>
			 <img src='img/p4/5.jpg' class='pic p5 ani' swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.4s" swiper-animate-delay="2.4s"/>
			 <img src='img/p4/6.jpg' class='pic p6 ani' swiper-animate-effect="fadeInRight" swiper-animate-duration="0.4s" swiper-animate-delay="2.8s"/>
			 <img src='img/p4/7.jpg' class='pic p7 ani' swiper-animate-effect="fadeInLeft" swiper-animate-duration="0.4s" swiper-animate-delay="3.2s"/>
			 <img src='img/p4/8.jpg' class='pic p8 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="3.6s"/>
			 <img src='img/p4/9.jpg' class='pic p9 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="4.0s"/>
			 <img src='img/p4/10.jpg' class='pic p10 ani' swiper-animate-effect="zoomIn" swiper-animate-duration="0.4s" swiper-animate-delay="1.2s"/>
			 <img src="img/arrowTop.png" alt="" class="arrow">
			 
        </div>
    </div>
</div>



<div id="mask"></div>

<!-- bgm -->
<div id="bgm-btn">
    <audio src="audio/audio.mp3" loop="loop" preload  id="music"></audio>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/swiper.jquery.js"></script>
<script type="text/javascript" src="js/swiper.animate1.0.2.min.js"></script>
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
             title: '商业领袖和操盘精英们 《总编十问》约您访谈了',
             desc: '房观察原创访谈类栏目正式上线，诚邀行业大咖，共同发现商业价值。',
             link: 'http://prj.chuangjia.me/cj016/fangguancha/index.php',
             imgUrl: 'http://prj.chuangjia.me/cj016/fangguancha/img/theme.jpg'
           };
           wx.onMenuShareAppMessage(shareData);
           wx.onMenuShareTimeline(shareData);
         });
</script>
<!-- App -->
<script type="text/javascript" src="js/app.js"></script>
<!--移动端统计代码-->
<div  style="display:  none;">
        <script  src="http://s95.cnzz.com/z_stat.php?id=1261440272&web_id=1261440272"  language="JavaScript"></script>
</div>
</body>
</html>