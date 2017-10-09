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
	<link rel="stylesheet" href="css/style.css" type='text/css'>
    <title>妈宝大福利！金地·天府城MIX全城派票！</title>   
</head>
<body>
	<div id="loading">
		 <img src='img/loading.gif' />
	</div>
	<div id='page' class='hide'>
	    <img src='img/suc/2.png' alt='' class='congratuation' />
		<img src='img/suc/3.png' alt='' class='get' />
		<img src='img/suc/4.png' alt='' class='intro' />
	</div>
	<iframe id='failure' src='fail.php' class='hide'></iframe>
	<iframe id='repeat' src='repeat.php' class='hide'></iframe>
	<iframe id='over' src='over.php' class='hide'></iframe>
	<!--填写信息表-->
	<div id='userform' class='hide'>
	      <img src='img/suc/7.png' alt='' class='formBg' />
		  <form id='form1'>
			  <input type='text' class='username name1' />
			  <input type='text' class='telephone tel01' />
		  </form>
		  <form id='form2'>
			  <input type='text' class='username name2' />
			  <input type='text' class='telephone tel02' />
		  </form>
		  <img src='img/1/3.png' class='commit' id='submit' />
	</div>
	<!--确认提交-->
	<div id='mask' class='hide'>
	      <img src='img/1/5.png' alt='' class='alert' />
		  <img src='img/1/6.png' alt='' class='quit' />
	</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/app.js"></script>
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
            title: '妈宝大福利！金地·天府城MIX全城派票！',
            desc: '各位宝宝们，手慢无哦！',
            link: 'http://prj.chuangjia.me/cj020/index.php',
            imgUrl: 'http://prj.chuangjia.me/cj020/img/log.jpg'
          };
          wx.onMenuShareAppMessage(shareData);
          wx.onMenuShareTimeline(shareData);
        });
    </script>
    </script>
<div  style="display:  none;">
        <script  src="http://s95.cnzz.com/z_stat.php?id=1261440272&web_id=1261440272"  language="JavaScript"></script>
</div>

</body>
</html>