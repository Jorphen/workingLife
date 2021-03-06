
//找寻物品;
/*非相关物品提示*/
var getStyles = function(a, b) {
                var c = a.ownerDocument.defaultView.getComputedStyle(a, null);
                return b ? c.getPropertyValue(b) || c[b] : c
        }
var g = /matrix(3d)?\((.+?)\)/;
$('.none-info').bind('tap',function(b){	
	var wrapper = $('.wrapper')[0];
	var matrix = getStyles(wrapper,'transform');
	var screenX = tob.gestures.session.firstTouch.center.x;
	var screenY = tob.gestures.session.firstTouch.center.y;
	var offsetArr = g.exec(matrix);
	var offsetLeft = (offsetArr[2].split(','))[4];	
	var tip = $(this).find('.tips');
	var x = tob.gestures.session.firstTouch.center.x-offsetLeft-tip.width()/2;
	var y = tob.gestures.session.firstTouch.center.y - tip.height()/2;
	tip.css({'left':x,'top':y});
	tip.addClass('active');
	setTimeout(function(){
		tip.removeClass('active');
	},2000);
})
//点击非物品区域显示指示无线索提示;
var no_clue_tip = $('.no-clue');
console.log(no_clue_tip)
$('.wrapper').bind('tap',function(b){
	var wrapper = $('.wrapper')[0];
	var matrix = getStyles(wrapper,'transform');
	var screenX = tob.gestures.session.firstTouch.center.x;
	var screenY = tob.gestures.session.firstTouch.center.y;
	var offsetArr = g.exec(matrix);
	var offsetLeft = (offsetArr[2].split(','))[4];	
	var tip = $(this).find('.tips');
	var x = tob.gestures.session.firstTouch.center.x-offsetLeft-tip.width()/2;
	var y = tob.gestures.session.firstTouch.center.y - tip.height()/2;
	var target = b.target || b.srcElement;
	var parent = target.parentNode;
    var deep = target.classList.contains('none-info') || target.classList.contains('clue') || parent.classList.contains('none-info') || parent.classList.contains('clue');
    if(!deep){
		no_clue_tip.css({'left':x,'top':y});
		no_clue_tip.addClass('active');
		setTimeout(function(){
			no_clue_tip.removeClass('active');
		},2000);
	}	
})
$('.clue-1').bind('tap',function(){	
	if(!$(this).hasClass('invis')){
		$(this).addClass('invis');
	    $('.clue-2').show();
	}else{
		$(this).removeClass('invis');
		$('.clue-2').hide();
	}	
})
$('.clue-3').bind('tap',function(){
	if(!$(this).hasClass('invis')){
		$(this).addClass('invis');
	    $('.clue-3-1').show();
	}else{
		$(this).removeClass('invis');
		$('.clue-3-1').hide();
	}	
})
$('.clue').each(function(){
	$(this)[0].clicked_state = 0;
})
var clicked_state = 0;
var clicked_nth = 0;
var clicked_total = 0;
var img_urls = ['img/stuff/clue-light-1.png','img/stuff/clue-light-21.png','img/stuff/clue-tv-1.png','img/stuff/clue-tv-2.png','img/stuff/clue-window.png','img/stuff/clue-painting.png','img/stuff/clue-bench.png','img/stuff/clue-pearl.png','img/stuff/stuff_selected_bg.png']
var clue_tips = [
                  {off:'原来是一盏灯，点亮试试...',on:'灯后面好像有什么东西...'},
				  undefined,
				  {off:'这里有一台电视机，打开试试...',on:'电视机后面好像有什么东西...'},
				  undefined,
				  {off:'',on:'在金融城CBD核心，窗外的风景真让人心醉。|窗户上有什么在闪烁?'},
				  {off:'全系精装华尔道夫般的家，处处皆品味',on:'壁画后面好像有什么东西...'},
				  {off:'这个凳子看上去有些与众不同...',on:'这个凳子竟然可以打开，里面好像有什么...'},
                ];
var pearl_nth = [3,0,4,0,10,6,10];
//建立预请求;
img_urls.forEach(function(a,b){
	var img = new Image();
	img.src = a;
})
var img_source = [
					{ 
						off:img_urls[0],
						on:img_urls[1]
					},
                    undefined,
                    { 
						off:img_urls[2],
						on:img_urls[3]
					},
					undefined,
                    { 
						off:undefined,
						on:img_urls[4]
					},				
                    { 
						off:img_urls[5],
						on:img_urls[5]
					},
                    { 
						off:img_urls[6],
						on:img_urls[6]
					}					
                 ];
