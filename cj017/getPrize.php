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
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
    <title></title>   
</head>
<script>
                                                  
</script>
<body>
	<div id="loading">
		 <img src='img/loading.gif' />
	</div>
    <div id='page2' class='hide'>
	      <img src='img/dog.png' class='dog'/>
		  <img src='img/userForm/1.png' class='ipt' />
		  <img src='img/userForm/2.png' class='commit' id='submit' />
		  <img src='img/userForm/movie1.png' class='description prize1'>
		  <img src='img/userForm/movie2.png' class='description prize2 hide'>
		  <input type='text' id='username' />
		  <input type='text' id='telephone' />
		  <a href='tel:028-85722225' class='tel'><img src='img/tel.png' /></a>
		  <a href='https://3gimg.qq.com/lightmap/v1/marker/index.html?type=0&marker=coord%3A30.505248%2C104.080460%3Btitle%3A高新区东寺南一路18号&key=USCBZ-WBU35-S6CIE-QKQSH-DRR4H-3JBLN&referer=myapp' class='map'><img src='img/map.png' /></a>
	</div>
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
             title: '单身狗福利大放送，秀恩爱禁止入内！',
             desc: '你还在等啥？',
             link: 'http://prj.chuangjia.me/cj017/index.php',
             imgUrl: 'http://prj.chuangjia.me/cj017/img/dog.png'
           };
           wx.onMenuShareAppMessage(shareData);
           wx.onMenuShareTimeline(shareData);
         });
</script>
<!-- App -->
<script type="text/javascript" src='js/app.js'></script>
<script>

</script>
<!--移动端统计代码-->
<div  style="display:  none;">
        <script  src="http://s95.cnzz.com/z_stat.php?id=1261440272&web_id=1261440272"  language="JavaScript"></script>
</div>
</body>
</html>