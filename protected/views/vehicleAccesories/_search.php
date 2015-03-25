<?php
/* @var $this VehicleAccesoriesController */
/* @var $model VehicleAccesories */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'accessory_id'); ?>
		<?php echo $form->textField($model,'accessory_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_vehicle_id'); ?>
		<?php echo $form->textField($model,'fk_vehicle_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acessory_name'); ?>
		<?php echo $form->textField($model,'acessory_name',array('size'=>60,'maxlength'=>200)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'acessory_description'); ?>
		<?php echo $form->textArea($model,'acessory_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'added_on'); ?>
		<?php echo $form->textField($model,'added_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_added_by'); ?>
		<?php echo $form->textField($model,'fk_added_by'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'updated_on'); ?>
		<?php echo $form->textField($model,'updated_on'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fk_updated_by'); ?>
		<?php echo $form->textField($model,'fk_updated_by'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->