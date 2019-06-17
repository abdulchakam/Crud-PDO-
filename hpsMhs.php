<?php 
        include "koneksi.php";
        $nim=$_GET['qnim'];
        $sql="delete from mhs where nim='$nim'";
        $stmt=$conn->prepare($sql);
		$stmt->execute();
header("location:updateMhs.php");
?>