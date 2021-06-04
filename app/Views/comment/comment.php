<?= $this->extend('layout/template'); ?>
<?= $this->section('js'); ?>
<script src="/js/komen.js"></script>
<?= $this->endSection('js'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid mt-5">
    <img src="<?= $data_episode->images[0]->url; ?>" class="rounded mx-auto d-block player-cover" alt="...">
    <iframe src="https://open.spotify.com/embed/episode/<?= $data_episode->id; ?>" width="100%" height="200" frameborder="0" allowtransparency="true" allow="encrypted-media" class="player"></iframe>
</div>
<span class="span"></span>
<div class="container-fluid comment mt-0">
    <div class="row">
        <div class="col">
            <input type="hidden" id="id_pod" value="<?= $data_episode->show->id; ?>">
            <input type="hidden" id="id_episode" value="<?= $data_episode->id; ?>">
            <input type="hidden" id="id_user" value="<?= $me->id; ?>">
            <input type="comment" class="form-control input-comment mt-2  " id="comment">
        </div>
    </div>
    <button type="submit" class="btn btn-dark btncomment mt-2" onclick="submit_click()">Submit</button>
    <div id="tambah" class="mt-2">
        <input type="hidden" id="page" value="<?= $page; ?>">
        <button type="button " id="komen" class="btn btn btn-dark" onclick="load_click()">Load Comment</button>
        <br>
        <span></span>
    </div>
</div>

<?= $this->endSection(); ?>