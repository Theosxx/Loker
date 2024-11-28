<?php
require '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $job_id = $_POST['job_id'] ?? null;
    $title = $_POST['title'] ?? null;
    $company_id = $_POST['company_id'] ?? null;
    $description = $_POST['description'] ?? null;
    $requirements = $_POST['requirements'] ?? null;
    $location = $_POST['location'] ?? null;
    $salary = $_POST['salary'] ?? null;
    $type = $_POST['type'] ?? null;
    if (!$job_id || !$title || !$company_id || !$type) {
        die("Required fields are missing!");
    }

    try {
        $stmt = $conn->prepare("
            UPDATE jobs 
            SET 
                title = :title,
                company_id = :company_id,
                description = :description,
                requirements = :requirements,
                location = :location,
                salary = :salary,
                type = :type
            WHERE 
                job_id = :job_id
        ");
        $stmt->execute([
            ':title' => $title,
            ':company_id' => $company_id,
            ':description' => $description,
            ':requirements' => $requirements,
            ':location' => $location,
            ':salary' => $salary,
            ':type' => $type,
            ':job_id' => $job_id,
        ]);
        header("Location: ../../views/admin/index-jobs.php");
        exit;
    } catch (PDOException $e) {
        die("Error updating job: " . $e->getMessage());
    }
} else {
    die("Invalid request method!");
}
