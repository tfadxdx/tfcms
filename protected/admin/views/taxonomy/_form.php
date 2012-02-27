<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'taxonomy-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p><br>

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
		<?php echo $form->textField($model,'taxonomy',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'taxonomy'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'description'); ?><br>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'parent'); ?><br>
                <?php echo $form->dropDownList($model, 'parent', CHtml::listData(Taxonomy::model()->findAll(), "id", "name"),array('prompt' => 'Select one ...')); ?>
		<?php echo $form->error($model,'parent'); ?>
	</p><br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->