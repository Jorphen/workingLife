$('#header .title-list li').bind('mouseover',function(){
	var index = $(this).index();
	$(this).find('.list-mark').css('width','72px');
	//W(index*width,300,$('#list-mark')[0]);
	var list_tb = $(this).find('.tb-list');
	if(!jQuery.isEmptyObject(list_tb)){
		list_tb.show();
	}
}).bind('mouseout',function(){
	$(this).find('.list-mark').css('width','0px');
	$(this).find('.tb-list').hide();
});
//集团要闻
$('#page4 .news-btn span').bind('click',function(){
	$('#page4 .news-btn span').each(function(){
		$(this).removeClass('on');
	})  
	$(this).addClass('on');
})
//买房吗按钮、房观察按钮;
$('#page3 .maifangma-plat-icon').bind('click',function(){
	          $('.product-service').hide();
			  $('.maifangma').show();
			  $('.fangguancha').hide();
			  $('.service').hide();
})
$('#page3 .fangguancha-plat-icon').bind('click',function(){
	          $('.product-service').hide();
			  $('.maifangma').hide();
			  $('.fangguancha').show();
			  $('.service').hide();
})