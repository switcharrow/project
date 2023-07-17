<form action="add_data" method="post">
  <div class="mb-3">
    <label for="exampeInputText" class="form-label">NIM</label>
    <input type="text" class="form-control" id="exampeInputText" name="nim">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Nama</label>
    <input type="text" class="form-control" id="exampeInputText" name="nama">
  </div>
  <div class="mb-3">
    <label for="exampleInputDate" class="form-label">Tanggal Lahir</label>
    <input type="date" class="form-control" id="exampeInputDate" name="tgl_lahir">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Angkatan</label>
    <input type="text" class="form-control" id="exampeInputText" name="angkatan">
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Prodi</label>
    <select class="form-select" aria-label="Default select example" name="prodi_id">
        <?php foreach ($prodi as $key) : ?>
            <option value="<?= $key['prodi_id'] ?>"><?= $key['nama_prodi'] ?></option>
        <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label for="exampleInputText" class="form-label">Jenis Mahasiswa</label>
    <select class="form-select" aria-label="Default select example" name="type_id">
        <?php foreach ($typemhs as $key) : ?>
            <option value="<?= $key['type_id'] ?>"><?= $key['type_mhs'] ?></option>
        <?php endforeach; ?>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>