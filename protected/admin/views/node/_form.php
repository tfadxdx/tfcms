<div class="onecolumn">
    <div class="content">
        <div class="form">

        <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'node-form',
                'enableAjaxValidation'=>false,
        )); ?>

                <p class="note">Fields with <span class="required">*</span> are required.</p><br>

                <?php echo $form->errorSummary($model); ?>

                <p>
                        <?php echo $form->labelEx($model,'title'); ?><br>
                        <?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error($model,'title'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'name'); ?><br>
                        <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
                        <?php echo $form->error($model,'name'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'description'); ?><br>
                        <?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
                        <?php echo $form->error($model,'description'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'content'); ?><br>
                        <?php $this->widget('application.extensions.tinymce.ETinyMce',
                        array(
                            'name'=>'html',
                            'useSwitch' => false,
                            'editorTemplate'=>'full',
                            'model' => $model,
                            'attribute'=>'content'
                            )
                        ); ?>
                        <?php echo $form->error($model,'content'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'tid'); ?><br>
                        <?php echo CHtml::dropDownList( "Node[tid]", null, CHtml::listData(Taxonomy::model()->findAll(), "id", "name")); ?>
                        <?php echo $form->error($model,'tid'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'weight'); ?><br>
                        <?php echo CHtml::dropDownList('Node[weight]','', array(0,1,2,3,4,5));?>
                        <?php echo $form->error($model,'weight'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'status'); ?><br>
                        <?php echo CHtml::dropDownList('Node[status]','', array(1=>'Published',0=>'Not Publish'));?>
                        <?php echo $form->error($model,'status'); ?>
                </p><br>

                <div class="row buttons">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                </div>

        <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
</div>