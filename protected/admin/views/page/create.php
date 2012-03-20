<?php
$this->breadcrumbs=array(
	Yii::t('cn','Page')=>array('index'),
	Yii::t('cn','Create')
);

/*$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);*/
?>
<div class="top1">
<p>Operations</p>
<ul>
<li><a href="<?php echo Yii::app()->createUrl('page/index');?>">List Page</a></li>
<li><a href="<?php echo Yii::app()->createUrl('page/admin');?>">Manage Page</a></li>
</ul>
</div>
<br><br><br>
<h1><?php echo Yii::t('cn','Create Page');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>