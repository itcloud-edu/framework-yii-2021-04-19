<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Button;


class Model extends \yii\base\Model {
    public $name;
    public $email;
    public $password;
};
?>
    <h1><?= Html::encode('login') ?></h1>
<?php
$form  = ActiveForm::begin(['layout' => 'horizontal']);
$user = new Model();

echo $form->field($user, 'name', [
    'inputOptions' => [
        'placeholder' => $user->getAttributeLabel('name'),
    ],
])->label(false);

echo $form->field($user, 'password', [
    'inputOptions' => [
        'placeholder' => $user->getAttributeLabel('password'),
    ],
])->label(false);

//echo Html::submitButton('Login') ;

echo Button::widget([
    'label' => 'login',
    'options' => ['class' => 'btn-primary btn-lg'],
]);

ActiveForm::end();

