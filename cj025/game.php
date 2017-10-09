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
	  <script type='text/javascript' src='js/iscroll.js'></script>
	  <script type='text/javascript' src='js/evsetup.js'></script>
	  <link rel="stylesheet" href="css/game.css" type='text/css'>
	  <title>银泰密室逃脱</title>
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
		
		window.onload=function(b){
			var myScroll;			
				myScroll = new IScroll('#scene-container', {
					scrollX: true,
					scrollY: false,
					bounce:false
				});	
            $('#game-door').show();				
		 }
		
	</script>	  
</head>
<body>
	<section id='game-door' class='hide'>	       
	       <img src='img/start_game_btn.png' id='start-game' alt='' />		   
		   <div class='door-part'>
				 <img src='img/door.jpg' alt='' id='door-open' />
		   </div>
	</section> 
    <section id='loading' class=''></section>
	<section id='mask' class=''></section>	
	<div id="bgm-btn" class='hide'>
            <audio src="audio/bg.mp3" loop="loop" preload  id="music"></audio>
    </div>
	<audio id="audioResult" src="audio/result.mp3"></audio>	
	<article id='share' class='hide'></article>
	<!--场景部分-->
    <article id='scene-container' class='hide'>
	           <section class='wrapper'>		            
					   <div class='clue clue-1' data-tag='light' data-msg='原来是一盏灯，点亮试试。' data-clicked='false' data-action='灯后面好像有什么东西...'><img src='img/stuff/light_1.png'></div>
					   <div class='clue clue-2 hide' data-tag='light_shine' data-msg=''><img src='img/stuff/light_shine.png'></div>
					   <div class='clue clue-3' data-tag='tv' data-msg='' data-clicked='false'><img src='img/stuff/tv.png'></div>
					   <div class='clue clue-3-1' data-tag='tv' data-msg='' data-clicked='false'><img src='img/stuff/tv_opened.png'></div>
					   <div class='clue clue-4' data-tag='window' data-msg=' data-clicked='false'></div>
					   <div class='clue clue-5' data-tag='painting' data-msg='' data-clicked='false'><img src='img/stuff/painting.png'></div>
					   <div class='clue clue-6' data-tag='bench' data-msg='' data-clicked='false'><img src='img/stuff/bench.png'></div>
					   <!--无关物品提示部分-->
					   <!--
					   <div class='none-info uninfo-1'>
							 <div class='tips'>
								   <p>在金融城CBD核心</p>
								   <p>每一次眺望都让人心醉</p>
							 </div>
					   </div>
					   -->
					   <div class='none-info uninfo-2'>
							 <div class='tips'>
								   <p>好像没什么线索...</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-3'>
							 <div class='tips'>
								   <p>抽屉被锁住了，打不开...</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-4'>
							 <div class='tips'>
								   <p>用纯正华尔道夫</p>
								   <p>24小时为您提供服务</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-5'>
							 <div class='tips'>
								   <p>好精致的杯子</p>
								   <p>里面并没有线索</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-6'>
							 <div class='tips'>
								   <p>好像并没有什么线索...</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-7'>
							 <div class='tips'>
								   <p>Champalimaud量身设计家具</p>
								   <p>风格与楼上华尔道夫一脉相承</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-8'>
							 <div class='tips'>
								   <p>精配国际一线Miele高端灶具</p>
								   <p>生活更有品质</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-9'>
							 <div class='tips'>
								   <p>每一处细节</p>
								   <p>皆是名师精心打造</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-10'>
							 <div class='tips'>
								   <p>超静音空调系统，让家静谧舒适</p>
							 </div>
					   </div>
					   <div class='none-info uninfo-11'>
							 <div class='tips'>
								   <p>精装配置家具与家电</p>
								   <p>品味与华尔道夫一脉相承</p>
							 </div>
					   </div>
					   <div class='no-clue'>
								   好像并没有什么线索...
					   </div>
					   <div class='isOpened'>你已经找过相应线索...</div>					
			   </section>
	</article>
	<article id='stuff-toolbar' class=''>
	            <ul>
				      <li class='stuff'><img src='' alt='' /></li>
					  <li class='stuff'><img src='' alt='' /></li>
					  <li class='stuff'><img src='' alt='' /></li>
					  <li class='stuff'><img src='' alt='' /></li>
					  <li class='stuff'><img src='' alt='' /></li>
					  <li class='stuff key'>
					       <img src='img/toolbar/key.png' alt='' />
						   <img src='img/hand.png' id='hand-tip' class='hide' alt='' />
					  </li>
				</ul>
	</article>
	<article id='clue' class='hide'>
                <img src='img/stuff/clue-bench.png' class='clue-img' alt='' />
				<p class='clue-tip'>灯后面好像有什么东西</p>
				<p  class='hide clue-congraduation'>恭喜你找到<span class='get_number'>3</span>颗珍珠</p>
				<p  class='hide go-find'>继续寻找其他线索吧</p>
				<div class='checkout hide'><img src='img/stuff/checkout.png' /></div>
				<p class='count'>已获得珍珠<span class='total_pearl'>0</span>/33</p>
    </article>
	<article id='treasure-1' class='hide'>
               <img src='img/treasure_box/box_top.png' alt='' class='box-top' />
			   <div class='treasure-shine'>
			          <img src='img/treasure_box/shine.png' alt='' class='box-shine' />
			   </div>
			   <img src='img/treasure_box/box_bottom.png' alt='' class='box-bottom' />
			   <div class='con-pearl'>恭喜你集齐了33颗珍珠，获得宝箱钥匙</div>
			   <img src='img/treasure_box/con-0.png' alt='' class='con-1 hide' />
			   <img src='img/treasure_box/con-1.png' alt='' class='con-2 hide' />
			   <img src='img/treasure_box/con-2.png' alt='' class='con-3 hide' />
			   <img src='img/treasure_box/con-3.png' alt='' class='con-4 hide'>	
               <img src='img/treasure_box/con-4.png' alt='' class='con-5 hide'>			   
			   <div id='form' class='hide'>
			         <div>
					       <label for='name'>姓名</label>
						   <input type='text' name='username' id='username'>
					 </div>
					 <div>
					       <label for='tel'>电话</label>
						   <input type='text' name='tel' id='tel'>
					 </div>
			   </div>
			   <div class='open-treasure-btn'><img src='img/treasure_box/btn_open.png' /></div>
			   <div class='open-treasure-btn'><img src='img/treasure_box/btn_open.png' /></div>
			   <div class='close-treasure-btn hide'><img src='img/treasure_box/btn_close.png' /></div>
			   <div class='again-treasure-btn hide'><img src='img/treasure_box/close_treasure_btn.png' /></div>
			   <div class='contact'><img src='img/treasure_box/contact.png' /></div>
    </article>
</body>
<script>
   window.addEventListener('touchmove',function(b){       
        b.preventDefault();
   },!1)
</script>
<script type='text/javascript' src='js/jquery.min.js'></script>
<script type='text/javascript' src='js/static.js'></script>
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