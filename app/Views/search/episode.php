<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<div class=" d-flex justify-content-between bg">
    <div class=" d-flex flex-row">
        <div class="p-3 bd-highlight cover">
            <img src="/img/arts.png" alt="">
        </div>
        <div class="p-3 bd-highlight">
            <h4>PODCAST</h4>
            <h1>JUDUL PODCAST</h1>
            <h3>Owner</h3>
        </div>
    </div>
</div>
<div class=" d-flex justify-content-between bg2">
    <div class=" d-flex flex-row ">
        <div class="p-3 bd-highlight">
            <h3> All Episode </h3>
        </div>
    </div>
</div>
<div class="list-group episode">
    <a href="#" class="list-group-item list-group-item-action">a</a>
</div>

<?= $this->endSection(); ?>