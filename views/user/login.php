
<?php
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Button;

class model extends \yii\base\Model{
    public $name;
    public $email;
}


$form = ActiveForm::begin(['layout' => 'horizontal']);
$model = new Model;

echo $form->field($model, 'name', [
    'inputOptions' => [
        'placeholder' => $model->getAttributeLabel('email'),
    ],
])->label(false);

echo $form->field($model, 'email', [
    'inputOptions' => [
        'placeholder' => $model->getAttributeLabel('password'),
    ],
])->label(false);

echo Button::widget([
    'label' => 'Confirm',
    'options' => ['class' => 'btn-lg'],
]);


