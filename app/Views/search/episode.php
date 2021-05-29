<?= $this->extend('layout/template'); ?>
<?= $this->section('js'); ?>
<script src="/js/main.js"></script>
<?= $this->endSection('js'); ?>
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
<input type="hidden" id="id_pod" value="<?= $data_search->id; ?>"></input>
<input type="hidden" id="page" value="<?= $page; ?>"></input>
<?php foreach ($data_episode->items as $episodes) : ?>
    <div class="list-group episode">
        <a href="#" class="list-group-item list-group-item-action"><?= $episodes->name; ?></a>
    </div>
<?php endforeach; ?>
<div id="tambah" class="">
    <button class="button" id="load_button" onclick="load_click()">load more</button>
</div>
<?= $this->endSection(); ?>