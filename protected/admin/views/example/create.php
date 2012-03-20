<?php
$this->breadcrumbs=array(
	Yii::t('cn','Example')=>array('index'),
	Yii::t('cn','Create')
);

/*$this->menu=array(
	array('label'=>'List Example', 'url'=>array('index')),
	array('label'=>'Manage Example', 'url'=>array('admin')),
);*/
?>

<div class="top">
<p>Operations</p>
<ul>
<li><a href="<?php echo Yii::app()->createUrl('example/index');?>">List Example</a></li>
<li><a href="<?php echo Yii::app()->createUrl('example/admin');?>">Manage Example</a></li>
</ul>
</div>
<br><br><br>

<h1><?php echo Yii::t('cn','Create Example');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>