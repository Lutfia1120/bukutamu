<?php
include('template/header.php');
include('template/sidebar.php') ;
include('connection.php');

echo "<table border = 1>";
$nama_tamu=$_POST['nama_tamu'];
$alamat_tamu=$_POST['alamat_tamu'];
$notelp_tamu=$_POST['notelp_tamu'];
$pesan_tamu=$_POST['pesan_tamu'];
?>

<?php
if(($nama_tamu!="") && ($alamat_tamu!="") && ($notelp_tamu!="") && ($pesan_tamu!="")) 
{
    $sql="INSERT INTO bukutamu(nama_tamu, alamat_tamu, notelp_tamu, pesan_tamu, tanggal_bertamu)
          values('$nama_tamu', '$alamat_tamu', '$notelp_tamu', '$pesan_tamu', now())";
    $hasil = mysqli_query ($koneksi, $sql);
       if ($hasil){
           echo "<tr><td colspan = 2> Data Telah Disimpan!";
       } else{
           echo "<tr><td colspan = 2> Data Gagal Disimpan!";
       }    
}else{
    echo "<tr><td colspan=2> Data Masih Kosong";
}
?>
