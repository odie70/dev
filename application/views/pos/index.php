<body  class=" layout-fluid">
  <script src="<?= base_url() ?>assets/dist/js/demo-theme.min.js?1685973381"></script>
  <div class="page">
    <!-- Navbar -->
    <div class="page-wrapper">
      <!-- Page header -->
      <div class="page-header d-print-none">
        <div class="container-xl">
          <div class="row g-2 align-items-center">
            <div class="col">
              <!-- Page pre-title -->
              <div class="page-pretitle">
                <?= $breadcrumb ?>
              </div>
              <h2 class="page-title">
                <?= $title ?>
              </h2>
            </div>
            <!-- Page title actions -->
            <div class="col-auto ms-auto d-print-none">
              <div class="btn-list">
                <a href="?theme=dark" class="btn btn-ghost-dark hide-theme-dark" title="Enable dark mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  <i class="ti ti-moon"></i>
                </a>
                <a href="?theme=light" class="btn btn-ghost-light hide-theme-light" title="Enable light mode" data-bs-toggle="tooltip" data-bs-placement="bottom">
                  <i class="ti ti-sun"></i>
                </a>
                <!-- Start Responsive -->
                
                <!-- Next Button -->
                <a href="<?= base_url('') ?>" class="btn btn-dark d-none d-sm-inline-block">
                  <i class="ti ti-cube d-sm-inline-block"></i> Dashboard
                </a>
                <a href="<?= base_url('') ?>" class="btn btn-dark d-sm-none btn-icon">
                  <i class="ti ti-cube d-sm-inline-block"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Page body -->
      <div class="page-body">
        <div class="container-xl">
        <div class="row justify-content-center">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"><i class="ti ti-user"></i><?= $current_user->username ?></h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-2">
                  <div class="mb-3">
                    <label class="form-label">Invoice</label>
                    <div class="input-group input-group-flat">
                      <input type="text" class="form-control" id="resi" name="resi" 
                      value="<?php 
                                $permitted_fonts = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; $permitted_numbers = '0123456789';
                                echo "INV";
                                echo "/";
                                echo substr(str_shuffle($permitted_fonts), 0, 2);
                                echo substr(str_shuffle($permitted_numbers), 0, 4);
                              ?>">
                    </div>
                  </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="mb-3">
                      <label class="form-label">Tanggal</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="tgl_stok" name="tgl_stok" value="<?php date_default_timezone_set('Asia/Jakarta'); echo $today = date("d-m-Y"); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-1">
                    <div class="mb-3">
                      <label class="form-label">Jam</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="jam_stok" name="jam_stok" value="<?php date_default_timezone_set('Asia/Jakarta'); echo $today = date("H:i"); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-5">
                    <div class="mb-3">
                      <label class="form-label">Kode Produk</label>
                      <input id="edValue" onKeyPress="edValueKeyPress()" onKeyUp="edValueKeyPress()" onChange="edValueKeyPress()" onMouseOver="edValueKeyPress()" onKeyDown="edValueKeyPress()" class="form-control" list="datalistOptions" autocomplete="off" placeholder="kode produk..."/>
                      <datalist id="datalistOptions">
                        <?php foreach ($data_produk as $row) : ?>
                        <option value="<?= $row->kode_produk ?>" label="<?= $row->kode_produk ?>"/>
                        <?php endforeach; ?>
                      </datalist>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="mb-3">
                      <label class="form-label">Qty</label>
                      <div class="row g-2">
                        <div class="col">
                        <input type="number" class="form-control" id="tgl_stok" name="tgl_stok" value="1">
                        </div>
                        <div class="col-auto">
                          <button type="submit" class="btn btn-teal btn-pill d-sm-inline-block" aria-label="Button" value="1">
                            <i class="ti ti-shopping-cart d-sm-inline-block"></i> Tambah
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="hr-text">Detail Produk</div>
                  <div class="table-responsive">
                    <table id="result" class="table card-table table-vcenter datatable border-x-0">
                      <tbody>
                        <tr>
                          <td width=8%>id</td>
                          <td><span id="lblValue"></span></td>
                          <td width=8% id="lblName">Harga</td>
                          <td>$row->harga_jual ?></td>
                        </tr>
                        <tr>
                          <td width=8%>Produk</td>
                          <td>$row->nama_produk ?></td>
                          <td width=8%>Stok</td>
                          <td>$row->stok ?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="hr-text">Keranjang Belanja</div>
                  <div class="col-lg-12">
                  <div class="table-responsive">
                  <table id="tableKasir" class="table card-table table-vcenter datatable border-x-0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>Produk</th>
                        <th class="text-center">Qty</th>
                        <th style="text-align: right">Satuan</th>
                        <th style="text-align: right">Subtotal</th>
                        <th class="text-center">Opsi</th>
                      </tr>
                    </thead>
                    <tbody><?php foreach ($data_pos as $row) : ?>
                      <tr>
                        <td><?= $row->id_produk ?></td>
                        <td><?= $row->nama_produk ?></td>
                        <td class="text-center"><?= $row->stok ?></td>
                        <td style="text-align: right">
                          <?php
                            $harga_jual = number_format((float)$row->harga_jual, 2, ',', '.');
                            echo $harga_jual;
                          ?>
                        </td>
                        <td style="text-align: right">
                          <?php
                            $harga = $row->harga_jual;
                            $qty = $row->stok;
                            $sub = $harga * $qty;
                            $subtotal = number_format((float)$sub, 2, ',', '.');
                            echo $subtotal;
                          ?>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0);" data="<?= $row->id_produk ?>" class="item-delete btn btn-danger w-1"><i class="ti ti-trash"></i></a>
                        </td>
                      </tr><?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
            <button type="submit" class="btn btn-teal btn-pill d-sm-inline-block"><i class="ti ti-send d-sm-inline-block"></i> Pembayaran</button>
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Libs JS -->
  <script src="<?= base_url() ?>assets/dist/libs/apexcharts/dist/apexcharts.min.js?1685973381" defer></script>
  <script src="<?= base_url() ?>assets/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1685973381" defer></script>
  <script src="<?= base_url() ?>assets/dist/libs/jsvectormap/dist/maps/world.js?1685973381" defer></script>
  <script src="<?= base_url() ?>assets/dist/libs/jsvectormap/dist/maps/world-merc.js?1685973381" defer></script>
  <!-- Tabler Core -->
  <script src="<?= base_url() ?>assets/dist/js/tabler.min.js?1685973381" defer></script>
  <script src="<?= base_url() ?>assets/dist/js/demo.min.js?1685973381" defer></script>

  <script>
  function edValueKeyPress()
  {
    var edValue = document.getElementById("edValue");
    var s = edValue.value;

    var lblValue = document.getElementById("lblValue");
    lblValue.innerText = ""+s;
  
    }
</script>