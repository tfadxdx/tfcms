<?php
$this->breadcrumbs=array(
	'Taxonomies',
);

$this->menu=array(
	array('label'=>'Create Taxonomy', 'url'=>array('create')),
	array('label'=>'Manage Taxonomy', 'url'=>array('admin')),
);
?>

<h1>Taxonomies</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
