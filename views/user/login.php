<?php
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Button;
//use yii\widgets\ActiveForm;

?>
<div class="card">
    <div class="card-header bg-"><h1>Login Form</h1></div>
    <div class="card-body">
        <?php

        $form2 = ActiveForm::begin(['id' => 'user-login',]);
        echo $form2->field($userLoginForm, 'email');
        echo $form2->field($userLoginForm, 'password')->passwordInput();
        echo Html::submitButton('Create', ['class' => 'btn btn-lg']);
        ActiveForm::end();

        ?>

    </div>
</div>
