(function(){
	var uid = window.localStorage.CJWXID;
	var isCommitted = !1;
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
                        window.localStorage.CJWXID = data.user.uid;
						uid = data.user.uid;
                    }
                }
            },
            error: function (data) {
                return;
            }
        });
    };
	//a:传经来的中奖码,并进行处理;
	function C(a){
		var rid = a;
		switch(rid){
			case 1: 
			      $('#page').show();
			      break;
			case 2:
                  $('#failure').show();
                  break;
            case 3:
			      $('#over').show();
				  break;
		}
	};
	function D(){
		var obj = {};
		obj.openid = uid;
		//向后台传送用户的openid，并返回是否抽过奖没有;
		$.post('http://api.chuangjia.me/cj/jd/prize',obj, function (_data) {
            var data = JSON.parse(_data);
            var code = data.code;
			rid = data.rid;
            //处理用户已经抽过奖：			
		    if(code == 300){				
				$('#repeat').show();
			}else{
				C(rid);
			}	
        })
	}
	
	//获取用户信息：
	$('.get').bind('click',function(){
	        if(!isCommitted){
				$('#userform').show();
				isCommitted = 1;
			}else{
				alert('你已经提交，请勿重复提交!');
			}
	  });
	  $('#submit').bind('click',function(){
	        var username = ($('.name1').val()).trim();
	        var othername = ($('.name2').val()).trim();
			var tel = ($('.tel01').val()).trim();
			var othertel = ($('.tel02').val()).trim();
			var length01 = tel.length;	        
			var length02 = othertel.length;
			if(!tel && !othertel){
			     alert('请输入电话号码!');
				 return;
			}else if(!username || !username){
			     alert('请输入用户姓名!');
				 return;
			}else if((length01 && length01 !== 11) || (length02 && length02 !== 11)){
			     alert('请输入11位数的电话号码');
				 return;
			}else if((username && !tel) || (othername && !othertel)){
			     alert('请正确输入电话号码!');
				 return;
			}else{
			      var obj = {};
				  obj.username = username;
				  obj.tel = tel;
				  obj.othername = othername;
				  obj.othertel = othertel;
				  obj.openid = uid;
				  obj.prize = rid;
			      $.post("http://api.chuangjia.me/cj/jd/post",obj, function (_data) {
					var data = JSON.parse(_data);
					var code = data.code;			
					if(code== 200) {
							$('#userform').hide();
							$('#mask').show();
							$('.get').unbind();
				    }else if(code==300){
							alert('您已经参与过活动，不能重复提交信息!!')
					}			
                  })
			}
	  })
	$('.quit').bind('click',function(){
		$('#mask').hide();
	})
	window.addEventListener('load',function(){
		$('#loading').hide();
		D();
		$(document).bind('touchmove',function(b){b.preventDefault();})
    },!1)
})()