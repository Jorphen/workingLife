<?php
include '../api/jssdk.php';
$jssdk = new JSSDK('wx612d369d94b7a825', '8443fb4ddb62da6659aab5b31cd068cf');
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
    <head>      
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
		<link href='css/style.css' type='text/css' rel='stylesheet'>
		<script src='js/mui.js' type='text/javascript'></script>
		<script src='js/jquery.min.js' type='text/javascript'></script>
		<title>挑战“不可能”？这款APP致力于“搞事情”</title>
		<script>
        function a(d, c, e) {
            if (d.addEventListener) {
                d.addEventListener(c, e, false)
            } else {
                d.attachEvent('on' + c, e)
            }
        };
        function b() {
            var c = document.documentElement.clientHeight || document.body.clientHeight;
            document.documentElement.style.fontSize = c / 12.8 + 'px'
        };
        b();
        a(window, 'resize', b)
    </script>
		<style>
		    
		</style>
    </head>
    <body>
       <div class='mask'>
             <div class='loading'></div>
			 <div class='tips'>横屏才是正确的打开方式哦...</div>
       </div>	   
       <div class='stage orientation'>        
             <ul id='container' class=''>
                  <li data-dragType='1' class='scene wrapper' id='firstScene'>
				       <img src='img/pf/1.gif' class='bg-img img1'>
					   <svg width="100%" height="100%" version="1.1" id='svg' xmlns="http://www.w3.org/2000/svg">
									<line x1="0" y1="0" x2="0" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"/>
									<line x1="0" y1="0" x2="0" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"/>
									<line x1="0" y1="0" x2="0" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"/>
									<line x1="0" y1="0" x2="0" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"/>
									<line x1="0" y1="0" x2="0" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"/>
									<line x1="0" y1="0" x2="0" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"/>
									<line x1="0" y1="0" x2="0" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"/>
									<line x1="0" y1="0" x2="0" y2="0" style="stroke:rgb(0,0,0);stroke-width:2"/>
                       </svg>
					   <div class='circle circle1'><span></span><span></span></div>
					   <div class='circle circle2'><span></span><span></span></div>
					   <div class='circle circle3'><span></span><span></span></div>
					   <div class='circle circle4'><span></span><span></span></div>
					   <div class='circle circle5'><span></span><span></span></div>
					   <div class='circle circle6'><span></span><span></span></div>
					   <div class='circle circle7'><span></span><span></span></div>
					   <div class='circle circle8'><span></span><span></span></div>
					   <div class='circle circle9'><span></span><span></span></div>	
					   <div class='content'>
							  <div class='description des1'>
							        <img src='img/scene1/p1-01.png' />
									<img src='img/scene1/p1-02.png' />
									<img src='img/scene1/p1-03.png' />
							  </div>
							  <div class='description des2'>
							        <img src='img/scene1/p2-01.png' />
									<img src='img/scene1/p2-02.png' />
									<img src='img/scene1/p2-03.png' />
							  </div>
							  <div class='description des3'>
							        <img src='img/scene1/p3-01.png' />
									<img src='img/scene1/p3-02.png' />
									<img src='img/scene1/p3-03.png' />
							  </div>
							  <div class='description des4'>
							        <img src='img/scene1/p4-01.png' />
									<img src='img/scene1/p4-02.png' />
									<img src='img/scene1/p4-03.png' />
							  </div>
					   </div>
			     </li>
			    <li data-dragType='1' class='scene'>
                         <img src='img/pf/2.gif' class='bg-img img0' />
						 <div class='s2-des'></div>
						 <div class='arrow-tip'></div>
                </li>
		    <li class='wrapper' id='others'>
			   <ul class='oDiv scene1'>                   					
					<li data-dragType='2' class='scene mainScene'>
						 <img src='img/pf/1.png' class='bg-img img2' />
						 <div class='scene-cover cover1'></div>
						 <div class='wordsPart words_1'><img src='img/words/p1.png' /></div>					 						 
					</li>
					<li data-dragType='2' class='scene mainScene'>
						 <img src='img/pf/2.png' class='bg-img img3' />	
                         <div class='scene-cover cover2-1'></div>		
                         <div class='scene-cover cover2-2'></div>
                         <div class='wordsPart words_2'><img src='img/words/p2.png' /></div>						 
					</li>
					<li data-dragType='2' class='scene mainScene'>
						 <img src='img/pf/3.png' class='bg-img img4' />
						 <div class='scene-cover cover3-1'></div>
                         <div class='scene-cover cover3-2'></div>
                         <div class='wordsPart words_3'><img src='img/words/p3.png' /></div>						 
					</li>
					<li data-dragType='2' class='scene mainScene'>
						 <img src='img/pf/4.png' class='bg-img img5' />
						 <div class='scene-cover cover4-1'></div>
                         <div class='scene-cover cover4-2'></div>
						 <div class='wordsPart words_4'><img src='img/words/p4.png' /></div>
					</li>
					<li data-dragType='2' class='scene mainScene'>
						 <img src='img/pf/5.png' class='bg-img img6' />
						 <div class='scene-cover cover5'></div>
						 <div class='scene-cover cover6'>
						       <img src='img/erweima.png' class='erweima'>
						 </div>
						 <div class='wordsPart words_5'><img src='img/words/p5.png' /></div>
					</li>
			   </ul>
			  <!--
			   <div class='railway' id='railway'>
			         <ul>
							<li>
								 <img src='img/ground.jpg' />
							</li>
							<li>
								 <img src='img/ground.jpg' />
							</li>
			         </ul>
			   </div>
			   -->
			   
			   <div class='plane'><img src='img/plane.png' /></div>
			   <div class='train train01'><img src='img/train_front.png' /></div>
			   <div class='train train02'><img src='img/train_back.png' /></div>
			   <div class='clouds cloud01 cloudType01'><img src='img/clouds/clouds_1.png'></div>
			   <div class='clouds cloud02 cloudType02'><img src='img/clouds/clouds_2.png'></div>
			   <div class='clouds cloud03 cloudType02'><img src='img/clouds/clouds_2.png'></div>
			   <div class='clouds cloud04 cloudType01'><img src='img/clouds/clouds_1.png'></div>
			   <div class='clouds cloud05 cloudType02'><img src='img/clouds/clouds_2.png'></div>
			   <div class='clouds cloud06 cloudType01'><img src='img/clouds/clouds_1.png'></div>
			   <div class='clouds cloud07 cloudType01'><img src='img/clouds/clouds_1.png'></div>
			   <div class='clouds cloud08 cloudType02'><img src='img/clouds/clouds_2.png'></div>
		    </li>
        </ul>	
		<div id="bgm-btn" class="">
              <audio src="audio/audio.mp3" loop="loop" preload="" id="music"></audio>
        </div>
	</div>
	<script src='js/index.js' type='text/javascript'></script>
	<script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
