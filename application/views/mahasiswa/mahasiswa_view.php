

<main>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo base_url('index.php/Mahasiswa1/create'); ?>" class="btn btn-primary mb-2">Tambah Mahasiswa</a>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Aksi</th>
                </tr>
                <?php if (!empty($Mahasiswa1)) { ?>
                    <?php foreach ($Mahasiswa1 as $key => $m) { ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $m['nama']; ?></td>
                            <td><?php echo $m['nim']; ?></td>
                            <td>
                                <a href="<?php echo base_url('index.php/Mahasiswa1/edit/' . $key); ?>">Edit</a>
                                <a href="<?php echo base_url('index.php/Mahasiswa1/delete/' . $key); ?>">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                <?php } else { ?>
                    <tr>
                        <td colspan="4">Tidak ada data Mahasiswa.</td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>