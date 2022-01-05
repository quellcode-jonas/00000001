<?php

/* @var $this yii\web\View */
/* @var $user common\models\User */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['site/reset-password', 'token' => $user->password_reset_token]);
?>
Usuario: <?= $user->email ?>,

Por favor, haga clic en el siguiente enlace para restablecer su contraseña:

<?= $resetLink ?>
