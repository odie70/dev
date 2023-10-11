<script>
$(document).ready(function() {
				$('.select2').select2();
				$('.datatable').DataTable();
				$('.kode-servis').hide();
				var persen_ppn = $('#ppn_persen');
				var subtotal = $('#subtotal');
				var grandtotal = $('#grandtotal');
				var ppn_rp = $('#nominal_ppn');
				persen_ppn.keyup(function() {
					var persen = document.getElementById('ppn_persen').value;
					if (persen == null || persen == 0) {
						grandtotal.val(subtotal.val());
						ppn_rp.val(0);
					} else {
						var nominal_ppn = subtotal.val() * persen_ppn.val() / 100;
						ppn_rp.val(nominal_ppn);
						var total = Number(subtotal.val()) + Number(nominal_ppn);
						grandtotal.val(total);

					}
				});
				function hitung_servis() {
                	var qty = $('#detil_qty');
                	var subtotal = $('#detil_total_servis');
                	var price = $('#harga_detil_servis');
                	var diskon = $('#detil_diskon_servis');
                	qty.keyup(function () {
                		var jum = document.getElementById('detil_qty').value;
                		if (jum == null) {
                			subtotal.val(subtotal.val());
                		} else {
                			var total = price.val() * qty.val();
                			subtotal.val(total);
                		}
                	});
                	price.keyup(function () {
                		var jum = price.val();
                		if (jum == null) {
                			subtotal.val(subtotal.val());
                		} else {
                			var total = price.val() * qty.val() - diskon.val();
                			subtotal.val(total);
                		}
                	});
                	diskon.keyup(function () {
                		var jum = diskon.val();
                		if (jum == null) {
                			subtotal.val(subtotal.val());
                		} else {
                			var total = price.val() - diskon.val();
                			subtotal.val(total);
                		}
                	});
                }
                hitung_servis();
				diskon();
				totalbayar();
				invoice();
				discbeli();
				$('#ppn_persen').val(0);
				$('#nominal_ppn').val(0);
				$('#diskon1').val(0);
				$('#diskonbeli').val(0);
				$('#selisih').val(0);
				grafikKategori();
				grafikKas();
				grafikPendapatan();
				grafikTerlaris();
			})
</script>