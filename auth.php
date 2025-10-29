<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login & Register | SketCHIFY</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    .auth-container {
      max-width: 420px;
      margin: 140px auto;
      background: rgba(255,255,255,0.06);
      border-radius: 20px;
      padding: 40px;
      text-align: center;
    }
    .auth-container h2 {
      margin-bottom: 20px;
    }
    .auth-container form {
      display: none;
    }
    .auth-container form.active {
      display: block;
    }
    .auth-container input {
      width: 100%;
      padding: 12px;
      border-radius: 10px;
      border: none;
      margin-bottom: 15px;
      font-family: 'Poppins';
    }
    .auth-container button {
      width: 100%;
      padding: 12px;
      background: #b689ff;
      color: #fff;
      border: none;
      border-radius: 10px;
      font-weight: 600;
      cursor: pointer;
      transition: 0.3s;
    }
    .auth-container button:hover {
      background: #a471f5;
    }
    .switch-link {
      color: #b689ff;
      cursor: pointer;
    }
  </style>
</head>
<body>
  <!-- Navbar -->
  <header class="navbar">
    <div class="logo">
      <img src="https://img.icons8.com/ios-filled/50/ffffff/pencil-tip.png" alt="logo" />
      <h1>Sket<span>CHIFY</span></h1>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Beranda</a></li>
        <li><a href="katalog.php">Katalog</a></li>
        <li><a href="portofolio.php">Portfolio</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Hubungi Kami</a></li>
      </ul>
    </nav>
  </header>

  <!-- Auth Container -->
  <div class="auth-container">
    <!-- Login Form -->
    <form id="loginForm" action="backend/login.php" method="POST" class="active">
      <h2>Login ke <span style="color:#b689ff;">SketCHIFY</span></h2>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="login">Login</button>
      <p style="margin-top:10px;">Belum punya akun? <span class="switch-link" onclick="switchForm('register')">Daftar di sini</span></p>
    </form>

    <!-- Register Form -->
    <form id="registerForm" action="backend/register.php" method="POST">
      <h2>Daftar Akun <span style="color:#b689ff;">SketCHIFY</span></h2>
      <input type="text" name="username" placeholder="Username" required>
      <input type="email" name="email" placeholder="Email" required>
      <input type="password" name="password" placeholder="Password" required>
      <button type="submit" name="register">Daftar</button>
      <p style="margin-top:10px;">Sudah punya akun? <span class="switch-link" onclick="switchForm('login')">Login di sini</span></p>
    </form>
  </div>

  <script>
    function switchForm(type) {
      const loginForm = document.getElementById('loginForm');
      const registerForm = document.getElementById('registerForm');

      if (type === 'register') {
        loginForm.classList.remove('active');
        registerForm.classList.add('active');
      } else {
        registerForm.classList.remove('active');
        loginForm.classList.add('active');
      }
    }
  </script>
</body>
</html>
