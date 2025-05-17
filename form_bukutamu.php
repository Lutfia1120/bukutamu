<?php include('Template/header.php') ?>
<?php include('Template/sidebar.php') ?>


<div class="content-wrapper">
     <section class="content-header">
      <h1>
         FORM BUKU TAMU
        <small>SMK IGASAR PINDAD BANDUNG</small>
      </h1>
    </section>
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">INPUT BUKU TAMU</h3>
            </div>
            <form action = "simpan.php" method ="post">
              <div class="box-body">
              <div class="form-group">
                  <label for="exampleInputNama">Nama</label>
                  <input type="text" class="form-control" id="exampleInputNama" name = "nama_tamu" placeholder="Enter Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputAlamat">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputAlamat" name = "alamat_tamu" placeholder="Enter Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputNoTelp">No.Telp</label>
                  <input type="text" class="form-control" id="exampleInputNotelp" name = "notelp_tamu" placeholder="Enter No.Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputPesan">Pesan</label>
                  <textarea name = "pesan_tamu" class="form-control" cols = "21" rows = "2"></textarea>
                </div>
      
              </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>