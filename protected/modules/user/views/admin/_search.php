<div class="widget-content">
    <div class="tabbable">
        <div class="tab-content">
            <div class="tab-pane active" id="profile">

                <?php
                $form = $this->beginWidget('CActiveForm', array(
                    'action' => Yii::app()->createUrl($this->route),
                    'method' => 'get',
                ));
                ?>

                <div class="control-group">
                    <?php echo $form->label($model, 'id'); ?>
                    <?php echo $form->textField($model, 'id'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'username'); ?>
                    <?php echo $form->textField($model, 'username', array('size' => 20, 'maxlength' => 20)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'email'); ?>
                    <?php echo $form->textField($model, 'email', array('size' => 60, 'maxlength' => 128)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'activkey'); ?>
                    <?php echo $form->textField($model, 'activkey', array('size' => 60, 'maxlength' => 128)); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'create_at'); ?>
                    <?php echo $form->textField($model, 'create_at'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'lastvisit_at'); ?>
                    <?php echo $form->textField($model, 'lastvisit_at'); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'superuser'); ?>
                    <?php echo $form->dropDownList($model, 'superuser', $model->itemAlias('AdminStatus')); ?>
                </div>

                <div class="control-group">
                    <?php echo $form->label($model, 'status'); ?>
                    <?php echo $form->dropDownList($model, 'status', $model->itemAlias('UserStatus')); ?>
                </div>

                <div class="control-group">
                    <?php echo CHtml::submitButton(UserModule::t('Search')); ?>
                </div>

                <?php $this->endWidget(); ?>
            </div>
        </div>
    </div>
</div>         