<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Pendaftaran Mahasiswa
                </div>
                <div class="card-body">
                    <form action="<?= base_url('index.php/Pendaftaran/tambah'); ?>" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" value="<?= set_value('nama') ?>" class="form-control" id="nama" name="nama" placeholder="nama">
                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nisn">NISN</label>
                            <input type="text" value="<?= set_value('nisn') ?>" class="form-control" id="nisn" name="nisn" placeholder="nisn">
                            <?= form_error('nisn', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="nik">NIK</label>
                            <input type="text" value="<?= set_value('nik') ?>" class="form-control" id="nik" name="nik" placeholder="nik">
                            <?= form_error('nik', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor Hp</label>
                            <input type="text" value="<?= set_value('no_hp') ?>" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_wa">Nomor WA</label>
                            <input type="text" value="<?= set_value('no_wa') ?>" class="form-control" id="no_wa" name="no_wa" placeholder="no_wa">
                            <?= form_error('no_wa', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tempat_lahir">Tempat Lahir</label>
                            <input type="text" value="<?= set_value('tempat_lahir') ?>" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="tempat_lahir">
                            <?= form_error('tempat_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="text" value="<?= set_value('tgl_lahir') ?>" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="tgl_lahir">
                            <?= form_error('tgl_lahir', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jk">Jenis Kelamin</label>
                            <select name="jk" value="<?= set_value('jk') ?>" id="jk" class="form-control">
                                <option value="">Jenis Kelamin</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                            <?= form_error('jk', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kabting">Kabupaten Tinggal</label>
                            <input type="text" value="<?= set_value('kabting') ?>" class="form-control" id="kabting" name="kabting" placeholder="kabting">
                            <?= form_error('kabting', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kecating">Kecamatan Tinggal</label>
                            <input type="text" value="<?= set_value('kecating') ?>" class="form-control" id="kecating" name="kecating" placeholder="kecating">
                            <?= form_error('kecating', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kabuseko">Kabupaten Sekolah</label>
                            <input type="text" value="<?= set_value('kabuseko') ?>" class="form-control" id="kabuseko" name="kabuseko" placeholder="kabuseko">
                            <?= form_error('kabuseko', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="sekolah_asal">Asal Sekolah</label>
                            <input type="text" value="<?= set_value('sekolah_asal') ?>" class="form-control" id="sekolah_asal" name="sekolah_asal" placeholder="sekolah_asal">
                            <?= form_error('sekolah_asal', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="jurusan">Jurusan</label>
                            <input type="text" value="<?= set_value('jurusan') ?>" class="form-control" id="jurusan" name="jurusan" placeholder="jurusan">
                            <?= form_error('jurusan', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun_lulus">tahun_lulus</label>
                            <input type="text" value="<?= set_value('tahun_lulus') ?>" class="form-control" id="tahun_lulus" name="tahun_lulus" placeholder="tahun_lulus">
                            <?= form_error('tahun_lulus', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('Pendaftaran') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pemain</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>