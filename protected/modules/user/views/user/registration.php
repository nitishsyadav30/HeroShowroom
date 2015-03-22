<link href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_css/pages/signin.css" rel="stylesheet"/>  
<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Registration");
$this->breadcrumbs = array(
    UserModule::t("Registration"),
);
?>
<?php if (Yii::app()->user->hasFlash('registration')): ?>
    <div class="success">
        <?php echo Yii::app()->user->getFlash('registration'); ?>
    </div>
<?php else: ?>

    <div class="account-container register">

        <div class="content clearfix">

            <?php
            $form = $this->beginWidget('UActiveForm', array(
                'id' => 'registration-form',
                'enableAjaxValidation' => true,
                'disableAjaxValidationAttributes' => array('RegistrationForm_verifyCode'),
                'clientOptions' => array(
                    'validateOnSubmit' => true,
                ),
                'htmlOptions' => array('enctype' => 'multipart/form-data'),
            ));
            ?>


            <h1>Register Here</h1>	
            <?php echo $form->errorSummary(array($model, $profile)); ?>
<div class="login-fields">
    <p>Create your free account:</p>
            <div class="field">
                <?php echo $form->labelEx($model, 'username'); ?>
                <?php echo $form->textField($model, 'username', array('class' => 'login','placeholder'=>'Username')); ?>
                <?php echo $form->error($model, 'username'); ?>
            </div>

            <div class="field">
                <?php echo $form->labelEx($model, 'password'); ?>
                <?php echo $form->passwordField($model, 'password', array('class' => 'login','placeholder'=>'Password')); ?>
                <?php echo $form->error($model, 'password'); ?>
                <p class="hint">
                    <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
                </p>
            </div>

            <div class="field">
                <?php echo $form->labelEx($model, 'verifyPassword'); ?>
                <?php echo $form->passwordField($model, 'verifyPassword', array('class' => 'login','placeholder'=>'Retype-password')); ?>
                <?php echo $form->error($model, 'verifyPassword'); ?>
            </div>

            <div class="field">
                <?php echo $form->labelEx($model, 'email'); ?>
                <?php echo $form->textField($model, 'email', array('class' => 'login','placeholder'=>'Email-Id')); ?>
                <?php echo $form->error($model, 'email'); ?>
            </div>

            <?php
            $profileFields = $profile->getFields();
            if ($profileFields) {
                foreach ($profileFields as $field) {
                    ?>
                    <div class="field">
                        <?php echo $form->labelEx($profile, $field->varname); ?>
                        <?php
                        if ($widgetEdit = $field->widgetEdit($profile)) {
                            echo $widgetEdit;
                        } elseif ($field->range) {
                            echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
                        } elseif ($field->field_type == "TEXT") {
                            echo$form->textArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                        } else {
                            echo $form->textField($profile, $field->varname, array('size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)), array('class' => 'login'));
                            
                        }
                        ?>
                        <p class="hint">
                    <?php echo UserModule::t("Firstname/Lastname"); ?>
                </p>
                        <?php echo $form->error($profile, $field->varname); ?>
                    </div>	
                    <?php
                }
            }
            ?>
            <?php if (UserModule::doCaptcha('registration')): ?>
                <div class="field">
                    <?php echo $form->labelEx($model, 'verifyCode'); ?>

                    <?php $this->widget('CCaptcha'); ?>
                    <?php echo $form->textField($model, 'verifyCode', array('class' => 'login','placeholder'=>'Verify Code')); ?>
                    <?php echo $form->error($model, 'verifyCode'); ?>

                    <p class="hint"><?php echo UserModule::t("Please enter the letters as they are shown in the image above."); ?>
                        <br/><?php echo UserModule::t("Letters are not case-sensitive."); ?></p>
                </div>
            <?php endif; ?>
 </div>
            <div class="row submit">
                <?php echo CHtml::submitButton(UserModule::t("Register"),array('class'=>'button btn btn-primary btn-large')); ?>
            </div>
   
            <?php $this->endWidget(); ?>
    
        </div>
    </div><!-- form -->
<?php endif; ?>