<div class="page-wrapper">
        <!-- Page header -->
  <div class="page-header d-print-none text-white">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">Dashboard</a></li>
              <li class="breadcrumb-item active" aria-current="page">Service</a></li>
            </ol> 
          </div>
          <h2 class="page-title">
            <?= $title ?>
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <!-- Next Button -->
            <a href="<?= base_url() ?>" class="btn btn-<?= $current_user->theme ?> d-none d-sm-inline-block">
              <i class="ti ti-cube d-sm-inline-block"></i> Dashboard
            </a>
            <a href="<?= base_url() ?>" class="btn btn-<?= $current_user->theme ?> d-sm-none btn-icon">
              <i class="ti ti-cube d-sm-inline-block"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container-xl">
      <div class="card">
        <div class="row g-0">
          <div class="col-12 col-md-2 border-end">
            <div class="card-body">
            <div class="list-group list-group-transparent">
                      <a href="<?= base_url('setting') ?>/index" class="list-group-item list-group-item-action d-flex align-items-center">Account</a>
                      <a href="<?= base_url('setting') ?>/info" class="list-group-item list-group-item-action d-flex align-items-center active">Info</a>
                      <!-- <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Connected Apps</a>
                      <a href="./settings-plan.html" class="list-group-item list-group-item-action d-flex align-items-center">Plans</a>
                      <a href="#" class="list-group-item list-group-item-action d-flex align-items-center">Billing & Invoices</a> -->
                    </div>
              <h4 class="subheader mt-4">Experience</h4>
              <div class="list-group list-group-transparent">
                <a href="#" class="list-group-item list-group-item-action">Give Feedback</a>
              </div>
            </div>
          </div>
          <div class="col-12 col-md-9 d-flex flex-column">
            <div class="card-body">
              <h3 class="card-title mt-4">Profil</h3>
              <div class="row g-2">
                <div class="col-md">
                  <div class="form-label">Nama Perusahaan</div>
                  <p class="card-subtitle"><?= $current_user->nama_perusahaan ?></p>
                </div>
                <div class="col-md">
                  <div class="form-label">No Ponsel</div>
                  <p class="card-subtitle"><?= $current_user->no_telepon ?></p>
                </div>
                <div class="col-md">
                  <div class="form-label">Alamat</div>
                  <p class="card-subtitle"><?= $current_user->alamat_perusahaan ?></p>
                </div>
              </div>
              <p> </p>
              <div class="row g-2">
                <div class="col-md">
                  <div class="form-label">Nama Lengkap</div>
                  <p class="card-subtitle"><?= $current_user->nama_lengkap ?></p>
                </div>
                <div class="col-md">
                  <div class="form-label">Login Terakhir</div>
                  <p class="card-subtitle"><?= $current_user->last_login ?></p>
                </div>
                <div class="col-md">
                  <div class="form-label">Sosial Media</div>
                  <p class="card-subtitle"><?= $current_user->sosial_media ?></p>
                </div>
                <div class="col-md">
                  <div class="form-label">Catatan</div>
                  <p class="card-subtitle"><?= $current_user->catatan ?></p>
                </div>
                <!-- <div class="col-md">
                  <div class="form-label">Warna Tema</div>
                  <select class="form-select" id="theme" name="theme" value="<?= $current_user->theme ?>">>
                    <option value="teal" <?php if ($current_user->theme == "teal") : echo "selected"; endif; ?>>teal</option>
                    <option value="primary" <?php if ($current_user->theme == "primary") : echo "selected"; endif; ?>>primary</option>
                  </select>
                  <a href="<?= base_url() ?>setting/change_theme" class="btn btn-primary">
                  Ganti Tema
                </a>
                </div> -->
              </div>
              </div>
            </div>
            <div class="card-footer bg-transparent mt-auto">
              <div class="btn-list justify-content-end">
                <!-- <a href="#" class="btn btn-ghost-danger">
                  Cancel
                </a> -->
                <a href="<?= base_url('setting') ?>/edit_profil" class="btn btn-<?= $current_user->theme ?>">
                <i class="ti ti-pencil"></i> Ubah Profil
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>