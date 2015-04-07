<div class="main">
    <div class="main-inner">

        <div class="container">

            <div class="row">    
                <div class="span7">  
                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3><?php if (!isset($model->id)) { ?>Create User <?php } else { ?> Update: <?php echo $model->username . "(" . $model->id . ")";
} ?></h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">

                                        <?php
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'id' => 'user-form',
                                            'enableAjaxValidation' => true,
                                            'htmlOptions' => array('enctype' => 'multipart/form-data', 'class' => 'form-horizontal'),
                                        ));
                                        ?>
                                        <fieldset>
<?php echo $form->errorSummary(array($model, $profile)); ?>

                                            <div class="control-group">
                                                    <?php echo $form->labelEx($model, 'username', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'username', array('size' => 20, 'maxlength' => 20)); ?>
<?php echo $form->error($model, 'username'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                    <?php echo $form->labelEx($model, 'password', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 128)); ?>
<?php echo $form->error($model, 'password'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                    <?php echo $form->labelEx($model, 'email', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128)); ?>
<?php echo $form->error($model, 'email'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                    <?php echo $form->labelEx($model, 'superuser', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->dropDownList($model, 'superuser', User::itemAlias('AdminStatus')); ?>
<?php echo $form->error($model, 'superuser'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                    <?php echo $form->labelEx($model, 'status', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->dropDownList($model, 'status', User::itemAlias('UserStatus')); ?>
<?php echo $form->error($model, 'status'); ?>
                                                </div>
                                            </div>
                                            <?php
                                            $profileFields = $profile->getFields();
                                            if ($profileFields) {
                                                foreach ($profileFields as $field) {
                                                    ?>
                                                    <div class="control-group">
                                                            <?php echo $form->labelEx($profile, $field->varname, array('class' => 'control-label')); ?>
                                                        <div class="controls">
                                                            <?php
                                                            if ($widgetEdit = $field->widgetEdit($profile)) {
                                                                echo $widgetEdit;
                                                            } elseif ($field->range) {
                                                                echo $form->dropDownList($profile, $field->varname, Profile::range($field->range));
                                                            } elseif ($field->field_type == "TEXT") {
                                                                echo CHtml::activeTextArea($profile, $field->varname, array('rows' => 6, 'cols' => 50));
                                                            } else {
                                                                echo $form->textField($profile, $field->varname, array('size' => 60, 'maxlength' => (($field->field_size) ? $field->field_size : 255)));
                                                            }
                                                            ?>
        <?php echo $form->error($profile, $field->varname); ?>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                            }
                                            ?>
                                            <div class="form-actions">
                                                <?php echo CHtml::submitButton($model->isNewRecord ? UserModule::t('Create') : UserModule::t('Save'), array('class' => 'btn btn-primary')); ?>
<?php echo CHtml::resetButton('Reset', array('class' => 'btn')); ?>
                                            </div>
                                        </fieldset>
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
                                <a href="<?php echo Yii::app()->createUrl('user/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-cogs"></i>
                                    <span class="shortcut-label">Manage Users</span>
                                </a>


                            </div> <!-- /shortcuts -->	
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget-box -->

                </div> <!-- /span4 -->
            </div>  
        </div>    
    </div>   
</div>    

