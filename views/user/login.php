<?php
use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Button;
use yii\bootstrap4\InputWidget;
use yii\bootstrap4\ActiveField;
?>

<?php $this->beginPage() ?>
<html>

<head>
    <?php $this->head() ?>
</head>
<body>
<?php $this-> beginBody() ?>

<h1>Login</h1>

<?php
$form = ActiveForm::begin([
    'layout' => 'horizontal',
    'fieldConfig' => [
        'template' => "{label}\n{beginWrapper}\n{input}\n{hint}\n{error}\n{endWrapper}",
        'horizontalCssClasses' => [
            'label' => 'col-sm-4',
            'offset' => 'offset-sm-4',
            'wrapper' => 'col-sm-8',
            'error' => '',
            'hint' => '',
        ],
    ],
]);

echo Button::widget([
    'label' => 'Login',
    'options' => ['class' => 'btn btn-primary'],
]);

?>

<?php $this -> endBody() ?>
</body>
</html>

<?php $this -> endPage() ?>


