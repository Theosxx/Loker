<?php
require '../../conn.php';
$id = $_GET['id'] ?? null;

if (!$id) {
    die("Invalid ID!");
}

try {
    $stmt = $conn->prepare("SELECT * FROM jobs WHERE job_id = :id");
    $stmt->execute([':id' => $id]);
    $job = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$job) {
        die("Job not found!");
    }
    $companyStmt = $conn->query("SELECT company_id, name FROM companies");
    $companies = $companyStmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Job</title>
</head>
<body>
    <?php include 'sidebar.php'; ?>

    <div class="container-edit-loker">
        <h1>Edit Job</h1>
        <form action="../../controller/jobs/edit.php" method="POST">

            <input type="hidden" name="id" value="<?= htmlspecialchars($job['job_id'] ?? '') ?>">

            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="<?= htmlspecialchars($job['title'] ?? '') ?>" required><br>

            <label for="company_id">Company:</label>
            <select name="company_id" id="company_id" required>
                <option value="">Select a Company</option>
                <?php foreach ($companies as $company): ?>
                    <option value="<?= htmlspecialchars($company['company_id']) ?>" <?= $job['company_id'] == $company['company_id'] ? 'selected' : '' ?>>
                        <?= htmlspecialchars($company['name']) ?>
                    </option>
                <?php endforeach; ?>
            </select><br>

            <label for="description">Description:</label>
            <input type="text" name="description" id="description" value="<?= htmlspecialchars($job['description'] ?? '') ?>"><br>

            <label for="requirements">Requirements:</label>
            <input type="text" name="requirements" id="requirements" value="<?= htmlspecialchars($job['requirements'] ?? '') ?>"><br>

            <label for="location">Location:</label>
            <input type="text" name="location" id="location" value="<?= htmlspecialchars($job['location'] ?? '') ?>"><br>

            <label for="salary">Salary:</label>
            <input type="text" name="salary" id="salary" value="<?= htmlspecialchars($job['salary'] ?? '') ?>"><br>

            <label for="type">Type:</label>
            <select name="type" id="type" required>
                <option value="full-time" <?= $job['type'] == 'full-time' ? 'selected' : '' ?>>Full-time</option>
                <option value="part-time" <?= $job['type'] == 'part-time' ? 'selected' : '' ?>>Part-time</option>
                <option value="remote" <?= $job['type'] == 'remote' ? 'selected' : '' ?>>Remote</option>
            </select><br>

            <button type="submit" style="margin-top: 10px;">Update</button>
        </form>
        <a href="index-jobs.php">Back</a>
    </div>
</body>
</html>
