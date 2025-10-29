<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SketCHIFY - Portfolio</title>
  <link rel="stylesheet" href="style.css" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
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
        <li><a href="contact.php">contact</a></li>
      </ul>
    </nav>
    <?php if(isset($_SESSION['user'])): ?>
      <div style="display:flex; align-items:center; gap:15px;">
        <span style="font-weight:600; color:#b689ff;">👤 Hai, <?= htmlspecialchars($_SESSION['user']); ?></span>
        <a href="katalog.html" class="btn-login" style="background:#a26ef8;">Logout</a>
      </div>
<?php else: ?>
  <a href="auth.php" class="btn-login">➤ Login / Register</a>
<?php endif; ?>
  </header>

  <!-- Portfolio Section -->
  <section class="katalog-section">
    <h2>Portfolio <span>Kreator</span></h2>
    <p class="desc">
      Lihat koleksi karya desainer di SketCHIFY. Temukan inspirasi dan kualitas karya terbaik.
    </p>

    <div class="katalog-grid">
      <!-- Portfolio Card 1 -->
      <div class="katalog-card">
        <img src="https://i.ibb.co/GxqZmhQ/ui-landing-coffee.jpg" alt="Coffee Shop UI">
        <div class="card-info">
          <h3>Landing Page Coffee Shop</h3>
          <p class="creator">by <span>Alya Hafzah</span></p>
          <button>Lihat Detail</button>
        </div>
      </div>

      <!-- Portfolio Card 2 -->
      <div class="katalog-card">
        <img src="https://i.ibb.co/bLg1hCQ/dashboard-finance.jpg" alt="Finance Dashboard UI">
        <div class="card-info">
          <h3>Finance Dashboard App</h3>
          <p class="creator">by <span>Rayhan Azky</span></p>
          <button>Lihat Detail</button>
        </div>
      </div>

      <!-- Portfolio Card 3 -->
      <div class="katalog-card">
        <img src="https://i.ibb.co/2dTgjcw/food-delivery-ui.jpg" alt="Food Delivery UI">
        <div class="card-info">
          <h3>Food Delivery App UI</h3>
          <p class="creator">by <span>Indah Iasha</span></p>
          <button>Lihat Detail</button>
        </div>
      </div>

      <!-- Portfolio Card 4 -->
      <div class="katalog-card">
        <img src="https://i.ibb.co/4J2Vv7L/ecommerce-ui.jpg" alt="E-commerce UI">
        <div class="card-info">
          <h3>E-commerce Shop UI</h3>
          <p class="creator">by <span>Fahmi Pratama</span></p>
          <button>Lihat Deta
