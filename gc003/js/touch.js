var Touch=function(a){
	a=a || {};
	var b={
		slideWrap:a.slideWrap || '#lastChapter',
		slideInnerWrap:a.slideInnerWrap || '.chapter-wrap',
		defaultIndex:a.defaultIndex || 0,
		delayTime: a.delayTime || 600,
		swipeDistance:a.swipeDistance || 50,
		swipeArrow:a.swipeArrow || '#swipeArrow'
	},
		c=document.getElementById(b.slideWrap.replace('#','')),
		d=c.getElementsByClassName(b.slideInnerWrap.replace('.',''))[0],
		w=document.getElementById(b.swipeArrow.replace('#','')),
		l=d.getElementsByTagName('li').length;
	    eles=d.getElementsByTagName('li');
		if(!c) return !1;
	var B,C,D,E
	    G = /hp-tablet/gi.test(navigator.appVersion),
        H = "ontouchstart" in window && !G,
        I = H ? "touchstart": "mousedown",
        J = H ? "touchmove": "mosemove",
        K = H ? "touchend": "mouseup",
	    M = d.parentNode.clientHeight,
		R = parseInt(b.defaultIndex),
		S = parseInt(b.delayTime),
		W = function(a, b, c) {
                c = c ? c.style: d.style,
				c.webkitTransitionTimingFunction = c.MozTransitionTimingFunction = c.msTransitionTimingFunction = c.OTransitionTimingFunction = c.transitionTimingFunction ='linear',
                c.webkitTransitionDuration = c.MozTransitionDuration = c.msTransitionDuration = c.OTransitionDuration = c.transitionDuration = b + "ms",
                c.webkitTransform = "translate(0px," + a + "px)" + "translateZ(0)",
                c.msTransform = c.MozTransform = c.OTransform = "translateY(" + a + "px)"
        },
		Y=function(a){
			var b = H ? a.touches[0] :a;
			B = b.pageX;
			C = b.pageY;
			d.addEventListener(J,Z,!1);
			d.addEventListener(K,$,!1);
			a.preventDefault();
			return false;
		},
		Z=function(a){
			if(!H || !(a.touches.length > 1 || a.scale && 1 !== a.scale)){
				var n = H ? a.touches[0] : a ;
				var last=R;
                    D=n.pageX-B;
                    E=n.pageY-C;
                if(Math.abs(E)>50 && (Math.abs(E)>Math.abs(D))){
                  if(E<0 && R!=l-1){					  
					  R++;
					  W(-R*M,S);
                      w.classList.remove('arrow-1');
					  setTimeout(function(){w.classList.add('arrow-2');},1000)					  
					  d.removeEventListener(J,Z,!1);					  
				  }else if(E> 0&& R!=0){
					  R--;
					  W(-R*M,S);
					  w.classList.remove('arrow-2');
					  setTimeout(function(){w.classList.add('arrow-1');},1000)
					  d.removeEventListener(J,Z,!1)
				  }
				  
				}					
			}
			a.preventDefault();
		},
		$=function(a){
			d.removeEventListener(J,Z,!1);
			a.preventDefault();
			return false;
		}
	d.addEventListener(I, Y, !1)
};

