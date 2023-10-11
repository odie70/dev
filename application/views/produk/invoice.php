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
              <li class="breadcrumb-item active" aria-current="page">Invoice</a></li>
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
                      <?= $data_service->nama ?><br>
                      <?php $hp = $data_service->hp;
                        echo substr( $hp, 0, 4 ) // Get the first two digits
                        .str_repeat( '*', ( strlen( $hp ) - 4 ) ) // Apply enough asterisks to cover the middle numbers
                        .substr( $hp, -2 ); // Get the last two digits
                      ?>
                    </address>
                  </div>
                  <div class="col-6 text-end">
                    <p class="h3"> </p>
                    <address>
                      INV# <strong><?= $data_service->resi ?></strong><br>
                      <?= $data_service->tglmasuk ?><br>
                    </address>
                  </div>
                  
                </div>
                <table class="table border-x-0 table-responsive">
                  <thead>
                    <tr>
                      <th class="text-left" style="width: 1%">#</th>
                      <th>Device(s)</th>
                      <th class="text-left">Desc</th>
                      <th class="text-left">Jasa</th>
                    </tr>
                  </thead>
                  <tr>
                    <td class="text-left">#</td>
                    <td>
                      <p class="strong mb-1"><?= $data_service->device ?></p>
                      <div class="text-muted">
                        S/N <?= $data_service->noserial ?><br>
                        -------------<br>
                        <?=nl2br ($data_service->kelengkapan) ?><br>
                      </div>
                    </td>
                    
                    <td class="text-left">
                      <?= $data_service->perbaikan ?><br>
                      <?=nl2br ($data_service->note) ?>
                    </td>
                    <td class="text-left"><?= nl2br ("$data_service->solusi"), false; ?></td>
                  </tr>
                  
                  <tr>
                    <td colspan="3" class="strong text-end">Biaya</td>
                    <td class="text-end"><?php
                                    $biaya = number_format((float)$data_service->biaya, 2, ',', '.');
                                    echo $biaya;
                                  ?></td>
                  </tr>
                </table>
                <p class="text-muted text-center mt-5">
                  <?php foreach ($data_setting as $row) : ?>
                    <strong><?= $row->nama_perusahaan ?></strong> | <?= $row->catatan_kaki ?>
                  <?php endforeach; ?>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>