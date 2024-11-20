<?php
require '../../conn.php'; 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = password_hash(trim($_POST['password']), PASSWORD_BCRYPT);

    try {
        $checkEmail = $conn->prepare("SELECT user_id FROM users WHERE email = :email");
        $checkEmail->bindValue(':email', $email);
        $checkEmail->execute();

        if ($checkEmail->rowCount() > 0) {
            echo "Email already registered!";
            exit;
        }
        $stmt = $conn->prepare("INSERT INTO users (name,email, password) VALUES (:name,:email, :password)");
        $stmt->bindValue(':name', $name);
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':password', $password);

        if ($stmt->execute()) {
            echo "
            <script>
            alert('Register successfully!');
                window.location = '../../views/auth/login.php';
                </script>
            ";
        } else {
            echo "
            <script>
            alert('Register failed!');
            window.location = '../../views/auth/register.php';
            </script>
        ";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>
