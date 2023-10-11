<?php
  $attributes = array('id' => '<?= base_url() ?>produk/update', 'method' => "post", "autocomplete" => "off");
  echo form_open('', $attributes);
?>
<div class="page-wrapper">
  <div class="page-header d-print-none text-white">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('service') ?>">Produk</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumb ?></a></li>
            </ol>
          </div>
          <h2 class="page-title">
            <?= $title ?> [<?= $data_produk->id_produk ?>]
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
            <h4 class="card-title"><?= $data_produk->nama_produk ?></h4>
            <input type="text" hidden class="form-control" id="id_produk" name="id_produk" value="<?= $data_produk->id_produk; ?>">
            </div>
            <div class="card-body">
              <div class="row">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Barcode</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="kode_produk" name="kode_produk" value="<?= $data_produk->kode_produk ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="mb-3">
                      <label class="form-label">Produk</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="nama_produk" name="nama_produk" value="<?= $data_produk->nama_produk ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Merk</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="merk" name="merk" value="<?= $data_produk->merk ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Stok</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="stok" name="stok" value="<?= $data_produk->stok ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Diskon</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="diskon" name="diskon" value="<?= $data_produk->diskon ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Harga Beli</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="harga_beli" name="harga_beli" value="<?= $data_produk->harga_beli ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Harga Jual</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="<?= $data_produk->harga_jual ?>">
                      </div>
                    </div>
                  </div>
                  <!-- Hidden Form -->
                  <div hidden class="col-lg-6">
                    <div class="mb-3">
                      <label class="form-label">Tanggal Stok</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="tgl_stok" name="tgl_stok" value="<?php date_default_timezone_set('Asia/Jakarta'); echo $today = date("d-m-Y / H:i"); ?>">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-<?= $current_user->theme ?> d-sm-inline-block"><i class="ti ti-check"></i> Simpan Perubahan</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

                  
 
