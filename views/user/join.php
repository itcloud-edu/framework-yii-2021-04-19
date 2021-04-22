<?php

use yii\bootstrap4\Html;
use yii\widgets\ActiveForm;
?>


<div class="card mt-5">
    <div class="card-header bg-warning">
        <h1>Join us</h1>
    </div>
    <div class="card-body">
<?php



$form = ActiveForm::begin(['id' => 'user-join']);
    echo $form->field($userJoinForm, 'name');
    echo $form->field($userJoinForm, 'email');
    echo $form->field($userJoinForm, 'password')->passwordInput();
    echo $form->field($userJoinForm, 'password2')->passwordInput();
    echo Html::submitButton('Create', ['class'=> 'btn btn-warning']);
    ActiveForm::end();
?>
    </div>
</div>