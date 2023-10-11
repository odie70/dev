<?php
  $attributes = array('id' => '<?= base_url() ?>service/update', 'method' => "post", "autocomplete" => "off");
  echo form_open('', $attributes);
?>
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
              <li class="breadcrumb-item active" aria-current="page">Ubah</a></li>
            </ol> 
          </div>
          <h2 class="page-title">
            <?= $title ?> [<?= $data_service->id_service ?>]
          </h2>
        </div>
        <!-- Page title actions -->
        <div class="col-auto ms-auto d-print-none">
          <div class="btn-list">
          <a href="javascript:history.back()" class="btn btn-warning d-none d-sm-inline-block">
                <i class="ti ti-arrow-back-up d-sm-inline-block"></i> Kembali
              </a>
              <a href="javascript:history.back()" class="btn btn-warning d-sm-none btn-icon">
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
            <h4 class="card-title">INV#<?= $data_service->no_invoice ?></h4>
            <input type="text" hidden class="form-control" id="id_service" name="id_service" value="<?= $data_service->id_service; ?>">

          </div>
          <div class="card-body">
          <div class="row">
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Pelanggan</label>
                  <div class="input-group input-group-flat">
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= $data_service->nama_pelanggan ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Phone / Whatsapp</label>
                  <div class="input-group input-group-flat">
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= $data_service->no_hp ?>">
                  </div>
                </div>
              </div>
              <div class="hr-text">Device(s) Details</div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Device</label>
                  <div class="input-group input-group-flat">
                    <input type="text" class="form-control" id="nama_device" name="nama_device" value="<?= $data_service->nama_device ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">S/N</label>
                  <div class="input-group input-group-flat">
                    <input type="text" class="form-control" id="no_seri" name="no_seri" value="<?= $data_service->no_seri ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Acc</label>
                  <textarea class="form-control" rows="3" id="kelengkapan" name="kelengkapan" value="<?= $data_service->kelengkapan ?>"><?= $data_service->kelengkapan ?></textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Catatan Pelanggan</label>
                  <textarea class="form-control" rows="3" id="catatan" name="catatan" value="<?= $data_service->catatan ?>"><?= $data_service->catatan ?></textarea>
                </div>
              </div>
              <div class="hr-text">Status Details</div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Perbaikan</label>
                  <select class="form-select" id="perbaikan" name="perbaikan" value="<?= $data_service->perbaikan ?>">>
                    <option value="Service" <?php if ($data_service->perbaikan == "Service") : echo "selected"; endif; ?>>Service</option>
                    <option value="Install OS" <?php if ($data_service->perbaikan == "Install OS") : echo "selected"; endif; ?>>Install OS</option>
                    <option value="Upgrade" <?php if ($data_service->perbaikan == "Upgrade") : echo "selected"; endif; ?>>Upgrade</option>
                    <option value="Lain-lain" <?php if ($data_service->perbaikan == "Lain-lain") : echo "selected"; endif; ?>>Lain-lain</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Status</label>
                  <select class="form-select" id="status" name="status" value="<?= $data_service->status ?>">>
                    <option value="Proses" <?php if ($data_service->status == "Proses") : echo "selected"; endif; ?>>Proses</option>
                    <option value="Antri" <?php if ($data_service->status == "Antri") : echo "selected"; endif; ?>>Antri</option>
                    <option value="Konfirmasi" <?php if ($data_service->status == "Konfirmasi") : echo "selected"; endif; ?>>Konfirmasi</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-end">
          <button type="submit" class="btn btn-<?= $current_user->theme ?> d-sm-inline-block"><i class="ti ti-send"></i> Simpan Perubahan</button>
        </div>
      </div>
    </div>
  </div>
</div>


 
