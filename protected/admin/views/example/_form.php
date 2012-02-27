<div class="onecolumn">
    <div class="content">
        <div class="form">
        <?php $form=$this->beginWidget('CActiveForm', array(
                'id'=>'example-form',
                'enableAjaxValidation'=>false,
        )); ?>
                <p class="note"><?php echo Yii::t('cn','Fields with * are required.');?></p><br>

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
                        <?php echo $form->labelEx($model,'banner'); ?><br>
                        <?php echo $form->textField($model,'banner'); ?>
                        <?php echo '<p>'.$model->banner.'</p>';?>
                        <?php echo $form->error($model,'banner')?>
                </p><br>
                
                <p>
                        <?php echo $form->labelEx($model,'content'); ?><br>
                        <?php echo $form->textArea($model,'content',array('rows'=>10, 'cols'=>50)); ?>
                        <?php $this->widget('application.extensions.elrte.elRTE',
                            array(
                                    'selector'=>'Example_content',
                                    'absoluteURLs' => 'false',
                                    'allowSource' => 'true',
                                    'lang' => 'zh_CN',
                                    'styleWithCSS' => 'true',
                                    'fmAllow' => 'true',
                                    'toolbar' => 'maxi',
                                )
                        ); ?>
                        <?php echo $form->error($model,'content'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'tid'); ?><br>
                        <?php echo $form->dropDownList($model, 'tid', CHtml::listData(Taxonomy::model()->texample()->findAll(), "id", "name"),array('prompt' => Yii::t('cn', 'Please Select'))); ?>
                        <?php echo $form->error($model,'tid'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'weight'); ?><br>
                        <?php echo $form->dropDownList($model,'weight', array('-5'=>-5,'-4'=>-4,'-3'=>-3,'-2'=>-2,'-1'=>-1,'0'=>0,'1'=>1,'2'=>2,'3'=>3,'4'=>4,'5'=>5));?>
                        <?php echo $form->error($model,'weight'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'parent'); ?><br>
                        <?php echo $form->dropDownList($model, 'parent', CHtml::listData(Example::model()->self()->parent()->findAll(), "id", "title"),array('prompt' => Yii::t('cn', 'Please Select'))); ?>
                        <?php echo $form->error($model,'parent'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'status'); ?><br>
                        <?php echo $form->dropDownList($model,'status', array(1=>Yii::t('cn', 'Published'),0=>Yii::t('cn', 'Not Publish')));?>
                        <?php echo $form->error($model,'status'); ?>
                </p><br>

                <div class="row buttons">
                        <?php echo CHtml::submitButton($model->isNewRecord ? Yii::t('cn', 'Create') : Yii::t('cn', 'Save')); ?>
                </div>

        <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
</div>