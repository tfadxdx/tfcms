//loading
function loading() {
    return {
        turnon: function(msg,cName,t){
            if(!msg) msg = "Loading...";            
			if(!cName){
				cName = 'loadingBox';
			}else{
				cName = 'loadingBox '+ cName;
			} 
			if(!t) t=3000;
            var inter;
            this.turnoff();
            var bd = document.getElementsByTagName('BODY')[0];
			var sTop = document.body.scrollTop || document.documentElement.scrollTop;
            var div = document.createElement('DIV');            
            div.id = 'loadingBox';
            div.className = cName;
			div.style.top = (sTop + 35)+'px';
            div.innerHTML = msg;
            bd.appendChild(div);
            if(inter){
                clearTimeout(inter);
            }
            var self = this;
            inter = setTimeout(function(){
               self.turnoff();    
            },t);
			window.onscroll = function(){
				var h = document.body.scrollTop || document.documentElement.scrollTop;
				div.style.top = (h + 35) + 'px';	
			}
        },
        turnoff: function(){
            var loadBox = document.getElementById('loadingBox');
            if(loadBox){
                return loadBox.parentNode.removeChild(loadBox);    
            }
        }
    }
}
//首页banner
var banner = function(){
	var btns = $('#bannerSwitch a');
	var data = $('#bannerBox');
	var h=295,t=0,s,loc=0,interval;	
	return {
		init: function(){
			if(btns.length == 0){return;}			
			var self = this;
			var htmls = data.html();			
			data[0].innerHTML += htmls;	
			this.imgs = data.find('div.bannerL img');
			//this.loadpic(loc);				
			btns.each(function(i){
				$(this).click(function(){
					t = i;
					self.play(i);	
					return false;	
				});
			});
			data.mouseover(function(){
				self.stopPlay();
			}).mouseout(function(){
				self.auto();
			})
			this.auto();
		},
		play: function(i){		
			s = -(i*h)+ 'px';
			var ts = i%6;
			$(btns[loc]).removeClass('on');
			$(btns[ts]).addClass('on');
			loc = ts;
			var self = this;
			this.loadpic(ts);
			data.animate( { marginTop: s }, 300,function(){				
				if(i==6){data.css({marginTop:0});}
				self.auto();
			});					
		},
		//加载图片
		loadpic: function(){
			var imgnode = this.imgs.eq(loc);	
			var imgsrc = imgnode.attr('src');
			if(!imgsrc){				
				imgnode.attr('src',function(){return $(this).attr('rel');});
			}
		},
		auto: function(){
			//return;
			var self = this;
			if(interval){
				clearTimeout(interval);
			}
			interval = setTimeout(function(){
				self.autoPlay();
			},5000);
			
		},
		stopPlay: function(){
			clearTimeout(interval);
			return;
		},
		autoPlay: function(){
			if(t==6){
				t =0;
			}
			t++;
			this.play(t);			
		}
	}
}
//首页背景
var bk = function(data){
	var node = $('#bk div');
	return  {
		init: function(){
			var len = data.length;
			var key = Math.floor(Math.random()*len);			
			var w = 0,interval,loc=0;
			//key = 2;
			var image = new Image();
			var src = PUBLIC+'/Css/images/'+data[key];
			var sPic = src.replace('.jpg','_s.jpg');			
			node.css('background-image','url('+sPic+')');
			image.src = src;
			w = image.width;
			if(w == 0){
				interval = setInterval(function(){	
					w = image.width;
					if(w > 0){
						clearInterval(interval);
						node.css('background-image','url('+src+')');
						return;
					}
				},500);	
			}else{
				node.css('background-image','url('+src+')');	
			}
		}
	}
}
//刷新验证码
function refreshCode(obj){
    obj.src = URL+'/code/t/'+Math.random();
 }

//服务
var service = function(){
	var node = $('#serWrap .serText');
	return {
		init: function(){
			if(node.length ==0){return;}
			var cur = parseInt(location.hash.substr(4));
			node.each(function(i){
				var divs = $(this).find('div');
				if((cur-1) == i){
					$(node[i]).addClass('serOver');
					var hi = $(divs[1]).height() > 170 ?  $(divs[1]).height() + 10 : 170;
					$(divs[0]).height(hi);	
				}				
				$(this).mouseover(function(){
					$(this).addClass('serOver');
					var h = $(divs[1]).height() > 170 ?  $(divs[1]).height() + 10 : 170;
					$(divs[0]).height(h);
				}).mouseleave(function(){
					$(this).removeClass('serOver');
				});
			});
		}
	}
}

