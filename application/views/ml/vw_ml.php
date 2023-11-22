<main>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url() ?>index.php/Ml/tambah" class="btn btn-primary mb-2">Tambah Pemain Mobile Legend</a>
            </div>
        </div>
        <div class="col-md-12">
            <?= $this->session->flashdata('message'); ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 20%;">Id Mobile Legend</th>
                        <th style="width: 10%;">username</th>
                        <th style="width: 10%;">email</th>
                        <th style="width: 5%;">no_hp</th>
                        <th style="width: 5%;">Tanggal Pendaftaran</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($ml as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['id_ml']; ?></td>
                            <td><?= $us['username']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td><?= $us['no_hp']; ?></td>
                            <td><?= $us['tanggal_masuk']; ?></td>
                            <td>
                                <a href="<?= base_url('Ml/hapus/') . $us['id']; ?>" class="btn btn-danger btn-sm">Hapus</a>
                                <a href="<?= base_url('Ml/edit/') . $us['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
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