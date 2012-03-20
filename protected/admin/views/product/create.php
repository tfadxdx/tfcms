<?php
$this->breadcrumbs=array(
	Yii::t('cn','Product')=>array('index'),
	Yii::t('cn','Create')
);

/*$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);*/
?>
<div class="top">
<p>Operations</p>
<ul>
<li><a href="<?php echo Yii::app()->createUrl('product/index');?>">List Product</a></li>
<li><a href="<?php echo Yii::app()->createUrl('product/admin');?>">Manage Product</a></li>
</ul>
</div>
<br><br><br>

<h1><?php echo Yii::t('cn','Create Product');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>