<div class="card mt-5">
    <div class="card-header">
        <h1>Place</h1>
    </div>
    <div class="card-body">
        <? foreach ($placeList as $place):?>

        <p><?= $place['name'] ?></p>
        <p><?= $place['addressData'][0]['name'] ?></p>
            <hr>
        <? endforeach;?>
    </div>
</div>