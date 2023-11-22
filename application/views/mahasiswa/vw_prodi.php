<main>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url() ?>index.php/Prodi/tambah" class="btn btn-primary mb-2">Tambah Prodi</a>
            </div>
        </div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 20%;">Nama Prodi</th>
                        <th style="width: 10%;">Ruangan</th>
                        <th style="width: 10%;">Jurusan</th>
                        <th style="width: 5%;">Akreditas</th>
                        <th style="width: 25%;">Nama Kaprodi</th>
                        <th style="width: 10%;">Tahun Berdiri</th>
                        <th style="width: 10%;">Output Lulusan</th>
                        <th style="width: 10%;">Gambar</th>
                        <th style="width: 15%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($prodi as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['ruangan']; ?></td>
                            <td><?= $us['jurusan']; ?></td>
                            <td><?= $us['akreditas']; ?></td>
                            <td><?= $us['nama_kaprodi']; ?></td>
                            <td><?= $us['tahun_berdiri']; ?></td>
                            <td><?= $us['output_lulusan']; ?></td>
                            <td><img src="<?= base_url('assets/img/prodi/') . $us['gambar'] ?>" style="width : 100px;" class="img-thumbnail"></td>
                            <td>
                                <a href="<?= base_url('Prodi/hapus/') . $us['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="<?= base_url('Prodi/edit/') . $us['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
                            </td>
                        </tr>
                        <!-- Tambahkan baris lainnya sesuai dengan data yang Anda miliki -->
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>