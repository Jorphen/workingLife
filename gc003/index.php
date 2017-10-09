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
    <meta name="viewport" content="width=device-width,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="format-detection" content="telephone=no">
    <meta name="keywords" content="游戏">
    <meta name="description" content="成都商报APP、官微、微博、四川名医、成都儿童团…成都商报新媒体的正确打开方式">
    <title>2017，成都商报新媒体神秘门</title>
    <link rel="stylesheet" href="css/game.css">
	<script type='text/javascript' src='js/iscroll.js'></script>
	<script type='text/javascript' src='js/evsetup.js'></script>
	<script type='text/javascript' src='js/touch.js'></script>
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
			size_rate=c/750;
            document.documentElement.style.fontSize = c / 7.5 + 'px'
        };
        b();
        a(window, 'resize', b);
    </script>
	<script>
	     window.onload=function(){
		    var myScroll;			
				myScroll = new IScroll('#wrapper', {
					scrollX: true,
					scrollY: false
				});			
		      document.addEventListener('touchmove', function (e) { e.preventDefault(); }, false);
		 }
	</script>
</head>

<body>
<!--the loading screen -Page1 -->
      <section id='loadingCover' class=''></section>
<!--the door opened for starting the game  -Page2 -->
	  <section id='welcome' class=''>
	           <img src='img/door1.png' class='open-door' />
			   <div class='gesture hand-scale'></div>
	  </section>
<!--before starting the game gived how to operate and play  -Page3 -->
	  <section id='operate-tip' class=''></section>
<!--scene content including the hiding clues -->
	  <article class='wrapper' id='wrapper'>
	           <section class='wrapper-contain'>		            
			            <img src='img/scene.jpg' class='scenePic' alt='页面加载错误，刷新一下试试...'>
						<div class='sceneCover'>
						        <div class='clue clue-1 invis' data-tag='drawer1' data-msg='好像没什么线索..'></div>
								<div class='clue clue-2 invis' data-tag='food' data-msg='饭菜有些凉了'></div>
								<div class='clue clue-3 invis' data-tag='radio' data-msg='好像没什么线索..'></div>
								<div class='clue clue-4 invis' data-tag='pot' data-msg='好像没什么线索..'></div>
								<div class='clue clue-5 invis' data-tag='bookshelf' data-msg='书架也没什么线索..'></div>
								<div class='clue clue-6 invis' data-tag='wallpainting' data-msg='壁画上也没什么线索..'></div>
								<div class='clue clue-7 invis' data-tag='bedlight' data-msg='灯开不了，好像坏了'></div>
								<div class='clue clue-8 invis' data-tag='dvd' data-msg='DVD已经很久没看了'></div>
								<div class='clue clue-9 invis' id='code-box' data-tag='codebox'></div>
								<div class='clue clue-10 useful quench' data-tag='oillight' data-detail='原来是一盏灯' data-action='打开试试'  data-title='灯亮起来了' data-uid='1'></div>
								<div class='clue clue-11 useful invis' data-tag='television' data-detail='原来是一个电视机' data-action='打开试试' data-title='电视里播放着电视节目' data-uid='7'></div>
								<div class='clue clue-12 useful invis' data-tag='drawer2' data-detail='原来是很久以前的课本' data-action='翻开看看' data-title='好像有什么线索' data-uid='0'></div>
								<div class='clue clue-13 useful invis' data-tag='drawer3' data-detail='原来是一部手机' data-action='可惜手机没电，给手机充电' data-title='原来有一条未接来电' data-uid='3'></div>
								<div class='clue clue-14 bg-img01 useful' data-tag='garbageCan' data-detail='原来是一个废弃的手表' data-action='试着让手表走起来' data-title='手表终于动了' data-uid='3'></div>
								<div class='clue clue-15 useful invis' data-tag='cabinet' data-detail='找到一个药瓶' data-action='里面可能有什么线索'  data-title='好像有东西...' data-uid='1'></div>
								<p id='clue-find'></p>
								<!--the cover layer makes room dark-->
								<!--<div id='darkCover' class=''></div>-->
						</div>                   
			   </section>
	  </article>
<!--when you find the useful clue-->
	  <article id='clue-tip'>
	          <header>
			          <div class='detailsInfo'>
					        <div>
								<img src='img/stuff/tv01.png'/>							
								<div class='clock hide'><span>22</span><u class='clock-dot'>:</u><span>55</span></div>
							</div>
					  </div>
					  <div id='guid-icon'></div>
			  </header>
			  <p class='title hide'></p>
			  <p class='description'></p>
			  <p class='description'></p>
			  <div class='open hide' id='open'>点击查看</div>
			  <p class='process01'>
				      已获得线索：<span class='now-process'>0</span>/6
			  </p> 
	  </article>
