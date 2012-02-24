<?php
$this->breadcrumbs=array(
	'Nodes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Node', 'url'=>array('index')),
	array('label'=>'Create Node', 'url'=>array('create')),
	array('label'=>'Update Node', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Node', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Node', 'url'=>array('admin')),
);
?>

<h1>View Node #<?php echo $model->id; ?></h1>

<div class="view">

	<b><?php echo CHtml::encode($model->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($model->id), array('view', 'id'=>$model->id)); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('title')); ?>:</b>
	<?php echo CHtml::encode($model->title); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($model->name); ?>
	<br />

        <b><?php echo CHtml::encode($model->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($model->description); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('content')); ?>:</b>
	<?php echo $model->content; ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('uid')); ?>:</b>
	<?php echo CHtml::encode($model->uid); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('tid')); ?>:</b>
	<?php echo CHtml::encode($model->tid); ?>
	<br />

	<b><?php echo CHtml::encode($model->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($model->type); ?>
	<br />

</div>

