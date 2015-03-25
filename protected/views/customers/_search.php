<?php
/* @var $this CustomersController */
/* @var $model Customers */
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
                    'htmlOptions' => array(
                        'class' => 'form-horizontal'),
                ));
                ?>

                <div class="control-group">
                    <?php echo $form->label($model, 'c_name'); ?>
                    <?php echo $form->textField($model, 'c_name', array('size' => 50, 'maxlength' => 50)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'c_address'); ?>
                    <?php echo $form->textArea($model, 'c_address', array('rows' => 6, 'cols' => 50)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'c_city'); ?>
                    <?php echo $form->textField($model, 'c_city', array('size' => 15, 'maxlength' => 15)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'c_state'); ?>
                    <?php echo $form->textField($model, 'c_state', array('size' => 15, 'maxlength' => 15)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'c_country'); ?>
                    <?php echo $form->textField($model, 'c_country', array('size' => 15, 'maxlength' => 15)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'c_mobile'); ?>
                    <?php echo $form->textField($model, 'c_mobile', array('size' => 20, 'maxlength' => 20)); ?>
                </div>



                <div class="control-group ">
                    <?php echo CHtml::submitButton('Search',array('class'=>'btn btn-info')); ?>
                </div>

                <?php $this->endWidget(); ?>

            </div>
        </div>
    </div>
</div>                                    
