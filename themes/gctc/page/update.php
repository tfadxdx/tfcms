<?php
$this->breadcrumbs=array(
	'Nodes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Node', 'url'=>array('index')),
	array('label'=>'Create Node', 'url'=>array('create')),
	array('label'=>'View Node', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Node', 'url'=>array('admin')),
);
?>

<h1>Update Node <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>