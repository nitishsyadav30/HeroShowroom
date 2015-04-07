<?php
/* @var $this VehicleAccesoriesController */
/* @var $model VehicleAccesories */
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
                            <?php if (!isset($model->accessory_id)) { ?> <h3>Add Accesories</h3><?php } else { ?><h3>Update Accesories: <?php echo $model->acessory_name . "(" . $model->accessory_id . ")"; ?></h3><?php } ?>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">
                                        <?php
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'id' => 'vehicle-accesories-form',
                                            'htmlOptions' => array(
                                                
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
                                            <?php echo $form->labelEx($model, 'fk_vehicle_id', array('class' => 'control-label')); ?>
                                            <div class="controls">
                                            <?php echo $form->dropDownList($model,'fk_vehicle_id',  CommonFunctions::fetchRecords(), array('style'=>'width:220px')); ?>
                                                <p class="help-block">(Name|Model|Color|Year)</p>
                                            <?php echo $form->error($model, 'fk_vehicle_id'); ?>
                                            </div>
                                        </div>

                                        <div class="control-group">
                                            <?php echo $form->labelEx($model, 'acessory_name', array('class' => 'control-label')); ?>
                                            <div class="controls">
                                            <?php echo $form->textField($model, 'acessory_name', array('size' => 60, 'maxlength' => 200)); ?>
                                            <?php echo $form->error($model, 'acessory_name'); ?>
                                            </div>
                                        </div>
                                             
                                        <div class="control-group">
                                            <?php echo $form->labelEx($model, 'accesories_makers_id', array('class' => 'control-label')); ?>
                                            <div class="controls">
                                            <?php echo $form->textField($model, 'accesories_makers_id', array('size' => 60, 'maxlength' => 200)); ?>
                                            <?php echo $form->error($model, 'accesories_makers_id'); ?>
                                            </div>
                                        </div>     

                                        <div class="control-group">
                                            <?php echo $form->labelEx($model, 'acessory_description', array('class' => 'control-label')); ?>
                                            <div class="controls">
                                            <?php echo $form->textArea($model, 'acessory_description', array('rows' => 6, 'cols' => 50)); ?>
                                            <?php echo $form->error($model, 'acessory_description'); ?>
                                            </div>
                                        </div>

                                        <div class="form-actions">
                                            <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array('class'=>'btn btn-primary')); ?>
                                            <?php echo CHtml::resetButton('Clear',array('class'=>'btn')); ?>
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
                                <a href="<?php echo Yii::app()->createUrl('vehicleAccesories/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-cogs"></i>
                                    <span class="shortcut-label">Manage Accesories</span>
                                </a>


                            </div> <!-- /shortcuts -->	
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget-box -->

                </div> <!-- /span4 -->
            </div>  
        </div>    
    </div>   
</div>    

