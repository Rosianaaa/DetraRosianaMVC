<body>
  <div class="container mt-3">
    <div class="row">
      <div class="col-6">
        <?php Flasher::flash(); ?>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
          Tambah Data
        </button>
        <h3 class="mt-4">Data Siswa</h3>
        <table class="table table-bordered table-danger" id="myTable">
        <thead>
            <tr style="color:white"class="text-center">
              <td scope="col">Nama</td>
              <td scope="col">Info</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($data['siswa'] as $siswa): ?> 
              <tr >
                <td style="color:black">
                  <?= $siswa['nama']; ?>
                </td>
                <td style="text-align:center;">
                  <a href="<?= BASE_URL; ?>/siswa/detail/<?= $siswa['id']; ?>"class="btn btn-primary"
                    style="border-radius:10px;font-size:13px;padding: 2px 15px;">Detail</a>
                  <a href="<?= BASE_URL; ?>/siswa/hapus/<?= $siswa['id']; ?>"onclick="return confirm('Hapus data')"class="btn btn-danger"
                    style="margin-top:5px;border-radius:10px;font-size:13px;padding: 2px 15px;">Hapus</a>
                  <a  href="<?= BASE_URL; ?>/siswa/getubah/<?= $siswa['id']; ?>"class="btn btn-success"
                    style="margin-top:5px;border-radius:10px;font-size:13px;padding: 2px 15px;">Ubah</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data Siswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASE_URL; ?>/siswa/tambah" method="post">
        <input type="hidden" name="id" id="id">
          <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
          </div>
          <div class="form-group">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
              <option value="laki-laki">Laki - laki</option>
              <option value="perempuan">Perempuan</option>
            </select>
          </div>
          <div class="form-group">
            <label for="alamat">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat">
          </div>
          <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
      <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
      </form>
    </div>
 
  </div>
</div>
</div>