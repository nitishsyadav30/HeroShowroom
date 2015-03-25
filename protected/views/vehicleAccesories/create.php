<?php
/* @var $this VehicleAccesoriesController */
/* @var $model VehicleAccesories */

$this->breadcrumbs=array(
	'Vehicle Accesories'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List VehicleAccesories', 'url'=>array('index')),
	array('label'=>'Manage VehicleAccesories', 'url'=>array('admin')),
);
?>

<h1>Create VehicleAccesories</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>