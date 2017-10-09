
(function(){
	var width = $('body').width();
	var height = $('body').height();	
	document.body.addEventListener('touchmove',function(b){b.preventDefault()},!1)
	$('.stage').css({'width':height+'px','height':width+'px'});
	var bgImgs = $('.bg-img');
	var otherImgs = $('.bg-img').slice(2);
	var total_width = 0;
	var wrapper = $('.wrapper');
	var container = document.getElementById('container');
	var firstScene = document.getElementById('firstScene');
	var others = document.getElementById('others');
	bgImgs.eq(1).css('width',height+'px');
	$('#firstScene').css('width',height+'px');		
	otherImgs.each(function(a,b){
					total_width += $(b).width();
					$(b.parentNode).css('width',$(b).width()+'px')
					$(b.parentNode).css('height',width+'px')
				});
	$('.oDiv').css({'width':total_width+'px'})		
	$('#container').css({'width':total_width+2*height+'px'});
	$('#others').css('height',width+'px');
	//$('.train').css('width',total_width+'px')
	
})()
var cubic = ['linear','cubic-bezier(0.4,0.4,1,1)'];
var quickExpr_matrix = /matrix(3d)?\((.+?)\)/;
var words = $('.wordsPart');
var train1_translateX = parseInt(mui.getStyles($('.train')[0],'left'));
var train2_translateX = parseInt(mui.getStyles($('.train')[1],'left'));
function BindEvent(){
	mui.each($('.scene').get(),function(a,b){
		 b.uid = a;
		 b.addEventListener('dragstart',A,!1);
    })
}
function A(e){
	var start_y = e.detail.center.y;
	var type = this.getAttribute('data-dragType');
	var distance = countDistance($('.scene').get(),this.uid);
	var dis = 0;
	var dir = '';
	switch(type){
		case '1' :
		       this.addEventListener('drag',B,!1);
			   this.addEventListener('dragend',C,!1)
			   break;
		case '2' :
		       this.addEventListener('drag',D,!1);
			   break;
	}
	function B(e){
		let disY = e.detail.center.y - start_y;	
		dir = disY > 0 ? 'right' : (disY == 0 ? 'hold' : 'left');
		dis = disY*1.5;
		if(this.uid==0 && dir=='right'){
			return;
		}
		if(this.uid == $('.scene').length-1 && dir == 'left'){
			return;
		}
		W(disY-distance,0,container);
		if(this.uid == 1 && Math.abs(dis)<=Math.abs(train1_translateX)){
			W(-dis,2000,$('.train')[0])
			W(-dis*1.2,1000,$('.train')[1])
		}
	}
	function C(e){		
		if(this.uid==0 && dir!='left'){
			return;
		}
		if(this.uid == $('.scene').length-1 && dir == 'left'){
			return;
		}
		if(Math.abs(dis)>1/3*$(this).width()){
			dir == 'left' ? (W(-distance-$(this).width(),1000,container,cubic[0]),(this.uid==1 && (words.eq(this.uid-1).addClass('active'))),AnimationInit()) : (dir=='right' && (W(-distance+$(this).width(),1000,container,cubic[0])))
		    W(-train1_translateX,2000,$('.train')[0])
			W(-train2_translateX,1000,$('.train')[1])
		}else{
			W(0,2000,$('.train')[0])
			W(0,1000,$('.train')[1])
			W(-distance,1000,container,cubic[0])
		}
	}
	function D(e){
		let disY = e.detail.center.y - start_y;
		dir = disY > 0 ? 'right' : (disY == 0 ? 'hold' : 'left');
		if(this.uid==0 && dir!='left'){
			return;
		}
		if(this.uid==2 && dir == 'right'){
			W(0,500,$('.train')[0]);
			W(0,500,$('.train')[1],cubic[1]);
		}
		/*处理列车的运动情况*/
		if(this.uid!=$('.mainScene').length+1 && dir == 'left' && Math.abs(disY) >= 50){
			W(-train1_translateX+countDistance($('.mainScene').get(),this.uid-1),2800,$('.train')[0]);
			W(-train2_translateX+countDistance($('.mainScene').get(),this.uid-1),2800,$('.train')[1]);
		}
		if(dir!=='left' && this.uid !==2 && Math.abs(disY) >= 50){
			W(-train1_translateX+countDistance($('.scene').get(),this.uid-1)-2*$('body').height(),1400,$('.train')[0]);
			W(-train2_translateX+countDistance($('.scene').get(),this.uid-1)-2*$('body').height(),1600,$('.train')[1],cubic[1]);
		}
		if(this.uid == $('.scene').length-1 && dir != 'right'){
			W(-distance,2000,container,cubic[1])
			return;
		}else if(Math.abs(disY) > 50){
			dir == 'left' ? (W(-distance-$(this).width(),2000,container,cubic[1]),words.eq(this.uid-2).removeClass('active'),words.eq(this.uid-1).addClass('active')) : (dir=='right' && (W(-distance+$('.scene').eq(this.uid-1).width(),2000,container,cubic[1]),words.eq(this.uid-2).removeClass('active'),this.uid-3>=0 && (words.eq(this.uid-3).addClass('active'))))
		}
	}	
}

