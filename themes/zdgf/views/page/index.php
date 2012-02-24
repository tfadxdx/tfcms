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
        foreach ($model as $item){
            echo CHtml::link($item->title, array('page/'.$item->id)).'</br>';
            echo $item->content.'</br>';
        }
?>