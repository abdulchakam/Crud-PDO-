<DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="bootstrap/js/jquery.js"></script>
    </head>
    <body>
<?php
    //memanggil file berisi perintah koneksi
    include "koneksi.php";

	 //tampilkan data
	$sql="select * from mhs order by nmmhs";
	$stmt=$conn->prepare($sql);
	$stmt->execute();
?>
<div class="container-fluid">
    <h2 class="text-center">Daftar Mahasiswa</h2>
    <!-- cetak data dengan tampilan Tabel -->
	<br>
	<a class="btn btn-outline-success btn-sm pl-3 pr-3" href="addMhs.php">Tambah Data</a>
    <br>
	<br>
	<table class="table table-hover">
        <thead>
            <tr>
                <th>No.</th>
                <th>NIM </th>
                <th>Nama</th>
                <th>Gender</th>
                <th>Kota</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            //Jika data tidak ada
            $no=1;
            while($row=$stmt->fetch(PDO::FETCH_ASSOC)){   
            ?>
            <tr>
                <td><?php echo $no ?></td>
                <td><?php echo $row ["nim"] ?></td>
                <td><?php echo $row ["nmmhs"] ?></td>
                <td><?php echo $row ["jns_kel"] ?></td>
                <td><?php echo $row ["kota"] ?></td>
                <td><?php echo $row ["ket"] ?></td> 
                <td>
                    <a class="btn btn-outline-primary" href="editMhs.php?qnim=<?php echo $row['nim'] ?>">Edit</a>
                    <a class="btn btn-outline-danger" href="hpsMhs.php?qnim=<?php echo $row['nim'] ?>"onclick="return confirm('Yakin Hapus?')">Hapus</a>
                </td>
            </tr>
            <?php
                $no++;
            }
            ?>
        </tbody>
        </table>
        </div>
        </body>
</html>