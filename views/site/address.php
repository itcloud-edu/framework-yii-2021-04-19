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
            <p><?= $address['name'] ?></p>

        <?php endforeach; ?>



        <?php
        $form = ActiveForm::begin(['id' => 'address-create']);
        echo $form->field($addressForm, 'name');
        echo Html::submitButton('Create', ['class'=> 'btn btn-primary']);
        ActiveForm::end();
        ?>
    </div>
</div>