<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Registrarse';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-signup">
    <h1><?= Html::encode($this->title) ?></h1>

    <p style="font-size: 12px;">Complete los siguientes campos para registrarse:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'form-signup']); ?>

                <?= $form->field($model, 'email', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->textInput(['autofocus' => true, 'maxlength' => true, 'placeholder' => 'a@a.com'])->label('Dirección de correo electrónico') ?>

                <?= $form->field($model, 'password', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->passwordInput(['id' => 'signupform-password', 'placeholder' => 'Contraseña'])->label('Contraseña <input type="checkbox" id="show-password">') ?>

                <div class="form-group">
                    <?= Html::submitButton('Registrarse', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
