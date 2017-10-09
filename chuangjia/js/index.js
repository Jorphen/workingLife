var width = $('#header .title-list').width()/($('#header .title-list li').length);
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
function W(a, b, c) {
		var orientation = arguments[4] || 'x';
		var rate = arguments[3] || 'linear';
			c = c && c.style;
			c.webkitTransitionTimingFunction = c.MozTransitionTimingFunction = c.msTransitionTimingFunction = c.OTransitionTimingFunction = c.transitionTimingFunction = rate;
			c.webkitTransitionTimingDelay = c.MozTransitionTimingDelay = c.msTransitionTimingDelay = c.OTransitionTimingDelay = c.transitionTimingDelay = '1s';
			c.webkitTransitionDuration = c.MozTransitionDuration = c.msTransitionDuration = c.OTransitionDuration = c.transitionDuration = b + "ms";
		switch(orientation){
			case 'x':
				 c.webkitTransform = "translate(" + a + "px,0)" + "translateZ(0)";
				 c.msTransform = c.MozTransform = c.OTransform = "translateX(" + a + "px)";
				 break;
			case 'y':
				 c.webkitTransform = "translate(0," + a + "px)" + "translateZ(0)";
				 c.msTransform = c.MozTransform = c.OTransform = "translateY(" + a + "px)";
				 break;
		}
};
