<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'link-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<p>
		<?php echo $form->labelEx($model,'url'); ?><br>
		<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'url'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'name'); ?><br>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'target'); ?><br>
		<?php echo $form->textField($model,'target',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'target'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'description'); ?><br>
		<?php echo $form->textField($model,'description',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'description'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'visible'); ?><br>
		<?php echo $form->textField($model,'visible',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'visible'); ?>
	</p><br>

	<p>
		<?php echo $form->labelEx($model,'rating'); ?><br>
		<?php echo $form->textField($model,'rating'); ?>
		<?php echo $form->error($model,'rating'); ?>
	</p><br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->