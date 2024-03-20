<?php 
// koneksi database
include '../../koneksi/koneksi.php';
 
// menangkap data yang di kirim dari form
$id = $_POST['IDbuku'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit '];
$tahunterbit = $_POST['tahunterbit'];
 
// update data ke database
mysqli_query($koneksi,"UPDATE bukuu set judul='$judul', penulis='$penulis', penerbit='$penerbit', 
                        ='$tahunterbit' where IDbuku='$id'");
 
// mengalihkan halaman kembali ke index.php
header("location:../buku.php");
 
?>

