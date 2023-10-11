<div class="page-wrapper">
<?php
  $attributes = array('id' => '<?= base_url() ?>service/selesai', 'method' => "post", "autocomplete" => "off");
  echo form_open('', $attributes);
?>
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
              <li class="breadcrumb-item active" aria-current="page">Selesai</a></li>
            </ol> 
          </div>
          <h2 class="page-title">
            <?= $title ?> [<?= $data_service->id_service ?>]
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
          </div>
        </div>
      </div>
    </div>
  </div>            
  <div class="page-body">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
          <div class="card-header">
            <h4 class="card-title">INV# <?= $data_service->no_invoice ?></h4>
            <input type="text" hidden class="form-control" id="id_service" name="id_service" value="<?= $data_service->id_service; ?>">
            <input type="text" hidden class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $data_service->nama_pelanggan; ?>">
          </div>
          <div class="card-body">
            <div class="row">
              <div class="row">
              <div class="divide-y">
                  <div>
                    <div class="row">
                      <div class="col">
                        <div class="text-truncate">
                          Pelanggan: <strong><?= $data_service->nama_pelanggan ?></strong>
                        </div>
                      </div>
                      <div class="col-auto align-self-center">
                        <div class="badge bg-primary"><?= $data_service->tgl_masuk ?></div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="text-truncate">
                        Phone/Whatsapp: <strong><?= $data_service->no_hp ?></strong>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      <div class="text-truncate">
                        Device(s): <strong><?= $data_service->nama_device ?></strong>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="hr-text">Status Details</div>
                <div class="col-lg-12">
                  <div class="mb-3">
                    <label class="form-label">Jasa Perbaikan</label>
                    <textarea class="form-control" rows="3" id="solusi" name="solusi" value="<?= $data_service->solusi ?>"><?= $data_service->solusi ?></textarea>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select class="form-select" id="status" name="status" value="<?= $data_service->status ?>">>
                      <option hidden value="Proses" <?php if ($data_service->status == "Proses") : echo "selected"; endif; ?>>Proses</option>
                      <option hidden value="Antri" <?php if ($data_service->status == "Antri") : echo "selected"; endif; ?>>Antri</option>
                      <option hidden value="Konfirmasi" <?php if ($data_service->status == "Konfirmasi") : echo "selected"; endif; ?>>Konfirmasi</option>
                      <option value="Selesai" <?php if ($data_service->status == "Selesai") : echo "selected"; endif; ?>>Selesai</option>
                      <option value="Return" <?php if ($data_service->status == "Return") : echo "selected"; endif; ?>>Return</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <label class="form-label">Biaya</label>
                    <div class="input-group input-group-flat">
                      <input type="text" class="form-control" id="biaya" name="biaya" value="<?= $data_service->biaya ?>">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                    <div class="mb-3">
                      <div class="input-group input-group-flat">
                        <input type="text" hidden class="form-control" id="tgl_keluar" name="tgl_keluar" 
                        value="<?php date_default_timezone_set('Asia/Jakarta'); 
                        echo $today = date("d-m-Y"); ?>">
                      </div>
                      <div class="input-group input-group-flat">
                        <input type="text" hidden class="form-control" id="jam_keluar" name="jam_keluar" 
                        value="<?php date_default_timezone_set('Asia/Jakarta'); 
                        echo $today = date("H:i"); ?>">
                      </div>
                    </div>
                  </div>
              </div>
            </div>
        </div>
        <div class="card-footer text-end">
          <button type="submit" class="btn btn-<?= $current_user->theme ?> d-sm-inline-block"><i class="ti ti-send"></i> Cetak Invoice</button>
        </div>
      </div>
    </div>
  </div>
</div>

</div>
</div>


 
