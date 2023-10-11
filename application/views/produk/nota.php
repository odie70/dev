<div class="page-wrapper">
  <!-- Page header -->
  <div class="page-header d-print-none text-white">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('service') ?>">Service</a></li>
              <li class="breadcrumb-item active" aria-current="page">Nota</a></li>
            </ol> 
          </div>
          <h2 class="page-title">
            <?= $title ?> [<?= $data_service->iddevice ?>]
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
            <a href="javascript:history.back()" class="btn btn-orange d-none d-sm-inline-block">
              <i class="ti ti-arrow-back-up d-sm-inline-block"></i> Kembali
            </a>
            <a href="javascript:history.back()" class="btn btn-orange d-sm-none btn-icon">
              <i class="ti ti-arrow-back-up d-sm-inline-block"></i>
            </a>

            <a href="javascript:window.print();" class="btn btn-teal d-none d-sm-inline-block">
              <i class="ti ti-printer d-sm-inline-block"></i> Cetak
            </a>
            <a href="javascript:window.print();" class="btn btn-teal d-sm-none btn-icon">
              <i class="ti ti-printer d-sm-inline-block"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div> 
        <!-- Page body -->
        <div class="page-body">
          <div class="container-xl">
            <div class="card card-lg">
              <div class="card-body">
                <img src="<?= base_url() ?>assets/static/logo.png" width="110" height="32" alt="ROOT" class="navbar-brand-image">
                <div class="row">
                  <div class="col-6">
                    <p class="h3"> </p>
                    <address>
                      <i class="ti ti-user"></i> <?= $data_service->nama ?><br>
                      <i class="ti ti-phone"></i> <?php $hp = $data_service->hp;
                        echo substr( $hp, 0, 4 ) // Get the first two digits
                        .str_repeat( '*', ( strlen( $hp ) - 4 ) ) // Apply enough asterisks to cover the middle numbers
                        .substr( $hp, -2 ); // Get the last two digits
                      ?>
                    </address>
                  </div>
                  <div class="col-6 text-end">
                    <p class="h3"> </p>
                    <address>
                    <i class="ti ti-receipt"></i>  <strong><?= $data_service->resi ?></strong><br>
                    <i class="ti ti-calendar"></i> <?= $data_service->tglmasuk ?><br>
                    </address>
                  </div>
                  
                </div>
                <table class="table table-bordered table-responsive">
                  <thead>
                    <tr>
                      <th class="text-left" style="width: 1%">#</th>
                      <th>Device(s)</th>
                      <th class="text-left">Desc</th>
                    </tr>
                  </thead>
                  <tr>
                    <td class="text-left">#</td>
                    <td>
                      <p class="strong mb-1"><?= $data_service->device ?></p>
                      <div class="text-muted">
                        <?= $data_service->noserial ?><br>
                        -------------<br>
                        <?=nl2br ($data_service->kelengkapan) ?><br>
                      </div>
                    </td>
                    
                    <td class="text-left">
                      <?=nl2br ($data_service->perbaikan) ?><br>
                      <?= $data_service->note ?>
                    </td>
                  </tr>
                </table>
                <p class="text-muted text-center mt-5">
                  Thank you very much for doing business with us. We look forward to working with you again!
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>