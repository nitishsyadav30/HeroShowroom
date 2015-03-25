<?php
/* @var $this VehiclesController */
/* @var $data Vehicles */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->vehicle_id), array('view', 'id'=>$data->vehicle_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_name')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_model')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_model); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_make')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_make); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_year')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_year); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_color')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_color); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_key_no')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_key_no); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_frame_no')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_frame_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_engine_no')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_engine_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_battery_make')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_battery_make); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_battery_no')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_battery_no); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_price')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('vehicle_description')); ?>:</b>
	<?php echo CHtml::encode($data->vehicle_description); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('fk_updated_by')); ?>:</b>
	<?php echo CHtml::encode($data->fk_updated_by); ?>
	<br />

	*/ ?>

</div>