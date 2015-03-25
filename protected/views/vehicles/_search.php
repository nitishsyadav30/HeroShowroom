<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */
/* @var $form CActiveForm */
?>
<div class="widget-content">
    <div class="tabbable">
        <div class="tab-content">
            <div class="tab-pane active" id="profile">

                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'action' => Yii::app()->createUrl($this->route),
                    'method' => 'get',
                ));
                ?>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_id'); ?>
                    <?php echo $form->textField($model, 'vehicle_id'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_name'); ?>
                    <?php echo $form->textField($model, 'vehicle_name', array('size' => 60, 'maxlength' => 200)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_model'); ?>
                    <?php echo $form->textField($model, 'vehicle_model', array('size' => 60, 'maxlength' => 200)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_make'); ?>
                    <?php echo $form->textField($model, 'vehicle_make', array('size' => 50, 'maxlength' => 50)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_year'); ?>
                    <?php echo $form->textField($model, 'vehicle_year', array('size' => 10, 'maxlength' => 10)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_color'); ?>
                    <?php echo $form->textField($model, 'vehicle_color', array('size' => 20, 'maxlength' => 20)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_key_no'); ?>
                    <?php echo $form->textField($model, 'vehicle_key_no', array('size' => 60, 'maxlength' => 100)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_frame_no'); ?>
                    <?php echo $form->textField($model, 'vehicle_frame_no', array('size' => 60, 'maxlength' => 100)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_engine_no'); ?>
                    <?php echo $form->textField($model, 'vehicle_engine_no', array('size' => 60, 'maxlength' => 100)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_battery_make'); ?>
                    <?php echo $form->textField($model, 'vehicle_battery_make', array('size' => 60, 'maxlength' => 100)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_battery_no'); ?>
                    <?php echo $form->textField($model, 'vehicle_battery_no', array('size' => 60, 'maxlength' => 100)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_price'); ?>
                    <?php echo $form->textField($model, 'vehicle_price'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_quantity'); ?>
                    <?php echo $form->textField($model, 'vehicle_quantity'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'vehicle_description'); ?>
                    <?php echo $form->textArea($model, 'vehicle_description', array('rows' => 6, 'cols' => 50)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'added_on'); ?>
                    <?php echo $form->textField($model, 'added_on'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'fk_added_by'); ?>
                    <?php echo $form->textField($model, 'fk_added_by'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'updated_on'); ?>
                    <?php echo $form->textField($model, 'updated_on'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'fk_updated_by'); ?>
                    <?php echo $form->textField($model, 'fk_updated_by'); ?>
                </div>

                <div class="control-group">
                    <?php echo CHtml::submitButton('Search'); ?>
                </div>

                <?php $this->endWidget(); ?>

            </div><!-- search-form -->
        </div>
    </div>
</div>
