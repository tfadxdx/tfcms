function loading() {
    return {
        open: function(msg){
            var cName = 'loadingBox';
            if(!msg){
                msg = "Loading...";
            }else{
                cName='loadingBox loadingFix';
            }
            var interval;
            this.close();
            var bd = document.getElementsByTagName('BODY')[0];
            var div = document.createElement('DIV');            
            div.id = 'loadingBox';
            div.className = cName;
            div.innerHTML = msg;
            bd.appendChild(div);
            if(interval){
                clearTimeout(interval);
            }
            var self = this;
            interval = setTimeout(function(){
                self.close();    
            },2000);
        },
        close: function(){
            var loadBox = document.getElementById('loadingBox');
            if(loadBox){
                return loadBox.parentNode.removeChild(loadBox);    
            }
        }
    }
}
/**
 * 刷新验证码
 */
 function refreshCode(obj){
    var src = APP + '/Public/code/';
    obj.src = src+(src.indexOf('?') ? '&' : '?')+'t='+Math.random();
 }
/**
 * 增加
 */
function add(id,key){
    if(!key){key = 'id';}
    if(id){
        location.href = URL + '/add/'+key+'/'+id;
    }else{
        location.href = URL + '/add';   
    }    
}
/**
 * 编辑
 */
function edit(id,key){
    id = id || getCheckBox();
    if(!id){
        alert('没有选项');
        return false;
    }
    if(!key){key = 'id'}
    location.href = URL +'/edit/'+key+'/'+id;
}
/**
 * 查看
 */
function read(id,key){
    id = id || getCheckBox();
    if(!id){
        alert('没有选项');
        return false;
    }
    if(!key){key = 'id'}
    location.href = URL +'/read/'+key+'/'+id;
}
/**
 * 还原
 */
function reduce(id,key){
    if(!id){
        alert('没有选项');
        return false;
    }
    if(!key){key = 'id'}
    location.href = URL +'/reduce/'+key+'/'+id;
}
/**
 * 禁用
 */
function forbid(id,key){
    if(!id){
        alert('没有选项');
        return false;
    }
    if(!key){key = 'id'}
    location.href = URL +'/forbid/'+key+'/'+id;
}
/**
 * 恢复
 */
function resume(id,key){
    if(!id){
        alert('没有选项');
        return false;
    }
    if(!key){key = 'id'}
    location.href = URL +'/resume/'+key+'/'+id;
}
/**
 * 删除
 */
function del(id,key,type){
    id = id || getCheckBoxes();
    if(!id){
        alert('没有选项');
        return false;
    }
    if(!key){key = 'id'}
    if(!type){type =0}
    if(window.confirm('确实要删除选择项吗？')){
        if(type ==0){
            location.href = URL +'/foreverdelete/'+key+'/'+id;    
        } else{
            location.href = URL + '/delete/'+key+'/'+id;  
        }    
    }    
}
/**
 * 子节点
 */
function child(id){
    location.href = URL + '/index/pid/'+id;
}
/**
 * 全选
 */
function checkAll(list){
    var boxes = document.getElementById(list).getElementsByTagName('INPUT');
    for(var i=1;i<boxes.length;i++){
        boxes[i].checked = boxes[0].checked;
    }
}

function getCheckBox(){
    var obj = document.getElementsByName('keys');
    for(var i=0;i<obj.length;i++){
        if(obj[i].checked == true){
            return obj[i].value;
        }    
    }
}

function getCheckBoxes() {
    var obj = document.getElementsByName('keys');
    var result = [];
    for(var i=0;i<obj.length;i++){
        if(obj[i].checked == true){
            result.push(obj[i].value);   
        }    
    }
    return result ? result.join(',') : '';
}

