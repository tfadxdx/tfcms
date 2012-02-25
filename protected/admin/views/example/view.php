<?php
$this->breadcrumbs=array(
	'Examples'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Example', 'url'=>array('index')),
	array('label'=>'Create Example', 'url'=>array('create')),
	array('label'=>'Update Example', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Example', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Example', 'url'=>array('admin')),
);
?>

<h1>View Example #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'title',
		'name',
		'description',
		'banner',
		'content',
		'uid',
		'tid',
		'type',
		'weight',
		'status',
		'parent',
		'createtime',
		'updatetime',
	),
)); ?>
