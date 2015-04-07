<?php
/* @var $this VehicleAccesoriesController */
/* @var $model VehicleAccesories */

$this->breadcrumbs=array(
	'Vehicle Accesories'=>array('index'),
	$model->accessory_id=>array('view','id'=>$model->accessory_id),
	'Update',
);


?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>