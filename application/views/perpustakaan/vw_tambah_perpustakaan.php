<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <form action="<?= base_url('index.php/Perpustakaan/upload');?> " method="POST">
                        <div class="form-group">
                            <label for="nama_buku">Nama Buku</label>
                            <input type="text" class="form-control" id="nama_buku" name="nama_buku" placeholder="nama_buku">
                        </div>
                        <div class="form-group">
                            <label for="genre_buku">Genre Buku</label>
                            <input type="text" class="form-control" id="genre_buku" name="genre_buku" placeholder="genre_buku">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_peminjaman">Tanggal Peminjaman</label>
                            <input type="date" class="form-control" id="tanggal_peminjaman" name="tanggal_peminjaman" placeholder="tanggal_peminjaman">
                        </div>
                        <div class="form-group">
                            <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                            <input type="date" class="form-control" id="tanggal_pengembalian" name="tanggal_pengembalian" placeholder="tanggal_pengembalian">
                        </div>
                        <div class="form-group">
                            <label for="nomor_anggota">Nomor Anggota</label>
                            <input type="text" class="form-control" id="nomor_anggota" name="nomor_anggota" placeholder="nomor_anggota">
                        </div>
                        <div class="form-group">
                            <label for="nama_peminjam">Nama Peminjam</label>
                            <input type="text" class="form-control" id="nama_peminjam" name="nama_peminjam" placeholder="nama_peminjam">
                        </div>
                        <a href="<?= base_url('Perpustakaan')?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Perpustakaan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>