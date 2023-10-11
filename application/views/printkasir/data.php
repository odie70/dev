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
							<li class="breadcrumb-item" aria-current="page"><a href="<?= base_url('service') ?>">Service</a></li>
							<li class="breadcrumb-item active" aria-current="page"><a href="<?= base_url('service') ?>/data"><?= $breadcrumb ?></a></li>
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
						<a href="<?= base_url('service') ?>/input" class="btn btn-<?= $current_user->theme ?> d-none d-sm-inline-block">
							<i class="ti ti-plus d-sm-inline-block"></i> Input Baru
						</a>
						<a href="<?= base_url('service') ?>/input" class="btn btn-<?= $current_user->theme ?> d-sm-none btn-icon">
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
									<table id="tableService" class="table card-table table-vcenter datatable border-x-0">
										<thead>
											<tr>
												<th>ID</th>
												<th>Invoice</th>
												<th>Customer</th>
												<th>Jenis Print</th>
												<th>Perbaikan</th>
												<th>Timestamp</th>
												<th>Status</th>
												<th>Opsi</th>
											</tr>
										</thead>
										<tbody>
											<?php foreach ($data_service as $row) : ?>
											<tr>
												<td><?= $row->id_service ?></td>
												<td>
													<?php
														$status = $row->status;
														$resi = $row->no_invoice;
														$linknota = base_url('service/nota/' . $row->id_service);
														$linkresi = base_url('service/invoice/' . $row->id_service);
														if ($status == 'Selesai' || $status == 'Return')
														{ echo "<a href='$linkresi'>$resi</a>"; }
															else 
														{ echo "<a href='$linknota'>$resi</a>"; }
													?>
												</td>
												<td><?= $row->nama_pelanggan ?></td>
												<td><?= $row->nama_device ?></td>
												<td><?= $row->perbaikan ?></td>
												<td><i class='ti ti-calendar-time'></i> <?= $row->tgl_masuk ?> <i class='ti ti-clock'></i> <?= $row->jam_masuk ?></td>
												<td>
													<?php
														$status = $row->status;
														if ($status == 'Antri') {
														echo "<span class='badge bg-secondary me-1'></span> $status";
														} elseif ($status == "Proses") {
														echo "<span class='badge bg-primary me-1'></span> $status";
														} elseif ($status == "Konfirmasi") {
														echo "<span class='badge bg-warning me-1'></span> $status";
														} elseif ($status == "Selesai") {
														echo "<span class='badge bg-success me-1'></span> $status";
														} elseif ($status == "Return") {
														echo "<span class='badge bg-danger me-1'></span> $status";
														}
													?>
												</td>
												<td class="text-center">
													<a href="<?= base_url('service/detail/' . $row->id_service) ?>" class="btn btn-primary w-2"><i class="ti ti-folder"></i></a>
													<?php $status = $row->status;
													$linkinvoice = base_url('service/invoice/' . $row->id_service);
													$linkselesai = base_url('service/selesai/' . $row->id_service);
													if ($status == 'Selesai' || $status == 'Return') 
													{ echo "<a href='$linkinvoice' class='btn btn-dark w-2'><i class='ti ti-receipt'></i></a>"; } 
													else
													{ echo "<a href='$linkselesai' class='btn btn-success w-2'><i class='ti ti-checks'></i></a>"; }
													?>
													<a href="javascript:void(0);" data="<?= $row->id_service ?>" class="item-delete btn btn-danger w-2"><i class="ti ti-trash"></i></a>
												</td>
											</tr>
											<?php endforeach; ?>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Modal dialog hapus data-->
		<div class="modal modal-blur fade" id="ModalServiceDel" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <div class="modal-status bg-danger"></div>
          <div class="modal-body text-center py-4">
            <!-- Download SVG icon from http://tabler-icons.io/i/alert-triangle -->
            <svg xmlns="http://www.w3.org/2000/svg" class="icon mb-2 text-danger icon-lg" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10.24 3.957l-8.422 14.06a1.989 1.989 0 0 0 1.7 2.983h16.845a1.989 1.989 0 0 0 1.7 -2.983l-8.423 -14.06a1.989 1.989 0 0 0 -3.4 0z" /><path d="M12 9v4" /><path d="M12 17h.01" /></svg>
            <h3>Hapus Data?</h3>
            <div class="text-muted"><?php $data = $data_service ?></div>
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



