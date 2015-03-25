<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */

$this->breadcrumbs=array(
	'Vehicles'=>array('index'),
	'Create',
);

?>


<?php $this->renderPartial('_form', array('model'=>$model)); ?>