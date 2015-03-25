<?php
/* @var $this VehicleAccesoriesController */
/* @var $model VehicleAccesories */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'vehicle-accesories-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_vehicle_id'); ?>
		<?php echo $form->textField($model,'fk_vehicle_id'); ?>
		<?php echo $form->error($model,'fk_vehicle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acessory_name'); ?>
		<?php echo $form->textField($model,'acessory_name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'acessory_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'acessory_description'); ?>
		<?php echo $form->textArea($model,'acessory_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'acessory_description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'added_on'); ?>
		<?php echo $form->textField($model,'added_on'); ?>
		<?php echo $form->error($model,'added_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_added_by'); ?>
		<?php echo $form->textField($model,'fk_added_by'); ?>
		<?php echo $form->error($model,'fk_added_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
		<?php echo $form->error($model,'updated_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fk_updated_by'); ?>
		<?php echo $form->textField($model,'fk_updated_by'); ?>
		<?php echo $form->error($model,'fk_updated_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->