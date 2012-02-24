<?php $nodes = $model->nodes;?>
<div class="wrap">
        <div class="aboutBanner"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/newbanner.jpg" alt="banner"></div>
	<div class="aboutCon">
	  <div class="leftBg">
            <h2 class="conTit">新闻中心</h2>
            <dl>
                <dt><a href="news.html">公司动态 </a></dt>
                <dt><a href="news_media.html">媒体关注</a></dt>
                <dt><a href="news_inv.html">招标公告</a></dt>
                <dt><a href="news_show.html">展会活动</a></dt>
                <dt><a href="doc_down.html">媒体下载</a>
                </dt><dd><a href="doc_down.html">文档</a></dd>
                <dd><a href="video_down.html">视频</a></dd>
                <dd><a href="photo_down.html">图片</a></dd>

            </dl>
        <dl class="leftListBot"></dl>
            <dl class="top"><a href="http://www.ceeg.cn/"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/linkLogo01.jpg" alt="中电电气"></a></dl>
            <dl class="top"><a href="http://www.epia.org/"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/linkLogo02.jpg" alt="EPIA"></a></dl>
            <dl class="top"><a href="http://www.ceeg.cn/"><img src="<?php echo Yii::app()->request->baseUrl;?>/upload/images/linkLogo03.jpg" alt="中电电气"></a></dl>
		</div>
	<div class="rightBg">
    <div class="rightTit"><h3>公司动态</h3></div>
    <div class="newList">
	<ul>
         <?php foreach($nodes as $node):?>
            <li><span><?php echo date('Y-m-d',$node->createtime);?></span><a href="news/<?php echo $node->id;?>"><?php echo $node->title;?></a></li>
         <?php endforeach;?>
     </ul>
     </div>
    <div class="pages">
	<span> 776 条记录 <em>1/39</em> 页</span>  <a href="#" class="current">1</a><a href="#">2</a><a href="#">3</a><a href="#">4</a><a href="#">5</a><a class="last" href="#">下一页</a></div>
	</div>
<div class="clr"></div>

    </div>
</div>