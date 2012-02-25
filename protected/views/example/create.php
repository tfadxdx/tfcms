<?php
$this->breadcrumbs=array(
	'Examples'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Example', 'url'=>array('index')),
	array('label'=>'Manage Example', 'url'=>array('admin')),
);
?>

<h1>Create Example</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>