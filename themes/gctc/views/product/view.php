<div class="newBg top101">
<h3><?php echo $model->title;?></h3>
<span class="time"><?php date('Y-m-d',$model->createtime);?></span>
<div class="text">
<?php echo $model->content; ?>
</div>
<div class="back"><a href="<?php echo Yii::app()->createUrl('taxonomy/view', array('id'=>30));?>">返回列表&nbsp;&nbsp;&gt;</a></div>
</div>