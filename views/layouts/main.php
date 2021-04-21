<?php
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;
use yii\bootstrap4\Button;



?>
<?php $this->beginPage() ?>
<html>

<head>
<?php $this->head() ?>
</head>
<body>
<?php $this-> beginBody() ?>


<?php
NavBar::begin([
        'brandLabel' => 'Event Manager Project',
        'options' => ['class'=>'navbar navbar-expand-lg navbar-dark bg-dark']
]);
echo Nav::widget([
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Login', 'url' => ['/user/login']],
        ['label' => 'Join', 'url' => ['/user/join'] ]
    ],
    'options' => ['class' => 'navbar-nav ml-auto'],
]);
echo Button::widget([
    'label' => 'Action',
    'options' => ['class' => 'btn btn-primary'],
]);
NavBar::end();
?>

<div class="container">
    <?= $content ?>
</div>

<?php $this -> endBody() ?>
</body>
</html>

<?php $this -> endPage() ?>
