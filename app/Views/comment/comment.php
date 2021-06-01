<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid mt-5">
    <img src="<?= $data_episode->images[0]->url; ?>" class="rounded mx-auto d-block player-cover" alt="...">
    <iframe src="https://open.spotify.com/embed/episode/<?= $data_episode->id; ?>" width="100%" height="200" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe>
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