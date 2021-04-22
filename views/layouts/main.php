<?php
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;
//use yii;

?>
<?php $this->beginPage() ?>
<html>

<head>
<?php $this->head() ?>
</head>
<body>
<?php $this-> beginBody() ?>


<?php
NavBar::begin(['brandLabel' => 'Event Manager Project']);

if (Yii::$app->user->isGuest){
    $menu = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Login', 'url' => ['/user/login']],
        ['label' => 'Join', 'url' => ['/user/join'], 'options' => ['class'=>'btn btn-primary']],
    ];
} else {
    $menu = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Logout', 'url' => ['/user/logout']],
        ['label' => Yii::$app->user->getIdentity()->name, 'url' => ['/user/info']]
    ];

}

echo Nav::widget([
    'items' => $menu,
    'options' => ['class' => 'navbar-nav ml-auto'],
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
