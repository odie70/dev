<div class="page-wrapper">
  <div class="page-header d-print-none text-white">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <div class="page-pretitle">
            <ol class="breadcrumb breadcrumb-arrows" aria-label="breadcrumbs">
              <li class="breadcrumb-item active" aria-current="page"><?= $breadcrumb ?></a></li>
            </ol> 
          </div>
          <h2 class="page-title">
            <?= $title ?>
          </h2>
        </div>
      </div>
    </div>
  </div>

    <div class="page-body">
      <div class="container-xl">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-header btn-primary">
                <h4 class="card-title">Operator</h4>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-lg-5">
                    <div class="mb-3">
                      <label class="form-label">Kode Produk</label>
                      <input class="form-control" id="edValue" type="text" onKeyPress="edValueKeyPress()" onKeyUp="edValueKeyPress()">
                      <span id="lblValue"></span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-end">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<script>
  function edValueKeyPress()
  {
    var edValue = document.getElementById("edValue");
    var s = edValue.value;

    var lblValue = document.getElementById("lblValue");
    lblValue.innerText = ""+s;
  
    }
</script>