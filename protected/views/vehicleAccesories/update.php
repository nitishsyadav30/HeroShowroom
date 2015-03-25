<?php
/* @var $this VehicleAccesoriesController */
/* @var $model VehicleAccesories */

$this->breadcrumbs=array(
	'Vehicle Accesories'=>array('index'),
	$model->accessory_id=>array('view','id'=>$model->accessory_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List VehicleAccesories', 'url'=>array('index')),
	array('label'=>'Create VehicleAccesories', 'url'=>array('create')),
	array('label'=>'View VehicleAccesories', 'url'=>array('view', 'id'=>$model->accessory_id)),
	array('label'=>'Manage VehicleAccesories', 'url'=>array('admin')),
);
?>

<h1>Update VehicleAccesories <?php echo $model->accessory_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>