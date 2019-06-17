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
$sql="insert into mhs values('$nim','$nama','$jkel','$kota','$ket')";

//simpan ke database
$stmt=$conn->prepare($sql);
$stmt->execute();

//tutup koneksi
$conn=null;

//kembali ke form setelah selesai mengisi form
header("location:addMhs.php");
?>