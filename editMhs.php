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
        include "koneksi.php";
        
        $nim=$_GET['qnim'];
        $stmt=$conn->prepare("select * from mhs where nim='$nim'");
		$stmt->execute();
		$data=$stmt->fetch(PDO::FETCH_ASSOC);
    ?>    
		<div class="container-fluid">
			<form action="sv_editMhs.php" method="post">
				<div class="form-group">
					<label for="fnim">NIM : </label><input type="text" class="form-control" name="fnim" id="fnim" value="<?php echo $data ['nim']?>" readonly>
				</div>
				<div class="form-group">
					<label form="fnama"> Nama : </label><input type="text" class="form-control" name="fnama" id="fnama" value="<?php echo $data ['nmmhs']?>">
				</div>
                <div class="form-group">
                    <?php
                        $laki=' '; $perempuan=' ';
                            if($data['jns_kel']=='L'){
                                $laki='checked';
                            }else{
                                $perempuan='checked';
                            }
                    ?>
				<div class="radio">
				<label for="fjkel"> Jenis Kelamin : </label>
				<label class="radio-inline">
					<input type="radio" name="fjkel" value="L" <?php echo $laki ?>>Laki-Laki
				</label>
				<label class="radio-inline">
					<input type="radio" name="fjkel" value="P"<?php echo $perempuan ?>>Perempuan
				</label>
				</div>
                </div>
				<div class="form-group">
				<label form="fkota"> Kota asal :</label>
				<select class="form-control" name="fkota" id="fkota">
					<?php
						$arrkota=array('Ambarawa','Jepara','Demak','Semarang','Kendal','Pekalongan','Rembang');
						sort($arrkota);
						foreach($arrkota as $kota){
                            if ($data ['kota']==$kota){
                                echo"<option value=$kota selected>$kota";
                            }else{
                                echo"<option value=$kota>$kota";
                            }
						}
					?>
				</select>
				</div>
				<div class="form-group">	
				<label for="fket"> keterangan : </label>
				<textarea class="form-control" name="fket" rows="5" cols="70"></textarea>
				</div>
				<button type="submit" class="btn btn-outline-success">Simpan</button>
				</div>
			</form>
		</div>
	</body>

	</html>