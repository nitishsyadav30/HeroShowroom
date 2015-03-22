<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_css/pages/signin.css" rel="stylesheet"/>   
<?php if(Yii::app()->user->hasFlash('loginMessage')): ?>

<div class="success">
	<?php echo Yii::app()->user->getFlash('loginMessage'); ?>
</div>

<?php endif; ?>



<div class="account-container">
	
	<div class="content clearfix">
		
<?php echo CHtml::beginForm(); ?>
        <h1>Sign In</h1>	
	<p class="note"><?php echo UserModule::t('Fields with <span class="required">*</span> are required.'); ?></p>
	
	<?php echo CHtml::errorSummary($model); ?>
	<div class="login-fields">
            
	<div class="field">
		<?php echo CHtml::activeLabelEx($model,'username'); ?>
		<?php echo CHtml::activeTextField($model,'username',array('class'=>'login username-field')) ?>
	</div>
	
	<div class="field">
		<?php echo CHtml::activeLabelEx($model,'password'); ?>
		<?php echo CHtml::activePasswordField($model,'password',array('class'=>'login username-field')) ?>
	</div>
            
        </div><!--Login field-->
	
	<span class="login-checkbox">
		<?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>
		<?php echo CHtml::activeLabelEx($model,'rememberMe'); ?>
	</span>

	<div class="row submit">
		<?php echo CHtml::submitButton(UserModule::t("Login"),array('class'=>'button btn btn-warning btn-large')); ?>
	</div>
	
<?php echo CHtml::endForm(); ?>
</div><!-- form -->
</div>
<div class="login-extra">
		
		Don't have an account? <?php echo CHtml::link(UserModule::t("Register"),Yii::app()->getModule('user')->registrationUrl); ?> <br/> Remind  <?php echo CHtml::link(UserModule::t("Lost Password?"),Yii::app()->getModule('user')->recoveryUrl); ?>
		
	</div>
	
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
