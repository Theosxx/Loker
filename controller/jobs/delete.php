<?php
require '../../conn.php';

if (isset($_GET['job_id'])) {

    var_dump($_GET['job_id']);
    $job_id = $_GET['job_id']; 
    try {
        $stmt = $conn->prepare("DELETE FROM jobs WHERE job_id = job_id");
        $stmt->execute([':job_id' => $job_id]);
        header("Location: ../../views/admin/index-jobs.php");
        exit;

    } catch (PDOException $e) {
        die("Error deleting record: " . $e->getMessage());
    }
} else {
    die("Invalid ID!");
}
