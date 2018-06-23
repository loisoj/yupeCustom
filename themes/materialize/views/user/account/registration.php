<?php
/**
 * @var CActiveForm $form
 */
$this->title = Yii::t('UserModule.user', 'Sign up');
$this->breadcrumbs = [Yii::t('UserModule.user', 'Sign up')];
?>

<div class="main__title grid">
    <h4 class="h2"><?= Yii::t('UserModule.user', 'Sign up') ?></h4>
</div>
<div class="main__cart-box grid">
    <div class="grid-module-6">
        <?php $form = $this->beginWidget('CActiveForm', [
            'id' => 'registration-form',
            'enableClientValidation' => true
        ]); ?>

        <?= $form->errorSummary($model); ?>

        <!-- <div class="fast-order__inputs"> -->
          <div class="row">
  <div class="input-field col s6">
            <?= $form->textField($model, 'nick_name', ['class' => 'input input_big']); ?>
            <?= $form->error($model, 'nick_name') ?>
            <label class="active" for="nick_name"><?= $form->labelEx($model, 'nick_name'); ?></label>
      </div>
    </div>
    <div class="row">
<div class="input-field col s6">
            <?= $form->textField($model, 'email', ['class' => 'input input_big']); ?>
            <?= $form->error($model, 'email') ?>
            <label class="active" for="email"><?= $form->labelEx($model, 'email'); ?></label>
      </div>
    </div>
    <div class="row">
<div class="input-field col s6">

            <?= $form->passwordField($model, 'password', ['class' => 'input input_big']); ?>
            <?= $form->error($model, 'password') ?>
            <label class="active" for="email"><?= $form->labelEx($model, 'password'); ?></label>
      </div>
    </div>
    <div class="row">
<div class="input-field col s6">
            <?= $form->passwordField($model, 'cPassword', ['class' => 'input input_big']); ?>
            <?= $form->error($model, 'cPassword') ?>
            <label class="active" for="email"><?= $form->labelEx($model, 'cPassword'); ?></label>
      </div>
      </div>

        <?php if ($module->showCaptcha && CCaptcha::checkRequirements()): { ?>
            <div class="fast-order__inputs">
                <div class="column grid-module-3">
                    <?= $form->textField($model, 'verifyCode', [
                        'class' => 'input input_big',
                        'placeholder' => Yii::t('UserModule.user', 'Please enter the text from the image')
                    ]); ?>
                </div>
                <div class="column grid-module-3 pull-right">
                    <?php $this->widget(
                        'CCaptcha',
                        [
                            'showRefreshButton' => true,
                            'imageOptions' => [
                                'width' => '150',
                            ],
                            'buttonOptions' => [
                                'class' => 'btn btn_big btn_white pull-right',
                            ],
                            'buttonLabel' => '<i class="fa fa-fw fa-repeat"></i>',
                        ]
                    ); ?>
                </div>
            </div>
        <?php } endif; ?>

        <div class="fast-order__inputs row">
              <button class="btn waves-effect waves-light" type="submit" name="action"> Регистрация
                <?= CHtml::submitButton(Yii::t('UserModule.user', ''), [
                    'class' => 'material-icons right'
                ]) ?>
              </button>
        </div>

        <?php if (Yii::app()->hasModule('social')): { ?>
            <div class="fast-order__inputs">
                <?php
                $this->widget('vendor.nodge.yii-eauth.EAuthWidget', [
                    'action' => '/social/login',
                    'predefinedServices' => ['google', 'facebook', 'vkontakte', 'twitter', 'github'],
                ]); ?>
            </div>
        <?php } endif; ?>

        <?php $this->endWidget(); ?>
        <!-- form -->
    </div>
</div>
