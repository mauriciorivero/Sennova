<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */
/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Iniciar Sesión';
//$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-login py-5" style="min-height: 700px;">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Por favor, complete los siguientes campos para iniciar sesión:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>

                <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <?= $form->field($model, 'rememberMe')->checkbox() ?>

                <div class="my-1 mx-0" style="color:#999;">
                Si olvidaste tu contraseña, puedes <?= Html::a('restablecerla', ['site/request-password-reset']) ?>.
                    <br>
                    ¿Necesitas un nuevo correo de verificación? <?= Html::a('Reenvíalo', ['site/resend-verification-email']) ?>
                </div>

                <div class="form-group">
                    <?= Html::submitButton('Iniciar Sesión', ['class' => 'btn btn-dark', 'name' => 'login-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>
</div>
