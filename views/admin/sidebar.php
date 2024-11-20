<?php

session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../auth/login.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adminsite</title>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="../../assets/css/admin.css">
</head>

<body>
    <section id="sidebar">
        <a href="sidebar.php" class="brand"><i class='bx bxs-smile icon'></i> Job Vac</a>
        <ul class="side-menu">
            <li><a href="#" class="active"><i class='bx bxs-dashboard icon'></i> Dashboard</a></li>
            <li class="divider" data-text="main">Main</li>
            <li>
                <a href="index.php"><i class='bx bxs-inbox icon'></i> Loker Monitor <i class='bx bx-chevron-right icon-right'></i></a>
            </li>
        </ul>
    </section>
    <section id="content">
        <nav>
            <i class='bx bx-menu toggle-sidebar'></i>
            <form action="#">
                <div class="form-group">
                    <input type="text" placeholder="Search...">
                    <i class='bx bx-search icon'></i>
                </div>
            </form>
            <span class="divider"></span>
            <h1>Welcome, <?= htmlspecialchars($_SESSION['email']) ?>!</h1>
            <li><a href="../../controller/auth/Logout-users.php" name=""><i class='bx bxs-log-out-circle'></i> Logout</a></li>
            <div class="profile">
                <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="">
                <ul class="profile-link">
                    <li><a href="#"><i class='bx bxs-user-circle icon'></i> Profile</a></li>
                    <li><a href="#"><i class='bx bxs-cog'></i> Settings</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <script src="../../assets/js/admin.js"></script>
    <script src="../../assets/js/sidebar.js"></script>
</body>
</html>