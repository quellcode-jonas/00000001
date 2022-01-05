<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
<div class="password-reset">
    <p>Usuario: <b style="color: red;"><?= Html::encode($user->email) ?></b></p>

    <p>Por favor, haga clic en el siguiente enlace para restablecer su contraseña:</p>

    <p><h1 style="color: blue;"><?= Html::a('Restablecer contraseña', $resetLink) ?></h1></p>
</div>
