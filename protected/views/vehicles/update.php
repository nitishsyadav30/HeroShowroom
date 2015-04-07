<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	$model->vehicle_id=>array('view','id'=>$model->vehicle_id),
	'Update',
);



?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>