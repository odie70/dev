<div class="page-wrapper">
		<!-- Page header -->
  <div class="page-header d-print-none text-white">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <div class="page-pretitle">
            <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
              <li class="breadcrumb-item"><a href="<?= base_url() ?>">dashboard</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('produk') ?>">Produk</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('produk') ?>/data">Data</a></li>
              <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumb ?></a></li>
            </ol> 
          </div>
          <h2 class="page-title">
            <?= $title ?> ID# [<?= $data_produk->id_produk ?>]
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
            <a href="<?= base_url('produk/data'); ?>" class="btn btn-<?= $current_user->theme ?> d-none d-sm-inline-block">
              <i class="ti ti-database d-sm-inline-block"></i> Database
            </a>
            <a href="<?= base_url('produk/data'); ?>" class="btn btn-<?= $current_user->theme ?> d-sm-none btn-icon">
              <i class="ti ti-database d-sm-inline-block"></i>
            </a>
            <a href="<?= base_url('produk/ubah/'.$data_produk->id_produk); ?>" class="btn btn-<?= $current_user->theme ?> d-none d-sm-inline-block">
              <i class="ti ti-pencil-plus d-sm-inline-block"></i> Update Stok
            </a>
            <a href="<?= base_url('produk/ubah/'.$data_produk->id_produk); ?>" class="btn btn-<?= $current_user->theme ?> d-sm-none btn-icon">
              <i class="ti ti-pencil-plus d-sm-inline-block"></i>
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
          <div class="card">
            <div class="card-header">
              <h3 class="card-title"><?= $data_produk->nama_produk ?></a></h3>
            </div>
            <div class="table-responsive">
              <table class="table table-vcenter card-table border-x-0">
                <tbody>
                  <tr>
                    <td>Barcode</td>
                    <td><?= $data_produk->kode_produk ?></td>
                  </tr>
                  <tr>
                    <td>Merk</td>
                    <td><?= $data_produk->merk ?></td>
                  </tr>
                  <tr>
                  <tr>
                    <td>Harga Beli</td>
                    <td>
                      <?php
                        $harga_beli = number_format((float)$data_produk->harga_beli, 2, ',', '.');
                        echo $harga_beli;
                        ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Harga Jual</td>
                    <td>
                      <?php
                        $harga_jual = number_format((float)$data_produk->harga_jual, 2, ',', '.');
                        echo $harga_jual;
                        ?>
                    </td>
                  </tr>
                  <tr>
                    <td>Stok</td>
                    <td><?= $data_produk->stok ?></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
          