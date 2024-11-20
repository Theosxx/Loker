<?php
require '../../conn.php'; 

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    try {
        $stmt = $conn->prepare("SELECT user_id, password FROM users WHERE email = :email");
        $stmt->bindValue(':email', $email);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            if (password_verify($password, $user['password'])) {
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['email'] = $email;
                echo "<script>
                    window.location = '../../views/admin/sidebar.php';
                </script>";
            } else {
                echo "Invalid email or password!";
            }
        } else {
            echo "Invalid email or password!";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
