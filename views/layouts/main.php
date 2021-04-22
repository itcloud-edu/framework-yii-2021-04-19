<?php
use yii\bootstrap4\NavBar;
use yii\bootstrap4\Nav;


?>
<?php $this->beginPage() ?>
<html>

<head>
<?php $this->head() ?>
</head>
<body>
<?php $this-> beginBody() ?>


<?php
if(\Yii::$app->user->isGuest) {
    $menu = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Login', 'url' => ['/user/login']],
        ['label' => 'Join', 'url' => ['/user/join']],
    ];
}else {
    $menu = [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
        ['label' => 'Logout', 'url' => ['/user/logout']],
        ['label' => Yii::$app->user->getIdentity()->name, 'url' => ['/user/login']],
    ];
}
NavBar::begin(['brandLabel' => 'Event Manager Project']);
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
