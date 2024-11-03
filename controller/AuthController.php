<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email === 'admin@gmail.com' && $password === 'password123') {
        $_SESSION['logged_in'] = true;
        $_SESSION['email'] = $email;

        header('Location: ../views/admin/sidebar.php');
        exit;
    } else {
        $error = "Email atau password salah.";
    }
}
?>