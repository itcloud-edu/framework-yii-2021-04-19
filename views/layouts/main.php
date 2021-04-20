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
NavBar::begin(['brandLabel' => 'NavBar Test']);
echo Nav::widget([
    'items' => [
        ['label' => 'Home', 'url' => ['/site/index']],
        ['label' => 'About', 'url' => ['/site/about']],
    ],
    'options' => ['class' => 'navbar-nav'],
]);
NavBar::end();
?>


<?= $content ?>

<?php $this -> endBody() ?>
</body>
</html>

<?php $this -> endPage() ?>
