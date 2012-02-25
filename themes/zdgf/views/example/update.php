<?php
$this->breadcrumbs=array(
	'Examples'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Example', 'url'=>array('index')),
	array('label'=>'Create Example', 'url'=>array('create')),
	array('label'=>'View Example', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Example', 'url'=>array('admin')),
);
?>

<h1>Update Example <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>