function W(a, b, c) {
	        let orientation = arguments[4] || 'x';
			let rate = arguments[3] || 'linear';
				c = c && c.style;
				c.webkitTransitionTimingFunction = c.MozTransitionTimingFunction = c.msTransitionTimingFunction = c.OTransitionTimingFunction = c.transitionTimingFunction = rate;
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
}
	
function countDistance(a,n){
		let total = 0;
		let arr = [];
		     n = n || 0;
		if(n==0){
			return total;
		}
		mui.each(a,function(j,k){
			if(j<n){
				k && arr.push(k);
			}
		})			 
		return mui.each(arr,function(m,n){
				total+=parseInt(mui.getStyles(n,'width'));	
		}),
		total;
	}
	
var coords = [];
var circles = $('.circle');
circles.each(function(a,b){
	if(a==2 || a ==4 || a==8){
		b.mid = a;
	}
})
const circle_diameter = 20;
const circle_wrapper_width = 40;
circles.each(function(a,b){
	var obj ={};
	obj.x = parseInt(mui.getStyles(b,'left'))+circle_wrapper_width/2;
	obj.y = parseInt(mui.getStyles(b,'top'))+circle_wrapper_width/2;
	coords.push(obj);
})
var line = $('line');
var line_top = [].slice.call(line).filter(function(a,b){
	       return b==0 || b==3 || b == 4 || b==7 || b==8;
})
var line_bottom = [].slice.call(line).filter(function(a,b){
	       return b==2 || b==5 || b == 6 || b==9;
})
line.each(function(a,b){
	$(b).attr('x1',coords[a].x+'');
	$(b).attr('x2',coords[a].x+'');
	$(b).attr('y1',coords[a].y+'');
	$(b).attr('y2',coords[a].y+'');
})
var lineLink1 = function(){
	let x = coords[0].x;
	let y = coords[0].y;
	let m = coords[1].x;
	let n = coords[1].y;
	let rate = (n-y)/(m-x);
	var timer = setInterval(function(){		
		var j = parseInt(line.eq(0).attr('x2'));
		var k = parseInt(line.eq(0).attr('y2'));
		j++;
		k=k+rate+1;
		if(j==m){
			clearInterval(timer)
		}
		line.eq(0).attr('x2',j+'');
		line.eq(0).attr('y2',k+'');
    },33)
}
var lineLink2 = function(){
	let x = coords[1].x;
	let y = coords[1].y;
	let m = coords[2].x;
	let n = coords[2].y;
	let rate = (n-y)/(m-x);
	var timer1 = setInterval(function(){	
		var j = parseInt(line.eq(1).attr('x2'));
		var k = parseInt(line.eq(1).attr('y2'));
		j++;
		k=0;
		if(j==m){
			clearInterval(timer1)
		}
		line.eq(1).attr('x2',j+'');
		line.eq(1).attr('y2',y+'');
    },16.7)
}
var lineLink3=function(){
	let x = coords[2].x;
	let y = coords[2].y;
	let m = coords[3].x;
	let n = coords[3].y;
	let rate = (n-y)/(m-x);
	var timer2 = setInterval(function(){		
		var j = parseInt(line.eq(2).attr('x2'));
		var k = parseInt(line.eq(2).attr('y2'));
		j++;
		
		k=k+(rate < 0 ? -Math.round(Math.abs(rate)) : Math.round(Math.abs(rate))); 
		
		if(j==m){
			clearInterval(timer2)
		}
		line.eq(2).attr('x2',j+'');
		line.eq(2).attr('y2',k+'');
    },33);
}
var lineLink4 = function(){
	let x = coords[3].x;
	let y = coords[3].y;
	let m = coords[4].x;
	let n = coords[4].y;
	let rate = (n-y)/(m-x);
	var timer3 = setInterval(function(){	
		var j = parseInt(line.eq(3).attr('x2'));
		var k = parseInt(line.eq(3).attr('y2'));
		j++;
		k=k+rate+1;
		if(j==m){
			clearInterval(timer3)
		}
		line.eq(3).attr('x2',j+'');
		line.eq(3).attr('y2',y+'');
    },16.7);
}
var lineLink5 = function(){
	let x = coords[4].x;
	let y = coords[4].y;
	let m = coords[5].x;
	let n = coords[5].y;
	let rate = (n-y)/(m-x);
	    rate = rate < 0 ? -Math.round(Math.abs(rate)) : Math.round(Math.abs(rate));
	var j = parseInt(line.eq(4).attr('x2'));
	var k = parseInt(line.eq(4).attr('y2'));
	var timer4 = setInterval(function(){				
		j++;
		k=k+rate;
		if(j==m){
			clearInterval(timer4)
		}
		line.eq(4).attr('x2',j+'');
		line.eq(4).attr('y2',k+'');
    },33)
}
var lineLink6 = function(){
	let x = coords[5].x;
	let y = coords[5].y;
	let m = coords[6].x;
	let n = coords[6].y;
	let rate = (n-y)/(m-x);
	var timer5 = setInterval(function(){		
		var j = parseInt(line.eq(5).attr('x2'));
		var k = parseInt(line.eq(5).attr('y2'));
		j++;
		k=0;
		if(j==m){
			clearInterval(timer5)
		}
		line.eq(5).attr('x2',j+'');
		line.eq(5).attr('y2',y+'');
    },16.7)
}
var lineLink7 = function(){
	let x = coords[6].x;
    let y = coords[6].y;
	let m = coords[7].x;
	let n = coords[7].y;
	let rate = (n-y)/(m-x);
	    rate = rate < 0 && -Math.round(Math.abs(rate))
	var timer6 = setInterval(function(){		
		var j = parseInt(line.eq(6).attr('x2'));
		var k = parseInt(line.eq(6).attr('y2'));
		
		j++;
		k=k+rate 
		if(j==m){
			clearInterval(timer6)
		}
		line.eq(6).attr('x2',j+'');
		line.eq(6).attr('y2',k+'');
    },33);
}
var lineLink8 = function(){
	let x = coords[7].x;
		let y = coords[7].y;
		let m = coords[8].x;
		let n = coords[8].y;
		let rate = (n-y)/(m-x);
	var timer7 = setInterval(function(){		
		var j = parseInt(line.eq(7).attr('x2'));
		var k = parseInt(line.eq(7).attr('y2'));
		j++;
		k=0;
		if(j==m){
			clearInterval(timer7)
		}
		line.eq(7).attr('x2',j+'');
		line.eq(7).attr('y2',y+'');
    },16.7);
}

