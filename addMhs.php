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
    INPUT DATA MAHASISWA
		<div class="container-fluid">
			<form action="sv_addMhs.php" method="post">
				<div class="form-group">
					<label for="fnim">NIM : </label><input type="text" class="form-control" name="fnim" id="fnim">
				</div>
				<div class="form-group">
					<label form="fnama"> NAMA : </label><input type="text" class="form-control" name="fnama" id="fnama">
				</div>
				<div class="radio">
				<label for="fjkel"> Jenis Kelamin : </label>
				<label class="radio-inline">
					<input type="radio" name="fjkel" value="L">Laki-Laki
				</label>
				<label class="radio-inline">
					<input type="radio" name="fjkel" value="P">Perempuan
				</label>
				</div>
				<div class="form-group">
				<label form="fkota">KOTA ASAL :</label>
				<select class="form-control" name="fkota" id="fkota">
					<?php
						$arrkota=array('Ambarawa','Jepara','Demak','Semarang','Kendal','Pekalongan','Rembang');
						sort($arrkota);
						foreach($arrkota as $kota){
							echo "<option value=$kota>$kota";
						}
					?>
				</select>
				</div>
				<div class="form-group">	
				<label for="fket"> KETERANGAN </label>
				<textarea class="form-control" name="fket" rows="5" cols="70"></textarea>
				</div>
				<!-- <button type="submit" class="btn btn-outline-success">Kembali <a href="updateMhs.php"></button> -->
				<button type="submit" class="btn btn-outline-success">Simpan</button>
				</div>
			</form>
		</div>
	</body>

	</html>