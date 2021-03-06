<div class="onecolumn">
    <div class="content">
        <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'node-form',
                'enableAjaxValidation'=>false,
        )); ?>
                <div class="form">
                    <div class="row">
                    <div id="divFileProgressContainer"></div>
                    <div class="swfupload"><span id="swfupload"></span></div>
                    </div>
                </div>
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
                        <?php echo $form->labelEx($model,'is_top'); ?><br>
                        <?php echo $form->dropDownList($model,'is_top', array('0'=>Yii::t('cn','0'),'1'=>Yii::t('cn','1'))); ?>
                        <?php echo $form->error($model,'is_top')?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'banner'); ?><br>
                        <?php echo $form->textField($model,'banner');?>
                        <?php echo $form->error($model,'banner')?>
                </p><br>
                
                <p>
                        <?php echo $form->labelEx($model,'content'); ?><br>
                        <?php echo $form->textArea($model,'content',array('rows'=>6, 'cols'=>50)); ?>
                        <?php $this->widget('application.extensions.elrte.elRTE',
                            array(
                                    'selector'=>'Node_content',
                                    'absoluteURLs' => 'false',
                                    'allowSource' => 'true',
                                    'lang' => 'zh_cn',
                                    'styleWithCSS' => 'true',
                                    'fmAllow' => 'true',
                                    'toolbar' => 'maxi',
                                )
                        ); ?>
                        <?php echo $form->error($model,'content'); ?>
                </p>
                <br>

                <p>
                        <?php echo $form->labelEx($model,'tid'); ?><br>
                        <?php echo CHtml::dropDownList( "Node[tid]", null, CHtml::listData(Taxonomy::model()->findAll(), "id", "name"),array('prompt' => 'Select one ...')); ?>
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