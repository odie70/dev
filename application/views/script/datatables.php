<!-- Required datatable js -->
<script src="<?php echo base_url(); ?>assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
<!-- Buttons examples -->
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/pdfmake/build/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/pdfmake/build/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

<script src="<?php echo base_url(); ?>assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-select/js/dataTables.select.min.js"></script>

<!-- Responsive examples -->
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

<!-- Datatable init js -->

<script src="<?php echo base_url(); ?>assets/js/app.js"></script>

<!-- DataTables Script -->
<script>
//menampilkan data ketabel dengan plugin datatables tableService
$('#tableService').DataTable(
{language:{paginate:{previous:"<i class='ti ti-chevron-left'>", next:"<i class='ti ti-chevron-right'>"}},
drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}, 
"responsive": true, "paging": true, "lengthChange": false, "autoWidth": true, "order": [[0, 'desc']],
"buttons": ["pdf", "print", "colvis"]
}).buttons().container().appendTo('#tableService_wrapper .col-md-6:eq(0)');
</script>

<script>
//menampilkan data ketabel dengan plugin datatables tableService
$('#tableServiceDash').DataTable(
{language:{paginate:{previous:"<i class='ti ti-chevron-left'>", next:"<i class='ti ti-chevron-right'>"}},
drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}, 
"responsive": true, pageLength : 5, "paging": true, "lengthChange": false, "autoWidth": true, "order": [[0, 'desc']],
"buttons": [""]
}).buttons().container().appendTo('#tableServiceDash_wrapper .col-md-6:eq(0)');
</script>

<script>
//menampilkan data ketabel dengan plugin datatables tableService
$('#tableProduk').DataTable(
{language:{paginate:{previous:"<i class='ti ti-chevron-left'>", next:"<i class='ti ti-chevron-right'>"}},
drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}, 
"responsive": true, "paging": true, "lengthChange": false, "autoWidth": true, "order": [[0, 'asc']],
"buttons": ["pdf", "print", "colvis"]
}).buttons().container().appendTo('#tableService_wrapper .col-md-6:eq(0)');
</script>

<script>
//menampilkan data ketabel dengan plugin datatables tableService
$('#tableProdukDash').DataTable(
{language:{paginate:{previous:"<i class='ti ti-chevron-left'>", next:"<i class='ti ti-chevron-right'>"}},
drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}, 
"responsive": true, pageLength : 5, "paging": true, "lengthChange": false, "autoWidth": true, "order": [[0, 'asc']],
"buttons": [""]
}).buttons().container().appendTo('#tableProdukDash_wrapper .col-md-6:eq(0)');
</script>

<script>
//menampilkan data ketabel dengan plugin datatables tableService
$('#tableKasir').DataTable(
{language:{paginate:{previous:"<i class='ti ti-chevron-left'>", next:"<i class='ti ti-chevron-right'>"}},
drawCallback:function(){$(".dataTables_paginate > .pagination").addClass("pagination-rounded")}, 
"responsive": true, pageLength : 5, "paging": false, "lengthChange": false, "bFilter": false, "bInfo": false, "autoWidth": true, "order": [[0, 'asc']],
"buttons": [""]
}).buttons().container().appendTo('#tableProdukDash_wrapper .col-md-6:eq(0)');
</script>

<!-- Modal Script -->
<script>
//menampilkan modal dialog saat tombol hapus ditekan
$('#tableService').on('click', '.item-delete', function() {
//ambil data dari atribute data
var id = $(this).attr('data');
$('#ModalServiceDel').modal('show');
//ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete
//pada controller mahasiswa
$('#btdelete').unbind().click(function() {
$.ajax({
type: 'ajax',
method: 'get',
async: false,
url: '<?php echo base_url() ?>service/delete/',
data: {
id: id
},
dataType: 'json',
success: function(response) {
$('#ModalServiceDel').modal('hide');
location.reload();
}
});
});
});
</script>

<script>
//menampilkan modal dialog saat tombol hapus ditekan
$('#tableProduk').on('click', '.item-delete', function() {
//ambil data dari atribute data
var id = $(this).attr('data');
$('#ModalProdukDel').modal('show');
//ketika tombol lanjutkan ditekan, data id akan dikirim ke method delete
//pada controller mahasiswa
$('#btdelete').unbind().click(function() {
$.ajax({
type: 'ajax',
method: 'get',
async: false,
url: '<?php echo base_url() ?>produk/delete/',
data: {
id: id
},
dataType: 'json',
success: function(response) {
$('#ModalProdukDel').modal('hide');
location.reload();
}
});
});
});
</script>

