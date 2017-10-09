var tob=function(a,b){
	var c = /complete|loaded|interactive/,
	    d = /^#([\w-]+)$/,
	    e = /^\.([\w-]+)$/,  
        f = /^[\w-]+$/,  
		g = /translate(?:3d)?\((.+?)\)/,
        h = /matrix(3d)?\((.+?)\)/,
	    i = function(b, c) {
                if (c = c || a, !b) return j();   
                if ("object" == typeof b) return i.isArrayLike(b) ? j(i.slice.call(b), null) : j([b], null);
                if ("function" == typeof b) return i.ready(b);
                if ("string" == typeof b) try {
                        if (b = b.trim(), d.test(b)) {
                                var e = a.getElementById(RegExp.$1); 
                                return j(e ? [e] : [])
                        }
                        return j(i.qsa(b, c), b)
                } catch(f) {}
                return j()
        },
		j = function(a, b) {           
                 a = a || [];
                Object.setPrototypeOf(a, i.fn);    
                a.selector = b || "" ;
                return a
        };
	    i.slice = [].slice,
        i.filter = [].filter,
        i.type = function(a) {
                return a == null ? String(a) : k[{}.toString.call(a)] || "object"
        };
        i.isArray = Array.isArray ||
        function(a) {
                return a instanceof Array
        };
        i.isArrayLike = function(a) {
                var b = !!a && "length" in a && a.length,
                c = i.type(a);
                return "function" === c || i.isWindow(a) ? !1 : "array" === c || 0 === b || "number" == typeof b && b > 0 && b - 1 in a
        };
        i.isWindow = function(a) {
                return null != a && a === a.window
        };
        i.isObject = function(a) {
                return "object" === i.type(a)
        };
        i.isPlainObject = function(a) {
                return i.isObject(a) && !i.isWindow(a) && Object.getPrototypeOf(a) === Object.prototype
        };
        i.isEmptyObject = function(a) {
                for (var c in a) if (c !== b) return ! 1;
                return ! 0
        };
        i.isFunction = function(a) {
                return "function" === i.type(a)
        };
         i.qsa = function(b, c) {
                return c = c || a,
                i.slice.call(e.test(b) ? c.getElementsByClassName(RegExp.$1) : f.test(b) ? c.getElementsByTagName(b) : c.querySelectorAll(b))
        };
        i.ready = function(b) {
                return c.test(a.readyState) ? b(i) : a.addEventListener("DOMContentLoaded",
                function() {
                        b(i)
                },
                !1),
                this
        };
		i.each = function(a, b, c) {  
                if (!a) return this;
                if ("number" == typeof a.length){
					    [].every.call(a,function(a, c) {
                              return b.call(a, c, a) !== !1;
                        });
                }else{ 
				   for (var d in a){ 
				        if (c) {
                              if (a.hasOwnProperty(d) && b.call(a[d], d, a[d]) === !1) return a
                        } else if (b.call(a[d], d, a[d]) === !1) return a;
				   }
				}
                return this
        };
		i.trigger = function(a, b, c) {   
                 a.dispatchEvent(new CustomEvent(b, {
                        detail: c,
                        bubbles: !0,
                        cancelable: !0
                }));
               return this;
        };
		i.getStyles = function(a, b) {
                var c = a.ownerDocument.defaultView.getComputedStyle(a, null);
                return b ? c.getPropertyValue(b) || c[b] : c
        };
		i.parseTranslate = function(a, b) {
                var c = a.match(g || "");
                return c && c[1] || (c = ["", "0,0,0"]),
                c = c[1].split(","),
                c = {
                        x: parseFloat(c[0]),
                        y: parseFloat(c[1]),
                        z: parseFloat(c[2])
                },
                b && c.hasOwnProperty(b) ? c[b] : c
        };
		i.parseTranslateMatrix = function(a, b) {
                var c = a.match(h),
                d = c && c[1];
                c ? (c = c[2].split(","), "3d" === d ? c = c.slice(12, 15) : (c.push(0), c = c.slice(4, 7))) : c = [0, 0, 0];
                var e = {
                        x: parseFloat(c[0]),
                        y: parseFloat(c[1]),
                        z: parseFloat(c[2])
                };
                return b && e.hasOwnProperty(b) ? e[b] : e
        };
		i.hooks = {};
		i.global = i.options = {
                gestureConfig: {
                        tap: !0,
                        doubletap: !1,
                        longtap: !1,
                        hold: !1,
                        flick: !0,
                        swipe: !0,
                        drag: !0,
                        pinch: !0
                }
        };
        i.initGlobal = function(b) {
                return a.options = a.extend(!0, a.global, b),
                this
        };
		i.addAction = function(a, b) {   
                var c = i.hooks[a];
                return c || (c = []),
                b.index = b.index || 1e3,
                c.push(b),
                c.sort(function(a, b) {
                        return a.index - b.index
                }),
                i.hooks[a] = c,
                i.hooks[a]
        };
        i.doAction = function(a, b) {
                i.isFunction(b) ? i.each(i.hooks[a], b) : i.each(i.hooks[a],
                function(a, b) {
                        return ! b.handle()
                })
        };
		i.now = Date.now;
		var k = {};
        return i.each(["Boolean", "Number", "String", "Function", "Array", "Date", "RegExp", "Object", "Error"],
        function(a, b) {
                k["[object " + b + "]"] = b.toLowerCase()
        }),
        window.JSON && (i.parseJSON = JSON.parse),
        i.fn = {
                each: function(a) {
                        return [].every.call(this,
                        function(b, c) {
                                return a.call(b, c, b) !== !1
                        }),
                        this
                }
        },
		i;
}(document);
!function(a, b) {  //mui,window;
        function c(c) {
                this.os = {};
                var d = [function() {
                        var a = c.match(/(MicroMessenger)\/([\d\.]+)/i);
                        return a && (this.os.wechat = {
                                version: a[2].replace(/_/g, ".")
                        }),
                        !1
                },
                function() {
                        var a = c.match(/(Android);?[\s\/]+([\d.]+)?/);
                        return a && (this.os.android = !0, this.os.version = a[2], this.os.isBadAndroid = !/Chrome\/\d/.test(b.navigator.appVersion)),
                        this.os.android === !0
                },
                function() {
                        var a = c.match(/(iPhone\sOS)\s([\d_]+)/);
                        if (a) this.os.ios = this.os.iphone = !0,
                        this.os.version = a[2].replace(/_/g, ".");
                        else {
                                var b = c.match(/(iPad).*OS\s([\d_]+)/);
                                b && (this.os.ios = this.os.ipad = !0, this.os.version = b[2].replace(/_/g, "."))
                        }
                        return this.os.ios === !0
                }];
				[].every.call(d,
                function(b) {
                        return ! b.call(a)
                });
				
        }
        c.call(a, navigator.userAgent)
} (tob, window),
function(a) {
        "ontouchstart" in window ? (a.isTouchable = !0, a.EVENT_START = "touchstart", a.EVENT_MOVE = "touchmove", a.EVENT_END = "touchend") : (a.isTouchable = !1, a.EVENT_START = "mousedown", a.EVENT_MOVE = "mousemove", a.EVENT_END = "mouseup"),
        a.EVENT_CANCEL = "touchcancel",
        a.EVENT_CLICK = "click";
} (tob),
function(a, b) {   
        a.gestures = {
                session: {}
        },
        a.preventDefault = function(a) {
                a.preventDefault()
        },
        a.stopPropagation = function(a) {
                a.stopPropagation()
        },
        a.addGesture = function(b) {
                return a.addAction("gestures", b);
        };
        var c = Math.round,
        d = Math.abs,
        e = Math.sqrt,
        f = (Math.atan, Math.atan2),
        g = function(a, b, c) {
                c || (c = ["x", "y"]);
                var d = b[c[0]] - a[c[0]],
                f = b[c[1]] - a[c[1]];
                return e(d * d + f * f)
        },
        h = function(a, b) {
                if (a.length >= 2 && b.length >= 2) {
                        var c = ["pageX", "pageY"];
                        return g(b[1], b[0], c) / g(a[1], a[0], c)
                }
                return 1
        },
        i = function(a, b, c) {
                c || (c = ["x", "y"]);
                var d = b[c[0]] - a[c[0]],
                e = b[c[1]] - a[c[1]];
                return 180 * f(e, d) / Math.PI
        },
        j = function(a, b) {
                return a === b ? "": d(a) >= d(b) ? a > 0 ? "left": "right": b > 0 ? "up": "down"
        },
        k = function(a, b) {
                var c = ["pageX", "pageY"];
                return i(b[1], b[0], c) - i(a[1], a[0], c)
        },
        l = function(a, b, c) {
                return {
                        x: b / a || 0,
                        y: c / a || 0
                }
        },
        m = function(b, c) {
                a.gestures.stoped || a.doAction("gestures",
                function(d, e) {
                        a.gestures.stoped || a.options.gestureConfig[e.name] !== !1 && e.handle(b, c)
                })
        },
        n = function(a, b) {
                for (; a;) {
                        if (a == b) return ! 0;
                        a = a.parentNode
                }
                return ! 1
        },
        o = function(a, b, c) {
                for (var d = [], e = [], f = 0; f < a.length;) {
                        var g = b ? a[f][b] : a[f];
                        e.indexOf(g) < 0 && d.push(a[f]),
                        e[f] = g,
                        f++;
                }
                return c && (d = b ? d.sort(function(a, c) {
                        return a[b] > c[b]
                }) : d.sort()),
                d
        },
        p = function(a) {
                var b = a.length;
                if (1 === b) return {
                        x: c(a[0].pageX),
                        y: c(a[0].pageY)
                };
                for (var d = 0,
                e = 0,
                f = 0; b > f;) d += a[f].pageX,
                e += a[f].pageY,
                f++;
                return {
                        x: c(d / b),
                        y: c(e / b)
                }
        },
        q = function() {
                return a.options.gestureConfig.pinch
        },
        r = function(b) {
                for (var d = [], e = 0; e < b.touches.length;) d[e] = {
                        pageX: c(b.touches[e].pageX),
                        pageY: c(b.touches[e].pageY)
                },
                e++;
                return {
                        timestamp: a.now(),
                        gesture: b.gesture,
                        touches: d,
                        center: p(b.touches),  
                        deltaX: b.deltaX,
                        deltaY: b.deltaY
                }
        },
        s = function(b) {
                var c = a.gestures.session,
                d = b.center,
                e = c.offsetDelta || {},
                f = c.prevDelta || {},
                g = c.prevTouch || {}; (b.gesture.type === a.EVENT_START || b.gesture.type === a.EVENT_END) && (f = c.prevDelta = {
                        x: g.deltaX || 0,
                        y: g.deltaY || 0
                },
                e = c.offsetDelta = {
                        x: d.x,
                        y: d.y
                }),
                b.deltaX = f.x + (d.x - e.x),
                b.deltaY = f.y + (d.y - e.y)
        },
        t = function(b) {
                var c = a.gestures.session,
                d = b.touches,
                e = d.length;
                c.firstTouch || (c.firstTouch = r(b)),  
                q() && e > 1 && !c.firstMultiTouch ? c.firstMultiTouch = r(b) : 1 === e && (c.firstMultiTouch = !1);
                var f = c.firstTouch,
                l = c.firstMultiTouch,
                m = l ? l.center: f.center,
                n = b.center = p(d);
                b.timestamp = a.now(),
                b.deltaTime = b.timestamp - f.timestamp,
                b.angle = i(m, n),
                b.distance = g(m, n),
                s(b),
                b.offsetDirection = j(b.deltaX, b.deltaY),
                b.scale = l ? h(l.touches, d) : 1,
                b.rotation = l ? k(l.touches, d) : 0,
                v(b)
        },
        u = 25,
        v = function(b) {
                var c, e, f, g, h = a.gestures.session,
                i = h.lastInterval || b,
                k = b.timestamp - i.timestamp;
                if (b.gesture.type != a.EVENT_CANCEL && (k > u || void 0 === i.velocity)) {
                        var m = i.deltaX - b.deltaX,
                        n = i.deltaY - b.deltaY,
                        o = l(k, m, n);
                        e = o.x,
                        f = o.y,
                        c = d(o.x) > d(o.y) ? o.x: o.y,
                        g = j(m, n) || i.direction,
                        h.lastInterval = b
                } else c = i.velocity,
                e = i.velocityX,
                f = i.velocityY,
                g = i.direction;
                b.velocity = c,
                b.velocityX = e,
                b.velocityY = f,
                b.direction = g
        },
        w = {},
        x = function(a) {
                for (var b = 0; b < a.length; b++) ! a.identifier && (a.identifier = 0);
                return a
        },
        y = function(b, c) {
                var d = x(a.slice.call(b.touches || [b])),
                e = b.type,
                f = [],
                g = [];
                if (e !== a.EVENT_START && e !== a.EVENT_MOVE || 1 !== d.length) {
                        var h = 0,
                        f = [],
                        g = [],
                        i = x(a.slice.call(b.changedTouches || [b]));
                        c.target = b.target;
                        var j = a.gestures.session.target || b.target;
                        if (f = d.filter(function(a) {
                                return n(a.target, j)
                        }), e === a.EVENT_START) for (h = 0; h < f.length;) w[f[h].identifier] = !0,
                        h++;
                        for (h = 0; h < i.length;) w[i[h].identifier] && g.push(i[h]),
                        (e === a.EVENT_END || e === a.EVENT_CANCEL) && delete w[i[h].identifier],
                        h++;
                        if (!g.length) return ! 1
                } else w[d[0].identifier] = !0,
                f = d,
                g = d,
                c.target = b.target;
                f = o(f.concat(g), "identifier", !0);
                var k = f.length,
                l = g.length;
                return e === a.EVENT_START && k - l === 0 && (c.isFirst = !0, a.gestures.touch = a.gestures.session = {
                        target: b.target
                }),
                c.isFinal = (e === a.EVENT_END || e === a.EVENT_CANCEL) && k - l === 0,
                c.touches = f,
                c.changedTouches = g,
                !0
        },
        z = function(b) {
                var c = {
                        gesture: b
                },
                d = y(b, c);
                d && (t(c), m(b, c), a.gestures.session.prevTouch = c, b.type !== a.EVENT_END || a.isTouchable || (a.gestures.touch = a.gestures.session = {}))
        };
        b.addEventListener(a.EVENT_START, z),
        b.addEventListener(a.EVENT_MOVE, z),
        b.addEventListener(a.EVENT_END, z),
        b.addEventListener(a.EVENT_CANCEL, z),
        a.isScrolling = !1;
        var A = null;
        b.addEventListener("scroll",
        function() {
                a.isScrolling = !0,
                A && clearTimeout(A),
                A = setTimeout(function() {
                        a.isScrolling = !1
                },
                250)
        })
} (tob, window),
function() {
        function a(a, b) {
                b = b || {
                        bubbles: !1,
                        cancelable: !1,
                        detail: void 0    
                };
                var c = document.createEvent("Events"),
                d = !0;
                for (var e in b)"bubbles" === e ? d = !!b[e] : c[e] = b[e];
                c.initEvent(a, d, !0);
                return c
        }
		typeof window.CustomEvent == 'undefined' && (a.prototype = window.Event.prototype, window.CustomEvent = a);
} (),
function(a) {
        String.prototype.trim === a && (String.prototype.trim = function() {
                return this.replace(/^\s+|\s+$/g, "")
        }),
        Object.setPrototypeOf = Object.setPrototypeOf ||
        function(a, b) {
                return a.__proto__ = b,
                a
        }
} (),
function(a) {
        "classList" in a.documentElement || !Object.defineProperty || "undefined" == typeof HTMLElement || Object.defineProperty(HTMLElement.prototype, "classList", {
                get: function() {
                        function a(a) {
                                return function(c) {
                                        var d = b.className.split(/\s+/),
                                        e = d.indexOf(c);
                                        a(d, e, c),
                                        b.className = d.join(" ")
                                }
                        }
                        var b = this,
                        c = {
                                add: a(function(a, b, c) {~b || a.push(c)
                                }),
                                remove: a(function(a, b) {~b && a.splice(b, 1)
                                }),
                                toggle: a(function(a, b, c) {~b ? a.splice(b, 1) : a.push(c)
                                }),
                                contains: function(a) {
                                        return !! ~b.className.split(/\s+/).indexOf(a)
                                },
                                item: function(a) {
                                        return b.className.split(/\s+/)[a] || null
                                }
                        };
                        return Object.defineProperty(c, "length", {
                                get: function() {
                                        return b.className.split(/\s+/).length
                                }
                        }),
                        c
                }
        })
} (document),
function(a, b) {
        var c = 0,
        d = function(d, e) {
                var f = a.gestures.session,
                g = this.options,
                h = a.now();
                switch (d.type) {
                case a.EVENT_MOVE:
                        h - c > 300 && (c = h, f.flickStart = e.center);
                        break;
                case a.EVENT_END:
                case a.EVENT_CANCEL:
                        e.flick = !1,
                        f.flickStart && g.flickMaxTime > h - c && e.distance > g.flickMinDistince && (e.flick = !0, e.flickTime = h - c, e.flickDistanceX = e.center.x - f.flickStart.x, e.flickDistanceY = e.center.y - f.flickStart.y, a.trigger(f.target, b, e), a.trigger(f.target, b + e.direction, e))
                }
        };
        a.addGesture({
                name: b,
                index: 5,
                handle: d,
                options: {
                        flickMaxTime: 500,
                        flickMinDistince: 10
                }
        })
} (tob, "flick"),
function(a, b) {
        var c = function(c, d) {
                var e = a.gestures.session;
                if (c.type === a.EVENT_END || c.type === a.EVENT_CANCEL) {
                        var f = this.options;
                        d.swipe = !1,
                        d.direction && f.swipeMaxTime > d.deltaTime && d.distance > f.swipeMinDistince && (d.swipe = !0, a.trigger(e.target, b, d), a.trigger(e.target, b + d.direction, d))
                }
        };
        a.addGesture({
                name: b,
                index: 10,
                handle: c,
                options: {
                        swipeMaxTime: 300,
                        swipeMinDistince: 18
                }
        })
} (tob, "swipe"),
function(a, b) {
        var c = function(c, d) {
                var e = a.gestures.session;
                switch (c.type) {
                case a.EVENT_START:
                        break;
                case a.EVENT_MOVE:
                        if (!d.direction || !e.target) return;
                        e.lockDirection && e.startDirection && e.startDirection && e.startDirection !== d.direction && ("up" === e.startDirection || "down" === e.startDirection ? d.direction = d.deltaY < 0 ? "up": "down": d.direction = d.deltaX < 0 ? "left": "right"),
                        e.drag || (e.drag = !0, a.trigger(e.target, b + "start", d)),
                        a.trigger(e.target, b, d),
                        a.trigger(e.target, b + d.direction, d);
                        break;
                case a.EVENT_END:
                case a.EVENT_CANCEL:
                        e.drag && d.isFinal && a.trigger(e.target, b + "end", d)
                }
        };
        a.addGesture({
                name: b,
                index: 20,
                handle: c,
                options: {
                        fingers: 1
                }
        })
} (tob, "drag"),
function(a, b) {
        var c, d, e = function(e, f) {
                var g = a.gestures.session,
                h = this.options;
                switch (e.type) {
                case a.EVENT_END:
                        if (!f.isFinal) return;
                        var i = g.target;
                        if (!i || i.disabled || i.classList && i.classList.contains("mui-disabled")) return;
                        if (f.distance < h.tapMaxDistance && f.deltaTime < h.tapMaxTime) {
                                if (a.options.gestureConfig.doubletap && c && c === i && d && f.timestamp - d < h.tapMaxInterval) return a.trigger(i, "doubletap", f),
                                d = a.now(),
                                void(c = i);
                                a.trigger(i, b, f),
                                d = a.now(),
                                c = i
                        }
                }
        };
        a.addGesture({
                name: b,
                index: 30,
                handle: e,
                options: {
                        fingers: 1,
                        tapMaxInterval: 300,
                        tapMaxDistance: 5,
                        tapMaxTime: 250
                }
        })
} (tob, "tap"),
function(a, b) {
        var c, d = function(d, e) {
                var f = a.gestures.session,
                g = this.options;
                switch (d.type) {
                case a.EVENT_START:
                        clearTimeout(c),
                        c = setTimeout(function() {
                                a.trigger(f.target, b, e)
                        },
                        g.holdTimeout);
                        break;
                case a.EVENT_MOVE:
                        e.distance > g.holdThreshold && clearTimeout(c);
                        break;
                case a.EVENT_END:
                case a.EVENT_CANCEL:
                        clearTimeout(c)
                }
        };
        a.addGesture({
                name:
                b,
                index: 10,
                handle: d,
                options: {
                        fingers: 1,
                        holdTimeout: 500,
                        holdThreshold: 2
                }
        })
} (tob, "longtap"),
function(a, b) {
        var c, d = function(d, e) {
                var f = a.gestures.session,
                g = this.options;
                switch (d.type) {
                case a.EVENT_START:
                        a.options.gestureConfig.hold && (c && clearTimeout(c), c = setTimeout(function() {
                                e.hold = !0,
                                a.trigger(f.target, b, e)
                        },
                        g.holdTimeout));
                        break;
                case a.EVENT_MOVE:
                        break;
                case a.EVENT_END:
                case a.EVENT_CANCEL:
                        c && (clearTimeout(c) && (c = null), a.trigger(f.target, "release", e))
                }
        };
        a.addGesture({
                name: b,
                index: 10,
                handle: d,
                options: {
                        fingers: 1,
                        holdTimeout: 0
                }
        })
} (tob, "hold"),
function(a, b) {
        var c = function(c, d) {
                var e = this.options,
                f = a.gestures.session;
                switch (c.type) {
                case a.EVENT_START:
                        break;
                case a.EVENT_MOVE:
                        if (a.options.gestureConfig.pinch) {
                                if (d.touches.length < 2) return;
                                f.pinch || (f.pinch = !0, a.trigger(f.target, b + "start", d)),
                                a.trigger(f.target, b, d);
                                var g = d.scale,
                                h = d.rotation,
                                i = "undefined" == typeof d.lastScale ? 1 : d.lastScale,
                                j = 1e-12;
                                g > i ? (i = g - j, a.trigger(f.target, b + "out", d)) : i > g && (i = g + j, a.trigger(f.target, b + "in", d)),
                                Math.abs(h) > e.minRotationAngle && a.trigger(f.target, "rotate", d)
                        }
                        break;
                case a.EVENT_END:
                case a.EVENT_CANCEL:
                        a.options.gestureConfig.pinch && f.pinch && 2 === d.touches.length && (f.pinch = !1, a.trigger(f.target, b + "end", d))
                }
        };
        a.addGesture({
                name: b,
                index: 10,
                handle: c,
                options: {
                        minRotationAngle: 0
                }
        })
} (tob, "pinch");
console.log(tob.gestures.session)