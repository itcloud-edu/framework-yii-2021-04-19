<?php
use yii\helpers\Html;
use yii\bootstrap4\ActiveForm;

class Model extends \yii\base\Model {
    public $name;
    public $email;
    public $company;
    public $password;
};
?>
    <h1><?= Html::encode('Registration') ?></h1>
<?php
$form  = ActiveForm::begin(['layout' => 'horizontal']);
$user = new Model();

echo $form->field($user, 'name', [
    'inputOptions' => [
        'placeholder' => $user->getAttributeLabel('name'),
    ],
])->label(false);

echo $form->field($user, 'email', [
    'inputOptions' => [
        'placeholder' => $user->getAttributeLabel('email'),
    ],
])->label(false);

echo $form->field($user, 'company', [
    'inputOptions' => [
        'placeholder' => $user->getAttributeLabel('company'),
    ],
])->label(false);


echo $form->field($user, 'password', [
    'inputOptions' => [
        'placeholder' => $user->getAttributeLabel('password'),
    ],
])->label(false);

echo Html::submitButton('join') ;


ActiveForm::end();