<?php
$this->breadcrumbs=array(
	Yii::t('cn','News')=>array('index'),
	Yii::t('cn','Create')
);

$this->menu=array(
	array('label'=>'List News', 'url'=>array('index')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('cn','Create News');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>