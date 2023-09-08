<div class="container mt-5">
    <div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title"><?= $data['blog']['nama']; ?></h5>
        <h6 class=" card-subtitle mb-2 text-muted"><?= $data['blog']['jenis_kelamin'];?></h6>
        <p class="card-text"><?= $data['blog']['alamat']; ?></p>
        <a href=" <?= BASE_URL; ?>/blog" class="card-link">Kembali</a>
    </div>
</div>
</div>
<div class="cuter"></div>
<style>
    .cuter{
        padding-bottom: 8%;
    }
</style>