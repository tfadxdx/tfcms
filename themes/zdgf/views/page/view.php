<?php $about_tax=Taxonomy::model()->find('name="关于CSUN"');?>
<?php $contact_tax=Taxonomy::model()->find('name="联系我们"');?>
<?php if($model->title=='案例中心'):?>
    <?php echo $model->content;?>
<?php elseif($model->tid==$contact_tax->id):?>
    <?php echo $this->renderPartial('_contact', array('tax'=>$contact_tax,'model'=>$model)); ?>
<?php else:?>
    <?php echo $this->renderPartial('_page', array('tax'=>$about_tax,'model'=>$model)); ?>
<?php endif;?>