<?php 
	include '../../conn.php'; 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $company_id = $_POST['company_id'];
    $description = $_POST['description'];
    $requirements = $_POST['requirements'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $type = $_POST['type'];

    $sql = "INSERT INTO jobs (title, company_id, description, requirements, location, salary, type) 
            VALUES (:title, :company_id, :description, :requirements, :location, :salary, :type)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        'title' => $title,
        'company_id' => $company_id,
        'description' => $description,
        'requirements' => $requirements,
        'location' => $location,
        'salary' => $salary,
        'type' => $type
    ]);

    header("Location: ../../views/admin/index-jobs.php");
    exit;
}



?>