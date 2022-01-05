<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\PasswordResetRequestForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Restablecer contraseña';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-request-password-reset">
    <h1><?= Html::encode($this->title) ?></h1>

    <p style="font-size: 12px;">Ingrese su dirección de correo electrónico. Recibirá un enlace para restablecer la contraseña.</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'request-password-reset-form']); ?>

                <?= $form->field($model, 'email', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['autofocus' => true, 'maxlength' => true, 'placeholder' => 'a@a.com'])->label('Dirección de correo electrónico') ?>

                <div class="form-group">
                    <?= Html::submitButton('Restablecer contraseña', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
