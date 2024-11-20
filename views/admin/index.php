<?php
require '../../conn.php';
$stmt = $conn->query("SELECT * FROM companies ORDER BY created_at DESC");
$companies = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
	<div class="container-data">
		<h1>Company List</h1>
		<a href="create-loker.php">Add New Company</a>
	</div>
	<div class="container-table-loker">
		<table border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>Industry</th>
					<th>Location</th>
					<th>Website</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($companies as $company): ?>
					<tr>
						<td><?= $company['company_id'] ?></td>
						<td><?= htmlspecialchars($company['name']) ?></td>
						<td><?= htmlspecialchars($company['industry']) ?></td>
						<td><?= htmlspecialchars($company['location']) ?></td>
						<td><a href="<?= htmlspecialchars($company['website']) ?>" target="_blank"><?= htmlspecialchars($company['website']) ?></a></td>
						<td>
							<a href="edit-loker.php?id=<?= $company['company_id'] ?>">Edit</a> |
							<a href="delete.php?id=<?= $company['company_id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>