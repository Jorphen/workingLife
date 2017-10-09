<?php
include '../api/jssdk.php';
$jssdk = new JSSDK('wx612d369d94b7a825', '8443fb4ddb62da6659aab5b31cd068cf');
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE HTML>
<head>
    <meta charset='utf-8'>
	<meta name='description' content='阳光城檀府归心宽宅，悬浮花园销售中心4月15日惊艳亮相'>
	<meta name='viewport' content='width=device-width,initial-scale=1.0,user-scalable=no'>
	 <script>
        function a(d, c, e) {
            if (d.addEventListener) {
                d.addEventListener(c, e, false)
            } else {
                d.attachEvent('on' + c, e)
            }
        };
        function b() {
            var c = document.documentElement.clientWidth || document.body.clientWidth;
            document.documentElement.style.fontSize = c / 7.5 + 'px'
        };
        b();
        a(window, 'resize', b)
    </script>
	<script type='text/javascript' src='js/jquery.min.js'></script>
	<title>中国地产20强成都壹号作品</title>
	<style>
	    *{margin:0;padding:0;outline:0;box-sizing:border-box;}
		img{display:block;}
		input,a{-webkit-tap-highlight-color: transparent;}
		
		@media screen and (min-width:1000px){
		     #picBox{
			     padding-bottom:56px;
			 }
		     #picBox,#msgPart{
			      width:1000px;
				  height:auto;
				  margin:0px auto;
			 }
			 #picBox img,#msgPart img{
			      width:100%;
			 }
		}
		@media screen and (max-width:999px){
		     #picBox,#msgPart{
			      width:100%;
			 }
			 #picBox img,#msgPart img{
			      width:100%;
			 }
		}
		#msgPart{
		    position:relative;
		}
		ul.content{
		    width:100%;
			margin:0 auto;					
			left:0;
		}
		ul.content li{
		   list-style:none;
		   float:left;
		   width:33.33333%;
		   padding-right:3px;
		}
		ul.content li:nth-child(3){
		   padding-right:0px;
		}
		ul.content li img{
		    cursor:pointer;
		}
		@media screen and (max-width:749px){
		    #picBox{
		            padding-bottom:42px;
		   }
		    .form{
					position:fixed;
					bottom:42px;
					padding:.5rem .2rem .6rem;
					background:#f0f0f0;
					width:100%;
					backface-visibility:hidden;
					background-color:#efeff4;
					z-index:998;
					transition:transform .3s;
		   }
		   ul.content{
		      display:none;
		   }
		   .close{
		        display:none;
		   }
		   .form a.cal-btn{
		       display:block;
		   }
		   .form{
				transtion:transform .3s;
		   }
		   .ani{
		        transform:translateY(100%);
		   }
		   .pc_part{
		       bottom:0;
		   }
		   #bottom{
		       width:100%;
		   }
		}
		@media screen and (min-width:750px){
		    .form{
					position:fixed;
					top:50%;
					left:50%;
					width:462px;
					display:none;
					padding:70px 16px 16px;
					background:#f0f0f0;
					margin-left:-231px;
					margin-top:-281px;
					z-index:9999;
		   }
		   ul.content{
		      top:.08rem;
			  position:absolute;
			  padding:0 10%;
			  box-sizing:border-box;
		   }
		   .close{
		        display:block;
		   }
		   .form a.cal-btn{
		       display:none;
		   }
		   #bottom{
		       width:1000px;
			   padding:0px 70px;
			   border:1px solid #ddd;
		   }
		   ul.footerBar{
		       width:750px;
			   margin:0 auto;
		   }
		   ul.footerBar li{
		      
		   }
		}
		.form{
		   font:normal 22px/1.2 helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
		}
		.form label{
		   display:block;
		   padding:16px 0 3px;
		   color:#c0bfbf;
		}
		.form input{
		    display:block;
			width:100%;
			border:1px solid #dcdcdc;
			height:50px;
			border-radius:12px;
			font-size:20px;
			text-indent:1em;
			color:#333;
			font-family:helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
		}
		.form a.sub-btn{
		    display:block;
			height:50px;
			margin-top:30px;
			font:normal 16px/50px helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
			color:#fff;
			text-decoration:none;
			background:#604c3f;
			text-align:center;
			border-radius:12px;
		}
		.form .close{
		    position:absolute;
			width:45px;
			right:0;
			top:0;
			height:45px;
			background:#fff;
			cursor:pointer;
		}
		.form .close:before{
		    content:'';
			position:absolute;
			top:22px;
			width:45px;
			height:0;
			border-bottom:2px solid #dcdcdc;
			transform:rotateZ(45deg);
		}
		.form .close:after{
		    content:'';
			position:absolute;
			top:22px;
			left:0;
			width:45px;
			height:0;
			border-bottom:2px solid #dcdcdc;
			transform:rotateZ(-45deg);
		}
		.form a.cal-btn{
			height:50px;
			margin-top:30px;
			font:normal 16px/50px helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
			color:#c0bfbf;
			background:#fefefe;
			text-align:center;
			border-radius:12px;
			text-decoration:none;
		}
		.mask{
		    width:100%;
			height:100%;
			top:0;
			left:0;
			position:fixed;
			z-index:99;
			transition:background .5s;
			background:rgba(0, 0, 0, 0);
			display:none;
		}
		.mask.show{
		     display:block;
			 background:rgba(0,0,0,.75);
		}
		.form.goIn{
		     transform:translateY(0px);
		}
		.hide{
		    display:none;
		}
		.toggle{
		    display:block;
		}
		#bottom{
		    position:fixed;
			cursor:pointer;
			padding:10px 0px;
			border-top:1px solid #eee;
			bottom:0;
			left:50%;
			transform:translateX(-50%);
			-webkit-transform:translateX(-50%);
			-moz-transform:translateX(-50%);
			-ms-transform:translateX(-50%);
			-o-transform:translateX(-50%);
			z-index:999;
			background-color:#fff;
		}
		
		ul.footerBar{
			list-style:none;
			width:100%;
		}
		ul.footerBar li{
		    float:left;
			width:33.333333%;	
            cursor:pointer;	
            color:#333;			
		}
		ul.footerBar li a{
		    display:block;
			width:100%;
			height:100%;
			text-decoration:none;
			font-family:helvetica, "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", sans-serif;
			color:#333;	
		}
		ul.footerBar li img{
			width:100%;
			height:100%;
			display:block;
		}
		ul.footerBar li:nth-child(1),ul.footerBar li:nth-child(2){
		   border-right:1px solid #ddd
		}
	</style>
