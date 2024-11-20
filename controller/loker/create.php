<?php
require '../../conn.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $industry = $_POST['industry'];
    $location = $_POST['location'];
    $website = $_POST['website'];

    $stmt = $conn->prepare("INSERT INTO companies (name, industry, location, website) VALUES (:name, :industry, :location, :website)");
    $stmt->execute([
        ':name' => $name,
        ':industry' => $industry,
        ':location' => $location,
        ':website' => $website,
    ]);

    header("Location: ../../views/admin/index.php");
    exit;
}
?>