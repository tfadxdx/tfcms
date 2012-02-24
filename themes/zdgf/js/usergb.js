
function byId() {return document.getElementById(arguments[0])}
function byTag(elem, tag) {if (!tag) {tag = elem; elem = document}return elem.getElementsByTagName(tag);}
function byClass(classname, type) {
	var r = [];if (!type) type = "*";var arr = byTag(type);
	var re = new RegExp("(^|\\s)" + classname + "(\\s|$)");
	for (var i=0; i<arr.length; i++) {var m = arr[i];if (re.test(m.className)) {r.push(m);}}
	return r;
}

function domReady(fun) {
	if (domReady.done) {fun();return;}
	if (domReady.fs) {domReady.fs.push(fun);
	}else{domReady.fs = new Array(fun);addEvent(window, "load", isDomReady);domReady.interval = setInterval(isDomReady, 13);}
}
function isDomReady() {
	if (domReady.done) return false;
	if (document && document.getElementById && document.getElementsByTagName && document.body) {
		clearInterval(domReady.interval);domReady.done = true;
		for (var i=0; i<domReady.fs.length; i++) {domReady.fs[i]();}domReady.fs = null;
	}
}
function addEvent(elem, type, handler) {
	if (!addEvent.guid) addEvent.guid = 1;if (!handler._guid) handler._guid = addEvent.guid++;
	if (!elem.events) elem.events = {};var handlers = elem.events[type];
	if (!handlers) {handlers = {};if (elem["on" + type])  handlers[0] = elem["on" + type];}
	handlers[handler._guid] = handler;elem.events[type] = handlers;elem["on" + type] = handEvent;
}
function removeEvent(elem, type, handler) {if (elem.events && elem.events[type]) delete elem.events[type][handler._guid];}
function handEvent(ev) {
	var r = true;ev = ev || fixEvent(window.event);var hs = this.events[ev.type];
	for (var h in hs) {this._handevent = hs[h];if (this._handevent(ev) == false) r = false;}
	return r;
}
function fixEvent(event) {
	event.preventDefault = function() {this.returnValue = false;};
	event.stopPropagation = function() {this.cancelBubble = true};
	return event;
}
var Rolin = {
	readCookie : function(l){var i="",I=l+"=";if(document.cookie.length>0){offset=document.cookie.indexOf(I);if(offset!=-1){offset+=I.length;end=document.cookie.indexOf(";",offset);if(end==-1)end=document.cookie.length;i=unescape(document.cookie.substring(offset,end))}};return i},
	writeCookie : function(O,o,l,I){var i="",c="";if(l!=null){i=new Date((new Date).getTime()+l*3600000);i="; expires="+i.toGMTString()};if(I!=null){c=";domain="+I};document.cookie=O+"="+escape(o)+i+c}
}
var Elem = {
	prev:function(elem) {
		do {elem = elem.previousSibling;} while(elem && elem.nodeType != 1);
		return elem;
	},
	next:function(elem) {
		do {elem = elem.nextSibling;} while(elem && elem.nodeType != 1);
		return elem;
	},
	first:function(elem) {
		elem = elem.firstChild;
		return elem && elem.nodeType != 1 ? Elem.next(elem) : elem;
 	},
	last:function(elem) {
		elem = elem.lastChild;
		return elem && elem.nodeType != 1 ? Elem.prev(elem) : elem; 
	},
	setAlpha:function(elem, alpha) {
		if (typeof elem.style.filter != 'undefined') {
			elem.style.filter = 'alpha(opacity='+alpha+')';
		} else {
			elem.style.opacity = alpha/100;
		}
	},
	pageX:function(elem) {
    	return elem.offsetParent?(elem.offsetLeft+Elem.pageX(elem.offsetParent)):elem.offsetLeft;
    },
	pageY:function(elem){
    	return elem.offsetParent?(elem.offsetTop+Elem.pageY(elem.offsetParent)):elem.offsetTop;
    },
	stageHeight:function() {
		var h1 = document.body.scrollHeight;
		var h2 = document.body.parentNode.clientHeight;
		var h3 = document.body.parentNode.scrollHeight;
		var h = h1 > h2 ? h1 : h2;
		return  h > h3 ? h : h3;
	},
	getStyle:function(elem,name){
 	    if(elem.style[name]){
			return elem.style[name];
  	    }else if(elem.currentStyle){
    		return elem.currentStyle[name];
	    }else if(document.defaultView&&document.defaultView.getComputedStyle){
    		name=name.replace(/([A-Z])/g,"-$1");
       		name=name.toLowerCase();
			var s=document.defaultView.getComputedStyle(elem,"");
			return s&&s.getPropertyValue(name);
     	}else {
			return null;     
		}
    },
	getAlpha:function(elem) {
		var result;
		if (elem.style.filter || elem.style.filter == '') {
			
			result = Number(elem.style.filter.split("=").pop().replace(")", ''));
		} else {
			result = elem.style.opacity*100;
		}
		return result;
	},
	setAlpha:function(elem, alpha) {
		if (elem.style.filter || elem.style.filter == '') {
			elem.style.filter = "alpha(opacity="+alpha+")";
		} else if (elem.style.opacity || elem.style.opacity == '') {
			elem.style.opacity = alpha/100;
		}
	},
	remove: function(elem) {
		if (!elem) return;
		elem.parentNode.removeChild(elem);
	}
}
var Rich = {
	addWMV:function(o, url, w, h) {
		var str = '<object classid="clsid:6BF52A52-394A-11d3-B153-00C04F79FAA6" width="{w}" height="{h}"><param name="url" value="{url}" /><param name="autoStart" value="false" /><embed src="{url}" type="video/x-ms-wmv" width="{w}" height="{h}" autostart="0" showcontrols="0"></embed></object>';
 		str = str.replace('{url}', url).replace('{w}', w).replace('{h}', h);
		o.innerHTML = str;
	},
	addSWF:function(o, swfurl, w, h, id,mode) {
		return new Rich.swfObject(o, swfurl, w, h, id,mode);
	},
	swfObject:function(o, swfurl, w, h, id,mode) {
		this.o = o;
		this.swfurl = swfurl;
		this.w = w;
		this.h = h;
		this.mode = 'opaque';
		this.id = "un" + Math.random();
		if (mode) this.mode =  mode;
		if (id) this.id = id;
		this.vars = '';
		var str = '<object {fcy} classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" codebase="http://fpdownload.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" width="{w}" height="{h}"><param name="movie" value="{url}"><param name="allowFullScreen" value="true" /><param name="quality" value="high"><param name="menu" value="false"><param name="wmode" value="{mode}"><param name="FlashVars" value="{vars}"><embed {cy} src="{url}" wmode="{mode}" FlashVars="{vars}" menu="false" quality="high" width="{w}" height="{h}" type="application/x-shockwave-flash" pluginspage="http://www.macromedia.com/go/getflashplayer" /></object>';
		this.str = str.replace(/{url}/g, this.swfurl).replace(/{w}/g, this.w).replace(/{h}/g, this.h).replace(/{mode}/g, this.mode);	
		if (navigator.appName.indexOf("Microsoft") == -1) {
			this.str = this.str.replace("{cy}", 'id="{id}"')
			this.str = this.str.replace("{fcy}", '')
		} else {
			this.str = this.str.replace("{cy}", '');
			this.str = this.str.replace("{fcy}", 'id="{id}"')
		}
		this.str = this.str.replace(/{id}/g, this.id);
		this.addVar = function (varname, argument) {
			var tmp = varname + '=' + argument;
			if (this.vars != '') tmp = '&' + tmp;
			this.vars += tmp;
			
		}
		this.append = function() {
			this.str = this.str.replace(/{vars}/g, this.vars);
			this.o.innerHTML = this.str;
		}
	}
}

