<?php
$this->breadcrumbs=array(
	'Taxonomys',
);

$this->menu=array(
	array('label'=>'Create Taxonomy', 'url'=>array('admin.php/taxonomy/create')),
	array('label'=>'Manage Taxonomy', 'url'=>array('admin.php/taxonomy/admin')),
);
?>

<h1>Pages</h1>

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
                                                <th style="width:25%">Name</th>
                                                <th style="width:15%">Create Time</th>
                                                <th style="width:15%">Update Time</th>
                                                <th style="width:15%">Status</th>
                                                <th style="width:20%">Operations</th>
                                        </tr>
                                </thead>
                                <tbody>
                                            <?php foreach ($model as $key=>$item): ?>
                                                <?php if(!Taxonomy::model()->isChild($item)):?>
                                                <tr <?php if(($key%2) == 0){echo 'class="grey"';}?> <?php if($item->children){echo 'id="parent"';}?> >
                                                    <th style="width:10px">
                                                            <input type="checkbox" id="check_all" name="check_all"/>
                                                    </th>
                                                    <th style="width:25%"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/taxonomy/update/<?php echo $item->id;?>"><?php echo $item->name;?></a></th>
                                                    <th style="width:15%"><?php echo date('Y-m-d  i:m:s',$item->createtime);?></th>
                                                    <th style="width:15%"><?php echo date('Y-m-d  i:m:s',$item->updatetime);?></th>
                                                    <th style="width:15%"><?php echo $item->status;?></th>
                                                    <th style="width:20%">
                                                        <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/taxonomy/update/<?php echo $item->id;?>"><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_edit.gif" alt="edit"/></a>
                                                        <?php echo CHtml::link('Delete',"#", array('data-role'=>'button', 'data-icon'=>'delete', "submit"=>array('delete', 'id'=>$item->id), 'confirm' => 'Are you sure to confirm?')); ?>
                                                        <a href=""><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_delete.gif" alt="delete"/></a>
                                                    </th>
                                                </tr>
                                                <?php endif;?>

                                                <?php if($item->children):?>
                                                        <?php foreach($item->children as $child):?>
                                                            <tr class="children">
                                                                <th style="width:10px">
                                                                    <input type="checkbox" id="check_all" name="check_all"/>
                                                                </th>
                                                                <th style="width:25%"><a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/taxonomy/update/<?php echo $child->id;?>"><?php echo $child->name;?></a></th>
                                                                <th style="width:15%"><?php echo date('Y-m-d  i:m:s',$child->createtime);?></th>
                                                                <th style="width:15%"><?php echo date('Y-m-d  i:m:s',$child->updatetime);?></th>
                                                                <th style="width:15%"><?php echo $child->status;?></th>
                                                                <th style="width:20%">
                                                                    <a href="<?php echo Yii::app()->request->baseUrl; ?>/admin.php/taxonomy/update/<?php echo $item->id;?>"><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_edit.gif" alt="edit"/></a>
                                                                    <?php echo CHtml::link('Delete',"#", array('data-role'=>'button', 'data-icon'=>'delete', "submit"=>array('delete', 'id'=>$child->id), 'confirm' => 'Are you sure to confirm?')); ?>
                                                                    <a href=""><img SRC="<?php echo Yii::app()->request->baseUrl; ?>/images/icon_delete.gif" alt="delete"/></a>
                                                                </th>
                                                            </tr>
                                                        <?php endforeach;?>
                                                <?php endif;?>
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