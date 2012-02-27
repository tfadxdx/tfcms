<?php echo Page::model()->find('name=:name',array(':name'=>'homebanner'))->content;?>

<!--内容-->
<div class="wrap indexConBg">
  <div class="conNewBg">
  	<div class="newTit">
     <h2>新闻中心 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icon01.gif" width="10" height="7" alt="新闻中心" /></h2>
         <span class="more"><a href="<?php echo Yii::app()->createUrl('taxonomy/view', array('id'=>Taxonomy::model()->find('name=:name',array(':name'=>'公司动态'))->id));?>">更多&gt;</a></span></div>
 	 <div class="clr"></div>
 	 <div class="newCon">
 	 <ul>
            <?php foreach(News::model()->self()->published()->desc()->findAll() as $item):?>
             <li><span><?php echo date('Y-m-d',$item->createtime);?></span><a href="<?php echo Yii::app()->createUrl('news/view', array('id'=>$item->id));?>"><?php echo substr($item->content, 0,40);?></a></li>
            <?php endforeach;?>
 	 </ul>
 	 </div>
  </div>

    <div class="conNewBg topDown">
  	<div class="newTit topDownTit">
     <h2>下载排行 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icon01.gif" width="10" height="7" alt="下载排行" /></h2>
  	 <span><a href="news.html">更多&gt;</a></span></div>
 	 <div class="clr"></div>
 	 <div class="downCon">
 	 <ul>
 	 <li><a href="news_open.html">公司简介</a></li>
	  <li><a href="news_open.html">产品目录</a></li>
 	 <li><a href="news_open.html">新产品质保(英文)</a></li>
     <li><a href="news_open.html">可持续发展报告</a></li>
     <li><a href="news_open.html">项目实例(英文)</a></li>
 	 </ul>
 	 </div>
  </div>

    <div class="conNewBg conPro">
  	<div class="newTit conProTit">
     <h2>高效光伏组件 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icon01.gif" width="10" height="7" alt="新闻中心" /></h2>
  	 <span><a href="products.html">更多&gt;</a></span></div>
 	 <div class="clr"></div>
 	 <div class="proCon">
     <a href="products_open.html"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/photo/1-110324151240109.jpg" width="120" height="120" alt="产品01" /></a>
     <h3>PRODUCTS</h3>
	<ul>
    <li><a href="products.html">单晶硅太阳能电池</a></li>
    <li><a href="products1.html">多晶硅太阳能电池</a></li>
    <li><a href="products2.html">单晶硅光伏组件</a></li>
    <li><a href="products3.html">多晶硅光伏组件</a></li>
    </ul>
    </div>
  </div>

    <div class="conNewBg conWork">
  	<div class="newTit conProTit">
    <h2>案例中心 <img src="<?php echo Yii::app()->theme->baseUrl; ?>/img/icon01.gif" width="10" height="7" alt="新闻中心" /></h2>
  	<span class="more"><a href="works.html">更多 ></a></span></div>
 	<div class="clr"></div>
 	<div class="workCon"> <a href="#"><img src="<?php echo Yii::app()->theme->baseUrl; ?>/photo/1-11032Fa913955.jpg"  alt="案例" /></a></div>

  	</div>
</div>
<script type="text/javascript" id="bdshare_js" data="type=tools" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
	document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?t=" + new Date().getHours();
</script>