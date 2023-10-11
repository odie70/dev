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
  <form method="post" action="<?= base_url('printcounter/input') ?>">            
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

            <div class="row">
                <div class="col-lg-12">
                  <div class="mb-3">
                    <div class="input-group input-group-flat">
                      <input type="text" class="form-control" id="invoice_print" name="invoice_print" 
                      value="<?php $permitted_fonts = 'abcdefghijklmnopqrstuvwxyz'; 
                        $permitted_numbers = '0123456789';
                        echo "prt-";
                        echo substr(str_shuffle($permitted_fonts), 0, 3);
                        echo substr(str_shuffle($permitted_numbers), 0, 3);
                        ?>">
                    </div>
                  </div>
                </div>
              </div>

              <div class="hr-text">Invoice</div>

              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Jenis Print</label>
                  <div class="input-group input-group-flat">
                  <select class="form-control" id="jenis_print" name="jenis_print" onchange="pilih_jenis_print(this.value)">
                      <option disabled selected value="">Pilih Jenis Print...</option>
                      <option value="A4-Hitam" <?php if (set_value('jenis_print') == "A4-Hitam") : echo "selected"; endif; ?>>A4-Hitam</option>
                      <option value="A4-Warna" <?php if (set_value('jenis_print') == "A4-Warna") : echo "selected"; endif; ?>>A4-Warna</option>
                      <option value="A3-Hitam" <?php if (set_value('jenis_print') == "A3-Hitam") : echo "selected"; endif; ?>>A3-Hitam</option>
                      <option value="A3-Warna" <?php if (set_value('jenis_print') == "A3-Warna") : echo "selected"; endif; ?>>A3-Warna</option>
                      <option value="Foto" <?php if (set_value('jenis_print') == "Foto") : echo "selected"; endif; ?>>Foto</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Harga / Lembar</label>
                  <div class="input-group input-group-flat">
                  <input id="harga_lembar" name="harga_lembar" class="form-control" type="text" value="<?= set_value('harga_lembar'); ?>">
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div class="mb-3">
                  <label class="form-label">Qty</label>
                  <div class="input-group input-group-flat">
                    <input type="text" locked class="form-control" onblur="calculate()" onchange="calculate()" id="qty" name="qty" value="<?= set_value('qty'); ?>">
                  </div>
                </div>
              </div>
              <div class="table-responsive">
                <table id="tableService" class="table card-table table-vcenter datatable border-x-0">
                  <thead>
                    <tr>
                      <th>Jenis Print</th>
                      <th>Harga/lembar</th>
                      <th>Qty</th>
                      <th>Subtotal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach ($data_printcounter as $row) : ?>
                    <tr>
                      <td><?= $row->jenis_print ?></td>
                      <td>
                        <?php
                          $harga_lembar = number_format((float)$row->harga_lembar, 2, ',', '.');
                          echo $harga_lembar;
                        ?>
                      </td>
                      <td><?= $row->qty ?></td>
                      <td>
                        <?php
                          $harga_total = number_format((float)$row->harga_lembar * $row->qty, 2, ',', '.');
                          echo $harga_total;
                        ?>
                      </td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
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

<script>
function pilih_jenis_print(isi)
{
    if (isi == 'A4-Hitam') {
        $('#harga_lembar').val("1000");
    } else if (isi == "A4-Warna") {
        $('#harga_lembar').val("1500");
    } else if (isi == 'A3-Hitam') {
        $('#harga_lembar').val("3000"); 
    } else if (isi == 'A3-Warna') {
        $('#harga_lembar').val("3500");
    } else if (isi == 'Foto') {
        $('#harga_lembar').val("3500"); 
    } else {
        $('#keterangan').val("ERROR");
    }
} 
</script>


<script>
function calculate() {
        var harga_lembar = document.getElementById('harga_lembar').value; 
        var qty = document.getElementById('qty').value;
        var total = document.getElementById('total'); 
        var total = harga_lembar * qty;
          document.getElementById('total').value = total;

    }
</script>