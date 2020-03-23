  <?php
include 'koneksi.php';
session_start();
  ?>

        <div class="main-content container-fluid">
          <div class="row">
            <div class="col-xs-12 col-md-12">
              <div class="panel panel-border-color panel-border-color-primary">
                <div class="panel-heading panel-heading-divider">Selamat Datang <span class="panel-subtitle">Pengguna Aplikasi</span></div>
                <div class="panel-body"><h4>
                  <p style="padding: ">Analisis Regresi Linear Berganda digunakan untuk melihat pengaruh antara lebih dari satu variabel, yang dalam penelitian ini adalah isi (content), keakuratan (accuracy), bentuk (format), kemudahan pengguna (ease of use) dan ketepatan waktu (timeliness) terhadap kepuasan pemakai atau pengguna.</p>
                  <p><h5></span> Mohammad Fitra Ashari Ⓒ2019 .</h5></p>
                  <p>
                  <center><button class="btn btn-space btn-primary btn-big" data-toggle="modal" data-target="#form-bp1" type="button"><i class="icon mdi mdi-upload"></i> Upload Data </button></a>
                  <a href="export.php"><button class="btn btn-space btn-success btn-big" ><i class="icon mdi mdi-download"></i> Export Data </button></a>
                  <button data-toggle="modal" data-target="#mod-warning" type="button" class="btn btn-space btn-danger btn-big" ><i class="icon mdi mdi-delete"></i> Clear Data </button></center></p>
                </div>
              </div>
            </div>

          </div>
               <div id="mod-warning" tabindex="-1" role="dialog" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close"><span class="mdi mdi-close"></span></button>
          </div>
          <div class="modal-body">
            <div class="text-center">
              <div class="text-warning"><span class="modal-main-icon mdi mdi-alert-triangle"></span></div>
                          <h3>Warning!</h3>
                          <p>Anda Akan Menghapus Semua Data Yang Ada.<br>Apakah Anda Yakin?</p>
                          <div class="xs-mt-50">
                            <button type="button" data-dismiss="modal" class="btn btn-default btn-space modal-close">Cancel</button>
                            <a href="reset.php"><button type="button" class="btn btn-success btn-space modal-close">Proceed</button></a>
              </div>
            </div>
          </div>
          <div class="modal-footer"></div>
        </div>
      </div>
    </div>
 <div id="form-bp1" tabindex="-1" role="dialog" class="modal fade colored-header colored-header-primary">
      <div class="modal-dialog custom-width">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" data-dismiss="modal" aria-hidden="true" class="close md-close"><span class="mdi mdi-close"></span></button>
            <h3 class="modal-title">Upload Data</h3>
          </div><form method="post" enctype="multipart/form-data" action="upload_aksi.php">
          <div class="modal-body">
            <div class="form-group">
              <label>Pilih File</label>
              <input name="filexls" type="file" class="form-control">
              <label>* Data yang diupload berupa file Microsoft Excel dengan format .xls</label>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" data-dismiss="modal" class="btn btn-default md-close">Cancel</button>
            <input name="upload" type="submit" value="Import" class="btn btn-primary">
            
          </div>
          </form>
        </div>
      </div>
    </div>
    
              </div>