//case view
var topcase = function(){
	var node = $('#topCase .topCase div');
	var imgs = $('#topCase img');
	var btns = $('#topCase a');		
	var ems = $('#topCase em');
	var len = imgs.length;
	var width = 926,loc = 0;
	return {
		init: function(){
			var self = this;
            if(imgs.length ==0){
                return;    
            }else if(imgs.length > 1){
                btns.eq(1).addClass('spR');    
            }            
			btns.eq(0).click(function(){
				loc --;
				self.change(1);
			});
			btns.eq(1).click(function(){
				loc++;
				self.change(-1);
			});
			this.loadpic();		
		},
		change: function(i){
			var w = parseInt(node.css('margin-left'));	
			if((Math.abs(w)== (len-1)*width && i == -1) || (w==0 && i==1)){
				return;
			}		
			w += i*width;			
			if(w < 0){
				btns.eq(0).addClass('spL');
			}else{
				btns.eq(0).removeClass('spL');
			}
			if(Math.abs(w)== (len-1)*width){
				btns.eq(1).removeClass('spR');		
			}else{
				btns.eq(1).addClass('spR');
			}			
			this.loadpic();
			ems.eq(0).animate({height:138});
			ems.eq(1).animate({height:138},function(){
				node.css({marginLeft:w});
			});			
			setTimeout(function(){
				ems.eq(0).animate({height:0});
				ems.eq(1).animate({height:0});	
			},600);		
		},
		//加载图片
		loadpic: function(){
			var imgnode = imgs.eq(loc);
			imgnode.show();	
			var imgsrc = imgnode.attr('src');
			if(!imgsrc){				
				imgnode.attr('src',function(){return $(this).attr('rel');});
			}
		}
	}
}

//案例视频
function tvideo(){
	var video = $('#video')[0];
	$('#playBtn').click(function(){
		if (video.paused) {
			if (video.ended) video.currentTime = 0;
			video.play();
			$(this).addClass('pause');
		}else{
			video.pause();
			$(this).removeClass('pause');
		}
		return false;
	});
}

//加入我们
var joinus = function(){
	var btns = $('.btn06');	
	var data = $("#joinList dl:not('.dl01')");
	var box = $('#joinFormBox');
	var closeBtn = box.find('#closeBtn');
	var subBtn = box.find('#submitBtn');
	var form = box.find('#form01')[0]; 
	var posName = '';
	var interval;
	btns.each(function(i){
		$(this).click(function(e){			
			posName = data.eq(i).find('span').html();
			show();
			return false;					
		});
	});	
	//提交
	subBtn.click(function(){
		if(check()){
			var ajaxurl = URL + '/join/';
			var postData = {position:form.position.value,'name':form.name.value,'gender':getCheck(form.gender),'age':form.age.value,'educate':form.educate.value,'tel':form.tel.value,'email':form.email.value,'worktimes':form.worktimes.value,'salary':form.salary.value,'exper':form.exper.value};
			mask();
			$.ajax({
				type: 'POST',
				url: ajaxurl,
				data: postData,
				dataType : 'json',
				success: function(d){
					mask();
					if(d && d.status == 1){
						showMsg(d.info,'',1500);
						box.hide();						
					}else if(d.status == 0){					
						showMsg(d.info);	
					}
				},
				error: function(d){
					mask();								
				}
			});				
		}
	});
	//验证
	function check(){			
		var yet = true;
		if(!empty(form.name,'姓名不能为空')){	
			yet = false;
		}else if(!checkbox(form.gender,'请选择您的性别')){
			yet = false;
		}else if(!empty(form.age,'请输入有效的年龄',/^[1-9][0-9]$/)){
			yet = false;
		}else if(!empty(form.tel,'请输入有效的联系电话',/^((0?[0-9]{2,5}\-[2-9])|[2-9])([0-9]{6,7})+(\-[0-9]{1,4})?$|(^(13[0-9]|15[0-9]|18[0-9]|147)\d{8}$)/)){
			yet = false;
		}else if(form.email.value != '' && !empty(form.email,'Email格式错误',/^[\w\-\.]+@[\w\-\.]+(\.\w+)+$/)){
			yet = false;			
		}
		return yet;		
	}
	
	//蒙板	
	function mask(){
		$('#mask').toggle();				
	}
	//验证函数
	function empty(o,msg,reg){
		if(!reg){reg=null;}
		if(o.value == ''){			
			o.focus();
			showMsg(msg);
			return false;
		}else if(reg && !reg.test(o.value)){			
			o.focus();
			showMsg(msg);
			return false;	
		}else{
			hideMsg();
			return true;
		}
	}
	//验证checkbox,radio
	function checkbox(o,msg){
		var yet = false;
		for(var i=0;i<o.length;i++){
			if(o[i].checked == true){
				yet = true;
				break;
			}
		}
		if(yet == false){
			showMsg(msg);
			return false;
		}else{
			hideMsg();
			return true;	
		}
	}
	//获取checkbox,radion的值
	function getCheck(o){
		var arr = [];
		for(var i=0;i<o.length;i++){
			if(o[i].checked == true){
				arr.push(o[i].value);
			}	
		}
		return arr.toString();
	}
	//显示错误信息
	function showMsg(msg,t){
		if(!t) t= 3000;
		new loading().turnon(msg,'errmsg',t);
	}
	
	//隐藏错误信息
	function hideMsg(){
		//new loading().loading.turnoff();
	}
	//显示填写界面
	function show(){
		form.reset();//重置表单
		var t = getPos();
		var display = box.css('display');
		if(display == 'none'){
			box.css('top',0).show();
			box.animate({'top':t});
		}else{
			box.fadeOut(150).fadeIn(150);
		}		
		form.position.value = posName;
		closeBtn.click(function(){
			hide();	
		});
	}
	//隐藏填写界面
	function hide(){
		box.slideUp();	
	}
	//获取位置
	function getPos(){
		var st = $(window).scrollTop();
		var ch = $(window).height();
		var t = st + Math.floor(ch/2);
		t = t > 215 ? t-215 : 0;
		return t;	
	}
	//滚动条
	$(window).scroll(function(){
		var display = box.css('display');
		if(display == 'block'){			
			var t = getPos();
			box.css({'top':t});
		}		
	});
}

