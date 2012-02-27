<?php
$this->breadcrumbs=array(
	Yii::t('cn','Product')=>array('index'),
	Yii::t('cn','Create')
);

$this->menu=array(
	array('label'=>'List Product', 'url'=>array('index')),
	array('label'=>'Manage Product', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('cn','Create Product');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>