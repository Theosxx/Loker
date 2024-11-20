<?php
require '../../conn.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $industry = $_POST['industry'];
    $location = $_POST['location'];
    $website = $_POST['website'];
    $stmt = $conn->prepare("UPDATE companies SET name = :name, industry = :industry, location = :location, website = :website WHERE company_id = :id");
    $stmt->execute([
        ':name' => $name,
        ':industry' => $industry,
        ':location' => $location,
        ':website' => $website,
        ':id' => $id,
    ]);

    header("Location: ../../views/admin/index.php");
    exit;
}
?>