<!--giving the clues infomation when you click somewhere right-->
      <article class='panel' id='panel'>
	            <div id='code-info'>
						<p class='bg-orange'>恭喜你集齐<span class='process-number'></span>个神秘资源</p>
						<p class='bg-orange hide' data-order='last'>恭喜你获得了最后一个神秘资源<p>
						<p class='bg-orange hide' data-order='last'>终于完成了<span class='final-code'></span><p>
						<p class='bg-orange'>继续寻找其他密码</p>
						<p class='bg-orange hide' data-order='last'>快去保险柜解锁吧</p>
				</div>
				<div class='process-lock'>
				     <ul>
					      <li class='bgCode-01'></li>
						  <li class='bgCode-01'></li>
						  <li class='bgCode-01'></li>
						  <li class='bgCode-01'></li>
						  <li class='bgCode-01'></li>
						  <li class='bgCode-01'></li>
					 </ul>      
				</div>    
				<div class='log'>
				      <img src='' />
				</div>
				<div id='content'>
						<img src='img/descriptions/des1.png' class='platInfo' />
				</div>
				<p class='process02'>
				      已获得线索：<span class='now-process'>0</span>/6
				</p>   
	  </article>
<!--input the code to open the next chapter-->
    <article class='iptCode' id='ipt-code'>
	      <p>输入密码</p>
		  <ul class='code-tit'>
		       <li></li>
			   <li></li>
			   <li></li>
			   <li></li>
			   <li></li>
			   <li></li>
		  </ul>
		  <ul class='num-keyboard'>
		       <li>1</li>
			   <li>2</li>
			   <li>3</li>
			   <li>4</li>
			   <li>5</li>
			   <li>6</li>
			   <li>7</li>
			   <li>8</li>
			   <li>9</li>
			   <li>0</li>
		  </ul>
		  <div class='cancel-code'>
		        取消                                                                                                                                   
		  </div>
	</article>
<!--hero chapter-->
   <!--
    <div class='' id='winGame'></div>  
    <div class='lastChapter' id='endGame'></div>-->
	<article id='lastChapter'>
	     <ul class='chapter-wrap'>
		      <li><img src='img/ad1.jpg' /></li>
			  <li><img src='img/ad2.jpg' /></li>
		 </ul>
		 <div class='arrow arrow-1' id='swipeArrow'>		 
		 </div>
	</article>
    <audio id="audioBg" loop='true'  src="mp3/bg.mp3"></audio>
	<audio id="audioLight" src="mp3/light.mp3"></audio>
	<audio id="audioPoster" src="mp3/poster.mp3"></audio>
	<audio id="audioTrash" src="mp3/trash.mp3"></audio>
	<audio id="audioResult" src="mp3/result.mp3"></audio>
