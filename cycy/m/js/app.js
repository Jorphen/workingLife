(function(){
	 $('.mask').bind('touchmove',function(e){
		  e.preventDefault();
	 })
	 $('.tel').click(function(e){
		$('.mask').addClass('toggle').show();
         $('.dialog-form').addClass('show');
	 })
     $('.signup').click(function(event) {
         $('.mask').addClass('toggle').show();
         $('.dialog-form').addClass('show');
     });
	 $('.quit-contract').click(function(){
		 $('.mask').removeClass('toggle').hide();
		 $('.user-contract').removeClass('show');
	 })
    $('.contract-btn').click(function(){
		$('.mask').addClass('toggle').show();
		$('.user-contract').addClass('show');
	})
	
    $('.btn-sign-up').click(function (event) {
        $('.mask').addClass('toggle').show();
        $('.dialog-form').addClass('show');
    });

    $('.cal-btn, .close').click(function (event) {
        $('.mask').removeClass('toggle').hide();
        $('.dialog-form').removeClass('show');
    });
    $('.notice').click(function () {
        $('.special-tip').addClass('show');
    });
    $('.close-tip').click(function () {
        $('.special-tip').removeClass('show');
    });
	//关于我们;
	$('.about-us').click(function(){
		var isMobile = 'ontouchstart' in window;
		if(isMobile){
			window.location.href = 'http://m.maifangma.com/about'
		}else{
			window.location.href = 'http://zt.maifangma.com/activity/com/about-pc.html';
		}
	})
	
	/*对于各个按钮链接相关信息存放*/
	//查看详情按钮相关链接:
	var check_details_info = [
	                        {
							    'houseName':'首创·成南郡',
								'pc_link':'http://cd.maifangma.com/loupan/907526948949852160.html',
								'm_link':'http://m.maifangma.com/cd/housedetails/907526948949852160',
								'houserId':'907526948949852160',
								'position_id':0								
							}, 
                            {
							    'houseName':'首创·万卷山',
								'pc_link':'http://cd.maifangma.com/loupan/898006709727920128.html',
								'm_link':'http://m.maifangma.com/cd/housedetails/898006709727920128',
								'houserId':'898006709727920128',
								'position_id':1							
							},	
                            {
							    'houseName':'首创·娇子1号|漫街',
								'pc_link':'http://cd.maifangma.com/loupan/907780856276320256.html',
								'm_link':'http://m.maifangma.com/cd/housedetails/907780856276320256',
								'houserId':'907780856276320256',
								'position_id':2						
							},
                            {
							    'houseName':'首创·花与城',
								'pc_link':'http://cd.maifangma.com/loupan/907792934408028160.html',
								'm_link':'http://m.maifangma.com/cd/housedetails/907792934408028160',
								'houserId':'907792934408028160',
								'position_id':3						
							},
                            {
							    'houseName':'首创·天禧68#',
								'pc_link':'http://cd.maifangma.com/loupan/907514754463956992.html',
								'm_link':'http://m.maifangma.com/cd/housedetails/907514754463956992',
								'houserId':'907514754463956992',
								'position_id':4						
							},	
                            {
							    'houseName':'首创·鸿恩国际生活区',
								'pc_link':'http://cq.maifangma.com/loupan/907504677493407744.html',
								'm_link':'http://m.maifangma.com/cq/housedetails/907504677493407744',
								'houserId':'907504677493407744',
								'position_id':5						
							},
                            {
							    'houseName':'首创·光和城',
								'pc_link':'http://cq.maifangma.com/loupan/907491977640017920.html',
								'm_link':'http://m.maifangma.com/cq/housedetails/907491977640017920',
								'houserId':'907491977640017920',
								'position_id':6					
							},	
                            {
							    'houseName':'首创·嘉陵荟',
								'pc_link':'http://cq.maifangma.com/loupan/857118088292728832.html',
								'm_link':'http://m.maifangma.com/cq/housedetails/857118088292728832',
								'houserId':'857118088292728832',
								'position_id':7					
							}							
	                    ];
    //查看详情按钮事件绑定:
	$('.detail').bind('click',function(){
		  var position_number = $(this).attr('data-detail');
		  var isMobile = 'ontouchstart' in window;
		  if(isMobile){
			  window.location.href = check_details_info[position_number].m_link;
		  }else{
			  window.location.href = check_details_info[position_number].pc_link;
		  }
	})

    //页面按钮报名处理：
	var house_id = '';
	var house_name = '';
    $('.tel').bind('click',function(){
		 var baoming_id = $(this).attr('data-tag');
		 house_id = check_details_info[baoming_id].houserId;
		 house_name = check_details_info[baoming_id].houseName;
		 $('.form-title').html(check_details_info[baoming_id].houseName)
		 $('.mask').addClass('toggle').show();
         $('.dialog-form').addClass('show');
	})
	 //底部按钮报名处理;					
	 var flag = true;
	 $(".sub-btn").click(function () {
		 console.log(house_name+house_id)
        var obj= {                //项目编号
            "name": $('[name = name]').val(),                 //姓名
            "tel": $('[name = tel]').val(),                   //电话
            "userSex": $('[name = userSex]:checked').val(),
			"houseId":house_id,
			"qudao":'ontouchstart' in window ? 'Mobile' : 'PC',
			"houseName":house_name,
			"prj":'170918025'
        }
		console.log(obj.houseName)
        var re = /^1\d{10}$/;
		var param = {
			 sign:'',
			 data:JSON.stringify(obj)
		};

        if (obj.tel == '' || obj.name == '') {
            alert('请填写以上信息！');
            return false;
        }

        if(!$('#agree').prop('checked')) {
            alert('请阅读特别提示并接受！');
            return false;
        }


        if (!re.test(obj.tel)) {
            alert("请填写正确的电话号码");
            return false;
        }
        if (flag) {
            flag = false;
            $.ajax({
					type:'post',
					url:'http://bmapi.chuangjia.me/prj/userclues/add',
					dataType:'jsonp',
					jsonp:'callback',
					data:param,
					success:function(data){
						var code = data.code;
						if(code){
							 $('.mask').removeClass('toggle').hide();
							 $('.dialog-form').removeClass('show');
							 alert('提交成功！');
							 window.location.reload();
						}else{
							alert('提交失败请重新提交');
						}
					}
				})
           
        }	
	})
})();