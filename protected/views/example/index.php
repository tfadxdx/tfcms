<?php
$this->breadcrumbs=array(
	'Examples',
);

$this->menu=array(
	array('label'=>'Create Example', 'url'=>array('create')),
	array('label'=>'Manage Example', 'url'=>array('admin')),
);
?>

<h1>Examples</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
