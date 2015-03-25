<?php
/* @var $this VehicleAccesoriesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Vehicle Accesories',
);

$this->menu=array(
	array('label'=>'Create VehicleAccesories', 'url'=>array('create')),
	array('label'=>'Manage VehicleAccesories', 'url'=>array('admin')),
);
?>

<h1>Vehicle Accesories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
