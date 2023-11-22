<body class="bg-gray-200">
    <main class="main-content mt-0">
        <div class="page-header align-items-start min-vh-100" style="background-image: url('https://images.unsplash.com/photo-1497294815431-9365093b7331?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1950&q=80');">
            <span class="mask bg-gradient-dark opacity-6"></span>
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-4 col-md-8 col-12 mx-auto">
                        <div class="card card-plain" style="background: rgba(255, 255, 255, 0.7); padding: 20px; box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);">
                            <div class="card-header">
                                <h4 class="font-weight-bolder text-center">Sign In</h4>
                                <p class="mb-0 text-center">Enter your email and password to login</p>
                            </div>
                            <?= $this->session->flashdata('message'); ?>
                            <div class="card-body">
                                <form method="POST" action="<?= base_url(''); ?>">
                                    <div class="mb-3">
                                        <input type="email" value="<?= set_value('email');?>" class="form-control form-control-lg" placeholder="Email" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password"  value="<?= set_value('nama');?>" class="form-control form-control-lg" placeholder="Password" name="password">
                                        <?= form_error('passsword', '<small class="text-danger pl-3"></small>');?>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-lg btn-primary btn-lg w-100 mt-4 mb-0">Sign in</button>
                                    </div>
                                </form>
                            </div>
                            <hr>
                            <div class="card-footer">
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html">Forgot Password</a>
                                </div>
                                <div class="text-center">
                                    <a class="small" href="<?= base_url('Auth/registrasi'); ?>">Create an account!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>