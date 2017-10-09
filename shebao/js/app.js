(function(){
	 window.onload =function(){
		 setTimeout(function(){
			 if(!window.JsObject){
				getUid();
			 }			 
		 },0)
		 loginObject.getData();
	 }
	 
	 $('.mask').bind('touchmove',function(e){
		  e.preventDefault();
		  e.stopPropagation();
	 })
	 $('.btn-login').bind('click',function(){
		 // $('.mask').show();
		 // $('#login-container').fadeIn(500);
		  var content = $('.msg-district').val().trim();
		  if(content.length ==0){
			  alert('提交留言内容不能为空!!!');
			  $('.msg-district')[0].focus();
		  }else{
			  window.loginObject.clickCommit();
			 // window.loginObject.commitData();
		  }
	 })
	 
	 $('.close-login').bind('click',function(){
		  $('.mask').hide();
		  if(!$('.rember-conter-btn').hasClass('toggle')){
			  $("input[name='username']").val('');
			  $("input[name='tel']").val('')
		  }
		  $('#login-container').fadeOut(500);
	 })
	 
	 $('.rember-conter-btn').bind('click',function(){
		 $(this).toggleClass('toggle'); 
	 })
	 
	 $('#loging-btn').bind('click',function(){
		   var username = $("input[name='username']").val();
		   var tel = $("input[name='tel']").val();		   
	 })	 
	 //window.JsObject  //内置全局对象 ;
	 var sample = $('.answer-list')[0];
	 var sample_parent = $('#msg-interactive')[0];
	 var isIOS = !!navigator.userAgent.match(/\(i[^;]+;( U;)? CPU.+Mac OS X/);
	 var isAndroid = navigator.userAgent.indexOf('Android') > -1 || navigator.userAgent.indexOf('Adr') > -1;
	 var isWeiXin = navigator.userAgent.match(/MicroMessenger/i) == 'micromessenger';
	 //var abcd = ['小张1','王二1','麻子1','李四1','张三1','小明1','路人甲1']
	 window.loginObject = {
		 hasLogged:false,               //是否登录
		 tel:'',                        //用户电话
		 username:'',                   //登录用户名
		 content:'',                 //用户留言回复,
         hit:'0',
         nickname:'',		 
         clickCommit:function(){
			  this.content = $('.msg-district').val().trim();;
			  console.log('开始登录步骤；')
			  this.requestLogin();			  
		 },		 
		 requestLogin:function(){        //发起登录请求;	 
						  if(window.JsObject){
							      var isLogin = window.JsObject.isLogin();								  
								  console.log('用户登录状态:'+isLogin+'')
								  if(isLogin){
										  console.log('用户已经登录过！！')
										  if(this.username==''){
												var info = window.JsObject.getUserInfo();
												info = $.parseJSON(info);
												this.username = info.id;
												this.tel = info.account;
										  }							      
										  this.commitData(this.username,this.tel,this.hit,this.content);
								  }else{
										   console.log('用户未登录，开始APP登录界面登录！！')
										   window.JsObject.login('');
								  }
						  }else{
							   this.nickname = window.localStorage.CJNICKNAME;
							   this.commitData(this.nickname,this.tel,this.hit,this.content);
						  }
		 },
		 handle:function(arr){              //处理数据；
		       var length = arr.length;
			   sample_parent.innerHTML = '';
               for(var i=0;i<length;i++){
				     var clone = sample.cloneNode('true');
					 var user = clone.getElementsByClassName('answer-username')[0];
					 var msg = clone.getElementsByClassName('msg')[0];
					 var thumb_times = clone.getElementsByClassName('thumb')[0];
					 thumb_times.parentId = arr[i].id;
                     console.log(arr[i].id)
					 bindHit(thumb_times);
					 if(window.JsObject){
						 user.innerHTML = arr[i].username+'回复:';
					 }else{
						 user.innerHTML = arr[i].username+'回复:';
					 }
					 user.style.fontSize = '22px';
					 msg.innerHTML = arr[i].content;
					 msg.style.fontSize = '18px';
					 thumb_times.innerHTML= arr[i].hit;       					 
					 clone.style.display='block';
					 sample_parent.appendChild(clone);					 
			   };
			   console.log('提交成功，并已经更新内容!!');
               function bindHit(obj){
					  obj.addEventListener('click',handleHit,!1)
			   }			   
		 },
		 setData:function(){                  //登录成功，继续操作;
			    var info = window.JsObject.getUserInfo();
				info = $.parseJSON(info);
				this.username = info.id;
				this.tel = info.account;
				console.log('登录成功，并已经获取用户信息。提交信息;')
				this.commitData();
		 },
		 commitData:function(a,b,c,d){              //提交回复数据；
		        var self = this;
			    $.post('//api.chuangjia.me/cj/md/post',{
					     username:a,
						 tel:b,
						 hit:c,
						 content:d
				},function(_data){
					 var data = $.parseJSON(_data);
					 var code = data.code;
					 console.log(typeof data)
					 console.log('等待服务器回应!!');					 
					 if(code==200){
						  console.log('提交成功!!');
						  $('.msg-district').val('');
						  self.getData(); 
					 }else{
						  console.log('提交失败，请重新提交！')
					 }
				})
		 },
		 getData:function(){
			    var self = this;
				console.log('获取后台数据库!!')
			    $.post('//api.chuangjia.me/cj/md/list',function(_data){
					 var data =  $.parseJSON(_data);
					 var code = data.code;
					 console.log(data)
					 if(code==200){
						   console.log('获取数据成功!');
						   var arr = data.list;
						   self.handle(arr);
					 }else{
						   console.log('获取信息失败！');
					 }
				})
		 }
		 
	 }
	 var arra=[];
     localStorage.setItem('key',JSON.stringify(arra));
     var read=JSON.parse(localStorage.getItem('key'));
     console.log(read,read.length);
	 var localId = JSON.parse(localStorage.getItem('MFMUSERID')) || [];
	 function handleHit(){
		                var parentId = this.parentId;
						console.log(parentId)
		                var url = '//api.chuangjia.me/cj/md/hit';						
		                var obj = this;
						var id = this.parentNode.getElementsByClassName('answer-username')[0].innerHTML;
						var local_id = localId;;
						if(~local_id.indexOf(id)){
							return;
						}else{
							obj.innerHTML = parseInt(obj.innerHTML)+1+'';
							local_id.push(id);
							localStorage.setItem('MFMUSERID',JSON.stringify(local_id));
							$.post('//api.chuangjia.me/cj/md/hit',{id:parentId},function(_data){
								 var data =  $.parseJSON(_data);
								 var code = data.code;
								 console.log(data)
								 if(code==200){
									   console.log('点击传送数据成功')
								 }else{
									   console.log('点击传送数据失败');
								 }
							})							
						}                       						
				  }
	 
	 window.setData = function(){
		  window.loginObject.setData();
	 }	 
	 function getUid() {
			$.ajax({
				type: 'get',
				url: '//prj.chuangjia.me/wxsso//getuser?',
				data: {ssid: window.localStorage.CJSSID || ""},
				dataType: "json",
				success: function (data) {
					if(data.ssid) {
						window.localStorage.CJSSID = data.ssid;						
					}
					if(data.code == '201') {
						window.location.assign(data.url);
					} else {
						if ( data.user.uid) {
							window.localStorage.CJNEWOPENID = data.user.uid;
							window.localStorage.CJIMGURL = data.user.headimgurl;
							console.log(window.localStorage.CJIMGPHOTO);
							console.log(data)
							window.localStorage.CJNICKNAME = data.user.nickname;
						}
					}
				},
				error: function (data) {
					return;
				}
			});
	 };	
})();