//首页图片
var showImg = function(node,typeid){	
	if(!typeid) typeid = 0;
	return {
		init: function(){			
			if(node.length ==0) return;
			this.ch = $(window).height();	
			var self = this;
			$(window).scroll(function(){
				self.change();				
			}).resize(function(){
				self.change();
			});
			setTimeout(function(){
				self.change();	
			},500);	
		},
		change: function(){
			switch(typeid){
				case 0:
					this.node();
				break;
				case 1:
					this.imgs();
				break;
			}			
		},
		node: function(){			
			var top = node.offset().top;
			var h  = $(window).scrollTop();
			if((this.ch+h)>=top){
				node.find('img').each(function(){
					var imgsrc = $(this).attr('src');
					var imgrel = $(this).attr('rel');
					if(!imgsrc && imgrel && imgsrc != imgrel){
						$(this).attr('src',function(){return imgrel;}).show();
					}				
				});
			}
		},
		imgs: function(){
			var h = $(window).scrollTop();
			var self = this;
			node.each(function(){	
				var top = $(this).offset().top;
				if((self.ch+h) >= top){
					var imgsrc = $(this).attr('src');
					var imgrel = $(this).attr('rel');
					if(!imgsrc &&  imgrel &&  imgsrc != imgrel){
						$(this).attr('src',function(){return imgrel;}).show();	
					}	
				}
			});			
		}
	}	
}
//links
function tunefullinks(){
	var data = $('#links');
	if(data.length == 0) return;
	var btn = $('#linksBtn div');
	btn.click(function(){
		if($(this).hasClass('on')){
			$(this).removeClass('on');	
		}else{
			$(this).addClass('on');	
		}
		data.toggle();	
	});
}

//blog

function tunefulblog(){
	var box = $('#blog');
	if(box.length == 0) return;
	var aurl = APP + '/blog.php';
	$.get(aurl,function(data){
		if(data) box.css('background','none').html(data);	
	});
}

$(document).ready(function(){
	//首页背景

	
	//首页banner
	new banner().init();
	
	//首页图片
	setTimeout(function(){
		new showImg($('#hcases')).init();
	},200);
	
	
	
	//首页友情链接
	new tunefullinks();
	
	//公司介绍
	new showImg($('#aboutImgs')).init();
		
	//服务
	new service().init();
	
	new showImg($('#serWrap img'),1).init();
	
	
	//理念
	new showImg($('#philoImg img:eq(1)'),1).init();
	
	//案例
	new showImg($('#caseList ul:eq(1)')).init();
	
	new tvideo();	
	
	new topcase().init();
	
	
	//view
	new showImg($('#viewContent img'),1).init();	
	//加入我们
	new joinus();
	
	new showImg($('#ecosystem img'),1).init();

	setTimeout(function(){
		new tunefulblog();	
	},1500);

});