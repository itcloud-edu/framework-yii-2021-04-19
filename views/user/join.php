<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Button;



?>
<div class="card">
<div class="card-header bg-light"><h1>Join us</h1></div>
<div class="card-body">
<?php
/*
$form  = ActiveForm::begin([
        'id' => 'user=join',
        'layout' => 'horizontal']);
//$user = new UserJoinForm();

echo $form->field($userJoinForm, 'name', [
    'inputOptions' => [
        'placeholder' => $userJoinForm->getAttributeLabel('name'),
    ],
])->label(false);

echo $form->field($userJoinForm, 'email', [
    'inputOptions' => [
        'placeholder' => $userJoinForm->getAttributeLabel('email'),
    ],
])->label(false);

echo $form->field($userJoinForm, 'password', [
    'inputOptions' => [
        'placeholder' => $userJoinForm->getAttributeLabel('password'),
    ],
])->label(false);




//echo Html::submitButton('join') ;

echo Button::widget([
    'label' => 'login',
    'options' => ['class' => 'btn-primary btn-lg'],
]);

ActiveForm::end(); */

$form2 = \yii\widgets\ActiveForm::begin(['id' => 'user=join',]);
echo $form2->field($userJoinForm, 'name');
echo $form2->field($userJoinForm, 'email');
echo $form2->field($userJoinForm, 'password');
echo $form2->field($userJoinForm, 'password2');
echo Html::submitButton('Join', ['class' => 'btn btn-lg']);
\yii\widgets\ActiveForm::end();

?>

</div>
</div>