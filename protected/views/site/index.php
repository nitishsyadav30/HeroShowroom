<?php
/* @var $this SiteController */

$this->pageTitle = Yii::app()->name;
?>
<div class="main">

    <div class="main-inner">

        <div class="container">

            <div class="row">

                <div class="span6">

                    <div class="widget">

                        <div class="widget-header">
                            <i class="icon-star"></i>
                            <h3>Quick Stats</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <div class="stats">

                                <div class="stat">
                                    <span class="stat-value"><?php echo Customers::model()->count(); ?></span>									
                                    Customers <i class="icon-user"></i>
                                </div> <!-- /stat -->

                                <div class="stat">
                                    <span class="stat-value"><?php echo Vehicles::model()->count(); ?></span>									
                                    Vehicles <i class="icon-plane"></i>
                                </div> <!-- /stat -->

                                <div class="stat">
                                    <span class="stat-value"><?php echo VehicleAccesories::model()->count(); ?></span>									
                                    Spare Parts <i class="icon-cogs"></i>
                                </div> <!-- /stat -->



                            </div> <!-- /stats -->

                            <div class="stats">

                                <div class="stat">
                                    <span class="stat-value"><?php echo Customers::model()->count(); ?></span>									
                                    Sales <i class="icon-shopping-cart"></i>
                                </div> <!-- /stat -->

                                <div class="stat">
                                    <span class="stat-value">9,249</span>									
                                    Reports <i class="icon-signal"></i>
                                </div> <!-- /stat -->

                                <div class="stat">
                                    <span class="stat-value"><?php echo User::model()->count(); ?></span>									
                                    Users <i class="icon-user"></i>
                                </div> <!-- /stat -->



                            </div> <!-- /stats -->
                            <!--                            <div id="chart-stats" class="stats">
                            
                                                            <div class="stat stat-chart">							
                                                                <div id="donut-chart" class="chart-holder"></div>  #donut 							
                                                            </div>  /substat 
                            
                                                            <div class="stat stat-time">									
                                                                <span class="stat-value">00:28:13</span>
                                                                Average Time on Site
                                                            </div>  /substat 
                            
                                                        </div>  /substats -->

                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->	
                </div>

                <div class="span6">
                    <div class="widget">

                        <div class="widget-header">
                            <i class="icon-bookmark"></i>
                            <h3>Quick Shortcuts</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">

                            <div class="shortcuts">
                                <a href="javascript:;" class="shortcut">
                                    <i class="shortcut-icon icon-shopping-cart"></i>
                                    <span class="shortcut-label">Sales</span>
                                </a>

                                <a href="<?php echo Yii::app()->createUrl('vehicles/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-book"></i>
                                    <span class="shortcut-label">Vehicles Inventory</span>								
                                </a>

                                <a href="<?php echo Yii::app()->createUrl('vehicleaccesories/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-book"></i>
                                    <span class="shortcut-label">Spare-Parts</span>								
                                </a>

                                <a href="javascript:;" class="shortcut">
                                    <i class="shortcut-icon icon-bar-chart"></i>
                                    <span class="shortcut-label">Reports</span>	
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('customers/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-user"></i>
                                    <span class="shortcut-label">Customers</span>	
                                </a>


                                <a href="<?php echo Yii::app()->createUrl('user/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-user"></i>
                                    <span class="shortcut-label">Users</span>
                                </a>

                            </div> <!-- /shortcuts -->	

                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->
                </div>
            </div>
            
            
        </div>
    </div>
</div>