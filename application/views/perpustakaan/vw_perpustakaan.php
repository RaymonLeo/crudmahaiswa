<main>
    <div class="container-fluid">
        <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
        <div class="row">
            <div class="col-md-6">
                <a href="<?= base_url()?>index.php/perpustakaan/tambah" class="btn btn-primary mb-2">Tambah Buku</a>
            </div>
        </div>
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col" style="width: 5%">No</th>
                        <th scope="col" style="width: 20%">Nama Buku</th>
                        <th scope="col" style="width: 15%">Genre Buku</th>
                        <th scope="col" style="width: 25%">Tanggal Peminjaman</th>
                        <th scope="col" style="width: 25%">Tanggal Pengembalian</th>
                        <th scope="col" style="width: 25%">Nomor Anggota</th>
                        <th scope="col" style="width: 25%">Nama Peminjam</th>
                        <th scope="col" style="width: 25%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($perpustakaan as $us) : ?>
                        <tr>
                            <td><?= $i; ?></td>
                            <td><?= $us['nama_buku']; ?></td>
                            <td><?= $us['genre_buku']; ?></td>
                            <td><?= $us['tanggal_peminjaman']; ?></td>
                            <td><?= $us['tanggal_pengembalian']; ?></td>
                            <td><?= $us['nomor_anggota']; ?></td>
                            <td><?= $us['nama_peminjam']; ?></td>

                            <td>
                                <a href="<?= base_url('index.php/perpustakaan/hapus/') . $us['id']; ?>" class="btn btn-danger">Hapus</a>
                                <a href="<?= base_url('index.php/perpustakaan/edit/') . $us['id']; ?>" class="btn btn-warning">Edit</a>                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
