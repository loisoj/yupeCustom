<?php
/**
 * @var CActiveForm $form
 */
$this->title = Yii::t('UserModule.user', 'Sign in');
$this->breadcrumbs = [Yii::t('UserModule.user', 'Sign in')];
?>

<div class="main__title grid">
    <h4 class="h2"><?= Yii::t('UserModule.user', 'Sign in') ?></h4>
</div>
<div class="main__cart-box grid">
    <div class="grid-module-6">
        <?php $this->widget('yupe\widgets\YFlashMessages'); ?>

        <?php $form = $this->beginWidget('CActiveForm', [
            'id' => 'login-form',
            'enableClientValidation' => true
        ]); ?>

        <?= $form->errorSummary($model); ?>

        <div class="row">
    <div class="input-field col s12">

            <?= $form->textField($model, 'email', ['class' => 'input input_big']); ?>
            <?= $form->error($model, 'email') ?>
            <label class="active" for="email"> <?= $form->labelEx($model, 'email'); ?></label>
      </div>
    </div>

    <div class="row">
<div class="input-field col s12">

            <?= $form->passwordField($model, 'password', ['class' => 'input input_big']); ?>
            <?= $form->error($model, 'password') ?>
            <label class="active" for="email"> <?= $form->labelEx($model, 'password'); ?></label>
      </div>
    </div>

        <?php if ($this->getModule()->sessionLifeTime > 0): { ?>
            <div class="fast-order__inputs">
              <form action="#">
                 <p>
                   <label>
                         <?= $form->checkBox($model, 'remember_me', ['checked' => true]); ?>
                     <span><?= $form->labelEx($model, 'remember_me'); ?></span>
                   </label>
                 </p>




            </div>
        <?php } endif; ?>

        <?php if (Yii::app()->getUser()->getState('badLoginCount', 0) >= 3 && CCaptcha::checkRequirements('gd')): { ?>
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


        <div class="fast-order__inputs">
          <div class="fast-order__inputs row">
                <button class="btn waves-effect waves-light col s6" type="submit" name="action">Войти
                <?= CHtml::submitButton(Yii::t('UserModule.user', ''), [
                    'id' => 'login-btn',
                    'class' => 'material-icons right'
                ]) ?>
                </button>

            <div class="column grid-module-3 pull-right col s6">
                <?= CHtml::link(Yii::t('UserModule.user', 'Sign up'), Yii::app()->createUrl('/user/account/registration'), [
                    'class' => 'waves-effect waves-light btn'
                ]) ?>
            </div>
            </div>
        </div>
        <div class="fast-order__inputs">
            <div class="grid-module-3">
                <?= CHtml::link(Yii::t('UserModule.user', 'Forgot your password?'), ['/user/account/recovery'], ['class' => 'dropdown-menu__link']) ?>
            </div>
        </div>

        <?php if (Yii::app()->hasModule('social')): { ?>
            <div class="fast-order__inputs">
                <?php
                $this->widget(
                    'vendor.nodge.yii-eauth.EAuthWidget',
                    [
                        'action' => '/social/login',
                        'predefinedServices' => ['google', 'facebook', 'vkontakte', 'twitter', 'github'],
                    ]
                );
                ?>
            </div>
        <?php } endif; ?>

        <?php $this->endWidget(); ?>
    </div>
</div>
