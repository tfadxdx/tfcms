<?php
$this->breadcrumbs=array(
	Yii::t('cn','News')=>array('index'),
	Yii::t('cn','Create')
);
/*$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>*/
?>

<div class="top1">
<p>Operations</p>
<ul>
<li><a href="<?php echo Yii::app()->createUrl('news/index');?>">List Page</a></li>
<li><a href="<?php echo Yii::app()->createUrl('news/admin');?>">Manage Page</a></li>
</ul>
</div>
<br><br><br>

<h1><?php echo Yii::t('cn','Create News');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>