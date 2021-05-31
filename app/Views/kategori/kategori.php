<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<h1 class="mt-5" style="text-align: center; margin-bottom: 15px;font-family: 'Poppins', sans-serif; color: white;">KATEGORI</h1>
<div class="d-flex justify-content-center kartu px-3 mt-5 ">
    <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 row-cols-lg-5 justify-content-around w-100">
        <?php foreach ($kategori as $data_kat) : ?>
            <div class="col mb-5">
                <a href="<?= base_url('dashboard/kategori/' . $data_kat['nama_kategori']); ?>">
                    <div class="card h-100">
                        <img src="<?= $data_kat['gambar']; ?>" class="card-img-top" alt="...">
                        <div class="card-body d-flex justify-content-center align-items-center">
                            <p class="card-text" style="text-align: center;"><?= $data_kat['nama_kategori']; ?></p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>

    </div>
</div>
<?= $this->endSection(); ?>