/**
 * 返回
 */
 function abolish(u){
    history.back();
    return;
 }
 function module(id){
    location.href = URL+ '/module/groupId/'+id;
 }
 function action(id){
    location.href = URL+ '/action/groupId/'+id;
 }
 function setRole(id){
    location.href = URL+ '/setRole/id/'+id;
 }
 
 function change(param,obj){    
    //alert(URL+ param+obj.options[obj.selectedIndex].value);
    location.href = URL+ param+obj.options[obj.selectedIndex].value;
 }
 /**
  * 检查账号
  */
 function checkName(){
    var postData = {account:$('#account')[0].value};
    $.ajax.Update('',URL+'/checkAccount/', {data:postData,method:'POST',varformat:'json',onSuccess:function(data){
        if(data){
            new loading().open(data.info);    
        }
    }});    
 }
 /**
  * 修改密码
  */
 function resetPass(uid){
    var postData = {newpass:$('#newpass')[0].value,id:uid};
    $.ajax.Update('',URL+'/resetPass/', {data:postData,method:'POST',varformat:'json',onSuccess:function(data){
        if(data){
            new loading().open(data.info);
        }
    }});  
 }
 /**
  * 登录
  */
 function checkLogin(){
    var form = $('#loginForm')[0];
    var postData = {'username':form.username.value,'password':form.password.value,'code':form.code.value};
    var url = URL+'/checkLogin/';
    $.ajax.Update('',url, {data:postData,method:'POST',varformat:'json',onSuccess:function(data){
        if(data.status == 0){
            new loading().open(data.info);
        } else{
            form.submit();
        }
    }});    
 }
 
 /**
  * 按钮经过
  */
 function btn(){
    var btns = $('.btn') || {};
    return {
        init: function(){          
          btns.each(function(){
            $(this).addListener('mouseover',function(){
               this.className = 'btn btnOn';
            }).addListener('mouseout',function(){
                this.className = 'btn';    
            });  
          });  
        }
    }
 }
 
 /**
  * 菜单
  */
function  menu(){
    var loc = -1;
    return {
        init: function(){
            var lis = $('#menu').getByTag('A');
            lis.each(function(i){
                $(this).addListener('click',function(){
                    if(loc > -1){
                        lis[loc].className = '';    
                    }                    
                    this.className  = 'on';
                    loc = i;                    
                });
            });
        }
    }
}
/**
 * 删除附件列表
 */
