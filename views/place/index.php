<?php
use yii\bootstrap4\Html;

?>

<div class="card mt-5">
    <div class="card-header">
        <h1>Place</h1>
    </div>
    <div class="card-body">

            <p><?= $place['name'] ?></p>
            <p><?= $place['addressData'][0]['name'] ?></p>
            <?=Html::a('edit','/site/address?action=update&id=' . $address['id'], ['class'=>'btn btn-primary'])?>
            <hr>
        <? endforeach;?>
    </div>
</div>