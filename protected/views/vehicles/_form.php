<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */
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
                            <?php if (!isset($model->c_id)) { ?> <h3>Add Vehicle</h3><?php } else { ?><h3>Update Vehicle: <?php echo $model->c_name . "(" . $model->c_id . ")"; ?></h3><?php } ?>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="tabbable">
                                <div class="tab-content">
                                    <div class="tab-pane active" id="profile">

                                        <?php
                                        $form = $this->beginWidget('CActiveForm', array(
                                            'id' => 'vehicles-form',
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

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_name', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_name', array('size' => 60, 'maxlength' => 200, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_name'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_model', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_model', array('size' => 60, 'maxlength' => 200, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_model'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_make', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_make', array('size' => 50, 'maxlength' => 50, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_make'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_year', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_year', array('size' => 10, 'maxlength' => 10, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_year'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_color', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_color', array('size' => 20, 'maxlength' => 20, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_color'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_key_no', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_key_no', array('size' => 60, 'maxlength' => 100, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_key_no'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_frame_no', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_frame_no', array('size' => 60, 'maxlength' => 100, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_frame_no'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_engine_no', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_engine_no', array('size' => 60, 'maxlength' => 100, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_engine_no'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_battery_make', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_battery_make', array('size' => 60, 'maxlength' => 100, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_battery_make'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_battery_no', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_battery_no', array('size' => 60, 'maxlength' => 100, 'class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_battery_no'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_price', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_price', array('class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_price'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_quantity', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textField($model, 'vehicle_quantity', array('class' => 'input-medium')); ?>
                                                    <?php echo $form->error($model, 'vehicle_quantity'); ?>
                                                </div>
                                            </div>

                                            <div class="control-group">
                                                <?php echo $form->labelEx($model, 'vehicle_description', array('class' => 'control-label')); ?>
                                                <div class="controls">
                                                    <?php echo $form->textArea($model, 'vehicle_description', array('rows' => 6, 'cols' => 100)); ?>
                                                    <?php echo $form->error($model, 'vehicle_description'); ?>
                                                </div>
                                            </div>



                                            <div class="form-actions">
                                                <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save', array('class' => 'btn btn-primary')); ?>
                                            </div>
                                        </fieldset>
                                        <?php $this->endWidget(); ?>

                                    </div><!-- form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--Span 7 --> 
                <div class="span4">


                    <div class="widget widget-box">

                        <div class="widget-header" >
                            <i class="icon-bookmark"></i>
                            <h3 >Quick Shortcuts</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="shortcuts">
                                <a href="<?php echo Yii::app()->createUrl('vehicles/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-cogs"></i>
                                    <span class="shortcut-label">Manage Inventory</span>
                                </a>


                            </div> <!-- /shortcuts -->	
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget-box -->

                </div> <!-- /span4 -->
            </div>
        </div>
    </div>
</div>
