<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Prodi
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama Prodi</label>
                            <input type="text" value="<?= set_value('nama') ?>" class="form-control" id="nama" name="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="ruangan">Ruangan</label>
                            <input type="text" value="<?= set_value('ruangan') ?>" class="form-control" id="ruangan" name="ruangan" placeholder="ruangan">
                            <?= form_error('ruangan', '<small class="text-danger pl-3">', '</small>'); ?>

                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <select name="jurusan" value="<?= set_value('jurusan') ?>" id="jurusan" class="form-control">
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
                            <input type="text" value="<?= set_value('akreditas') ?>" class="form-control" id="akreditas" name="akreditas" placeholder="Akreditas">
                            <?= form_error('akreditas', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nama_kaprodi">Nama Kaprodi</label>
                            <input type="text" value="<?= set_value('nama_kaprodi') ?>" class="form-control" id="nama_kaprodi" name="nama_kaprodi" placeholder="Nama_kaprodi">
                            <?= form_error('nama_kaprodi', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun_berdiri">Tahun Berdiri</label>
                            <input type="text" value="<?= set_value('tahun_berdiri') ?>" class="form-control" id="tahun_berdiri" name="tahun_berdiri" placeholder="tahun_berdiri">
                            <?= form_error('tahun_berdiri', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="output_lulusan">Output Lulusan</label>
                            <input type="text" value="<?= set_value('output_lulusan') ?>" class="form-control" id="output_lulusan" name="output_lulusan" placeholder="output_lulusan">
                            <?= form_error('output_lulusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <div class="custom-file">
                                <input type="file" value="<?= set_value('gambar') ?>" class="form-control" id="gambar" name="gambar" placeholder="gambar">
                                <label for="gambar" class="custom-file-label">Choose File</label></label>
                                <?= form_error('gambar', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                        </div>
                        <a href="<?= base_url('Prodi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Prodi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>