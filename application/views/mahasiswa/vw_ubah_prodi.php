<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Prodi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $prodi['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" class="form-control" value="<?= $prodi['nama']; ?>" id="nama" name="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" class="form-control" value="<?= $prodi['ruangan']; ?>" id="ruangan" name="ruangan" placeholder="ruangan">
                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" value="<?= $prodi['jurusan']; ?>" id="jurusan" class="form-control">
                                <option value="">Jurusan</option>
                                <option value="JTI">JTI</option>
                                <option value="JSI">JSI</option>
                                <option value="JTIN">JTIN</option>
                                <option value="AKTP">AKTP</option>
                            </select>
                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="akreditas">Akreditas</label>
                            <input type="text" class="form-control" value="<?= $prodi['akreditas']; ?>" id="akreditas" name="akreditas" placeholder="Akreditas">
                            <?= form_error('akreditas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" class="form-control" id="nama_kaprodi" value="<?= $prodi['nama_kaprodi']; ?>" name="nama_kaprodi" placeholder="Nama_kaprodi">
                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" class="form-control" id="tahun_berdiri" value="<?= $prodi['tahun_berdiri']; ?>" name="tahun_berdiri" placeholder="tahun_berdiri">
                            <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-group">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" class="form-control" value="<?= $prodi['output_lulusan']; ?>" id="output_lulusan" name="output_lulusan" placeholder="output_lulusan">
                            <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                        <img src="<?= base_url('assets/img/prodi/') . $prodi['gambar'] ?>" style="width : 100px;" class="img-thumbnail">
                            <div class="custol-file">
                                <input type="file" class="form-control" value="<?= $prodi['gambar']; ?>" id="gambar" name="gambar" placeholder="gambar">
                                <label for="gambar" class="custome-file-label"></label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>