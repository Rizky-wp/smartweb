<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-5  kartu">
    <div class="row row-cols-1 row-cols-xs-2 row-cols-md-4 row-cols-sm-3 row-cols-lg-5 justify-content-center mx-1">
        <div class="col mb-5">
            <?php foreach ($data_pod as $podcast) : ?>
                <a href=<?= base_url('podcast/' . $podcast["id_pod"]); ?>>
                    <div class="card h-100">
                        <img src="<?= $podcast["url"]; ?>" class="card-img-top" alt="...">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <p class="card-text" style="text-align: center; color:white;"><?= $podcast["name_podcast"]; ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>