function * generatorLine(){
	yield lineLink1();
	yield lineLink2();
	yield lineLink3();
	yield lineLink4();
	yield lineLink5();
	yield lineLink6();
	yield lineLink7();
	yield lineLink8();
	return 1;
}	

//$('.railway ul').addClass('active');
var linkStart = generatorLine();
var nth = 0;
$('.scene-cover').each(function(a,b){
	b.addEventListener('drag',function(e){
		e.bubble = true;
	},1)
})
var isLineStarted = !1;
var lineNth = 0;
var lineTime = [1000,2000,3000,1500,3000,1500,3000,1500];
var dotTime = [1500,1500,1500,1500,1500,1500,1500,1500]
var inter = 1;
function startLine(){
	var time1  = +new Date();
	var timer = setInterval(function(){
		if(!isLineStarted){
			setTimeout(function(){
				lineNth++;
				let nth = lineNth;
				isLineStarted = !1;
				linkStart.next();
				if(nth%2==1){
					console.log(nth);
					console.log(nth%2)
					$('.description').eq(Math.floor(nth/2)).addClass('active');
				}
				setTimeout(function(){
					circles.eq(nth).show();
					if(nth == 8){
						BindEvent();
						clearInterval(timer);
					}
				},dotTime[nth-1])
			},lineTime[lineNth])
			isLineStarted = 1;			
		}
	},100)			
}
function AnimationInit(){
	$('.plane').addClass('active');
	$('.clouds').addClass('active');
}
function pageBeggin(){
	setTimeout(function(){
		circles.eq(0).show();
		startLine();
	},1000)
}
window.onload=function(){
 	setTimeout(function(){
		$('.mask').hide();
		pageBeggin();
	},2000)	 
}
//箭头添加事件:
$('.arrow-tip').click(function(){
	W(-$(document.body).height()*2,1000,container);
	$('.words_1').addClass('active');
});































































