<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */

$this->breadcrumbs = array(
    'Vehicles' => array('index'),
    $model->vehicle_id,
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
                            <h3>View Vehicle<?php echo $model->vehicle_name; ?></h3>

                        </div> <!-- /widget-header -->

                        <div class="widget-content">


                            <?php
                            $this->widget('zii.widgets.CDetailView', array(
                                'data' => $model,
                                'attributes' => array(
                                    'vehicle_id',
                                    'vehicle_name',
                                    'vehicle_model',
                                    'vehicle_make',
                                    'vehicle_year',
                                    'vehicle_color',
                                    'vehicle_key_no',
                                    'vehicle_frame_no',
                                    'vehicle_engine_no',
                                    'vehicle_battery_make',
                                    'vehicle_battery_no',
                                    'vehicle_price',
                                    'vehicle_quantity',
                                    'vehicle_description',
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
                                <a href="<?php echo Yii::app()->createUrl('vehicles/create'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-plus"></i>
                                    <span class="shortcut-label">Add Vehicles</span>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('vehicles/update/' . $model->vehicle_id); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-edit"></i>
                                    <span class="shortcut-label">Update Vehicles</span>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('vehicles/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-cogs"></i>
                                    <span class="shortcut-label">Manage Vehicles</span>
                                </a>
                                <a onclick="confirmAction()" href="<?php echo Yii::app()->createUrl('vehicles/delete/' . $model->vehicle_id); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-remove"></i>
                                    <span class="shortcut-label">Delete Vehicles</span>
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
        confirm("Are you sure you want to remove this Vehicle?");
    }
</script>
