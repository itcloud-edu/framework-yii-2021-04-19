<?php

use yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
?>


<div class="card mt-5">
    <div class="card-header">
        <h1>Place</h1>
    </div>
    <div class="card-body">
        <?php
        $form = ActiveForm::begin(['id' => 'address-create']);
        echo $form->field($placeForm, 'name');
        echo $form->field($placeForm, 'organization');
        echo $form->field($placeForm, 'supervisor');
        echo $form->field($placeForm, 'id_address')->dropDownList($list);
        echo Html::submitButton('Update', ['class'=> 'btn btn-primary']);
        ActiveForm::end();
        ?>
    </div>
</div>