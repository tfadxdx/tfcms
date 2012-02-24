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
                        <?php echo $form->labelEx($model,'banner'); ?><br>
                        <?php echo $form->textField($model,'banner'); ?>
                        <?php echo '<p>'.$model->banner.'</p>';?>
                        <?php echo $form->error($model,'banner')?>
                </p><br>

                    <?php $this->widget('ext.EAjaxUpload.EAjaxUpload',
                        array(
                                'id'=>'uploadFile',
                                'config'=>array(
                                       'action'=>Yii::app()->request->baseUrl.'/admin.php/page/upload',
                                       'allowedExtensions'=>array("jpg"),
                                       'sizeLimit'=>2*1024*1024,
                                       'onComplete'=>"js:function(id, fileName, responseJSON){  location.reload() }",
                                ))
                    );?>

                <p>
                        <?php echo $form->labelEx($model,'content'); ?><br>
                        <?php echo $form->textArea($model,'content',array('rows'=>10, 'cols'=>50)); ?>
                        <?php $this->widget('application.extensions.elrte.elRTE',
                            array(
                                    'selector'=>'Page_content',
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
                        <?php echo $form->dropDownList($model, 'tid', CHtml::listData(Taxonomy::model()->findAll(), "id", "name")); ?>
                        <?php echo $form->error($model,'tid'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'weight'); ?><br>
                        <?php echo $form->dropDownList($model,'weight', array(0,1,2,3,4,5));?>
                        <?php echo $form->error($model,'weight'); ?>
                </p><br>

                <p>
                        <?php echo $form->labelEx($model,'status'); ?><br>
                        <?php echo $form->dropDownList($model,'status', array(1=>'Published',0=>'Not Publish'));?>
                        <?php echo $form->error($model,'status'); ?>
                </p><br>

                <div class="row buttons">
                        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
                </div>

        <?php $this->endWidget(); ?>

        </div><!-- form -->
    </div>
</div>