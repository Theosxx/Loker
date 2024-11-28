<?php
require '../../conn.php';
$stmt = $conn->query("SELECT * FROM jobs ORDER BY created_at DESC");
$jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
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
		<h1>Jobs List</h1>
		<a href="create-jobs.php">Add New Jobs</a>
	</div>
	<div class="container-table-loker">
	<?php
try {
	include '../../conn.php';
    $sql = "SELECT jobs.*, companies.name AS company_name 
            FROM jobs 
            LEFT JOIN companies 
            ON jobs.company_id = companies.company_id";
    $stmt = $conn->query($sql);
    $jobs = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error fetching jobs: " . $e->getMessage());
}
?>
		<table border="1">
			<thead>
				<tr>
					<th>ID</th>
					<th>Title</th>
					<th>Companies</th>
					<th>Description</th>
					<th>Requirements</th>
					<th>Location</th>
					<th>Salary</th>
					<th>Type</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($jobs as $jobs): ?>
					<tr>
						<td><?= $jobs['company_id'] ?></td>
						<td><?= htmlspecialchars($jobs['title']) ?></td>
						<td><?= htmlspecialchars($jobs['company_name']); ?></td>
						<td><?= htmlspecialchars($jobs['description']) ?></td>
						<td><?= htmlspecialchars($jobs['requirements']) ?></td>
						<td><?= htmlspecialchars($jobs['location']) ?></td>
						<td><?= htmlspecialchars($jobs['salary']) ?></td>
						<td><?= htmlspecialchars($jobs['type']) ?></td>
						<td>
							<a href="edit-jobs.php?id=<?= $jobs['job_id'] ?>">Edit</a><br>
							<a href="../../controller/jobs/delete.php?id=<?= $jobs['job_id'] ?>">Delete</a>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
	</div>
</body>
</html>