</body>
<script>
   Touch();
   /*加载页面*/
   var loading=document.getElementById('loadingCover');
   var audioBg=document.getElementById('audioBg');
   window.addEventListener('load',function(){
        setTimeout(function(){
		      loading.classList.add('hide');
			  audioBg.play();
			  document.addEventListener("WeixinJSBridgeReady", function() { //微信                     
					         audioBg.play();
              }, !1);
		},1000)
   },!1)
   
   /*打开门*/
   var door=document.getElementById('welcome');
   var btn_door=document.getElementsByClassName('open-door')[0]; 
   var handGesture=door.querySelectorAll('.gesture')[0];
	   btn_door.addEventListener('touchstart',function(){
	         this.classList.add('doorAnimation'); 
			 handGesture.classList.remove('hand-scale');
			 handGesture.classList.add('hideAnimation');
			 setTimeout(function(){
			     fadeOut(door);
			 },3000)
	   },!1);
   /*退出指引*/
   var guid=document.getElementById('operate-tip');
   guid.addEventListener('touchend',function(){
        this.classList.add('hideAnimation');
   },!1)
   /*获取线索*/
   var clues=document.getElementById('wrapper').querySelectorAll('.clue');
   var clue_result=document.getElementById('clue-find');
   var check_out=document.getElementById('open');
   var clue_layer=document.getElementById('clue-tip');
   var clue_paragraphs=clue_layer.getElementsByTagName('p')
   var clue_description=clue_layer.getElementsByClassName('description');
   var panel=document.getElementById('panel');
   var hand_guid=document.getElementById('guid-icon');
   var process_num=0;
   var getCode=[]; 
   for(var i=0;i<clues.length;i++){     
        clues[i].isOn=0;
		clues[i].msg=clues[i].getAttribute('data-msg');
		clues[i].addEventListener('tap',function(b){
		      var msg=this.msg;
			  var rel_clue=this.classList.contains('useful');
			  var x=getStyle(this,'left');
			  var y=getStyle(this,'top');
			 !this.isOn && msg && (clue_result.innerHTML='',clue_result.style.opacity=1,clue_result.style.left=(parseFloat(x)+50+'px'),clue_result.style.top=y,clue_result.innerHTML=msg);
			  rel_clue && this.isOn && (clue_result.style.opacity=1,clue_result.style.left=(parseFloat(x)+50+'px'),clue_result.style.top=y,clue_result.innerHTML='已经打开过了!!'+(process_num!==6 ? '' : ('  宝箱密码为'+pwd))); 
			  rel_clue && !this.isOn && (this.isOn=1,setTimeout(function(){(!hand_guid.classList.contains('hand-guid')) ? (hand_guid.classList.add('hand-guid')) : (hand_guid.classList.remove('hand-guid'),hand_guid.classList.add('hand-guid'))},800),process[0].innerHTML=process_num+'',fadeIn(clue_layer),stuff.src=srcs[this.getAttribute('data-tag')],clue_description[0].classList.remove('hide'),clue_description[1].classList.remove('hide'),clue_description[0].innerHTML=this.getAttribute('data-detail'),clue_description[1].innerHTML=this.getAttribute('data-action'),!clue_paragraphs[0].classList.contains('hide') && (clue_paragraphs[0].classList.add('hide')),clue_paragraphs[0].innerHTML='',clue_paragraphs[0].innerHTML=this.getAttribute('data-title'),getCode.push(this.getAttribute('data-uid')),~([].slice.call(this.classList)).indexOf('bg-img01')) ? (this.classList.remove('bg-img01'),this.classList.add('bg-img02')) : (this.classList.remove('invis'));
			  //when you click the code box:
			  this.isOn || (this.getAttribute('data-tag')=='codebox' &&  (lockPage.classList.contains('goOut') ? (lockPage.classList.remove('goOut'),lockPage.classList.add('goIn')) :(lockPage.classList.remove('goOut'),lockPage.classList.add('goIn'))));
			  // 
			  this.addEventListener('tap',function(){		      
						 setTimeout(function(){
							 clue_result.innerHTML='';
							 clue_result.style.opacity=0;
							 clue_result.style.left=0+'px';
						     clue_result.style.top=0+'px';
						 },1500)
					},!1)
		     },!1)		
   }
   /*操作每一个物品*/
   var srcs={
            oillight:'img/stuff/light01.png',
			television:'img/stuff/tv01.png',
			drawer2:'img/stuff/book01.png',
			drawer3:'img/stuff/phone01.png',
			garbageCan:'img/stuff/watch.png',
			cabinet:'img/stuff/medcine.png'
	   }
   var source=[
          {
		     log:'img/log1.png',
			 des:'img/descriptions/des1.png'
		  },
		  {
		     log:'img/log2.png',
			 des:'img/descriptions/des2.png'
		  },
		  {
		     log:'img/log3.png',
			 des:'img/descriptions/des3.png'
		  },
		  {
		     log:'img/log4.png',
			 des:'img/descriptions/des4.png'
		  },
		  {
		     log:'img/log5.png',
			 des:'img/descriptions/des5.png'
		  },
		  {
		     log:'img/log6.png',
			 des:'img/descriptions/des6.png'
		  }
   ]
   var stuff=clue_layer.getElementsByTagName('img')[0];
   var clock=document.getElementsByClassName('clock')[0];
   var video=null;
   stuff.addEventListener('tap',function(){      
         var src=this.src;
         var pos=src.indexOf('.png');
		 var str=src.substring(pos-2);			 
		      if(str.indexOf('0') > -1){
			      var new_src=src.substring(0,(src.length-5))+'2.png';	
				  this.src=new_src;
			  };
			  if(/watch/g.test(src)){
			       var clock=document.getElementsByClassName('clock')[0];
				   clock.classList.remove('hide');
			  }else if(/book/g.test(src)){
			        audioTrash.play();
					video = audioTrash;
			  }else if(/tv/g.test(src)){
			        audioPoster.play();
					video = audioPoster;
			  }	else if(/light/g.test(src)){
			         audioLight.play();
					 video = audioLight;
			  }  	 
		 [].every.call([].slice.call(clue_paragraphs),function(a){
			      //return  a.classList.contains('show') &&  (a.classList.remove('show'),a.classList.add('hide'),!!1);
                  if(a.classList.contains('description')){
						 a.classList.add('hide');
						 return 1;
				  }else if(a.classList.contains('hide')){
				         a.classList.remove('hide');
						 return 1;
				  }				  
		  }); 
          check_out.classList.remove('hide');		  
   },!1)
   /*进度情况*/
   var process=document.getElementsByClassName('now-process');
   var panelProcess=document.getElementsByClassName('process-number')[0];
   /*点击操作查看功能*/
   check_out.addEventListener('touchstart',function(){
          video != null && (video.pause(),video = null);
   },!1)
   check_out.addEventListener('touchend',function(){
         audioResult.play();
         !clock.classList.contains('hide') && (clock.classList.add('hide'));
         fadeOut(clue_layer)
         check_out.classList.add('hide');
		 [].every.call([].slice.call(clue_paragraphs),function(a){
		       if(a.classList.contains('description')){
			        a.classList.remove('hide')
			   }else if(a.classList.contains('title')){
			         a.classList.add('hide');
			   }
		 });
		 fadeIn(panel)
		 process_num++;
		 process[1].innerHTML=process_num+'';
		 panelProcess.innerHTML=process_num+'';
		 /*版面内容发生更新*/
		 var url=window.location.href;
		 var _dir=url.substring(0,(url.lastIndexOf('\/')+1));
		 var log=document.getElementsByClassName('log')[0];
		 var _description=document.getElementById('content').getElementsByTagName('img')[0];
		     /*
			 [].every.call([].slice.call(source[process_num-1]),function(a,b){
			        _allContent[b].innerHTML=a;
					_allContent[b].classList.remove('hide');
					//console.log(a+'  '+b);				
					return 1;
			 })*/
			 _description.src=source[process_num-1].des;
		 log.getElementsByTagName('img')[0].src=source[process_num-1].log;
		 if(process_num==6){
		        var codeInfo=document.getElementById('code-info');
				var all=codeInfo.getElementsByTagName('p');
				var finalResult=document.getElementsByClassName('final-code')[0];
				[].every.call([].slice.call(all),function(a){
				      a.classList.contains('hide') ? (a.classList.remove('hide')) : (a.classList.add('hide'));
					  console.log(a);
					  return 1;
				})
				finalResult.innerHTML=pwd;
                [].every.call([].slice.call(lock_li),function(m,n){
				     // m.innerHTML='';
				      m.innerHTML=pwd[n];
					  //console.log(pwd[n])
					  m.classList.add('bgCode-02');
		              m.classList.remove('bgCode-01');
					  return 1;
				})               	
                return ;				
		 }else{
		     lock_li[process_num-1].innerHTML=getCode[process_num-1];
		     lock_li[process_num-1].classList.add('bgCode-02');
		     lock_li[process_num-1].classList.remove('bgCode-01');
		 }		 
   },!1);
   panel.addEventListener('touchend',function(){       
         fadeOut(this);		 
   },!1)
   /*操作成功，成功面板部分*/
   var lock_li=document.getElementById('panel').getElementsByTagName('li');
   /*密码输入*/
   var lockPage=document.getElementById('ipt-code');
   var codeTitContain=document.getElementsByClassName('code-tit')[0]
   var codeProcess=codeTitContain.getElementsByTagName('li');  
   var codeKbd=document.getElementsByClassName('num-keyboard')[0].getElementsByTagName('li');
   var cancelCode=document.getElementsByClassName('cancel-code')[0]  
   var iptResult='';
   /*倒数第二页*/
   var lastChapter=document.getElementById('lastChapter');
   /*最后一页*/
  // var endGame=document.getElementById('endGame');
   for(var i=0;i<codeKbd.length;i++){
       var code=codeKbd[i];
       code.addEventListener('touchstart',A,!1)
	   code.addEventListener('touchend',B,!1)
       function A(b){	         
	         if(iptResult.length < 7) {
			       iptResult+=this.innerHTML;
				   codeProcess[iptResult.length-1] && (codeProcess[iptResult.length-1].classList.add('on'));							
				   if(iptResult.length == 6){
							  var correct=checkCode(iptResult);
							  correct ? (audioResult.play(),lockPage.classList.add('hideAnimation'),fadeIn(lastChapter)) : (codeTitContain.classList.add('shake'));
						    }
			 };		 
			 this.classList.contains('bg-grey') || this.classList.add('bg-grey');
			 //win.addEventListener('touchstart',function(){fadeOut(this),setTimeout(function(){fadeIn(endGame)})},!1)
	   };
	   function B(b){
	         var self=this;
	         this.classList.contains('bg-grey') && setTimeout(function(){self.classList.remove('bg-grey')},100);
	   }    	   
   }
   cancelCode.onclick=function(){
      // iptResult.length && (iptResult = iptResult.substring(0,(iptResult.length-1)))   //回退输入密码;
	 iptResult='';
	 lockPage.classList.contains('goIn') && (lockPage.classList.remove('goIn'),lockPage.classList.add('goOut'));
	 codeTitContain.classList.contains('shake') && codeTitContain.classList.remove('shake');
	  setTimeout(function(){
	       [].every.call(codeProcess,function(a,b){
			   a.classList.contains('on') && a.classList.remove('on');
			   return true;
	      })
	  },1000);
	  //alert(lockPage.offsetWidth)
   } 
   /*音乐部分*/
   var audioLight=document.getElementById('audioLight');
   var audioPoster=document.getElementById('audioPoster');
   var audioTrash=document.getElementById('audioTrash');
   var audioResult=document.getElementById('audioResult');
   /*密码部分*/
   var pwd='170331';
   function checkCode(str){       
		if(pwd==str) return 1;
		else return !1;
   }   
   function getStyle(a,b){
	     var c = a.ownerDocument.defaultView.getComputedStyle(a, null);
         return b ? c.getPropertyValue(b) || c[b] : c
	}
	var clocks=document.getElementsByClassName('clock')[0].getElementsByTagName('span');
	function reclock(a){
	           var time=new Date();
			   var hour=time.getHours();
			   var minutes=time.getMinutes();
			   A();
			   
	     setInterval(function(){
		       time=new Date();
			   hour=time.getHours();
			   A();
		 },1000*60);
		 function A(){
		       minutes < 10 && (minutes='0'+minutes);
			   hour < 10 && (hour = '0'+hour);
			   a[0].innerHTML=hour;
			   a[1].innerHTML=minutes;
		 }
	};
