<?php  $this->beginPage();?>
<html>
<head>
 <title> Project</title>
 <?php $this->head(); ?>
</head>
</head>

<body>
<?php $this->beginBody();?>
<?php
use yii\bootstrap\NavBar;

NavBar::begin([
        'brandLabel' => 'ProjectYii2',
        'brandUrl'   => yii::$app->homeUrl,

]);
NavBar::end();
?>

<?= $content ?>
<?php $this->endBody(); ?>
</body>
</html>