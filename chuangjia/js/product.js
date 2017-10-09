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
$('.pro-list li').bind('click',function(){
	var index = $(this).index();
	$('.pro-list li').each(function(){
		$(this).removeClass('on');
	})
	$(this).addClass('on');
	$('section.content').each(function(){
		$(this).hide();
	})
	switch(index){
		case 0:		      
			  $('.service-mode').show();
			  break;
		case 1:
		      $('.own-pro').show();
		      
			  break;
		case 2:
		      $('.internet-link').show();
			  break;
	}
})
var url = window.location.href;
var page = url.slice(url.lastIndexOf('=')+1,url.length);
if(page =='network'){
	 $('.pro-list li')[2].click();
}else if(page == 'own'){
	$('.pro-list li')[1].click();
}else if(page =='mode'){
	$('.pro-list li')[0].click();
}