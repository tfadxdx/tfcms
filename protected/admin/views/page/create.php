<?php
$this->breadcrumbs=array(
	Yii::t('cn','Page')=>array('index'),
	Yii::t('cn','Create')
);

$this->menu=array(
	array('label'=>'List Page', 'url'=>array('index')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('cn','Create Page');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>