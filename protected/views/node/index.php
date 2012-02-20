<?php
$this->breadcrumbs=array(
	'Nodes',
);

$this->menu=array(
	array('label'=>'Create Node', 'url'=>array('create')),
	array('label'=>'Manage Node', 'url'=>array('admin')),
);
?>

<h1>Nodes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
