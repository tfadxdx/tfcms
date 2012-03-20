<?php
    if(isset($_GET['type'])){
        $type=$_GET['type'];
    } else {
        $type='';
    }
?>
<br><br>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taxonomy-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('cn','Fields with * are required.');?></p><br>

	<?php echo $form->errorSummary($model); ?>

	<p>
		<?php echo $form->labelEx($model,'name',array('class'=>'taxonomy')); ?><br>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?><br>
		<?php echo $form->error($model,'name'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'slug',array('class'=>'taxonomy')); ?><br>
		<?php echo $form->textField($model,'slug',array('size'=>60,'maxlength'=>200)); ?><br>
		<?php echo $form->error($model,'slug'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'taxonomy',array('class'=>'taxonomy')); ?><br>
		<?php echo $form->dropDownList($model,'taxonomy',array(
                                                                ''=>Yii::t('cn', 'Please Select'),
                                                                'product_category'=>Yii::t('cn', 'Product Type'),
                                                                'news_category'=>Yii::t('cn', 'News Type'),
                                                                'page_category'=>Yii::t('cn', 'Page Type'),
                                                                'example_category'=>Yii::t('cn', 'Example Type'),
                                                                ),
                                                array('options' => array($type.'_category'=>array('selected'=>true)))
                        ); ?><br>
		<?php echo $form->error($model,'taxonomy'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'description',array('class'=>'taxonomy')); ?><br>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?><br><br><br><br><br><br>
		<?php echo $form->error($model,'description'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'parent',array('class'=>'taxonomy')); ?><br>
                <?php if($type):?>
                    <?php echo $form->dropDownList($model, 'parent', CHtml::listData(Taxonomy::model()->findAll('taxonomy=:taxonomy',array(':taxonomy'=>$type.'_category')), "id", "name"),array('prompt' => Yii::t('cn', 'Please Select'))); ?><br>
		<?php else:?>
                    <?php echo $form->dropDownList($model, 'parent', CHtml::listData(Taxonomy::model()->findAll(), "id", "name"),array('prompt' => Yii::t('cn', 'Please Select'))); ?><br>
		<?php endif;?>
                <?php echo $form->error($model,'parent'); ?>
	</p><br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'submit')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->