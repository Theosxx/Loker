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
		<form action="../../controller/loker/create.php" method="post">
			<label for="">Nama PT</label>
			<input type="text" name="name"> 
			<label for="">Jenis Industri</label>
			<input type="text" name="industry"> 
			<label for="">alamat PT</label>
			<input type="text" name="location"> 
			<label for="">Web Url</label>
			<input type="text" name="website"> 
			<button type="submit" name="simpan" class="btn-simpan" >Simpan</button>
		</form>
	</div>
</body>
</html>