</head>
<body>
      <div id='picBox'>
	       <img src='imgs/P-page.jpg' />
	  </div>
	  <div class="mask"></div>
	  <!--
	  <div id='msgPart'>
		   <ul class='content'>
		        <li class='consult-btn'>
				      <a href='http://p.qiao.baidu.com/cps/chat?siteId=10123557&userId=22709962'>
					       <img src='imgs/p-consult.png' />
					  </a>
				</li>
				<li>
				      <a href='https://3gimg.qq.com/lightmap/v1/marker/index.html?type=0&marker=coord%3A30.623639626639566%2C103.99604558944702%3Btitle%3A%E9%98%B3%E5%85%89%E5%9F%8E%C2%B7%E6%AA%80%E5%BA%9C%3Baddr%3A%E6%88%90%E9%83%BD%E8%A5%BF%E4%B8%89%E7%8E%AF%E5%A4%A7%E6%82%A6%E5%9F%8E%E6%97%81300%E7%B1%B3%EF%BC%88%E6%AD%A6%E4%BE%AF%E4%B8%87%E8%BE%BE%E6%97%81%EF%BC%89&key=USCBZ-WBU35-S6CIE-QKQSH-DRR4H-3JBLN&referer=myapp'>
					       <img src='imgs/p-map.png' />
					  </a>
				</li>
				<li class='sign_up'>
					       <img src='imgs/p-leaveMSG.png' />
				</li>
		   </ul>
	  </div>
	  -->
      <footer id='bottom'>
	        <ul class='footerBar'>
			    <li><a href='http://p.qiao.baidu.com/cps/chat?siteId=10123557&userId=22709962'><img src='imgs/p-consult.png'></a></li>
				<li>
				    <a href='https://3gimg.qq.com/lightmap/v1/marker/index.html?type=0&marker=coord%3A30.623639626639566%2C103.99604558944702%3Btitle%3A%E9%98%B3%E5%85%89%E5%9F%8E%C2%B7%E6%AA%80%E5%BA%9C%3Baddr%3A%E6%88%90%E9%83%BD%E8%A5%BF%E4%B8%89%E7%8E%AF%E5%A4%A7%E6%82%A6%E5%9F%8E%E6%97%81300%E7%B1%B3%EF%BC%88%E6%AD%A6%E4%BE%AF%E4%B8%87%E8%BE%BE%E6%97%81%EF%BC%89&key=USCBZ-WBU35-S6CIE-QKQSH-DRR4H-3JBLN&referer=myapp'><img src='imgs/p-map.png'></a>			
				</li>
				<li class='f_sign_up'>
				    <img src='imgs/p-leaveMSG.png' />
				</li>
			</ul>
	  </footer>
