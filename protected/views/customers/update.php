<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs=array(
	'Customers'=>array('index'),
	$model->c_id=>array('view','id'=>$model->c_id),
	'Update',
);

?>



<?php $this->renderPartial('_form', array('model'=>$model)); ?>