<?= $this->extend('layout/template'); ?>
<?= $this->section('js'); ?>
<script src="/js/main.js"></script>
<?= $this->endSection('js'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid bg">
    <div class=" d-flex justify-content-between">
        <div class=" d-flex flex-row ">
            <div class="d-flex col align-items-center ">
                <div class="d-flex p-3 bd-highlight cover justify-content-center">
                    <img src="<?= $data_search->images[0]->url; ?>" alt="">
                </div>
            </div>
            <div class="col">
                <h1><?= $data_search->name; ?></h1>
                <h3><?= $data_search->publisher; ?></h3>
                <h5> <?= $data_search->description; ?> </h5>
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
                <div class="container-fluid ">
                    <div class="d-flex flex-row">
                        <div class="d-inline-flex flex-column me-3"><img src="<?= $episodes->images[1]->url; ?>" alt=""></div>
                        <div class=" d-flex align-items-center col ">
                            <div class="name"><?= $episodes->name; ?></div>
                        </div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class=" d-flex flex-column deskripsi my-2">"<?= $episodes->description; ?>"</div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class=" d-flex flex-column">
                            <?= date("F d", strtotime($episodes->release_date)); ?> . <?php
                                                                                        $min = ceil($episodes->duration_ms / 60000);
                                                                                        echo $min; ?> min
                        </div>
                    </div>
                </div>
            </a>
        </div>
    <?php endforeach; ?>
    <div id="tambah" class="mt-2">
        <button type="button " class="btn btn-secondary" onclick="load_click()">Show More</button>
    </div>
    <br>
    <?= $this->endSection(); ?>
</div>