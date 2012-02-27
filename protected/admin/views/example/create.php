<?php
$this->breadcrumbs=array(
	Yii::t('cn','Example')=>array('index'),
	Yii::t('cn','Create')
);

$this->menu=array(
	array('label'=>'List Example', 'url'=>array('index')),
	array('label'=>'Manage Example', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('cn','Create Example');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>