function delAttach(id,obj){
    if(!id) return;
    if(window.confirm('确认删除该项？')){
        var postData = {aid:id};
        var ajaxUrl = URL + '/delAttach/';
        $.ajax.Update('',ajaxUrl, {data:postData,method:'POST',varformat:'json',onSuccess:function(data){
            if(data.status){
                obj.parentNode.parentNode.removeChild(obj.parentNode);     
            }else{
                alert(data.info);
            }
        }});  
    }    
}
 
 /**
  * 获取城市
  */
 function getCity(obj,tar,selected){
    var curPro = obj.options[obj.selectedIndex].value;
    if(!tar){tar = $(obj).next()[0];}
    if(!selected) {selected = 0}
    if(!curPro){
        tar.style.display = 'none';
        tar.length = 0;
        //tar.options[0] = new Option('请选择城市','');    
    }else{
        var postData = {'pid':curPro};
        var ajaxUrl = URL + '/getCity/';
        tar.length = 0;
        $.ajax.Update('',ajaxUrl,{data:postData,method:'POST',varformat:'json',onSuccess:function(data){
            if(data && data.length > 0){  
                var option = document.createElement("option");
                tar.insertBefore(option, tar.options[0]);
                tar.options[0].value= '';
                tar.options[0].text= '请选择城市'; 
                tar.style.display = '';
                for(var i in data){
                    var pos = parseInt(i)+1;
                    var option = document.createElement("option");                   
                    tar.insertBefore(option, tar.options[pos]);
                    tar.options[pos].value= data[i].id;
                    tar.options[pos].text=data[i].name;
                    if(selected == data[i].id){
                        tar.options[pos].selected = 'selected';        
                    }
                }
            } else{
                tar.style.display = 'none';
            }
        }});
    } 
 }
  function getSelect(settings){
    settings = {
        obj: settings.obj || '',
        url: settings.url || '',
        tar: settings.tar || '',
        data: settings.data || '',
        selected: settings.selected || 0,
        text: settings.text || '请选择'        
    };   
    var curPro = settings.obj.options[settings.obj.selectedIndex].value;
    if(!settings.tar){
        var tar = $(settings.obj).next()[0];
    } else{
        var tar = settings.tar;
    }
    var selected = settings.selected;
    var text = settings.text;
    if(!curPro){
        tar.style.display = 'none';
        tar.length = 0;  
    }else{
        var postData = settings.data;
        var ajaxUrl = settings.url;
        tar.length = 0;
        $.ajax.Update('',ajaxUrl,{data:postData,method:'POST',varformat:'json',onSuccess:function(data){
            if(data && data.length > 0){               
                var option = document.createElement("option");
                tar.insertBefore(option, tar.options[0]);
                tar.options[0].value= '';
                tar.options[0].text= settings.text; 
                tar.style.display = '';
                for(var i in data){
                    var pos = parseInt(i)+1;
                    var option = document.createElement("option");                   
                    tar.insertBefore(option, tar.options[pos]);
                    tar.options[pos].value= data[i].id;
                    tar.options[pos].text=data[i].name;
                    if(selected == data[i].id){
                        tar.options[pos].selected = 'selected';        
                    }
                }
            } else{
                tar.style.display = 'none';
            }
        }});
    } 
 }
 /**
  * 日期
  */
 function getDays(selected){
    getSelect({obj:$('#months')[0],selected:selected,text:'日',url:URL+'/getDays/',data:{year:$('#years')[0].options[$('#years')[0].selectedIndex].value,month:$('#months')[0].options[$('#months')[0].selectedIndex].value}})
 }
 /**
  * 全选
  */
 function selectAll(obj,typeid){
    if(!obj) return;
    if(!typeid){typeid =1}
    var opts = obj.getByTag('OPTION');
    var length = opts.length;
    switch(typeid){
        case 1: //全选
            for(var i=0;i<length;i++){
                opts[i].selected = true;    
            }
            break;
        case 2:
            for(var i=0;i<length;i++){
                opts[i].selected = false;
            }               
            break;
        case 3:
            for(var i=0;i<length;i++){
                opts[i].selected = opts[i].selected == true ? false : true;
            }    
            break;
    }    
 }
 
 function listOver(){
    var trs = $('#checkList').getByTag('TR');
    return {
        init:function(){
             var len = trs.length;
             if(len > 0){
                trs.each(function(){
                    $(this).addListener('mouseover',function(){
                        this.className = 'bk';    
                    }).addListener('mouseout',function(){
                        this.className = '';
                    });
                });
             }
        }
    }
 }
 
 /**
  * 更新故事
  */
 function updateStory(sid,value){
    var form = $('#form01')[0];
    var errMsg = '';
    if(!sid){
        errMsg = '没有指定需要修改的故事';
    }
    if(!value){
        errMsg = '故事内容不能为空';
    }
    if(errMsg){
        new loading().open(errMsg);
        return false;
    }
    var postData = {'sid':sid,'title':value};
    var ajaxUrl = URL + '/update';
    $.ajax.Update('',ajaxUrl, {data:postData,method:'POST',varformat:'json',onSuccess:function(data){
        if(data){
            new loading().open(data.info);
        }
    }});    
 }

  /**
  * 增加支持数
  */
 function updateNotes(id,node){
    var txt = $('#form01')[0].tnotes;
    if(txt.value != '' && id != ''){
        //alert(id);
        var nodeValue = parseInt(node.innerHTML);        
        var ajaxUrl = URL+'/updateNotes';
        var postData = {'tnotes':parseInt(txt.value),'id':id};
        $.ajax.Update('',ajaxUrl, {data:postData,method:'POST',varformat:'json',onSuccess:function(data){
            //alert(data.info);
            if(data){
                if(data.status == 1){
                    node.innerHTML = parseInt(txt.value);
                    txt.value = '';                    
                }
                new loading().open(data.info);   
            }
        }});
    } else{
        new loading().open('请输入一个有效数字');    
    }
 }