<script type="text/javascript">
    wx.config({
        debug: false,
        appId: '<?php echo $signPackage["appId"];?>',
        timestamp: '<?php echo $signPackage["timestamp"];?>',
            nonceStr: '<?php echo $signPackage["nonceStr"];?>',
            signature: '<?php echo $signPackage["signature"];?>',
            jsApiList: [
        'onMenuShareTimeline',
        'onMenuShareAppMessage'
    ]
    });

    wx.ready(function () {
        var shareData = {
            title: "挑战“不可能”？这款APP致力于“搞事情”",
            desc: "看买房吗这一年干的“大事儿”",
            link: 'http://prj.chuangjia.me/cj012/index.php',
            imgUrl: 'http://prj.chuangjia.me/cj012/img/log.jpg'
        };
        wx.onMenuShareAppMessage(shareData);
        wx.onMenuShareTimeline(shareData);
    });
</script>
</body>
<script>
    var btn = document.querySelector('#bgm-btn');
    var audio = document.getElementById('music');
    var f = 1;   
    function audioAutoPlay() {
        audio.play();
        document.addEventListener("WeixinJSBridgeReady", function () {
            audio.play();
        }, false);
        document.addEventListener('YixinJSBridgeReady', function () {
            audio.play();
        }, false);
        btn.classList.toggle('rotate');
    }

    $('html').one('touchstart',function(){
        audio.play();
    });

    btn.addEventListener('click', function (e) {
        btn.classList.toggle('rotate');
        if (f) {
            audio.pause();
            f = 0;
        } else {
            audio.play();
            f = 1;
        }
    });
window.addEventListener('load',function(){
	setTimeout(function(){
		audioAutoPlay();
	},2200)
},!1)
</script>
</html>
