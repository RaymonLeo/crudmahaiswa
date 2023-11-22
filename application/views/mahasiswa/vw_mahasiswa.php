<main>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url()?>index.php/Mahasiswa/tambah" class="btn btn-primary mb-2">Tambah Mahasiswa</a>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <?= $this->session->flashdata('message');?>
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%">No</th>
                        <th scope="col" style="width: 20%">Nama</th>
                        <th scope="col" style="width: 15%">NIM</th>
                        <th scope="col" style="width: 25%">Email</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['nim']; ?></td>
                            <td><?= $us['email']; ?></td>
                            <td>
                                <a href="<?= base_url('index.php/Mahasiswa/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('index.php/Mahasiswa/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>
                                <a href="<?= base_url('index.php/Mahasiswa/detail/') . $us['id']; ?>" class="btn btn-info">Detail</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

