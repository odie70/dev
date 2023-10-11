	<!-- MODAL	 -->
  <form method="post" action="<?= site_url('service/input') ?>">
<div class="modal modal-blur fade" id="modal-report" tabindex="-1" role="dialog" aria-hidden="true">
		<div class="modal-dialog modal-lg" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title">Input Service</h5>
					<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
				</div>
				<div class="modal-body">
					<div class="mb-3">
						<label class="form-label">Pelanggan</label>
						<input type="text" class="form-control" id="nama" value="<?= set_value('nama'); ?>">
					</div>
					<div class="mb-3">
						<label class="form-label">Phone / Whatsapp</label>
						<input type="text" class="form-control" id="hp" value="<?= set_value('hp'); ?>">
					</div>
					<div class="hr-text">Device(s) Details</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Device</label>
								<div class="input-group input-group-flat">
									<input type="text" class="form-control" id="device" value="<?= set_value('device'); ?>">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">S/N</label>
								<div class="input-group input-group-flat">
									<input type="text" class="form-control" id="noserial" value="<?= set_value('noserial'); ?>">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Acc</label>
								<textarea class="form-control" rows="3" id="kelengkapan" value="<?= set_value('kelengkapan'); ?>"></textarea>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Catatan Pelanggan</label>
								<textarea class="form-control" rows="3" id="note" value="<?= set_value('note'); ?>"></textarea>
							</div>
						</div>
						<div class="hr-text">Status Info</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Perbaikan</label>
								<select class="form-select" id="perbaikan" value="<?= set_value('perbaikan'); ?>">>
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
								<select class="form-select">
                  <option value="Proses" <?php if (set_value('status') == "Proses") : echo "selected"; endif; ?>>Proses</option>
									<option value="Antri" <?php if (set_value('status') == "Antri") : echo "selected"; endif; ?>>Antri</option>
								</select>
							</div>
						</div>
						<div class="hr-text">Auto generate</div>
					<div class="row">
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Invoice</label>
								<div class="input-group input-group-flat">
									<input type="text" class="form-control" id="resi" value="<?php 
																	$permitted_fonts = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
																	$permitted_numbers = '0123456789';
																	echo substr(str_shuffle($permitted_fonts), 0, 3);
																	echo substr(str_shuffle($permitted_numbers), 0, 5);
																?>">
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="mb-3">
								<label class="form-label">Timestamp</label>
								<div class="input-group input-group-flat">
									<input type="text" class="form-control" id="tglmasuk" value="<?php date_default_timezone_set('Asia/Jakarta'); echo $today = date("d-m-Y / H:i:s"); ?>">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn btn-link link-secondary" data-bs-dismiss="modal">
						Batal
					</a>
          <button type="submit" class="btn btn-primary ms-auto" data-bs-dismiss="modal"><i class="ti ti-plus"></i> Tambah Data</button>
				</div>
			</div>
		</div>
	</div>