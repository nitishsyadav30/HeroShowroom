<?php
/* @var $this VehicleAccesoriesController */
/* @var $model VehicleAccesories */

$this->breadcrumbs = array(
    'Vehicle Accesories' => array('index'),
    $model->accessory_id,
);
?>


<div class="main">
    <div class="main-inner">

        <div class="container">

            <div class="row">    
                <div class="span7">
                    <div class="widget widget-table action-table">

                        <div class="widget-header">
                            <i class="icon-user"></i>
                            <h3>View Vehicle Accesories #<?php echo $model->accessory_id; ?></h3>

                        </div> <!-- /widget-header -->

                        <div class="widget-content">
<?php
$this->widget('zii.widgets.CDetailView', array(
    'data' => $model,
    'attributes' => array(
        'accessory_id',
        'fk_vehicle_id',
        'acessory_name',
        'acessory_description',
        'added_on',
        'fk_added_by',
        'updated_on',
        'fk_updated_by',
    ),
));
?>
                        </div>
                    </div>
                </div>

                <div class="span4">


                    <div class="widget widget-box">

                        <div class="widget-header" >
                            <i class="icon-bookmark"></i>
                            <h3 >Quick Shortcuts</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="shortcuts">
                                <a href="<?php echo Yii::app()->createUrl('vehicleaccesories/create'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-plus"></i>
                                    <span class="shortcut-label">Add Spare Parts</span>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('vehicleaccesories/update/' . $model->accessory_id); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-edit"></i>
                                    <span class="shortcut-label">Update Spare Part</span>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('vehicleaccesories/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-cogs"></i>
                                    <span class="shortcut-label">Manage Spare Parts Inventory</span>
                                </a>
                                <a onclick="confirmAction()" href="<?php echo Yii::app()->createUrl('vehicleaccesories/delete/' . $model->accessory_id); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-remove"></i>
                                    <span class="shortcut-label">Delete Spare Part</span>
                                </a>

                            </div> <!-- /shortcuts -->	
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget-box -->

                </div> <!-- /span4 -->
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    function confirmAction() {
        confirm("Are you sure you want to delete this customer?");
    }
</script>
