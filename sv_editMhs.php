<?php
//koneksi ke database
include "koneksi.php";

//salin data ke variabel simpel
$nim  = $_POST ['fnim'];
$nama = $_POST ['fnama'];
$jkel = $_POST ['fjkel'];
$kota = $_POST ['fkota'];
$ket  = $_POST ['fket'];

//buat perintah sql_regcase
$sql="update mhs set nmmhs='$nama', jns_kel='$jkel', kota='$kota', ket='$ket' where nim='$nim'";

//simpan ke database
$stmt=$conn->prepare($sql);
$stmt->execute();

//tutup koneksi
mysqli_close($koneksi);

//kembali ke form setelah selesai mengisi form
header("location:updateMhs.php");
?>