function ajax( options ) {
	options = {
		type: options.type || "POST",
		url: options.url || "",
		timeout: options.timeout || 5000,
		onComplete: options.onComplete || function(){},
		onError: options.onError || function(){},
		onSuccess: options.onSuccess || function(){},
		data: options.data || ""
	}
	if (typeof XMLHttpRequest == 'undefined') {
		XMLHttpRequest = function() {
			return new ActiveXObject(
				navigator.appVersion.indexOf("MSIE 5.5")>=0 ? "Microsoft.XMLHTTP" : "Msxml2.XMLHTTP"
			)
		}
	}
	var xml = new XMLHttpRequest();
	xml.open(options.type == "POST" ? "POST" : "GET", options.url, true);
	var timeoutLength = options.timeout;
	var requestDone = false;
	setTimeout(function(){
		requestDone = true;
	}, timeoutLength);
	xml.onreadystatechange = function(){
		
		if ( xml.readyState == 4 && !requestDone ) {
			if ( httpSuccess( xml ) ) {
				options.onSuccess( httpData( xml, options.type ) );
			} else {
				options.onError();
			}
			options.onComplete();
			xml = null;
		}
	}

	xml.send(null);
	function httpSuccess(r) {
		try {
			return !r.status && location.protocol == "file:" ||
			( r.status >= 200 && r.status < 300 ) ||
			r.status == 304 ||
			navigator.userAgent.indexOf("Safari") >= 0 && typeof r.status == "undefined";
		} catch(e){}
		return false;
	}

	function httpData(r,type) {
		var ct = r.getResponseHeader("content-type");
		var data = !type && ct && ct.indexOf("xml") >= 0;
		
		data = type == "xml" || data ? r.responseXML : r.responseText;
		
		if ( type == "script" ) eval.call( window, data );
		return data;
	}
}

function change()
{
var image = ['blackgound01.jpg','blackgound02.jpg','blackgound03.jpg','blackgound04.jpg','blackgound05.jpg','blackgound06.jpg'];
var k = Math.floor(Math.random()*image.length);
}