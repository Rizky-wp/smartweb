<?= $this->extend('layout/template'); ?>
<?= $this->section('js'); ?>
<script src="/js/main.js"></script>
<?= $this->endSection('js'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid bg">
    <div class=" d-flex justify-content-between">
        <div class=" d-flex flex-row">
            <div class="p-3 bd-highlight cover">
                <img src="<?= $data_search->images[0]->url; ?>" alt="">
            </div>
            <div class="p-3 bd-highlight">
                <h1><?= $data_search->name; ?></h1>
                <h3><?= $data_search->publisher; ?></h3>
            </div>
            <div class="p-3 bd-highlight">
                <h4> <?= $data_search->description; ?> </h4>
            </div>
        </div>
    </div>
    <div class="p-3 bd-highlight">
        <h2>All Episodes </h2>
    </div>
    <input type="hidden" id="id_pod" value="<?= $data_search->id; ?>"></input>
    <input type="hidden" id="page" value="<?= $page; ?>"></input>
    <?php foreach ($data_episode->items as $episodes) : ?>
        <div class="list-group episode">
            <a href="<?= base_url('search/episode/' . $episodes->id); ?>" class="list-group-item list-group-item-action">
                <img src="<?= $episodes->images[1]->url; ?>" alt=""><?= $episodes->name; ?></a>
        </div>
    <?php endforeach; ?>
    <div id="tambah" class="my-4">
        <button type="button " class="btn btn-secondary" onclick="load_click()">Show More</button>
    </div>
    <?= $this->endSection(); ?>
</div>