(function(){
	window.addEventListener('load',function(){
		 window.addEventListener('touchmove',function(b){
			 b.preventDefault();
		 },!1)
	},!1);
	(function(a) {
		a.requestAnimation = function(c, d) {
				var g = a.setTimeout(function() {
						c()
				},d);
				return g;
		},
		a.cancelAnimation = function(a) {
				clearTimeout(a)
		}
	})(window)
	setTimeout(function(){
		   $('.light').addClass('on');
		setTimeout(function(){
		    $('.light').addClass('active');
	    },2000)
	},2000);
	var flag = true,
	mySwiper = new Swiper('.swiper-container', {
		lazyLoading : true,
		lazyLoadingInPrevNext : true,
		lazyLoadingOnTransitionStart : true,
		direction : 'vertical',
		nextButton:'.next',
		noSwiping : true,
		noSwipingClass : 'stop',
		onInit: function(swiper){ //Swiper2.x的初始化是onFirstInit
			swiperAnimateCache(swiper); //隐藏动画元素 
			swiperAnimate(swiper); //初始化完成开始动画
		}, 
		onSlideChangeEnd: function(swiper){ 
			swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
		},
		onProgress: function(swiper) {
				for (var i = 0; i < swiper.slides.length; i++) {
					var slide = swiper.slides[i];
					var progress = slide.progress;
					var translate, boxShadow;

					translate = progress * swiper.height * 0.8;
					scale = 1 - Math.min(Math.abs(progress * 0.2), 1);
					boxShadowOpacity = 0;

					slide.style.boxShadow = '0px 0px 10px rgba(0,0,0,' + boxShadowOpacity + ')';

					if (i == swiper.myactive) {
						es = slide.style;
						es.webkitTransform = es.MsTransform = es.msTransform = es.MozTransform = es.OTransform = es.transform = 'translate3d(0,' + (translate) + 'px,0) scale(' + scale + ')';
						es.zIndex=0;
					}else{
						es = slide.style;
						es.webkitTransform = es.MsTransform = es.msTransform = es.MozTransform = es.OTransform = es.transform ='';
						es.zIndex=1;
					}
				}
			},
			onTransitionEnd: function(swiper, speed) {
				for (var i = 0; i < swiper.slides.length; i++) {
				}
				swiper.myactive = swiper.activeIndex;
				if (swiper.activeIndex == 1 && flag) {
					flag = false;
					mySwiper.removeSlide(0);
				}

			},
			onSetTransition: function(swiper, speed) {

				for (var i = 0; i < swiper.slides.length; i++) {
					//if (i == swiper.myactive) {

						es = swiper.slides[i].style;
						es.webkitTransitionDuration = es.MsTransitionDuration = es.msTransitionDuration = es.MozTransitionDuration = es.OTransitionDuration = es.transitionDuration = speed + 'ms';
					//}
				}

			}

	});
	$(window).load(function() {
	// 音乐自动播放
		//$('#loading').hide();
		mySwiper.slideTo(1);
	});
	
	function copyBlueLight(){
		var blue_light = $('.blue-light')[0];
		var parent = blue_light.parentNode;
		var obj = {};
		var timer = null;
		obj.start = function(){
			animate();
		}
		obj.stop = function(){
			cancelAnimation(timer);
		}
		obj.clear = function(){
			var lights = $('.blue-light');
			var length = lights.length;
			for(var i=1;i<length;i++){
				parent.removeChild(lights[i]);
				console.log(lights[i])
			}
		}
		function animate(){
				var clone = blue_light.cloneNode('true');
				clone.style.backgroundSize = Math.floor(Math.random()*80)+20+'%';
				clone.style.left = Math.floor(Math.random()*window.innerWidth)+'px';			 
				parent.appendChild(clone);
				setTimeout(function(){
					 clone.style.bottom = window.innerHeight + 'px';
				},200);
				setTimeout(function(){
					 parent.removeChild(clone);
				},7000)
                timer = requestAnimation(animate,500);				
		}
		return obj;
	};
	var m = copyBlueLight();
	m.start();
	//抽奖设置;
	var deg = 0;
	var clicked_prize = false;
	//奖品信息;
	var prize_result = ['获得带薪假期1天，','获得5元红包1个，','获得50元红包1个，','获得刘老大专属红包1个，','获得彩票一张，']
	var prize_question = ['准备去哪“浪”啊!!!','中午在7楼食堂可以加个素菜了!','买一包中华烟妥妥的!!!','想要？私他啊!!!','中了500万表忘了请大伙戳一顿哟!']
	$('.go').bind('click',function(){
		if(clicked_prize){
			return;
		}
		clicked_prize = true;
		var obj ={};
		obj.open_id = window.localStorage.CJOPENID;
		var angles = 0;
		var dial = $('.dial')[0];
		var n = (Math.floor(Math.random()*8)+10)*360;
		if(code_state!==2){
			$.get('http://api.chuangjia.me//cj/prize/luckdraw?callback=fun',obj,function(_data){
			       var data = _data.slice(_data.indexOf('{'),_data.lastIndexOf('}')+1);
		           data = eval("("+data+")");
                   var code = parseInt(data.code);
                   if(code==0){
					   var prize_id = data.data.prize_id;
					   console.log(prize_id)
					   switch(prize_id){
						   case 1:
						         angles = [20,140][Math.floor(Math.random()*2)];
								 $('#result .prize-info').html(prize_result[0]);
								 $('#result .comment').html(prize_question[0]);
								 break;
						   case 2:
						         angles = 220;
								 $('#result .prize-info').html(prize_result[2]);
								 $('#result .comment').html(prize_question[2]);
								 break;
						   case 3:
						         angles = 300;
								 $('#result .prize-info').html(prize_result[1]);
								 $('#result .comment').html(prize_question[1]);
								 break;
						   case 4:
						         angles = 100;
								 $('#result .prize-info').html(prize_result[3]);
								 $('#result .comment').html(prize_question[3]);
								 break;
						   case 5:
						         angles = [60,180,260,340][Math.floor(Math.random()*4)];
								 $('#result .prize-info').html(prize_result[4]);
								 $('#result .comment').html(prize_question[4]);
								 break;
					   }
					    dial.style.transform = 'rotateZ('+(angles+n)+'deg)';
						console.log(angles);
						
                        setTimeout(function(){
							$('#mask').show();
							$('#result').show();
							if(worker_year==3){
							   /*
								setTimeout(function(){
									$('#result').fadeOut(500);
									setTimeout(function(){
										$('#end').fadeIn(500);
									},500)
								},1000)
								*/
								$('.cancel').bind('click',function(){
									$('#result').fadeOut(500);
                                    $('#end').fadeIn(500);
								})
							}else{
								$('.cancel').bind('click',function(){
									$('#result').fadeOut(500);
									$('#mask').hide();
									$('#prize').fadeOut(500);
									$('#ipt-id').hide();
								})
							}			
						},5500)								
				   }else if(code==1){
					     alert('活动已截止!')
				   }else{
					   alert('你已经参加过抽奖!!!');
				   }				   
		    })
		}else{
			alert('你已经参加过抽奖!!!');
		}
	    
	})
	
	//输入工号;
	$('#ipt-id').bind('click',function(){
		$('#mask').show();
		$('#id').fadeIn(400);
	})
	//退出输入工号;
	$('.quit').bind('click',function(){
		$('#username').val('');
		$('#userId').val('');
		$('#id').fadeOut(500);
		$('#mask').fadeOut(500);
	})
	//确认提交;
	$('#commit').bind('click',function(){
		 var name = $('#username').val().trim();
		 var id = $('#userId').val().trim();
		 if(name.length <2 || id.length<7){
			 alert('请正确输入姓名以及工号!!!');
			 $('#username')[0].focus();
		 }else{
			 commitId(window.localStorage.CJOPENID,name,id);
			 
		 }
		 
	})
	//段位信息：
	var work_time = ['你加入创家快一年了，','你加入创家快二年了，','你加入创家快三年了，','你加入创家已超过三年，'];
	var work_rank = ['属于铂金段位，','属于钻石段位，','属于大师段位，','属于王者段位，'];
	var work_comment =['赶紧加油工作冲级吧!!!','赶紧加油工作打怪吧!!!','加油工作你离王者不远了!!!','创家，感谢你的不离不弃!!!'];
	var worker_name = '';
	var worker_id = '';
	var worker_year = 0;
	//提交工号及姓名API：
	function commitId(uid,name,id){
		var obj = {};
		obj.name = name;
		obj.no = id;
		obj.open_id = uid;
		$.get('http://api.chuangjia.me/cj/prize/sign?callback=fun',obj, function (_data) {
           var data = _data.slice(_data.indexOf('{'),_data.lastIndexOf('}')+1);
		   data = eval("("+data+")")
		   var code = data.code;
		   if(code===1){
			   alert('没有找到该用户，请核对你的姓名和工号!!!');
		   }else{
			     $('#id').fadeOut(500);
				 $('#mask').show();
				 var year = parseInt(data.data.years);
				 worker_year = year;
			     $('#rank .time').html(work_time[year]);
				 $('#rank .rank-position').html(work_rank[year]);
				 $('#rank .comment').html(work_comment[year]);
				 $('#rank').fadeIn(500);
		   }
        })
	}
	//确认段位;
	$('#confirm').bind('click',function(){
		$('#rank').fadeOut(500);
		$('#prize').fadeIn(500);
		$('#mask').hide();
	})
	//段位取消选择;
	$('.leave').bind('click',function(){
		$('#rank').fadeOut(500);
		$('#mask').hide();
	})
	//特别奖项退出设置;
	$('.delete').bind('click',function(){
		$('#end').hide();
		$('#mask').hide();
		$('#prize').fadeOut(500);
		$('#ipt-id').hide();
	})
	var height = $('body').height();
	$(window).resize(function() {
		$('body').height(height);
	});
	//音乐播放器;
	// 音乐自动播放
    var btn = document.querySelector('#bgm-btn');
    var f = 1;
    var audio = document.getElementById('music');

    function audioAutoPlay(id){
        audio.play();
        document.addEventListener("WeixinJSBridgeReady", function () {
            audio.play();
        }, false);
        btn.classList.toggle('rotate');
    }

    audioAutoPlay('music');
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
    $('.swiper-container').bind('touchend',function(){
		var activeIndex = mySwiper.activeIndex;
		if(activeIndex!==0){
			m.stop();
			m.clear();
		}else{
			m.start();
		}
	})
	//微信授权
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
                        window.localStorage.CJOPENID = data.user.uid;
						uid = data.user.uid;
                    }
                }
            },
            error: function (data) {
                return;
            }
        });
    };
	var uid = null;
	var hasPlayed = false;
	window.addEventListener('load',function(){
		$('#loading').hide();
		//window.localStorage.CJOPENID ? (hasPlayed = true) :(window.localStorage.CJOPENID=123456);
		window.localStorage.CJOPENID || (getUid());
		checkWinning(window.localStorage.CJOPENID)
		//getUid();
	},!1)
    //初始抽奖状态校验;
	var code_state = 0;
	function checkWinning(openid){
		var obj ={};
		obj.open_id = openid
		 $.get('http://api.chuangjia.me/cj/prize/ready?callback=fun',obj,function(_data){
			  var data = _data.slice(_data.indexOf('{'),_data.lastIndexOf('}')+1);
			  data = eval("("+data+")")
			  code_state = data.code;
		 })
	}
})()