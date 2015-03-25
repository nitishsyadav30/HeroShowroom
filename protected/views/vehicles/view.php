<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	$model->vehicle_id,
);

$this->menu=array(
	array('label'=>'List Vehicles', 'url'=>array('index')),
	array('label'=>'Create Vehicles', 'url'=>array('create')),
	array('label'=>'Update Vehicles', 'url'=>array('update', 'id'=>$model->vehicle_id)),
	array('label'=>'Delete Vehicles', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->vehicle_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Vehicles', 'url'=>array('admin')),
);
?>

<h1>View Vehicles #<?php echo $model->vehicle_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'vehicle_id',
		'vehicle_name',
		'vehicle_model',
		'vehicle_make',
		'vehicle_year',
		'vehicle_color',
		'vehicle_key_no',
		'vehicle_frame_no',
		'vehicle_engine_no',
		'vehicle_battery_make',
		'vehicle_battery_no',
		'vehicle_price',
		'vehicle_quantity',
		'vehicle_description',
		'added_on',
		'fk_added_by',
		'updated_on',
		'fk_updated_by',
	),
)); ?>
