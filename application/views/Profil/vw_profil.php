<body class="g-sidenav-show   bg-gray-100">
  <div class="min-height-300 bg-gradient-success position-absolute w-100"></div>
  <aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 " id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>

      <a class="navbar-brand l-0" href="#">
        <img class="w-25 border-radius-lg shadow-sm" src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>">
        <span class="ms-1 font-weight-bold">
          <?= $user['nama']; ?>
        </span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/luckyBPF1/Dashboard/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>


        <li class="nav-item mt-3">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Menu</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="http://localhost/luckyBPF1/Mahasiswa/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-hat-3 text-dark text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Mahasiswa</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/luckyBPF1/Prodi/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-paper-diploma text-warning text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Prodi</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="http://localhost/luckyBPF1/Perpustakaan/">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="ni ni-book-bookmark text-info text-sm opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Perpustakaan</span>
          </a>
        </li>
      </ul>
    </div>
  </aside>
  <main class="main-content position-relative border-radius-lg ">
    <!-- Navbar -->
    <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl " id="navbarBlur" data-scroll="false">
      <div class="container-fluid py-1 px-3">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
            <li class="breadcrumb-item text-sm"><a class="opacity-5 text-white" href="javascript:;">Pages</a></li>
            <li class="breadcrumb-item text-sm text-white active" aria-current="page">Mahasiswa</li>
          </ol>
          <h6 class="font-weight-bolder text-white mb-0"><?php echo $judul; ?></h6>
        </nav>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
          <div class="ms-md-auto pe-md-3 d-flex align-items-center">
            <div class="input-group">
              <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
              <input type="text" class="form-control" required placeholder="Type here...">
            </div>
          </div>
          <ul class="navbar-nav  justify-content-end">
            <li class="nav-item d-flex align-items-center">
              <a href="<?= base_url('auth/logout'); ?>" class="nav-link text-white font-weight-bold px-0">
                <i class="fa fa-user me-sm-1"></i>
                <span class="d-sm-inline d-none">Sign In</span>
              </a>
            </li>
            <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="iconNavbarSidenav">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                  <i class="sidenav-toggler-line bg-white"></i>
                </div>
              </a>
            </li>
            <li class="nav-item px-3 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0">
                <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
              </a>
            </li>
            <li class="nav-item dropdown pe-2 d-flex align-items-center">
              <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa fa-bell cursor-pointer"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->
    <div class="card shadow-lg mx-4 card-profile-bottom">
      <div class="card-body p-3">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                <?= $user['nama']; ?>
              </h5>
              <p class="mb-0 font-weight-bold text-sm">
                Public Relations
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-md-8">
          <div class="card">
            <div class="card-header pb-0">
            </div>
            <div class="card-body">
              <p class="text-uppercase text-sm">User Information</p>
              <div class="row">
                <div class="container-fluid py-4">
                  <div class="row">
                    <div class="col-md-8">
                      <div class="card">
                        <div class="card-header pb-0">
                        </div>
                        <div class="card-body">
                          <p class="text-uppercase text-lg">Profil</p>
                          <div class="row">
                            <div class="col-lg-4">
                              <p class="card-text text-md">Nama</p>
                              <p class="card-text text-md">Email</p>
                              <p class="card-text text-md">Anggota Sejak</p>
                            </div>
                            <div class="col-lg-1">
                              <p class="card-text text-md">:</p>
                              <p class="card-text text-md">:</p>
                              <p class="card-text text-md">:</p>
                            </div>
                            <div class="col-lg-7">
                              <p class="card-text text-md"><?= $user['nama']; ?></p>
                              <p class="card-text text-md"><?= $user['email']; ?></p>
                              <p class="card-text text-md"><?= date('d F Y', strtotime($user['date_created'])); ?></p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <img src="<?= base_url('assets/img/bg-pcr.jpg') ?>" alt="Image placeholder" class="card-img-top">
            <div class="row justify-content-center">
              <div class="col-4 col-lg-4 order-lg-2">
                <div class="mt-n4 mt-lg-n6 mb-4 mb-lg-0">
                  <a href="javascript:;">
                    <img src="<?= base_url('assets/img/profile/') . $user['gambar']; ?>" class="rounded-circle img-fluid border border-2 border-white">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-0 pt-lg-2 pb-4 pb-lg-3">
            </div>
            <div class="card-body pt-0">
              <div class="row">
                <div class="col">
                </div>
              </div>
              <div class="text-center mt-4">
                <h5>
                  <?= $user['nama']; ?><span class="font-weight-light"></span>
                </h5>
                <div class="h6 font-weight-300">
                  <i class="ni location_pin mr-2"></i>Prodi
                </div>
                <div class="h6 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>Mahasiswa
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>Politeknik Caltex Riau
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>