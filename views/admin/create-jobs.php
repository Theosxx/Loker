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

		.form-loker input, .form-loker textarea, .form-loker select {
			width: 200px;
			height: 30px;
			border-radius: 5px;
			padding-left: 10px;
			margin-bottom: 10px;
		}
	</style>
</head>
<body>
    <?php include 'sidebar.php'; ?>
	<?php 
	include '../../conn.php'; 
	try {
		$query = $conn->query("SELECT company_id , name FROM companies");
		$companies = $query->fetchAll(PDO::FETCH_ASSOC);
	} catch (PDOException $e) {
		echo "Error: " . $e->getMessage();
	}
	?>
	<div class="form-loker">
		<form action="../../controller/jobs/create.php" method="post">
			<label for="">Title</label>
			<input type="text" name="title"> 
			
			<label for="">Company Id </label>
			<select name="company_id" id="">
                <option value="">Pilih Perusahaan</option>
                <?php foreach ($companies as $company): ?>
                    <option value="<?= $company['company_id']; ?>"><?= $company['name']; ?></option>
                <?php endforeach; ?>
            </select>
			
			<label for="">Description</label>
			<input type="text" name="description"> 
			
			<label for="">Requirements</label>
			<textarea name="requirements" id=""></textarea><br>
			
			<label for="">Location</label>
			<input type="text" name="location"> 
			
			<label for="">Salary</label>
			<input type="text" name="salary"> 
			
			<label for="">Type</label>
			<select name="type" id="">
                <option value="full-time">Full-time</option>
                <option value="part-time">Part-time</option>
                <option value="remote">Remote</option>
            </select><br>
			
			<button type="submit" name="simpan" class="btn-simpan">Simpan</button>
		</form>
	</div>
</body>
</html>
