<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap4\ActiveForm */
/* @var $model \frontend\models\ResetPasswordForm */

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;

$this->title = 'Modificar contraseña';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-reset-password">
    <h1><?= Html::encode($this->title) ?></h1>

    <p style="font-size: 12px;">Ingrese su nueva contraseña:</p>

    <div class="row">
        <div class="col-lg-12">
            <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>

                <?= $form->field($model, 'password', ['labelOptions' => ['style' => 'color:blue; font-size: 12px;']])->passwordInput(['autofocus' => true, 'id' => 'signupform-password', 'placeholder' => 'Contraseña'])->label('Contraseña <input type="checkbox" id="show-password">') ?>

                <div class="form-group">
                    <?= Html::submitButton('Modificar contraseña', ['class' => 'btn btn-primary btn-lg', 'style' => 'width: 100%;', 'name' => 'signup-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
