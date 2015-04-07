<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Change Password");
$this->breadcrumbs = array(
    UserModule::t("Profile") => array('/user/profile'),
    UserModule::t("Change Password"),
);

?>


<div class="main">
    <div class="main-inner">

        <div class="container">

            <div class="row">    
                <div class="span7">  
                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3><?php echo UserModule::t("Change password"); ?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">

                                        <?php
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'id' => 'changepassword-form',
                                            'enableAjaxValidation' => true,
                                            'clientOptions' => array(
                                                'validateOnSubmit' => true,
                                            ),
                                            'htmlOptions' => array( 'class' => 'form-horizontal')
                                        ));
                                        ?>
                                        <fieldset>

                                            <?php echo $form->errorSummary($model); ?>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'oldPassword', array('class' => 'control-label')); ?>
                                                 <div class="controls">
                                                <?php echo $form->passwordField($model, 'oldPassword'); ?>
                                                <?php echo $form->error($model, 'oldPassword'); ?>
                                                 </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
                                                 <div class="controls">
                                                <?php echo $form->passwordField($model, 'password'); ?>
                                                <?php echo $form->error($model, 'password'); ?>
                                                <p class="hint">
                                                    <?php echo UserModule::t("Minimal password length 4 symbols."); ?>
                                                </p>
                                                 </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'verifyPassword', array('class' => 'control-label')); ?>
                                                 <div class="controls">
                                                <?php echo $form->passwordField($model, 'verifyPassword'); ?>
                                                <?php echo $form->error($model, 'verifyPassword'); ?>
                                                 </div>
                                            </div>


                                            <div class="form-actions">
                                                <?php echo CHtml::submitButton(UserModule::t("Save"),array('class'=>'btn btn-primary')); ?>
                                            </div>

                                            <?php $this->endWidget(); ?>
                                    </div> <!--Tab content-->                                    
                                </div> <!--tab pane-->  
                            </div>
                        </div> <!--Widget Content-->                                    
                    </div> <!--Widget-->                                
                </div> <!--Span 8-->    
                <div class="span4">


                    <div class="widget widget-box">

                        <div class="widget-header" >
                            <i class="icon-bookmark"></i>
                            <h3 >Quick Shortcuts</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="shortcuts">
                                
                                <a href="<?php echo Yii::app()->createUrl('user/profile/edit'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-edit"></i>
                                    <span class="shortcut-label">Edit</span>
                                </a> 
                                <a href="<?php echo Yii::app()->createUrl('user/logout'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-off"></i>
                                    <span class="shortcut-label">Logout</span>
                                </a> 
                            </div> <!-- /shortcuts -->	
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget-box -->

                </div> <!-- /span4 -->
            </div>  
        </div>    
    </div>   
</div>    