$('.clue').bind('tap',function(){	
	var wrapper = $('.wrapper')[0];
	var matrix = getStyles(wrapper,'transform');
	var screenX = tob.gestures.session.firstTouch.center.x;
	var screenY = tob.gestures.session.firstTouch.center.y;
	var offsetArr = g.exec(matrix);
	var offsetLeft = (offsetArr[2].split(','))[4];	
	var hasFind = $('.isOpened');
	var x = tob.gestures.session.firstTouch.center.x-offsetLeft-hasFind.width()/2;
	var y = tob.gestures.session.firstTouch.center.y+50;
	var clicked_state = $(this)[0].clicked_state;
	clicked_nth = $(this).index();
	if(clicked_state){
		hasFind.css({'left':x,'top':y});
		hasFind.addClass('active');
		setTimeout(function(){
		    hasFind.removeClass('active');
	    },2000);
	}else{
		$('#clue')[0].removeEventListener('tap',A,!1);
		var off = img_source[clicked_nth].off;
		var on = img_source[clicked_nth].on;
        if(off){
			$('.clue-img')[0].src = off;						
			$('.clue-tip').html(clue_tips[clicked_nth].off);
			click_pic_forbidden = false;
			
		}else{
			$('.clue-img')[0].src = on;
			var tip = clue_tips[clicked_nth].on
			if(~tip.indexOf('|')){
				tip = tip.split('|');
				tip = tip[0] + '<br>' + tip[1];
			}
			$('.clue-tip').html(tip);			
            $('.checkout').show();
            click_pic_forbidden = true;			
		}
		$(this)[0].clicked_state = 1;
        $('#clue').fadeIn(300);		
		clicked_total++;
	}	
})
//点击查看，获得线索;
var get_number = 0;
var total_pearl = 0;
var prize_state = 0;
var click_pic_forbidden = false;
$('.checkout').bind('tap',function(){
	$('#audioResult')[0].play();
	total_pearl+=pearl_nth[[clicked_nth]];
	$('.clue-img')[0].src = img_urls[7];
	$(this).hide();
	$('.clue-congraduation').show();
	$('.go-find').show();
	$('.clue-tip').hide();
	$('.get_number').html(pearl_nth[[clicked_nth]]+'');
	$('.total_pearl').html(total_pearl+'');	
	setTimeout(function(){
		$('#clue')[0].addEventListener('tap',A,!1)
	},500)	
})
$('.clue-img').bind('tap',function(){
	if(click_pic_forbidden){
		return;
	}else{
		$(this)[0].src = img_source[clicked_nth].on;
		$('.clue-tip').html(clue_tips[clicked_nth].on);
		$('.checkout').show();
	}
	
})
function A(){
	         var stuff = $('.stuff').eq(clicked_total-1);
			 stuff[0].style.backgroundImage = 'url('+img_urls[8]+')';
			 var img = stuff.find('img');
			 get_clue(img[0]);
			 if(clicked_total==5){
				 $('.key')[0].style.backgroundImage = 'url('+img_urls[8]+')';
				 $('#hand-tip').removeClass('hide').addClass('active');
				 $('.key').bind('tap',function(){
					 $('#hand-tip').addClass('hide').removeClass('active')
					 if(prize_state){
						 get_prize_5();
					 }else{
						 $('#treasure-1').fadeIn(400);
					 };
				 })
			 }
		     $('#clue').fadeOut(500);			 
			 setTimeout(function(){
				    $('.checkout').hide();
					$('.clue-congraduation').hide();
					$('.go-find').hide();
					$('.clue-tip').show();
			 },600)
	}	
function get_clue(obj){
	var toolbar_nth_src = clicked_nth;
	switch(toolbar_nth_src){
		case 0:
		       obj.src = 'img/toolbar/light.png';
			   break;
		case 2:
		       obj.src = 'img/toolbar/tv.png';
			   break;
		case 4:
		       obj.src = 'img/toolbar/window.png';
			   break;
		case 5:
		       obj.src = 'img/toolbar/painting.png';
			   break;
	    case 6:
		       obj.src = 'img/toolbar/bench.png';
			   break;
	}
}
//音乐播放器;
	var btn = document.querySelector('#bgm-btn');
    var f = 1;
    var audio = document.getElementById('music');
    function audioAutoPlay(id){
        audio.play();
        document.addEventListener("WeixinJSBridgeReady", function () {
           // audio.play();
        }, false);
        btn.classList.toggle('rotate');
    }

   // audioAutoPlay('music');
    btn.addEventListener('touchend', function(){
                btn.classList.toggle('rotate');
                if (f) {   
                audio.pause();
                f = 0;
                } else {
                    audio.play();
                    f = 1;
                }
    });

