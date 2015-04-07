<?php
$this->pageTitle = Yii::app()->name . ' - ' . UserModule::t("Restore");
$this->breadcrumbs = array(
    UserModule::t("Login") => array('/user/login'),
    UserModule::t("Restore"),
);
?>


<div class="main">
    <div class="main-inner">

        <div class="container">

            <div class="row">    
                <div class="span4">  
                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3><?php echo UserModule::t("Restore"); ?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                            <?php if (Yii::app()->user->hasFlash('recoveryMessage')): ?>
                                            <div class="success">
                                            <?php echo Yii::app()->user->getFlash('recoveryMessage'); ?>
                                            </div>
                                                        <?php else: ?>

                                        <fieldset>
                                                <?php echo CHtml::beginForm(); ?>

                                                      <?php echo CHtml::errorSummary($form); ?>

                                                <div class="control-group">
                                                    <?php echo CHtml::activeLabel($form, 'login_or_email'); ?>
                                                             <?php echo CHtml::activeTextField($form, 'login_or_email') ?>
                                                    <p class="hint"><?php echo UserModule::t("Please enter your login or email addres."); ?></p>
                                                </div>

                                                <div class="form-actions">
                                                              <?php echo CHtml::submitButton(UserModule::t("Restore"),array('class'=>'btn btn-warning')); ?>
                                                </div>

                                            <?php echo CHtml::endForm(); ?>
                                            </fieldset><!-- form -->
                                                    <?php endif; ?>

                                    </div> <!--Tab content-->                                    
                                </div> <!--tab pane-->  
                            </div>
                        </div> <!--Widget Content-->                                    
                    </div> <!--Widget-->                                
                </div> <!--Span 8-->    
            </div>  
        </div>    
    </div>   
</div>    

