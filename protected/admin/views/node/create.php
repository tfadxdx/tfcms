<?php
$this->breadcrumbs=array(
	'Nodes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Node', 'url'=>array('admin.php/node/index')),
	array('label'=>'Manage Node', 'url'=>array('admin.php/node/admin')),
);
?>

<h1>Create Node</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>