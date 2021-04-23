<?php
use yii\bootstrap4\Html;
?>


<div class="card mt-5">
    <div class="card-header">
        <h1>Place</h1>
    </div>
    <div class="card-body">
        <p><?= $place['name'] ?></p>
        <p><?= $place['organization'] ?></p>
        <p><?= $place['supervisor'] ?></p>
        <p><?= $address['name'] ?></p>
    </div>
</div>