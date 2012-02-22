<?php
$this->breadcrumbs=array(
	'Taxonomies'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Taxonomy', 'url'=>array('index')),
	array('label'=>'Create Taxonomy', 'url'=>array('create')),
	array('label'=>'Update Taxonomy', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Taxonomy', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Taxonomy', 'url'=>array('admin')),
);
?>

<h1>View Taxonomy #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'slug',
		'taxonomy',
		'description',
		'parent',
		'count',
	),
)); ?>
