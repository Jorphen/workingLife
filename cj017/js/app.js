(function(){
	var uid = window.localStorage.CJOPENID;
	var rid;
	if(!uid){
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
	function C(a){
		var code = a;
		if(code === 1 || code ===2){
			$('#page2').removeClass('hide');
			if(code===2){
				$('.prize1').addClass('hide');
			    $('.prize2').removeClass('hide');
			}					
		}else if(code === 3){
			window.location = 'http://prj.chuangjia.me/cj017/noprize.php';
		}else if(code === 4){
			window.location = 'http://prj.chuangjia.me/cj017/fail.php';
		}
	};
	function D(){
		var obj = {};
		obj.openid = uid;
		$.post('http://api.chuangjia.me/cj/jd/prize',obj, function (_data) {
            var data = JSON.parse(_data);
            var code = data.code;
			rid = data.rid;
            //处理用户已经抽过奖：			
		    if(code == 300){				
				window.location='http://prj.chuangjia.me/cj017/result.php';
			}else{
				C(rid);
			}	
        })
	}
	
	//获取用户信息：
	$('#submit').bind('click',function(){
	    var username = ($('#username').val()).trim();
     	var telephone = ($('#telephone').val()).trim();
	    var obj={};
		obj.username = username;
		obj.tel = telephone;
        obj.openid = uid;
        obj.prize = rid;	
		if(username.length<2 || telephone.length!==11){
		    alert('请正确输入用户名和电话号码!');
			return;
		}		
	    $.post("http://api.chuangjia.me/cj/jd/post",obj, function (_data) {
            var data = JSON.parse(_data);
            var code = data.code;			
		   if(code== 200) {
                alert("提交成功。");
            }else if(code==300){
			    alert('您已经参与过活动!')
			}			
        })
	});	
	window.addEventListener('load',function(){
		$('#loading').hide();
		D();
		$(document).bind('touchmove',function(b){b.preventDefault();})
    },!1)
})()