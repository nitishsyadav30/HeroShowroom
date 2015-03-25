<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	$model->vehicle_id=>array('view','id'=>$model->vehicle_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Vehicles', 'url'=>array('index')),
	array('label'=>'Create Vehicles', 'url'=>array('create')),
	array('label'=>'View Vehicles', 'url'=>array('view', 'id'=>$model->vehicle_id)),
	array('label'=>'Manage Vehicles', 'url'=>array('admin')),
);
?>

<h1>Update Vehicles <?php echo $model->vehicle_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>