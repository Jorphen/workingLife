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
$('.headquarters-list li').bind('click',function(){
	$('.headquarters-list li').each(function(){
		$(this).removeClass('on');
	});
	$(this).addClass('on');
	var index = $(this).index();
	switch(index){
		case 0:
		     $('.cd').show();
			 $('.cq').hide();
			 $('.lft-chengdu').show();
			 $('.lft-chongqing').hide();
			 $('.rgt-chengdu').show();
			 $('.rgt-chongqing').hide();
			 break;
	    case 1:
		     $('.cd').hide();
			 $('.cq').show();
			 $('.lft-chengdu').hide();
			 $('.lft-chongqing').show();
			 $('.rgt-chengdu').hide();
			 $('.rgt-chongqing').show();
			 break;
	}
})
