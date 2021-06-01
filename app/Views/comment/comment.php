<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-5">
    <img src="/img/arts.png" class="rounded mx-auto d-block player-cover" alt="...">
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col">
            <img src="/img/arts.png" alt="">
        </div>
    </div>
    <div class="row">
        <div class="col">
            <input type="comment" class="form-control mt-2  " id="comment">
        </div>
    </div>
    <button type="submit" class="btn btn-primary mt-2">Submit</button>
</div>


<?= $this->endSection(); ?>