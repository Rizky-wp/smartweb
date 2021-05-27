<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class=" d-flex justify-content-between bg">
    <div class=" d-flex flex-row">
        <div class="p-3 bd-highlight cover">
            <img src="<?= $data_search->images[0]->url; ?>" alt="">
        </div>
        <div class="p-3 bd-highlight">
            <h4>PODCAST</h4>
            <h1><?= $data_search->name; ?></h1>
            <h3><?= $data_search->publisher; ?></h3>
        </div>
    </div>
</div>
<div class=" d-flex justify-content-between bg2">

    <div class=" d-flex flex-row ">
        <div class="p-3 bd-highlight">
            <h3>All Episodes </h3>
        </div>
    </div>

</div>
<?php foreach ($data_search->episodes->items as $episodes) : ?>
    <div class="list-group episode">
        <a href="#" class="list-group-item list-group-item-action"><?= $episodes->name; ?></a>
    </div>
<?php endforeach; ?>
<?= $this->endSection(); ?>