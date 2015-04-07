<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('/user'),
    UserModule::t('Manage'),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});	
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('user-grid', {
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
                <div class="span8">
                    <div class="widget widget-table action-table">

                        <div class="widget-header">
                            <i class="icon-th-list"></i>
                            <h3>Manage Users</h3>
                            <button type="button" class="btn" data-toggle="modal" data-target="#myModal">
                                Advanced Search
                            </button>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <?php
                            $this->widget('zii.widgets.grid.CGridView', array(
                                'id' => 'user-grid',
                                'dataProvider' => $model->search(),
                                'filter' => $model,
                                'columns' => array(
                                    array(
                                        'name' => 'id',
                                        'type' => 'raw',
                                        'value' => 'CHtml::link(CHtml::encode($data->id),array("admin/update","id"=>$data->id))',
                                    ),
                                    array(
                                        'name' => 'username',
                                        'type' => 'raw',
                                        'value' => 'CHtml::link(UHtml::markSearch($data,"username"),array("admin/view","id"=>$data->id))',
                                    ),
                                    array(
                                        'name' => 'email',
                                        'type' => 'raw',
                                        'value' => 'CHtml::link(UHtml::markSearch($data,"email"), "mailto:".$data->email)',
                                    ),
                                    'create_at',
                                    'lastvisit_at',
                                    array(
                                        'name' => 'superuser',
                                        'value' => 'User::itemAlias("AdminStatus",$data->superuser)',
                                        'filter' => User::itemAlias("AdminStatus"),
                                    ),
                                    array(
                                        'name' => 'status',
                                        'value' => 'User::itemAlias("UserStatus",$data->status)',
                                        'filter' => User::itemAlias("UserStatus"),
                                    ),
                                    array(
                                        'class' => 'CButtonColumn',
                                    ),
                                ),
                            ));
                            ?>

                        </div>
                    </div>
                </div>  <!--Span 7-->
                <div class="span4">


                    <div class="widget widget-box">

                        <div class="widget-header" >
                            <i class="icon-bookmark"></i>
                            <h3 >Quick Shortcuts</h3>
                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <div class="shortcuts">
                                <a href="<?php echo Yii::app()->createUrl('user/admin/create'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-plus"></i>
                                    <span class="shortcut-label">Add User</span>
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