<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AdminSite</title>
	<style>
		.form-loker {
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.form-loker input {
			width: 200px;
			height: 30px;
			border-radius: 5px;
			padding-left: 10px;
		}
	</style>
</head>
<body>
    <?php include 'sidebar.php'; ?>
	<div class="form-loker">
		<form action="../../controller/LokerController.php" method="post">
			<label for="">Nama PT</label>
			<input type="text" name="namaPT"> 
			<label for="">Email PT</label>
			<input type="text" name="emailPT"> 
			<label for="">alamat PT</label>
			<input type="text" name="alamatPT"> 
			<label for="">Jenis PT</label>
			<input type="text" name="jenisPT"> 

			<button type="submit" name="simpan" class="btn-simpan" >Simpan</button>
		</form>
	</div>
</body>
</html>