reclock(clocks);
</script>

 <script type="text/javascript">
 /*手机摇摇API*/
       function shakeMobile(){
	        if(window.deviceMotionHandler){
			     window.addEventListener('devicemotion',deviceMotionHandler,!1);
			};
			var SHAKE_THRESHOLD=4000;
			var last_update=0;
			var x,y,z,last_x=0,last_y=0,last_z=0;
			function deviceMotionHandler(eventData){
			      var acceleration=eventData.accelerationIncludingGravity;
				  var curTime=new Date().getTime();
				  if((curTime-last_update)>10){
				       var diffTime=curTime - last_updata;
					   last_updata = curTime;
					   x = acceleration.x;
					   y = acceleration.y;
					   z = acceleration.z;
					   var speed = Math.abs(x+y+z-last_x-last_y-last_z)/diffTime * 10000;
					   if(speed > SHAKE_THRESHOLD){
					         //do something;
					   }
					   last_x = x;
					   last_y = y;
					   last_z = z;
				  }
			}
	   } 	   
	   function fadeIn(a){
	        if(a.classList.contains('fadeOut')){
			     a.classList.remove('fadeOut');
				 a.classList.add('fadeIn');
				 return ;
			}
            a.classList.add('fadeIn');			
	   }
	   function fadeOut(a){
	        if(a.classList.contains('fadeIn')){
			     a.classList.remove('fadeIn');
				 a.classList.add('fadeOut');
				 return ;
			}
            a.classList.add('fadeOut');			
	   }
	   function fadeInOut(a){
	        a.classList.add('fadeInOut');
	   }
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
            title: '2017，成都商报新媒体神秘门',
            desc: '成都商报APP、官微、微博、四川名医、成都儿童团…成都商报新媒体的正确打开方式',
            link: 'http://prj.chuangjia.me/gc002/index.php',
            imgUrl: 'http://prj.chuangjia.me/gc002/img/wxdoor.jpg'
          };
          wx.onMenuShareAppMessage(shareData);
          wx.onMenuShareTimeline(shareData);
        });
    </script>
</html>
