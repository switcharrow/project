<table class="table" border="1">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIM</th>
      <th scope="col">Nama</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Angkatan</th>
      <th scope="col">Prodi</th>
      <th scope="col">Jenis Mahasiswa</th>
      <th scope="col">Aksi</th>

    </tr>
  </thead>
  <tbody>
    <?php $i = 1; ?>
    <?php foreach ($datamhs as $mhs) : ?>
        <tr>
            <td><?= $i++ ?></td>
            <td><?= $mhs->nim ?></td>
            <td><?= $mhs->nama ?></td>
            <td><?= $mhs->tgl_lahir ?></td>
            <td><?= $mhs->angkatan ?></td>
            <td><?= $mhs->nama_prodi ?></td>
            <td><?= $mhs->type_mhs ?></td>
            <td><a href="edit" class="btn btn-primary">Edit</a> <a href="delete" class="btn btn-succes">Hapus</a></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<button><a href="tambah">Tambah</a></button>
