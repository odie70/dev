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
      <form method="post" action="<?= base_url('printkasir/input') ?>">
      
      <!-- Page body -->
      <div class="page-body">
        <div class="container-lg">
        <div class="row justify-content-center">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"><i class="ti ti-user"></i><?= $current_user->username ?></h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="input-group input-group-flat">
                  <input type="text" hidden class="form-control" id="invoice_print" name="invoice_print" 
                  value="<?php foreach ($data_printkasir as $row) :
                          $invoice = $row->invoice_print;
                          endforeach;
                          $permitted_fonts = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
                          $permitted_numbers = '0123456789';
                          
                          if (!$data_printkasir) {
                            echo substr(str_shuffle($permitted_fonts), 0, 3);
                            echo substr(str_shuffle($permitted_numbers), 0, 5);
                          } else {
                            echo $invoice;
                          }
                        
                          ?>">
                </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Pelanggan</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="nama_pelanggan" name="nama_pelanggan"
                        value="<?php foreach ($data_printkasir as $row) :
                          $nama_pelanggan = $row->nama_pelanggan;
                          endforeach;
                          
                          if (!$data_printkasir) {
                            echo "Tunai";
                          } else {
                            echo $nama_pelanggan;
                          }
                        
                          ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-2">
                    <div class="mb-3">
                      <label class="form-label">Qty</label>
                      <div class="input-group input-group-flat">
                      <input type="text" locked class="form-control" id="qty" name="qty" value="<?= set_value('qty'); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="mb-3">
                      <label class="form-label">Kode Produk</label>
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
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Harga / Lembar</label>
                      <div class="row g-2">
                        <div class="col">
                        <input id="harga_lembar" name="harga_lembar" class="form-control" type="text" onfocus="calculate()" onblur="calculate()" onchange="calculate()" value="<?= set_value('harga_lembar'); ?>">
                        </div>
                        <div class="col-auto">
                          <button type="submit" class="btn btn-teal d-sm-inline-block" aria-label="Button" value="1">
                            <i class="ti ti-shopping-cart d-sm-inline-block"></i> Tambah
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                  <input type="text" hidden text-align="right" locked class="form-control" onblur="calculate()" onchange="calculate()" id="total" name="total" value="<?= set_value('total'); ?>">
                  </div>
                  <div class="hr-text">Summary</div>
                  <div class="col-lg-12">
                  <div class="table-responsive">
                  <table id="tablePrintCounter" class="table card-table table-vcenter datatable border-x-0">
                    <thead>
                      <tr>
                        <th>ID</th>
                        <th>INV</th>
                        <th>Pelanggan</th>
                        <th>Print</th>
                        <th>Qty</th>
                        <th>Harga/Lembar</th>
                        <th>Subtotal</th>
                        <th>Opsi</th>
                      </tr>
                    </thead>
                    <tbody><?php foreach ($data_printkasir as $row) : ?>
                      <tr>
                        <td><?= $row->id_print ?></td>
                        <td><?= $row->invoice_print ?></td>
                        <td><?= $row->nama_pelanggan ?></td>
                        <td><?= $row->jenis_print ?></td>
                        <td><?= $row->qty ?></td>
                        <td>
                          <?php
                            $harga_lembar = number_format((float)$row->harga_lembar, 2, ',', '.');
                            echo $harga_lembar;
                          ?>
                        </td>
                        <td>
                          <?php
                            $harga = $row->harga_lembar;
                            $qty = $row->qty;
                            $sub = $harga * $qty;
                            $subtotal = number_format((float)$sub, 2, ',', '.');
                            echo $subtotal;
                          ?>
                        </td>
                        <td class="text-center">
                          <a href="javascript:void(0);" data="<?= $row->id_print ?>" class="item-delete btn btn-danger w-1"><i class="ti ti-trash"></i></a>
                        </td>
                      </tr><?php endforeach; ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="card-footer text-end">
          <?= $this->session->flashdata('message') ?>
            <button type="submit" class="btn btn-teal d-sm-inline-block"><i class="ti ti-send d-sm-inline-block"></i> Pembayaran</button>
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

function calculate() {
        var harga_lembar = document.getElementById('harga_lembar').value; 
        var qty = document.getElementById('qty').value;
        var total = document.getElementById('total'); 
        var total = harga_lembar * qty;
          document.getElementById('total').value = total;

    }
</script>

<!-- Modal dialog hapus data-->
<div class="modal modal-blur fade" id="ModalPrintDel" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-status bg-danger"></div>
          <div class="modal-body text-center py-4">
            <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" /><path d="M12 9v4" /><path d="M12 17h.01" /></svg>
            <h3>Hapus Data?</h3>
            <div class="text-muted"><?php $data = $data_printkasir ?></div>
          </div>
          <div class="modal-footer">
              <div class="row">
                <div class="col">
								<button type="button" class="btn btn-light waves-effect w-100" data-bs-dismiss="modal">Batal</button>
								</div>
                <div class="col">
								<button type="button" class="btn btn-danger w-100" id="btdelete">Hapus!</button>
								</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
		<!-- Modal dialog hapus data-->

    <script>
//menampilkan modal dialog saat tombol hapus ditekan
$('#tablePrintCounter').on('click', '.item-delete', function() {
//ambil data dari atribute data
var id = $(this).attr('data');
$('#ModalPrintDel').modal('show');
//ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete
//pada controller mahasiswa
$('#btdelete').unbind().click(function() {
$.ajax({
type: 'ajax',
method: 'get',
async: false,
url: '<?php echo base_url() ?>printkasir/delete/',
data: {
id: id
},
dataType: 'json',
success: function(response) {
$('#ModalPrintDel').modal('hide');
location.reload();
}
});
});
});
</script>