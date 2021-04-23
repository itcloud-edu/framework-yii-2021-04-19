<?php
use \yii\bootstrap4\ActiveForm;
use yii\bootstrap4\Html;
?>

<div class="card card-primary mt-5">
    <div class="card-header">
        <h1>Адрес</h1>
    </div>
    <div class="card-body">
        <?php
        $form = ActiveForm::begin(['id' => 'address-create']);
        echo $form->field($addressForm, 'name');
        echo Html::submitButton('Create', ['class' => 'btn btn-warning']);
        ActiveForm::end();
        ?>
    </div>

</div>
