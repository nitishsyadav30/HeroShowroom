<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>
<div class="main">
    <div class="main-inner">

        <div class="container">

            <div class="row">    
                <div class="span7">  
                    <div class="widget ">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                           <?php if (!isset($model->c_id)){?> <h3>Add Customer</h3><?php } else{?><h3>Update Customer: <?php echo $model->c_name."(" . $model->c_id .")"; ?></h3><?php } ?>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <?php
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'id' => 'customers-form',
                                            'htmlOptions' => array(
                                                'enctype' => 'multipart/form-data',
                                                'class' => 'form-horizontal'),
                                            // Please note: When you enable ajax validation, make sure the corresponding
                                            // controller action is handling ajax validation correctly.
                                            // There is a call to performAjaxValidation() commented in generated controller code.
                                            // See class documentation of CActiveForm for details on this.
                                            'enableAjaxValidation' => false,
                                        ));
                                        ?>

                                        <fieldset>

                                            <?php echo $form->errorSummary($model); ?>
                                            

                                            <div class="control-group">	
                                                <?php echo $form->labelEx($model, 'c_name', array('class' => 'control-label')); ?>    
                                                <div class="controls">

                                                    <?php echo $form->textField($model, 'c_name', array('size' => 50, 'maxlength' => 50, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'c_name'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'c_date_of_birth', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php
                                                    echo $form->dropDownList($model,'day',  CommonFunctions::getDays(), array('style'=>'width:55px'));
                                                    echo $form->dropDownList($model,'month',  CommonFunctions::getMonths(), array('style'=>'width:90px'));
                                                    echo $form->dropDownList($model,'year',  CommonFunctions::getYears(), array('style'=>'width:60px'));
                                                    ?>
                                                    
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'c_address', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textArea($model, 'c_address', array('rows' => 6, 'cols' => 50)); ?>
                                                    <?php echo $form->error($model, 'c_address'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'c_city', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'c_city', array('size' => 15, 'maxlength' => 15)); ?>
                                                    <?php echo $form->error($model, 'c_city'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'c_state', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'c_state', array('size' => 15, 'maxlength' => 15)); ?>
                                                    <?php echo $form->error($model, 'c_state'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'c_country', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'c_country', array('size' => 15, 'maxlength' => 15)); ?>
                                                    <?php echo $form->error($model, 'c_country'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'c_mobile', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'c_mobile', array('size' => 20, 'maxlength' => 20)); ?>
                                                    <?php echo $form->error($model, 'c_mobile');?>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'file', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->fileField($model, 'file'); ?>
                                                    <?php echo $form->error($model, 'file'); ?>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
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
                                <a href="<?php echo Yii::app()->createUrl('customers/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-cogs"></i>
                                    <span class="shortcut-label">Manage Customers</span>
                                </a>


                            </div> <!-- /shortcuts -->	
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget-box -->

                </div> <!-- /span4 -->
            </div>  
        </div>    
    </div>   
</div>    

