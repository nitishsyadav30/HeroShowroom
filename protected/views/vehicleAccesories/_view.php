<?php
/* @var $this VehicleAccesoriesController */
/* @var $data VehicleAccesories */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('accessory_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->accessory_id), array('view', 'id'=>$data->accessory_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_vehicle_id')); ?>:</b>
	<?php echo CHtml::encode($data->fk_vehicle_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acessory_name')); ?>:</b>
	<?php echo CHtml::encode($data->acessory_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('acessory_description')); ?>:</b>
	<?php echo CHtml::encode($data->acessory_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('added_on')); ?>:</b>
	<?php echo CHtml::encode($data->added_on); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_added_by')); ?>:</b>
	<?php echo CHtml::encode($data->fk_added_by); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('updated_on')); ?>:</b>
	<?php echo CHtml::encode($data->updated_on); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->fk_updated_by); ?>
	<br />

	*/ ?>

</div>