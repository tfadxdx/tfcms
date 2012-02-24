<?php
$this->breadcrumbs=array(
	'News',
);

$this->menu=array(
	array('label'=>'Create News', 'url'=>array('create')),
	array('label'=>'Manage News', 'url'=>array('admin')),
);
?>

<h1>News</h1>

<?php
        foreach ($model as $item){
            echo CHtml::link($item->title, array('news/'.$item->id)).'</br>';
            echo $item->content.'</br>';
        }
?>
