<?php
/* @var $this CustomersController */
/* @var $model Customers */

$this->breadcrumbs = array(
    'Customers' => array('index'),
    $model->c_id,
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
                            <h3>View Customer <?php echo $model->c_name; ?></h3>

                        </div> <!-- /widget-header -->

                        <div class="widget-content">



                            <?php
                            $this->widget('zii.widgets.CDetailView', array(
                                'data' => $model,
                                'attributes' => array(
                                    'c_id',
                                    'c_name',
                                    'c_date_of_birth',
                                    'c_address',
                                    'c_city',
                                    'c_state',
                                    'c_country',
                                    'c_mobile',
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
                                <a href="<?php echo Yii::app()->createUrl('customers/create'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-plus"></i>
                                    <span class="shortcut-label">Add Customers</span>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('customers/update/'.$model->c_id); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-edit"></i>
                                    <span class="shortcut-label">Update Customer</span>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('customers/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-cogs"></i>
                                    <span class="shortcut-label">Manage Customers</span>
                                </a>
                                <a onclick="confirmAction()" href="<?php echo Yii::app()->createUrl('customers/delete/'.$model->c_id); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-remove"></i>
                                    <span class="shortcut-label">Delete Customer</span>
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
