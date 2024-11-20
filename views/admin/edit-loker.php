<?php
require '../../conn.php';
$id = $_GET['id'];
$stmt = $conn->prepare("SELECT * FROM companies WHERE company_id = :id");
$stmt->execute([':id' => $id]);
$company = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$company) {
    die("Company not found!");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>AdminSite</title>
</head>
<body>
	<?php include 'sidebar.php'; ?>
    <div class="container-edit-loker">
    <h1>Edit Company</h1>
    <form action="../../controller/loker/edit.php" method="POST">
    <input type="hidden" name="id" value="<?= $id ?>">
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="<?= htmlspecialchars($company['name']) ?>" required><br>

        <label for="industry">Industry:</label>
        <input type="text" name="industry" id="industry" value="<?= htmlspecialchars($company['industry']) ?>"><br>

        <label for="location">Location:</label>
        <input type="text" name="location" id="location" value="<?= htmlspecialchars($company['location']) ?>"><br>

        <label for="website">Website:</label>
        <input type="text" name="website" id="website" value="<?= htmlspecialchars($company['website']) ?>"><br>

        <button type="submit" style="margin-top: 10px;">Update</button>
    </form>
    <a href="index.php">Back</a>
    </div>
</body>
</html>