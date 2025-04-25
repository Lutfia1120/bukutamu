<?php include('Template/header.php') ?>
<?php include('Template/sidebar.php') ?>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        General Form Elements
        <small>Preview</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">General Elements</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">INPUT BUKU TAMU</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">NO</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nomor">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Tamu</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Alamat Tamu</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Alamat">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No.Telp</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter No.Telp">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Pesan</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Pesan">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" id="exampleInputFile">

                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox"> Check me out
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>