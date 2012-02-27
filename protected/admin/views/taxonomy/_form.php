<?php
    $type=$_GET['type'];
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taxonomy-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note"><?php echo Yii::t('cn','Fields with * are required.');?></p><br>

	<?php echo $form->errorSummary($model); ?>

	<p>
		<?php echo $form->labelEx($model,'name'); ?><br>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'slug'); ?><br>
		<?php echo $form->textField($model,'slug',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'slug'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'taxonomy'); ?><br>
		<?php echo $form->dropDownList($model,'taxonomy',array(
                                                                ''=>Yii::t('cn', 'Please Select'),
                                                                'product_category'=>Yii::t('cn', 'Product Type'),
                                                                'news_category'=>Yii::t('cn', 'News Type'),
                                                                'page_category'=>Yii::t('cn', 'Page Type'),
                                                                'example_category'=>Yii::t('cn', 'Example Type'),
                                                                ),
                                                array('options' => array($type.'_category'=>array('selected'=>true)))
                        ); ?>
		<?php echo $form->error($model,'taxonomy'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'description'); ?><br>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'parent'); ?><br>
                <?php echo $form->dropDownList($model, 'parent', CHtml::listData(Taxonomy::model()->findAll('taxonomy=:taxonomy',array(':taxonomy'=>$type.'_category')), "id", "name"),array('prompt' => Yii::t('cn', 'Please Select'))); ?>
		<?php echo $form->error($model,'parent'); ?>
	</p><br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->