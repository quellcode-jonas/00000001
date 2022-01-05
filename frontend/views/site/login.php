<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Iniciar sesión';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login">
    <h1><?= Html::encode($this->title) ?></h1>

    <p style="font-size: 12px;">Complete los siguientes campos para iniciar sesión:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'email', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['autofocus' => true, 'maxlength' => true, 'placeholder' => 'a@a.com'])->label('Dirección de correo electrónico') ?>

                <?= $form->field($model, 'password', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->passwordInput(['id' => 'signupform-password', 'placeholder' => 'Contraseña'])->label('Contraseña <input type="checkbox" id="show-password">') ?>

                <?= $form->field($model, 'rememberMe')->checkbox()->label('Recordar') ?>

                <div style="color:#999;margin:1em 0">
                    <p style="font-size: 12px;">Si olvidó su contraseña puede <?= Html::a('restablecerla', ['site/request-password-reset']) ?>.
                    <br>
                    ¿Necesita un nuevo correo electrónico de verificación? <?= Html::a('Reenviar', ['site/resend-verification-email']) ?></p>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Iniciar sesión', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
