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
    <link rel="stylesheet" href="css/detail.css?build=4">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/animate.min.css">
</head>
<body>
<div id="loading">
    <img src="img3/loading.gif" alt="">
</div>
<div class="swiper-container">
    <div class="swiper-wrapper">
	    <div class="swiper-slide"></div>
        <div class="swiper-slide s1">
		      <img src='img3/p1/1.png' class='pic p1 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="0.8s"/>
			  <img src='img3/p1/2.png' class='pic p2 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="1.6s"/>
			  <img src='img3/p1/3.png' class='pic p3 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="2.4s"/>
			  <img src='img3/p1/4.png' class='pic p4 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="3.2s"/>
			  <img src='img3/p1/5.png' class='pic p5 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="4.0s"/>
			  <img src='img3/p1/6.png' class='pic p6 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.8s" swiper-animate-delay="4.8s"/>
			  <img src='img3/p1/7.jpg' class='pic p7 ani' swiper-animate-effect="lightSpeedIn" swiper-animate-duration="0.8s" swiper-animate-delay="5.2s"/>
              <img src="img3/arrow.png" alt="" class="arrow">
		</div>
         <div class="swiper-slide s2">
              <img src='img3/p2/1.png' class='pic p1 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="0.6s"/>
			  <img src='img3/p2/2.png' class='pic p2 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="1.2s"/>
			  <img src='img3/p2/3.png' class='pic p3 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="1.8s"/>
			  <img src='img3/p2/4.png' class='pic p4 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="2.4s"/>
			  <img src='img3/p2/5.png' class='pic p5 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="3.0s"/>
			  <img src='img3/p2/6.png' class='pic p6 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="3.6s"/>
              <img src="img3/arrow.png" alt="" class="arrow">       
	   </div>
		<div class="swiper-slide s3">
              <img src='img3/p3/1.png' class='pic p1 ani' swiper-animate-effect="flipInX" swiper-animate-duration="2.4s" swiper-animate-delay="0.4s"/>
			  <img src='img3/p3/2.png' class='pic p2 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="1.2s"/>
			  <img src='img3/p3/3.png' class='pic p3 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="1.8s"/>
			  <img src='img3/p3/4.png' class='pic p4 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="2.4s"/>
			  <img src='img3/p3/5.png' class='pic p5 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="3.0s"/>
			  <img src='img3/p3/6.png' class='pic p6 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="3.6s"/>
			  <img src='img3/p3/7.png' class='pic p7 ani' swiper-animate-effect="fadeInUp" swiper-animate-duration="0.6s" swiper-animate-delay="4.2s"/>
			  <img src='img3/p3/8.gif' class='pic p8 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="4.6s"/>
              <img src="img3/arrow.png" alt="" class="arrow">       
	   </div>
		<div class="swiper-slide s4">
              <img src='img3/p4/1.png' class='pic p1 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			  <img src='img3/p4/2.png' class='pic p2 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			  <img src='img3/p4/3.png' class='pic p3 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			  <img src='img3/p4/4.png' class='pic p4 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			  <img src='img3/p4/5.png' class='pic p5 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
			  <a href='index.php' class='pic p6 ani' swiper-animate-effect="bounceIn" swiper-animate-duration="0.8s" swiper-animate-delay="1s">
			      <img src='img3/p4/6.png'/>
				  <img src='img3/hand.png' id='hand'/>
			  </a>
			  <img src='img3/p4/7.jpg' class='pic p7 ani' swiper-animate-effect="fadeIn" swiper-animate-duration="0.4s" swiper-animate-delay="0.4s"/>
              <img src="img3/arrow_top.png" alt="" class="arrow">       
	   </div>
    </div>
</div>



<div id="mask"></div>

<!-- bgm -->
<div id="bgm-btn">
    <audio src="audio/1.mp3" loop="loop" preload  id="music"></audio>
</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/swiper.jquery.js"></script>
<script type="text/javascript" src="js/swiper.animate1.0.2.min.js"></script>

<!-- App -->
<script type="text/javascript" src="js/app.js"></script>
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
             link: 'http://prj.chuangjia.me/cj024/welcom.php',
             imgUrl: 'http://prj.chuangjia.me/cj024/img/logo.jpg'
           };
           wx.onMenuShareAppMessage(shareData);
           wx.onMenuShareTimeline(shareData);
         });
</script>
</html>