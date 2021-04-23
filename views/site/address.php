<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
?>


<div class="card mt-5">
    <div class="card-header bg-warning">
        <h1>Address</h1>
    </div>
    <div class="card-body">
        <?php

        $form = ActiveForm::begin(['id' => 'address-create']);
        echo $form->field($addressForm, 'name');
        echo $form->field($userJoinForm, 'email')->input('email');
        echo $form->field($userJoinForm, 'password')->passwordInput();
        echo $form->field($userJoinForm, 'password2')->passwordInput();
        echo Html::submitButton('Create', ['class'=> 'btn btn-warning']);
        ActiveForm::end();
        ?>
    </div>
</div>