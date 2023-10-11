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
                    <h4 class="subheader">Business settings</h4>
                    <div class="list-group list-group-transparent">
                      <a href="<?= base_url('setting') ?>/index" class="list-group-item list-group-item-action d-flex align-items-center active">Account</a>
                      <a href="<?= base_url('setting') ?>/info" class="list-group-item list-group-item-action d-flex align-items-center">Info</a>
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
                <div class="col-12 col-md-10 d-flex flex-column">
                  <div class="card-body">
                    <h3 class="card-title">User ID [<?= $current_user->id_user ?>]</h3>
                    <div class="row align-items-center">
                      <div class="col-auto"><span class="avatar avatar-xl" style="background-image: url(<?= base_url('assets') ?>/static/avatars/000m.jpg)"></span>
                      </div>
                      <div class="col-auto"><a href="#" class="btn">
                          Change avatar
                        </a></div>
                      <div class="col-auto"><a href="#" class="btn btn-ghost-danger">
                          Delete avatar
                        </a></div>
                    </div>
                    <h3 class="card-title mt-4">Business Profile</h3>
                    <div class="row g-3">
                      <div class="col-md">
                        <div class="form-label">Username</div>
                        <input type="text" disabled class="form-control" value="<?= $current_user->username ?>">
                      </div>
                      <div class="col-md">
                        <div class="form-label">Email</div>
                        <input type="text" disabled class="form-control" value="<?= $current_user->email ?>">
                      </div>
                    </div>
                    <h3 class="card-title mt-4">Password</h3>
                    <p class="card-subtitle">You can set a permanent password if you don't want to use temporary login codes.</p>
                    <div>
                      <a href="#" class="btn">
                        Set new password
                      </a>
                    </div>
                    <h3 class="card-title mt-4">Last Login</h3>
                    <p class="card-subtitle"><?= $current_user->last_login ?></p>
                    <!-- <div>
                      <label class="form-check form-switch form-switch-lg">
                        <input class="form-check-input" type="checkbox" >
                        <span class="form-check-label form-check-label-on">You're currently visible</span>
                        <span class="form-check-label form-check-label-off">You're
                          currently invisible</span>
                      </label>
                    </div> -->
                  </div>
                  <div class="card-footer bg-transparent mt-auto">
                    <div class="btn-list justify-content-end">
                      <!-- <a href="#" class="btn btn-ghost-danger">
                        Cancel
                      </a> -->
                      <a href="#" class="btn btn-<?= $current_user->theme ?>">
                        <i class="ti ti-pencil"></i> Ubah Profil
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
