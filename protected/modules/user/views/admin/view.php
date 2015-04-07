<?php
$this->breadcrumbs = array(
    UserModule::t('Users') => array('admin'),
    $model->username,
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
                            <h3><?php echo UserModule::t('View User') . ' "' . $model->username . '"'; ?></h3>

                        </div> <!-- /widget-header -->

                        <div class="widget-content">
                            <?php
                            $attributes = array(
                                'id',
                                'username',
                            );

                            $profileFields = ProfileField::model()->forOwner()->sort()->findAll();
                            if ($profileFields) {
                                foreach ($profileFields as $field) {
                                    array_push($attributes, array(
                                        'label' => UserModule::t($field->title),
                                        'name' => $field->varname,
                                        'type' => 'raw',
                                        'value' => (($field->widgetView($model->profile)) ? $field->widgetView($model->profile) : (($field->range) ? Profile::range($field->range, $model->profile->getAttribute($field->varname)) : $model->profile->getAttribute($field->varname))),
                                    ));
                                }
                            }

                            array_push($attributes, 'password', 'email', 'activkey', 'create_at', 'lastvisit_at', array(
                                'name' => 'superuser',
                                'value' => User::itemAlias("AdminStatus", $model->superuser),
                                    ), array(
                                'name' => 'status',
                                'value' => User::itemAlias("UserStatus", $model->status),
                                    )
                            );

                            $this->widget('zii.widgets.CDetailView', array(
                                'data' => $model,
                                'attributes' => $attributes,
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
                                <a href="<?php echo Yii::app()->createUrl('user/admin/create'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-plus"></i>
                                    <span class="shortcut-label">Add User</span>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('user/admin/update/id/' . Yii::app()->user->id); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-edit"></i>
                                    <span class="shortcut-label">Update User</span>
                                </a>
                                <a href="<?php echo Yii::app()->createUrl('user/admin'); ?>" class="shortcut">
                                    <i class="shortcut-icon icon-cogs"></i>
                                    <span class="shortcut-label">Manage Users</span>
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
