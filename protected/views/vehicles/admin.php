<?php
/* @var $this VehiclesController */
/* @var $model Vehicles */

$this->breadcrumbs = array(
    'Vehicles' => array('index'),
    'Manage',
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#vehicles-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
<div class="main">
    <div class="main-inner">

        <div class="container">

            <div class="row">    
                <div class="span7">
                    <div class="widget widget-table action-table">

                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Vehicles/Stock</h3>
                            <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
                                Advanced Search
                            </button>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <?php
                            $this->widget('zii.widgets.grid.CGridView', array(
                                'id' => 'vehicles-grid',
                                'dataProvider' => $model->search(),
                                'filter' => $model,
                                'columns' => array(
                                    'vehicle_id',
                                    'vehicle_name',
                                    'vehicle_model',
                                    'vehicle_make',
                                    'vehicle_year',
                                    'vehicle_color',
                                    /*
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
                                     */
                                    array(
                                        'class' => 'CButtonColumn',
                                    ),
                                ),
                            ));
                            ?>

                        </div>
                    </div>
                </div><!--Span 7-->
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
                                    <span class="shortcut-label">Add Vehicles/<br />Stock</span>
                                </a>


                            </div> <!-- /shortcuts -->	
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget-box -->

                </div> <!-- /span4 -->
            </div>
        </div>
    </div>
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Advanced Search</h4>
            </div>
            <div class="modal-body">
                <?php
                $this->renderPartial('_search', array(
                    'model' => $model,
                ));
                ?>
            </div>
            <!--            <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>-->
        </div>
    </div>
</div>
