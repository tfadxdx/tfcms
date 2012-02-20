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

<?php
        foreach ($datas as $data){
            echo CHtml::link($data->title, array('node/'.$data->id)).'</br>';
            echo $data->content.'</br>';
        }
?>
