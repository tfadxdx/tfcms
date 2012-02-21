<?php
$this->breadcrumbs=array(
	'Nodes'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Node', 'url'=>array('index')),
	array('label'=>'Create Node', 'url'=>array('create')),
);
?>

<h1>Manage Nodes</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<!-- Begin one column window -->
<div class="onecolumn">
        <div class="header">
                <span>List data</span>
        </div>
        <br class="clear"/>
        <div class="content">
                <form id="form_data" name="form_data" action="" method="post">
                        <table class="data" width="100%" cellpadding="0" cellspacing="0">
                                <thead>
                                        <tr>
                                                <th style="width:10px">
                                                        <input type="checkbox" id="check_all" name="check_all"/>
                                                </th>
                                                <th style="width:30%">Title</th>
                                                <th style="width:20%">Author</th>
                                                <th style="width:30%">Create Time</th>
                                                <th style="width:15%">Status</th>
                                        </tr>
                                </thead>
                                <tbody>
                                            <? foreach ($model as $item): ?>
                                                <tr class="grey">
                                                    <th style="width:10px">
                                                            <input type="checkbox" id="check_all" name="check_all"/>
                                                    </th>
                                                    <th style="width:30%"><?php echo $item->title?></th>
                                                    <th style="width:20%"><?php echo Yii::app()->getModule('user')->user($item->uid)->username;?></th>
                                                    <th style="width:30%"><?php echo date('Y-m-d  i:m:s',$item->createtime);?></th>
                                                    <th style="width:15%"><?php echo $item->status;?></th>
                                                </tr>
                                            <? endforeach; ?>
                                        
                                </tbody>
                        </table>
                </form>

                <!-- Begin pagination -->
                        <div class="pagination">
                                <a href="#">«</a>
                                <a href="#" class="active">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#">4</a>
                                <a href="#">5</a>
                                <a href="#">6</a>
                                <a href="#">»</a>
                        </div>
                <!-- End pagination -->

        </div>
</div>
<!-- End one column window -->
