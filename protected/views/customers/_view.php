<?php
/* @var $this CustomersController */
/* @var $data Customers */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->c_id), array('view', 'id'=>$data->c_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_name')); ?>:</b>
	<?php echo CHtml::encode($data->c_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_date_of_birth')); ?>:</b>
	<?php echo CHtml::encode($data->c_date_of_birth); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_address')); ?>:</b>
	<?php echo CHtml::encode($data->c_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_city')); ?>:</b>
	<?php echo CHtml::encode($data->c_city); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_state')); ?>:</b>
	<?php echo CHtml::encode($data->c_state); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_country')); ?>:</b>
	<?php echo CHtml::encode($data->c_country); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('c_mobile')); ?>:</b>
	<?php echo CHtml::encode($data->c_mobile); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('c_file_path')); ?>:</b>
	<?php echo CHtml::encode($data->c_file_path); ?>
	<br />

	*/ ?>

</div>