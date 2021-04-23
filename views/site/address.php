<?php

use yii\bootstrap4\Html;
use yii\bootstrap4\ActiveForm;
?>

<div class="card mt-5">
    <div class="card-header bg-primary text-light">
        <h1>Address</h1>
    </div>
    <div class="card-body">
        <?php foreach ($addressList as $address):?>
            <p>
                <?= $address['name'] ?>
                <?=Html::a('edit','/site/address?action=update&id=' . $address['id'], ['class'=>'btn btn-primary'])?>
                <?=Html::a('delete','/site/address?action=delete&id=' . $address['id'], ['class'=>'btn btn-danger'])?>
            </p>

        <?php endforeach; ?>



        <?php
        $form = ActiveForm::begin(['id' => 'address-create']);
        echo $form->field($addressForm, 'name');
        echo Html::submitButton('Create', ['class'=> 'btn btn-primary']);
        ActiveForm::end();
        ?>
    </div>
</div>
