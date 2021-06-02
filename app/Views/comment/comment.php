<?= $this->extend('layout/template'); ?>
<?= $this->section('js'); ?>
<script src="/js/komen.js"></script>
<?= $this->endSection('js'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid mt-5">
    <img src="<?= $data_episode->images[0]->url; ?>" class="rounded mx-auto d-block player-cover" alt="...">
    <iframe src="https://open.spotify.com/embed/episode/<?= $data_episode->id; ?>" width="100%" height="200" frameborder="0" allowtransparency="true" allow="encrypted-media" class="player"></iframe>
</div>
<div class="container-fluid comment">
    <div class="row">
        <div class="col">
            <input type="hidden" id="id_pod" value="<?= $data_episode->show->id; ?>">
            <input type="hidden" id="id_episode" value="<?= $data_episode->id; ?>">
            <input type="hidden" id="id_user" value="<?= $me->id; ?>">
            <input type="comment" class="form-control mt-2  " id="comment">
        </div>
    </div>
    <button type="submit" class="btn btn-primary btncomment mt-2" onclick="load_click()">Submit</button>
    <div class=" card-comment mt-3">
        <div class="card-header">
            Nickname
        </div>
        <div class="card-body">
            <h4>ISI COMMENT</h4>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>