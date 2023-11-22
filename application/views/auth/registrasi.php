<main class="main-content mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
        <div class="container my-auto"> <!-- Menggunakan class my-auto di sini -->
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 col-lg-5 text-center">
                    <div class="card card-plain" style="background: rgba(255, 255, 255, 0.7); padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);">
                        <div class="card-header">
                            <h4 class="font-weight-bolder">Sign Up</h4>
                            <p class="mb-0">Enter your email and password to register</p>
                        </div>
                        <div class="card-body">
                            <form role="form" method="POST" action="<?= base_url('auth/registrasi'); ?>">
                                <div class="mb-3">
                                    <input type="text" value="<?= set_value('nama'); ?>" class="form-control" placeholder="Name" aria-label="Name" name="nama">
                                    <?= form_error('nama', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="email" <?= set_value('email'); ?> class="form-control" placeholder="Email" aria-label="Email" name="email">
                                    <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" <?= set_value('password'); ?> class="form-control" placeholder="Password" name="password" aria-label="Password">
                                    <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="mb-3">
                                    <input type="password" <?= set_value('password2'); ?> class="form-control" placeholder=" Retype Password" name="password2" aria-label="Password">
                                    <?= form_error('password2', '<small class="text-danger pl-3">', '</small>'); ?>
                                </div>
                                <div class="text-center">
                                    <button type="submit" class="btn bg-gradient-dark w-100 my-4 mb-2">Sign up</button>
                                </div>
                                <p class="text-sm mt-3 mb-0">Sudah memiliki akun? <a href="<?= base_url(); ?>Auth/" class="text-dark font-weight-bolder">Sign in</a></p>
                            </form>
                        </div>
                        <hr>
                        <div class="card-footer text-center pt-0 px-lg-2 px-1">
                            <p class="mb-2 text-sm mx-auto">
                                Already have an account?
                                <a class="small" href="<?= base_url('Auth'); ?>" class="text-primary text-gradient font-weight-bold">Login</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>