$('#start-game').bind('tap',function(){
	$('#game-door').addClass('scale')
	$('#door-open').addClass('doorAnimation');
    audioAutoPlay('music')	
	setTimeout(function(){
		//$('')
		$('#game-door').hide();
		$('#game-door').removeClass('scale');
		setTimeout(function(){
			$('#scene-container').show();
			$('#bgm-btn').show();			
			var myScroll;			
				myScroll = new IScroll('#scene-container', {
					scrollX: true,
					scrollY: false,
					bounce:false
				});	
			$('#mask').fadeOut(1000);			
		},100)
		//$('#game-door').fadeOut(1000)
	},6000)
	/*
	setTimeout(function(){
		$('#game-door').fadeOut(1000);
		setTimeout(function(){
			$('#mask').fadeOut(1000);
		},1000)
	},2000)
	*/
})
$('.open-treasure-btn').bind('tap',function(){
	$('.open-treasure-btn').hide();
	$('.box-top').addClass('active');
	$('.box-shine').addClass('active');
    $('.con-pearl').hide(); 	
	getRid();
})
$('#share').bind('tap',function(){
	$('#share').fadeOut(400);
})
$('.again-treasure-btn').bind('tap',function(){
	$('#treasure-1').fadeOut(400);
	setTimeout(function(){
		$('.open-treasure-btn').show();
		$('.con-pearl').show();
		$('.con-1').hide();
		$('.con-2').hide();
		$('.con-3').hide();
		$('.con-4').hide();
		$('.con-5').hide();
		$('#form').hide();
		$('.close-treasure-btn').hide();
	},600)
	prize_state = 1;
})

//开启钥匙;
function get_prize_1(){
    $('.con-1').show();
	$('.close-treasure-btn').show();
	$('.contact').show();
	setTimeout(function(){
		$('#form').show();
	},200)
}
function get_prize_2(){
    $('.con-2').show();
	$('#form').show();
	$('.close-treasure-btn').show();
	$('.contact').show();
}
function get_prize_3(){
    $('.con-3').show();
	$('#form').show();
	$('.close-treasure-btn').show();
	$('.contact').show();
}
function get_prize_4(){
    $('.con-4').show();
	$('#form').show();
	$('.close-treasure-btn').show();
	$('.contact').show();
}
function get_prize_5(){
	if(!$('.box-top').hasClass('active')){
		$('.box-top').addClass('active');
		$('.box-shine').addClass('active');
	}
	$('.con-pearl').hide();
	$('.open-treasure-btn').hide();
	$('.con-5').show();
	$('.contact').show();
	$('.again-treasure-btn').show();
	$('#treasure-1').fadeIn(1000);	
}
function get_prize_6(){
	$('.con-pearl').hide();
	$('.open-treasure-btn').hide();
	$('.con-5').show();
	$('.contact').show();
	$('.again-treasure-btn').show();	
}
var uid = null;
var rid = null;
function getData(){
	 var a = window.localStorage.CJGUID;
	 if(!a){
		 getUid();
	 }
	 uid = window.localStorage.CJGUID;
}
$('.close-treasure-btn').bind('tap',function(){
	    var username = ($('#username').val()).trim();
     	var telephone = ($('#tel').val()).trim();
	    var obj={};
		obj.username = username;
		obj.tel = telephone;
        obj.openid = uid;
        obj.prize = rid;	
		if(username.length>1 && telephone.length==11){
	         $.post("http://api.chuangjia.me/cj/yt/post",obj, function (_data) {
					var data = JSON.parse(_data);
					var code = data.code;			
				    if(code== 200) {
						A();
					}else if(code==300){
						alert('您已经参与过活动!')
					}			
			})			
			prize_state = 1;
		}else{
			alert('请正确填写用户信息!!');
		}
        function A(){
			$('#treasure-1').fadeOut(400);
			setTimeout(function(){
				$('.open-treasure-btn').show();
				$('.con-pearl').show();
				$('.con-1').hide();
				$('.con-2').hide();
				$('.con-3').hide();
				$('.con-4').hide();
				$('.con-5').hide();
				$('#form').hide();
				$('.close-treasure-btn').hide();
				$('#share').show();
			},600)
		}		
	});	
function randomRid(){
	var a =Math.floor(Math.random()*5)+1;
	prizeRid(a)
}
function prizeRid(a){
		var code = a;
		switch(code){
			case 1:
			      get_prize_1();
				  break;
			case 2:
			      get_prize_2();
				  break;
			case 3:
			      get_prize_3();
				  break;
			case 4:
			      get_prize_4();
				  break;
		}
	};
	
function getRid(){
		var obj = {};
		obj.openid = uid;
		$.post('http://api.chuangjia.me/cj/yt/prize',obj, function (_data) {
            var data = JSON.parse(_data);
            var code = data.code;
			rid = data.rid;
            //处理用户已经抽过奖：			
		    if(code == 300){				
				get_prize_6();
			}else{
				prizeRid(rid);
			}	
        })
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
                        window.localStorage.CJGUID = data.user.uid;
						uid = data.user.uid;
                    }
                }
            },
            error: function (data) {
                return;
            }
        });
    };
window.addEventListener('load',function(){
	getData();
	$('#loading').hide();
},!1)
