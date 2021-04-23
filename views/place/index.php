<div class="card mt-5">
    <div class="card-header">
        <h1>Place</h1>
    </div>
    <div class="card-body">
        <? use yii\bootstrap4\Html;

        foreach ($placeList as $place):?>

        <p><?= $place['name'] ?><?=Html::a('info','/place/info?id=' . $place['id'], ['class'=>'btn btn-secondary'])?>
        </p>
        <p><?= $place['addressData'][0]['name'] ?></p>
            <?=Html::a('edit','/site/address?action=update&id=' . $place['addressData'][0]['id'], ['class'=>'btn btn-primary'])?>

            <hr>
        <? endforeach;?>
    </div>
</div>