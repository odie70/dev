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
  <form method="post" action="<?= base_url('produk/kasir') ?>">
  <div class="page-body">
    <div class="container-xl">
      <div class="row justify-content-center">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title">Produk Form</h4>
            </div>
            <div class="card-body">
              <div class="row">
                <div class="row">
                <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Invoice</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="resi" name="resi" 
                        value="<?php 
                                  $permitted_fonts = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; $permitted_numbers = '0123456789';
                                  date_default_timezone_set('Asia/Jakarta');
                                  echo "INV";
                                    echo "/";
                                    echo $today = date("dmy");
                                    echo "/";
                                    echo substr(str_shuffle($permitted_fonts), 0, 3);
                                    echo substr(str_shuffle($permitted_numbers), 0, 5);
                                ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Timestamp</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="tgl_stok" name="tgl_stok" value="<?php date_default_timezone_set('Asia/Jakarta'); echo $today = date("d-m-Y / H:i"); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Barcode</label>
                      <div class="input-group input-group-flat">
                        <input type="text" class="form-control" id="kode_produk" name="kode_produk" value="<?= set_value('kode_produk'); ?>">
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3">
                    <div class="mb-3">
                      <label class="form-label">Qty</label>
                      <div class="input-group input-group-flat">
                        <input type="number" class="form-control" id="tgl_stok" name="tgl_stok" value="1">
                        <button type="submit" class="btn btn-success d-sm-inline-block"><i class="ti ti-shopping-cart d-sm-inline-block"></i> Tambah</button>
                      </div>
                    </div>
                  </div>
                  <div class="hr-text"></div>
                  <div class="col-lg-12">
                  <div class="table-responsive">
									<table id="tableKasir" class="table card-table table-vcenter text-nowrap datatable border">
										<thead>
											<tr>
												<th>ID</th>
												<th>Produk</th>
                        <th class="text-center">Qty</th>
												<th style="text-align: right">@Harga</th>
                        <th style="text-align: right">Subtotal</th>
												<th class="text-center">Opsi</th>
											</tr>
										</thead>
										<tbody><?php foreach ($data_produk as $row) : ?>
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
            </div>
            <div class="card-footer text-end">
              <button type="submit" class="btn btn-success d-sm-inline-block"><i class="ti ti-send d-sm-inline-block"></i> Pembayaran</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

                  