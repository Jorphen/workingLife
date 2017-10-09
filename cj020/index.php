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
    <title></title>   
</head>
<body>
<div id="loading">
     <img src='img/loading.gif' />
</div>
    <div id='index'>
	      <img src='img/bg.jpg' />
	</div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script>
	 function isWeiXin(){
		 var agent = window.navigator.userAgent.toLowerCase();
		 if(agent.match(/MicroMessenger/i) == 'micromessenger'){
			  return 1;
		 }else{
			  return !1;
		 }
	 }
	 var a = isWeiXin();
	 if(!a){
		 window.location = 'weixin://prj.chuangjia.me/cj020/index.php';
		 setTimeout(function(){
			 getUid();			 
		 },10000);
	 }else{
		 getUid();
	 }
	function getUid() {
        $.ajax({
            type: 'get',
            url: '//prj.chuangjia.me/wxsso//getuser?',
            data: {ssid: window.localStorage.CJSSID || ""},
            dataType: "json",
            success: function (data) {
                if(data.ssid) {
                    window.localStorage.CJSSID = data.ssid
                }
                if(data.code == '201') {
                    window.location.assign(data.url);
                } else {
                    if ( data.user.uid) {
                        window.localStorage.CJWXID = data.user.uid;
                    }
                }
            },
            error: function (data) {
                return;
            }
        });
    }
	window.addEventListener('load',function(){
		$('#loading').hide();
		$(document).bind('touchmove',function(b){b.preventDefault();})
	},!1)	
</script>
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
<!--移动端统计代码-->
<div  style="display:  none;">
        <script  src="http://s95.cnzz.com/z_stat.php?id=1261440272&web_id=1261440272"  language="JavaScript"></script>
</div>
</body>
</html>