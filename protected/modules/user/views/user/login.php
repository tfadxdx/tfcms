<div class="form">
<?php echo CHtml::beginForm(); ?>

	<?php echo CHtml::errorSummary($model); ?>
	
	<p>
		<?php echo CHtml::activeTextField($model,'username',array('class'=>'blur','id'=>'username','title'=>'Username','style'=>'width:285px')) ?>
	</p>
	
	<p>
		<?php echo CHtml::activePasswordField($model,'password',array('class'=>'blur','id'=>'password','title'=>'******','style'=>'width:285px')) ?>
	</p>
	
        <p class="hint">
                <?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> | <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
        </p>
	
	<p>
		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
	</p>

	<p>
		<?php echo CHtml::submitButton(UserModule::t("Login")); ?>
	</p>
	
<?php echo CHtml::endForm(); ?>
</div><!-- form -->


<?php
$form = new CForm(array(
    'elements'=>array(
        'username'=>array(
            'type'=>'text',
            'maxlength'=>32,
        ),
        'password'=>array(
            'type'=>'password',
            'maxlength'=>32,
        ),
        'rememberMe'=>array(
            'type'=>'checkbox',
        )
    ),

    'buttons'=>array(
        'login'=>array(
            'type'=>'submit',
            'label'=>'Login',
        ),
    ),
), $model);
?>