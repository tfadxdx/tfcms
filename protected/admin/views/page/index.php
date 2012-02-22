<?php
$this->breadcrumbs=array(
	'Pages',
);

$this->menu=array(
	array('label'=>'Create Page', 'url'=>array('create')),
	array('label'=>'Manage Page', 'url'=>array('admin')),
);
?>

<h1>Pages</h1>

<?php
        foreach ($datas as $data){
            echo CHtml::link($data->title, array('page/'.$data->id)).'</br>';
            echo $data->content.'</br>';
        }
?>