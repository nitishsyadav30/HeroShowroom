<?php
/* @var $this VehicleAccesoriesController */
/* @var $model VehicleAccesories */

$this->breadcrumbs=array(
	'Vehicle Accesories'=>array('index'),
	$model->accessory_id,
);

$this->menu=array(
	array('label'=>'List VehicleAccesories', 'url'=>array('index')),
	array('label'=>'Create VehicleAccesories', 'url'=>array('create')),
	array('label'=>'Update VehicleAccesories', 'url'=>array('update', 'id'=>$model->accessory_id)),
	array('label'=>'Delete VehicleAccesories', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->accessory_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage VehicleAccesories', 'url'=>array('admin')),
);
?>

<h1>View VehicleAccesories #<?php echo $model->accessory_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'accessory_id',
		'fk_vehicle_id',
		'acessory_name',
		'acessory_description',
		'added_on',
		'fk_added_by',
		'updated_on',
		'fk_updated_by',
	),
)); ?>
