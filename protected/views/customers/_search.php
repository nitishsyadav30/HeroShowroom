<?php
/* @var $this CustomersController */
/* @var $model Customers */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'c_id'); ?>
		<?php echo $form->textField($model,'c_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_name'); ?>
		<?php echo $form->textField($model,'c_name',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_date_of_birth'); ?>
		<?php echo $form->textField($model,'c_date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_address'); ?>
		<?php echo $form->textArea($model,'c_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_city'); ?>
		<?php echo $form->textField($model,'c_city',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_state'); ?>
		<?php echo $form->textField($model,'c_state',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_country'); ?>
		<?php echo $form->textField($model,'c_country',array('size'=>15,'maxlength'=>15)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_mobile'); ?>
		<?php echo $form->textField($model,'c_mobile',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'c_file_path'); ?>
		<?php echo $form->textArea($model,'c_file_path',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->