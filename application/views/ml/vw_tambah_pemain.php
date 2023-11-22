<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Pemain Mobile Legend
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="id_ml">ID Pemain</label>
                            <input type="text" value="<?= set_value('id_ml') ?>" class="form-control" id="id_ml" name="id_ml" placeholder="id_ml">
                            <?= form_error('id_ml', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" value="<?= set_value('username') ?>" class="form-control" id="username" name="username" placeholder="Username">
                            <?= form_error('username', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" value="<?= set_value('email') ?>" class="form-control" id="email" name="email" placeholder="email">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="no_hp">Nomor Hp</label>
                            <input type="text" value="<?= set_value('no_hp') ?>" class="form-control" id="no_hp" name="no_hp" placeholder="no_hp">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <a href="<?= base_url('Ml') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Pemain</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>