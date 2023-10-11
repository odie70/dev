<div class="page-wrapper">
  <div class="page-header d-print-none text-white">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('service') ?>">Service</a></li>
              <li class="breadcrumb-item active" aria-current="page">Input</a></li>
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
          </div>
        </div>
      </div>
    </div>
  </div>
  <form method="post" action="<?= base_url('service/input') ?>">            
  <div class="page-body">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="col-8">
          <div class="card">
          <div class="card-header">
            <h4 class="card-title">Services Form</h4>
          </div>
          <div class="card-body">
          <div class="row">
            <div class="row">
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Pelanggan</label>
                  <div class="input-group input-group-flat">
                    <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan" value="<?= set_value('nama_pelanggan'); ?>">
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Phone / Whatsapp</label>
                  <div class="input-group input-group-flat">
                    <span class="input-group-text">(+62)</span>
                    <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?= set_value('no_hp'); ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Device</label>
                  <div class="input-group input-group-flat">
                    <input type="text" class="form-control" id="nama_device" name="nama_device" value="<?= set_value('nama_device'); ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">S/N</label>
                  <div class="input-group input-group-flat">
                    <input type="text" class="form-control" id="no_seri" name="no_seri" value="<?= set_value('no_seri'); ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Acc</label>
                  <textarea class="form-control" rows="3" id="kelengkapan" name="kelengkapan" value="<?= set_value('kelengkapan'); ?>"></textarea>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Catatan Pelanggan</label>
                  <textarea class="form-control" rows="3" id="catatan" name="catatan" value="<?= set_value('catatan'); ?>"></textarea>
                </div>
              </div>
              <div class="hr-text">Status Details</div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Perbaikan</label>
                  <select class="form-select" id="perbaikan" name="perbaikan" value="<?= set_value('perbaikan'); ?>">>
                    <option value="Service" <?php if (set_value('perbaikan') == "Service") : echo "selected"; endif; ?>>Service</option>
                    <option value="Install OS" <?php if (set_value('perbaikan') == "Install OS") : echo "selected"; endif; ?>>Install OS</option>
                    <option value="Upgrade" <?php if (set_value('perbaikan') == "Upgrade") : echo "selected"; endif; ?>>Upgrade</option>
                    <option value="Lain-lain" <?php if (set_value('perbaikan') == "Lain-lain") : echo "selected"; endif; ?>>Lain-lain</option>
                  </select>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="mb-3">
                  <label class="form-label">Status</label>
                  <select class="form-select" id="status" name="status" value="<?= set_value('status'); ?>">>
                    <option value="Proses" <?php if (set_value('status') == "Proses") : echo "selected"; endif; ?>>Proses</option>
                    <option value="Antri" <?php if (set_value('status') == "Antri") : echo "selected"; endif; ?>>Antri</option>
                  </select>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="mb-3">
                    <div class="input-group input-group-flat">
                      <input type="text" hidden class="form-control" id="no_invoice" name="no_invoice" 
                      value="<?php $permitted_fonts = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 
                              $permitted_numbers = '0123456789';
                              echo substr(str_shuffle($permitted_fonts), 0, 3);
                              echo substr(str_shuffle($permitted_numbers), 0, 5);
                              ?>">
                    </div>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="mb-3">
                    <div class="input-group input-group-flat">
                      <input type="text" hidden class="form-control" id="tgl_masuk" name="tgl_masuk" 
                      value="<?php date_default_timezone_set('Asia/Jakarta'); echo $today = date("d-m-Y"); ?>">
                    </div>
                    <div class="input-group input-group-flat">
                      <input type="text" hidden class="form-control" id="jam_masuk" name="jam_masuk" 
                      value="<?php date_default_timezone_set('Asia/Jakarta'); echo $today = date("H:i"); ?>">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer text-end">
          <button type="submit" class="btn btn-<?= $current_user->theme ?> d-sm-inline-block"><i class="ti ti-send"></i> Tambah</button>
        </div>
      </div>
    </div>
  </div>
</div>



 
