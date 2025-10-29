<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SketCHIFY - About</title>
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
        <a href="backend/logout.php" class="btn-login" style="background:#a26ef8;">Logout</a>
      </div>
<?php else: ?>
  <a href="auth.php" class="btn-login">➤ Login / Register</a>
<?php endif; ?>

  </header>

  <!-- About Section -->
  <section class="why-section">
    <h2>Tentang <span>SketCHIFY</span></h2>
    <p class="desc">
      SketCHIFY adalah marketplace desain Figma terkemuka di Indonesia, didedikasikan untuk menghubungkan kreator dan pembeli digital dengan pengalaman yang profesional dan menyenangkan. Kami menyediakan platform di mana desainer UI/UX dapat memamerkan karya mereka, dan perusahaan atau individu dapat menemukan desain berkualitas tinggi yang siap pakai.
    </p>

    <div class="why-cards">
      <!-- Visi -->
      <div class="card">
        <img src="https://img.icons8.com/fluency/96/vision.png" alt="Visi">
        <h3>Visi</h3>
        <p>
          Menjadi marketplace desain digital terpercaya di Asia Tenggara yang memudahkan kolaborasi kreator dan perusahaan melalui desain berkualitas tinggi.
        </p>
      </div>

      <!-- Misi -->
      <div class="card">
        <img src="https://img.icons8.com/fluency/96/mission.png" alt="Misi">
        <h3>Misi</h3>
        <p>
          Memberikan platform yang intuitif untuk jual-beli desain Figma, memfasilitasi pertumbuhan komunitas kreatif, dan memastikan setiap transaksi aman serta transparan.
        </p>
      </div>

      <!-- Nilai -->
      <div class="card">
        <img src="https://img.icons8.com/fluency/96/ethics.png" alt="Nilai">
        <h3>Nilai</h3>
        <p>
          Profesionalisme, kolaborasi, inovasi, dan kepercayaan adalah nilai inti kami yang menjadi dasar setiap interaksi di SketCHIFY.
        </p>
      </div>

      <!-- Sejarah -->
      <div class="card">
        <img src="https://img.icons8.com/fluency/96/history.png" alt="Sejarah">
        <h3>Sejarah</h3>
        <p>
          Didirikan pada tahun 2023, SketCHIFY telah berkembang menjadi marketplace digital dengan ratusan kreator dan ribuan karya berkualitas yang siap membantu kebutuhan desain UI/UX profesional.
        </p>
      </div>
    </div>
  </section>
</body>
</html>
