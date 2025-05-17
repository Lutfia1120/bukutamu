<?php include('Template/header.php') ?>
<?php include('Template/sidebar.php') ?>
<?php
include('connection.php')
?>
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        DATA BUKU TAMU
        <small>SMK IGASAR PINDAD BANDUNG</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hasil Input data</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Tamu</th>
                  <th>Alamat Tamu</th>
                  <th>No.Telpon</th>
                  <th>Pesan</th>
                  <th>Tanggal Bertamu</th>
                </tr>
                </thead>
                <tr>
                <?php
$sql="SELECT * FROM bukutamu order by tanggal_bertamu desc";
$hasil=mysqli_query ($koneksi, $sql);
$totaldata= mysqli_num_rows ($hasil);

$no=1;

if($totaldata==0){
    echo "Data Masih Kosong";
}else{
    while($row=mysqli_fetch_assoc($hasil)){ ?>
    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $row['nama_tamu']; ?></td>
        <td><?php echo $row['alamat_tamu']; ?></td>
        <td><?php echo $row['notelp_tamu']; ?></td>
        <td><?php echo $row['pesan_tamu']; ?></td>
        <td><?php echo $row['tanggal_bertamu']; ?></td>
    </tr>

   <?php $no++; }
}
?>
                
</div>
</div>

