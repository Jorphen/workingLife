(function(){
     $('.signup').click(function(event) {
         $('.mask').addClass('toggle').show();
         $('.dialog-form').addClass('show');
     });

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
	 var flag = true;
	
	 $(".sub-btn").click(function () {

         var obj = {                //项目编号
            name: $('[name = name]').val(),                 //姓名
            tel: $('[name = tel]').val(),                   //电话
            userSex: $('[name = userSex]:checked').val(),
            orderDate: $('[name = orderDate]').val()
        }

        var re = /^1\d{10}$/;
        

        if (obj.tel == '' || obj.name == '' || obj.orderDate == '') {
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
            console.log(obj);

            flag = false;

            var _url = "";
            if (window.location.hostname == 'localhost') {
                _url = "bmapi.dev.chuangjia.me";
            } else {
                _url = window.location.host.replace(/(static-zt|zt).(.*)?maifangma.com|cd\.house\.qq\.com|prj\.chuangjia\.me|sc\.edijin\.com/g, "bmapi.$2chuangjia.me");
            }
            $.post(' http://bmapi.chuangjia.me/prj/userclues/add?callback=?', {
                sign: '',
                data: JSON.stringify(obj)
            }, function (data) {
                if (data.code) {
                    flag = true;
                    $('.mask').removeClass('toggle').hide();
                    $('.dialog-form').removeClass('show');
                    alert('提交成功！');
                    window.location.reload();
                }
            }).fail(function (err) {
                console.log('baoMing err: ', err);
            });
        }
    })
	 function getParamByKey(key) {
        var pattern = new RegExp(key + '=([^&]*)');
        var arr = decodeURIComponent(location.search).match(pattern);
        if (arr) {
            return arr[1];
        }
    }
	function checkData(a) {
            var expr = /^\(\{(\S*)\}\)/;
            var b = expr.exec(a)[1];
            var c = b.split(',')[0];
            var d = parseInt(c.slice(c.indexOf(':') + 1));
            return d;
        }
})();