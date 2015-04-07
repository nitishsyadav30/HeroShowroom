<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="language" content="en" />

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_css/bootstrap-responsive.min.css" rel="stylesheet" />
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_js/jquery-1.7.2.min.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_js/bootstrap.js"></script>
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_js/base.js"></script>
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_css/font-awesome.css" rel="stylesheet"/>
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_css/base-admin.css" rel="stylesheet" />
        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_css/base-admin-responsive.css" rel="stylesheet"/>

        <link href="<?php echo Yii::app()->request->baseUrl; ?>/css/theme_css/pages/dashboard.css" rel="stylesheet"/>   

        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    </head>

    <body>
        <div class="navbar navbar-fixed-top">

            <div class="navbar-inner">

                <div class="container">

                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>

                    <a class="brand" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">
                        <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/slider/logo.jpg" width="25px" /> ARIHANT MOTORS				
                    </a>		

                    <div class="nav-collapse">
                        <ul class="nav pull-right">
                            <?php if (!Yii::app()->user->isGuest) { ?>
                                <li class="dropdown">

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-cog"></i>
                                        Settings
                                        <b class="caret"></b>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo Yii::app()->createUrl('user/admin/update/id/'.Yii::app()->user->id);?>">Account Settings</a></li>
                                    </ul>

                                </li>
                            <?php } ?>

                            <?php if (!Yii::app()->user->isGuest) { ?>
                                <li class="dropdown" >

                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="icon-user"></i>
                                        <?php echo Yii::app()->user->name; ?> 
                                        <b class="caret"></b>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo Yii::app()->createUrl('user/profile/edit');?>">My Profile</a></li>

                                        <li class="divider"></li>
                                        <li><?php echo CHtml::link('Logout', Yii::app()->createurl('/user/logout')) ?></li>
                                    </ul>

                                </li>
                            <?php } ?><?php if (Yii::app()->user->isGuest) { ?>
                                <li class="toggle">
                                    <?php echo CHtml::link('<i class="icon-user"></i> Login/SignUp', Yii::app()->createurl('user/login')) ?>
                                </li>
                            <?php } ?>
                        </ul>

                        <!--                        <form class="navbar-search pull-right">
                                                    <input type="text" class="search-query" placeholder="Search">
                                                </form>-->

                    </div><!--/.nav-collapse -->	

                </div> <!-- /container -->

            </div> <!-- /navbar-inner -->

        </div> <!-- /navbar -->

        <div class="subnavbar">

            <div class="subnavbar-inner">

                <div class="container">

                    <ul class="mainnav">

                        <li >
                            <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php">
                                <i class="icon-home"></i>
                                <span>Home</span>
                            </a>	    				
                        </li>

                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="icon-book"></i>
                                <span>Inventory/Stocks</span>
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="<?php echo Yii::app()->createUrl('vehicles/admin'); ?>">Vehicle Inventory</a></li>
                                <li><a href="<?php echo Yii::app()->createUrl('vehicleAccesories/admin'); ?>">Spare-Parts Inventory</a></li>
                            </ul> 
                        </li>

                        <li >					
                            <a href="<?php echo Yii::app()->createUrl('customers/admin'); ?>" class="dropdown-toggle">
                                <i class="icon-user"></i>
                                <span>Customer Management</span>
                            </a>	  				
                        </li>

                        <li>
                            <a href="./reports.html">
                                <i class="icon-bar-chart"></i>
                                <span>Reports</span>
                            </a>    				
                        </li>

                        <li>					
                            <a href="./guidely.html">
                                <i class="icon-shopping-cart"></i>
                                <span>Sales</span>
                            </a>  									
                        </li>


                    </ul>

                </div> <!-- /container -->

            </div> <!-- /subnavbar-inner -->

        </div> <!-- /subnavbar -->

        <div class="container" >
            <?php echo $content; ?>
        </div><!-- page -->
        <div class="footer">

            <div class="footer-inner">

                <div class="container">

                    <div class="row">

                        <div class="span12">
                            &copy; 2014 <a href="#">Sparta</a>.
                        </div> <!-- /span12 -->

                    </div> <!-- /row -->

                </div> <!-- /container -->

            </div> <!-- /footer-inner -->

        </div> <!-- /footer -->
    </body>
</html>

