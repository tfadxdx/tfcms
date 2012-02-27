<?php
$this->breadcrumbs=array(
	Yii::t('cn','Category')=>array('index'),
	Yii::t('cn','Create')
);

$this->menu=array(
	array('label'=>'List Taxonomy', 'url'=>array('index')),
	array('label'=>'Manage Taxonomy', 'url'=>array('admin')),
);
?>

<h1><?php echo Yii::t('cn','Create Taxonomy');?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>