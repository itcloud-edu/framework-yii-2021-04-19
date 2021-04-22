<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
?>


<div class="card mt-5">
    <div class="card-header">
        <h1>Login</h1>
    </div>
    <div class="card-body">
        <?php

        $form = ActiveForm::begin(['id' => 'user-login']);
        echo $form->field($userLoginForm, 'email')->input('email');
        echo $form->field($userLoginForm, 'password')->passwordInput();
        echo Html::submitButton('Login', ['class'=> 'btn btn-primary']);
        ActiveForm::end();
        ?>
    </div>
</div>