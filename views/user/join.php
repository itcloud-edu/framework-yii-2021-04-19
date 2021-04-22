<?php
use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Button;

?>
<div class="card">
<div class="card-header bg-"><h1>Join us</h1></div>
<div class="card-body">
<?php

$form2 = ActiveForm::begin(['id' => 'user-join',]);
echo $form2->field($userJoinForm, 'name');
echo $form2->field($userJoinForm, 'email')->input('email');
echo $form2->field($userJoinForm, 'password')->passwordInput();
echo $form2->field($userJoinForm, 'password2')->passwordInput();
echo Html::submitButton('Create', ['class' => 'btn btn-lg']);
ActiveForm::end();

?>

</div>
</div>