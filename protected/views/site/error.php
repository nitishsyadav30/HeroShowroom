<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error',
);
?>
<div class="container">

    <div class="row">

        <div class="span12">

            <div class="error-container">
                <h1>Oops!</h1>
                <h2>Error <?php echo $code; ?></h2>

                <div class="error-details">
                    <?php echo CHtml::encode($message); ?>
                </div><!--Error Details-->
                <div class="error-actions">
					<a href="<?php echo Yii::app()->createUrl('site/index');?>" class="btn btn-large btn-primary">
						<i class="icon-chevron-left"></i>
						&nbsp;
						Back to Home						
					</a>
					
					<a href="#" class="btn btn-large">
						<i class="icon-envelope"></i>
						&nbsp;
						Contact Support						
					</a>
					
				</div> <!-- /error-actions -->
            </div>
        </div>
    </div>
</div>