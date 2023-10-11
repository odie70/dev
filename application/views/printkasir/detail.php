<div class="page-wrapper">
		<!-- Page header -->
  <div class="page-header d-print-none text-white">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('service') ?>">Service</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('service') ?>/data">Data</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumb ?></a></li>
            </ol> 
          </div>
          <h2 class="page-title">
            <?= $title ?>
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
            <a href="<?= base_url('service/hapus/'. $data_service->id_service); ?>" class="btn btn-danger d-none d-sm-inline-block">
              <i class="ti ti-trash d-sm-inline-block"></i> Hapus
            </a>
            <a href="<?= base_url('service/hapus/'. $data_service->id_service); ?>" class="btn btn-danger d-sm-none btn-icon">
              <i class="ti ti-trash d-sm-inline-block"></i>
            </a>
            <a href="<?= base_url('service/ubah/'. $data_service->id_service); ?>" class="btn btn-<?= $current_user->theme ?> d-none d-sm-inline-block">
              <i class="ti ti-pencil d-sm-inline-block"></i> Ubah
            </a>
            <a href="<?= base_url('service/ubah/'. $data_service->id_service); ?>" class="btn btn-<?= $current_user->theme ?> d-sm-none btn-icon">
              <i class="ti ti-pencil d-sm-inline-block"></i>
            </a>
            
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="page-body">
    <div class="container-xl">
      <div class="row row-deck row-cards">
        <div class="col-12">
          <div class="row row-cards">
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-outline-light avatar">
                        <i class="ti ti-user"></i>
                      </span>
                    </div>
                    <div class="col">
                      <div class="text-muted">
                        Pelanggan
                      </div>
                      <div class="font-weight-medium">
                        <?= $data_service->nama_pelanggan ?> - <?= $data_service->no_hp ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col-auto">
                      <span class="bg-outline-light avatar">
                        <i class="ti ti-file-invoice"></i>
                      </span>
                    </div>
                    <div class="col">
                      <div class="text-muted">
                        Invoice
                      </div>
                      <div class="font-weight-medium">
                      <?= $data_service->no_invoice ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-6 col-lg-4">
              <div class="card card-sm">
                <div class="card-body">
                  <div class="row align-items-center">
                    <?php
                      $status = $data_service->status;
                      if ($status == 'Antri')
                        echo 
                          "<div class='col-auto'><span class='bg-outline-light avatar'>
                          <i class='ti ti-player-pause'></i></span></div>
                          <div class='col'><div class='text-muted'>Status</div>
                          <div class='font-weight-medium'>$status</div>";
                        elseif ($status == 'Proses')
                        echo 
                          "<div class='col-auto'><span class='bg-outline-light avatar'>
                          <i class='ti ti-player-play'></i></span></div>
                          <div class='col'><div class='text-muted'>Status</div>
                          <div class='font-weight-medium'>$status</div>";
                        elseif ($status == 'Konfirmasi')
                        echo 
                          "<div class='col-auto'><span class='bg-outline-light avatar'>
                          <i class='ti ti-player-pause'></i></span></div>
                          <div class='col'><div class='text-muted'>Status</div>
                          <div class='font-weight-medium'>$status</div>";
                          elseif ($status == 'Selesai')
                          echo 
                          "<div class='col-auto'><span class='bg-outline-light avatar'>
                          <i class='ti ti-player-stop'></i></span></div>
                          <div class='col'><div class='text-muted'>Status</div>
                          <div class='font-weight-medium'>$status</div>";
                          elseif ($status == 'Return')
                          echo 
                          "<div class='col-auto'><span class='bg-outline-light avatar'>
                          <i class='ti ti-player-eject'></i></span></div>
                          <div class='col'><div class='text-muted'>Status</div>
                          <div class='font-weight-medium'>$status</div>";
                      ?>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="col-sm-6 col-lg-8">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Detail</h3>
            </div>
              <div class="table-responsive">
                <table class="table table-vcenter card-table border-x-0">
                  <tbody>
                    <tr>
                      <td>Device(s)</td>
                      <td><?= $data_service->nama_device ?></td>
                    </tr>
                    <tr>
                      <td>S/N</td>
                      <td><?= $data_service->no_seri ?></td>
                    </tr>
                    <tr>
                      <td>Acc</td>
                      <td><?= nl2br ("$data_service->kelengkapan"), false; ?></td>
                    </tr>
                    <tr>
                    <tr>
                      <td>Perbaikan</td>
                      <td><?= $data_service->perbaikan ?></td>
                    </tr>
                    <tr>
                      <td>Catatan</td>
                      <td><?= nl2br ("$data_service->catatan"), false; ?></td>
                      <tr>
                      <td>Jasa</td>
                      <td><?= nl2br ("$data_service->solusi"), false; ?></td>
                    </tr>
                    <td>Biaya Jasa</td>
                      <td>
                        <?php
                          $biaya = number_format((float)$data_service->biaya, 2, ',', '.');
                          echo $biaya;
                        ?>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        
        <div class="col-md-6 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Riwayat</h3>
            </div>
            <div class="card-body">
              <div class="mb-3">
                <label class="form-label text-muted">Progress</label>
                <div class="progress mb-2">
                  <?php
                    $status = $data_service->status;
                    $Antri = "<div class='progress-bar' style='width: 25%' role='progressbar' 
                              aria-valuenow='25' aria-valuemin='0' aria-valuemax='100' aria-label='25% Complete'>
                              <span class='visually-hidden'>25% Complete</span></div>";
                    $Proses = "<div class='progress-bar' style='width: 50%' role='progressbar' 
                              aria-valuenow='50' aria-valuemin='0' aria-valuemax='100' aria-label='50% Complete'>
                              <span class='visually-hidden'>50% Complete</span></div>";
                    $Konfirmasi = "<div class='progress-bar' style='width: 75%' role='progressbar' 
                              aria-valuenow='75' aria-valuemin='0' aria-valuemax='100' aria-label='75% Complete'>
                              <span class='visually-hidden'>75% Complete</span></div>";
                    $Selesai = "<div class='progress-bar' style='width: 100%' role='progressbar' 
                              aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' aria-label='100% Complete'>
                              <span class='visually-hidden'>100% Complete</span></div>";
                    $Return = "<div class='progress-bar' style='width: 100%' role='progressbar' 
                              aria-valuenow='100' aria-valuemin='0' aria-valuemax='100' aria-label='100% Complete'>
                              <span class='visually-hidden'>100% Complete</span></div>";
                    if ($status == 'Antri')
                    echo $Antri;
                    elseif ($status == 'Proses')
                    echo $Proses;
                    elseif ($status == 'Konfirmasi')
                    echo $Konfirmasi;
                    elseif ($status == 'Selesai')
                    echo $Selesai;
                    elseif ($status == 'Return')
                    echo $Return;
                  ?>
                </div>
              </div>
              <ul class="steps steps-vertical">
                <?php
                $status = $data_service->status; 
                $Antri = "<li class='step-item active'>
                          <div class='h4 m-0'>Antri</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_masuk <i class='ti ti-clock'></i> $data_service->jam_masuk</div>
                          </li>";
                $Proses = "<li class='step-item'>
                          <div class='h4 m-0 text-muted'>Antri</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_masuk <i class='ti ti-clock'></i> $data_service->jam_masuk</div>
                          </li>
                          <li class='step-item active'>
                          <div class='h4 m-0 text-primary'>Proses</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_proses <i class='ti ti-clock'></i> $data_service->jam_proses</div>
                          </li>";
                $Konfirmasi = "<li class='step-item'>
                          <div class='h4 m-0 text-muted'>Antri</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_masuk <i class='ti ti-clock'></i> $data_service->jam_masuk</div>
                          </li>
                          <li class='step-item'>
                          <div class='h4 m-0 text-muted'>Proses</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_proses <i class='ti ti-clock'></i> $data_service->jam_proses</div>
                          </li>
                          <li class='step-item active'>
                          <div class='h4 m-0 text-warning'>Konfirmasi</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_konfirmasi <i class='ti ti-clock'></i> $data_service->jam_konfirmasi</div>
                          </li>";
                  $Selesai = "<li class='step-item'>
                          <div class='h4 m-0 text-muted'>Antri</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_masuk <i class='ti ti-clock'></i> $data_service->jam_masuk</div>
                          </li>
                          <li class='step-item'>
                          <div class='h4 m-0 text-muted'>Proses</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_proses <i class='ti ti-clock'></i> $data_service->jam_proses</div>
                          </li>
                          <li class='step-item'>
                          <div class='h4 m-0 text-muted'>Konfirmasi</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_konfirmasi <i class='ti ti-clock'></i> $data_service->jam_konfirmasi</div>
                          </li>
                          <li class='step-item active'>
                          <div class='h4 m-0 text-success'>Selesai</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_keluar <i class='ti ti-clock'></i> $data_service->jam_keluar</div>
                          </li>";
                    $Return = "<li class='step-item'>
                          <div class='h4 m-0 text-muted'>Antri</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_masuk <i class='ti ti-clock'></i> $data_service->jam_masuk</div>
                          </li>
                          <li class='step-item'>
                          <div class='h4 m-0 text-muted'>Proses</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_proses <i class='ti ti-clock'></i> $data_service->jam_proses</div>
                          </li>
                          <li class='step-item'>
                          <div class='h4 m-0 text-muted'>Konfirmasi</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_konfirmasi <i class='ti ti-clock'></i> $data_service->jam_konfirmasi</div>
                          </li>
                          <li class='step-item active'>
                          <div class='h4 m-0 text-danger'>Return</div>
                          <div class='text-muted'><i class='ti ti-calendar-time'></i> $data_service->tgl_keluar <i class='ti ti-clock'></i> $data_service->jam_keluar</div>
                          </li>";
                if ($status == 'Antri')
                
                  echo $Antri;
                  elseif ($status == 'Proses') 
                  {
                    echo $Proses;
                  }
                  elseif ($status == 'Konfirmasi') 
                  {
                    echo $Konfirmasi;
                  }
                  elseif ($status == 'Selesai') 
                  {
                    echo $Selesai;
                  }
                  elseif ($status == 'Return') 
                  {
                    echo $Return;
                  }
                
                ?>
              </ul><?= $this->session->flashdata('message') ?>
            </div>
            <div class="card-footer">
              <div class="btn-list">
                <?php
                    $status = $data_service->status;
                    $invoice = $data_service->no_invoice;
                    $linknota = base_url('service/nota/' . $data_service->id_service);
                    $linkinvoice = base_url('service/invoice/' . $data_service->id_service);
                    $linkselesai = base_url('service/selesai/' . $data_service->id_service);
                    if ($status == 'Selesai' || $status == 'Return')
                    { echo "<a href='$linkinvoice' class='btn btn-info d-sm-inline-block'><i class='ti ti-receipt d-sm-inline-block'></i> Cetak Invoice</a>"; }
                      else 
                    { echo "<a href='$linknota' class='btn btn-info d-sm-inline-block'><i class='ti ti-receipt d-sm-inline-block'></i> Cetak Nota</a>
                      <a href='$linkselesai' class='btn btn-$current_user->theme d-sm-inline-block'><i class='ti ti-checks d-sm-inline-block'></i> Selesai</a>"; }
                    ?>
                </div>
            </div>
          </div>
        </div>
      
      </div>
    </div>
  </div>  

<!-- Stop div here!! -->      
</div>
<!-- Stop div here!! -->



