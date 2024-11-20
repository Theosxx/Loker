<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Job Search</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../assets/css/index.css">
</head>
<body>

  <header>
    <nav>
      <ul>
        <li><a href="#">Cari lowongan</a></li>
        <li><a href="#">Lihat profil</a></li>
        <li><a href="#">Jelajahi perusahaan</a></li>
        <li><button class="login-btn"><a href="auth/login.php">Masuk</a></button></li>
        <li><button class="login-btn"><a href="admin/index.php">Admin</a></button></li>
      </ul>
    </nav>
  </header>

  <section class="search-section">
    <div class="search-box">
      <input type="text" placeholder="Masukkan kata kunci">
      <input type="text" placeholder="Masukkan pinggiran kota, kota">
      <button class="search-btn">Cari</button>
    </div>
  </section>

  <section class="login-section">
    <div class="login-register">
        <button class="login"><a href="auth/login.php">Masuk</a></button>
        <button class="register"><a href="auth/register.php">Register</a></button>
        <h2>Masuk untuk mengelola Profil Anda, menyimpan pencarian, dan melihat lowongan kerja yang disarankan.</h2>
      </div>
  </section>

  <section class="company-list">
    <h2>Temukan perusahaan Anda berikutnya</h2>
    <p>Jelajahi profil perusahaan untuk menemukan tempat kerja yang tepat bagi Anda.</p>
    <div class="companies">
      <div class="company">
        <img src="../assets/img/aeon.png" alt="Aeon Credit Service">
        <p>8 Pekerjaan</p>
      </div>
      <div class="company">
        <img src="../assets/img/lenovo.png" alt="Lenovo">
        <p>7 Pekerjaan</p>
      </div>
      <div class="company">
        <img src="../assets/img/pwc.png" alt="PwC">
        <p>27 Pekerjaan</p>
      </div>
      <div class="company">
        <img src="../assets/img/nestle.png" alt="Nestle">
        <p>13 Pekerjaan</p>
      </div>
      <div class="company">
        <img src="../assets/img/kawan.png" alt="Kawan Lama">
        <p>86 Pekerjaan</p>
      </div>
    </div>
  </section>

  <footer>
    <p>Indonesia | Kontak</p>
  </footer>

</body>
</html>
