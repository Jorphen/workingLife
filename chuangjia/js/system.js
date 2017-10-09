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
$('.com-list li').bind('click',function(){
	var index = $(this).index();
	$('.com-list li').each(function(){
		$(this).removeClass('on');
	})
	$(this).addClass('on');
	$('.content').each(function(){
		$(this).hide();
	});
	switch(index){
		case 0:
		      $('.ct-intro').show();
			  break;
		case 1:
		      $('.ct-team').show();
			  break;
		case 2:
		      $('.ct-roll').show();
			  break;
		
	}
})
var url = window.location.href;
var page = url.slice(url.lastIndexOf('=')+1,url.length);
if(page =='intro'){
	 $('.com-list li')[0].click();
}else if(page == 'team'){
	$('.com-list li')[1].click();
}else if(page == 'bigroll'){
	$('.com-list li')[2].click();
}
