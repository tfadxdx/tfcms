<?php
	$total = $model->newsCount;    					#所有新闻个数

	$criteria = new CDbCriteria; 
	$criteria->addCondition('tid='.$model->id);

	$pages = new CPagination($total);
        $pages->pageSize = 12;
        $pages->applyLimit($criteria);

	$count = ceil($total / $pages->pageSize);		#新闻一共有多少页

	$news = News::model()->findAll($criteria);
?>
<div class="newBg top101">
<h2><img src="<?php echo Yii::app()->theme->baseUrl;?>/images/newTit.gif" width="172" height="39" alt="新闻中心"></h2>
<ul>
	<?php foreach ($news as $key => $item): ?>
		<li><strong><?php echo date('Y-m-d',$item->createtime); ?></strong><br>
			<a href="<?php echo Yii::app()->createUrl('news/view',array('id'=>$item->id)) ?>">
				<?php echo $item->title; ?>
			</a>
		</li>
	<?php endforeach ?>
</ul>
<div class="clr"></div>
<div class="pages">
<span> <?php echo $total; ?> 条记录 <em><?php echo $count; ?></em> 页</span>
<?php 
	$this->widget('CLinkPager', array(
	    'pages'=>$pages,
	    'prevPageLabel'=>'上一页',
	    'nextPageLabel'=>'下一页',
    	'header'=>'',
    	'htmlOptions'=>array('class'=>'pager'),
	));
 ?>
</div>
</div>