<div class="form ani">
    <span class="close"></span>
    <label for="name">您的姓名：</label>
    <div id="ipt-row">
        <input type="text" id="name">
    </div>
    <label for="tel">电话号码：</label>
    <div id="ipt-row"><input type="text" id="tel"></div>
    <!--  <label for="qq">QQ号码：</label>
      <div id="ipt-row"><input type="text" id="qq"></div>-->
    <a href="javascript:void(0)" class="sub-btn">确　认</a>
    <a href="javascript:void(0)" class="cal-btn cal">取　消</a>
</div>
</body>
<script>
var W = function(a, b, c) {
                c = c && c.style
				c.webkitTransitionTimingFunction = c.MozTransitionTimingFunction = c.msTransitionTimingFunction = c.OTransitionTimingFunction = c.transitionTimingFunction ='ease',
                c.webkitTransitionDuration = c.MozTransitionDuration = c.msTransitionDuration = c.OTransitionDuration = c.transitionDuration = b + "ms",
                c.webkitTransform = "translate(0px," + a + "px)" + "translateZ(0)",
                c.msTransform = c.MozTransform = c.OTransform = "translateY(" + a + "px)"
        };
(function(){
    $(".sub-btn").click(function (){
	
        var username = $("#name").val(),
                  tel = $("#tel").val();
       if (username == '' || username == '请填写姓名') {alert("请填写您的姓名");return false;}
       if (tel.length != 11) {alert("您的手机号码不正确");return false;}
        
        var url = "http://z.rootmedia.cn/data.php?callback=?"; 
		var obj = {};
                obj.project_name = '阳光城·檀府'; // 中文名 必填
                obj.username = username;
                obj.tel = tel;
                obj.email = '专题';
                obj.referer = 'pc' + document.referrer;
                obj.platform = "腾讯";
        jQuery.getJSON(url,obj,function(data){  
                if(data.msg == 'ok')
                {
                    alert('提交成功');
                    $(".form input").val(""); 
                    $('.mask').removeClass('show');                 
					if(isMobile){
					    W(form[0].offsetHeight,600,form[0]);					
					}else{
						$('.form').removeClass('toggle');
					}
                }else{
                    alert('提交失败请重新提交');
					$(".form input").val("");
                }
         });
       return false
     });
})();
var isMobile='ontouchstart' in window;
var form=$('.form')
 //isMobile || ($('.footerBar').addClass('hide'));
$('.sign_up').click(function(){  
    if(isMobile){
	    W(0,600,form[0]);
		$('.mask').addClass('show');
	}else{
	    form.addClass('toggle');
		$('.mask').addClass('show');
	}
});
$('.f_sign_up').click(function(){
   if(isMobile){
	    W(0,600,form[0]);
		$('.mask').addClass('show');
	}else{
	    form.addClass('toggle');
		$('.mask').addClass('show');
	}
})

$('.cal-btn').click(function(){
    if(!isMobile) return;
	W(form[0].offsetHeight,600,form[0]);
	$('.mask').removeClass('show');
	$(".form input").val("");
})

$('.close').click(function(){
    form.removeClass('toggle');
	$(".form input").val("");
    $('.mask').removeClass('show');
})
$('.close').mouseover(function(){
     $(this)[0].style.backgroundColor='rgba(0,0,0,.7)';
}).mouseout(function(){
     $(this)[0].style.backgroundColor='rgba(255,255,255,1)';
})
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
            title: '中国地产20强成都壹号作品',
            desc: '阳光城檀府归心宽宅，悬浮花园销售中心4月15日惊艳亮相',
            link: 'http://prj.chuangjia.me/cj005/index.php',
            imgUrl: 'http://prj.chuangjia.me/cj005/imgs/cover.png'
          };
          wx.onMenuShareAppMessage(shareData);
          wx.onMenuShareTimeline(shareData);
        });
    </script>
</html>
