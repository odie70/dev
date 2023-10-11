<div class="page-wrapper">
	<!-- Page header -->
	<div class="page-header d-print-none text-white">
		<div class="container-xl">
			<div class="row g-2 align-items-center">
				<div class="col">
					<!-- Page pre-title -->
					<div class="page-pretitle">
						<ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
							<li class="breadcrumb-item"><a href="<?= base_url() ?>">dashboard</a></li>
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('produk') ?>">Produk</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('produk') ?>/data">Data</a></li>
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
						<a href="<?= base_url('produk') ?>/input" class="btn btn-<?= $current_user->theme ?> d-none d-sm-inline-block">
							<i class="ti ti-plus d-sm-inline-block"></i> Input Baru
						</a>
						<a href="<?= base_url('produk') ?>/input" class="btn btn-<?= $current_user->theme ?> d-sm-none btn-icon">
							<i class="ti ti-plus d-sm-inline-block"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Page body -->
	<div class="page-body">
		<div class="container-xl">
			<div class="row row-deck row-cards">
				<div class="col-12">
					<div class="card">
						<div class="card-body">
							<div class="row">
								<div class="table-responsive">
									<table id="tableProduk" class="table card-table table-vcenter text-nowrap datatable border-x-0">
										<thead>
											<tr>
												<th>ID</th>
												<th>Barcode</th>
												<th>Produk</th>
												<th>Merk</th>
												<th>Harga Beli</th>
												<th>Harga Jual</th>
												<th>Stok</th>
												<th>Opsi</th>
											</tr>
										</thead>
										<tbody><?php foreach ($data_produk as $row) : ?>
											<tr>
												<td><?= $row->id_produk ?></td>
												<td><?= $row->kode_produk ?></td>
												<td><?= $row->nama_produk ?></td>
												<td><?= $row->merk ?></td>
												<td>
													<?php
														$harga_beli = number_format((float)$row->harga_beli, 2, ',', '.');
														echo $harga_beli;
													?>
												</td>
												<td>
													<?php
														$harga_jual = number_format((float)$row->harga_jual, 2, ',', '.');
														echo $harga_jual;
													?>
												</td>
												<td>
													<?php
														$stok = $row->stok;
														if ($stok > 1) {
														echo "<span class='badge bg-success me-1'></span> $stok";
														} elseif ($stok == 1) {
														echo "<span class='badge bg-secondary me-1'></span> $stok";
														} elseif ($stok == "Selesai") {
														echo "<span class='badge bg-success me-1'></span> $stok";
														} elseif ($stok < 1) {
														echo "<span class='badge bg-danger me-1'></span> $stok";
														}
													?>
												</td>
												<td class="text-center">
													<a href="<?= base_url('produk/detail/' . $row->id_produk) ?>" class="btn btn-primary w-5"><i class="ti ti-folder"></i></a>
													<a href="<?= base_url('produk/ubah/' . $row->id_produk) ?>" class="btn btn-cyan w-5"><i class="ti ti-pencil-plus"></i></a>
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
			</div>
		</div>
	</div>

		<!-- Modal dialog hapus data-->
		<div class="modal modal-blur fade" id="ModalProdukDel" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-status bg-danger"></div>
          <div class="modal-body text-center py-4">
            <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" /><path d="M12 9v4" /><path d="M12 17h.01" /></svg>
            <h3>Hapus Data?</h3>
            <div class="text-muted"><?php $data = $data_produk ?></div>
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



