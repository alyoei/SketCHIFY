<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>SketCHIFY - Hubungi Kami</title>
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

  <!-- Contact Section -->
  <section class="why-section">
    <h2>Hubungi <span>SketCHIFY</span></h2>
    <p class="desc">
      Ada pertanyaan, saran, atau ingin bekerja sama? Tim SketCHIFY siap membantu. Silakan isi form di bawah ini atau hubungi kami melalui informasi kontak yang tersedia.
    </p>

    <div class="contact-container" style="display: flex; flex-wrap: wrap; gap: 40px; justify-content: center;">
      <!-- Contact Info -->
      <div class="contact-info" style="max-width: 400px; background: rgba(255,255,255,0.06); border-radius: 20px; padding: 40px;">
        <h3>Informasi Kontak</h3>
        <p>Email: <span style="color:#b689ff;">contact@sketchify.com</span></p>
        <p>Telepon: <span style="color:#b689ff;">+62 812 3456 7890</span></p>
        <p>Alamat: <span style="color:#b689ff;">Jl. Kreatif No. 45, Bandung, Indonesia</span></p>
        <div style="margin-top:20px;">
          <p>Sosial Media:</p>
          <a href="#"><img src="https://img.icons8.com/fluency/48/ffffff/instagram-new.png" alt="Instagram" style="width:30px; margin-right:10px;"></a>
          <a href="#"><img src="https://img.icons8.com/fluency/48/ffffff/dribbble.png" alt="Dribbble" style="width:30px; margin-right:10px;"></a>
          <a href="#"><img src="https://img.icons8.com/fluency/48/ffffff/behance.png" alt="Behance" style="width:30px;"></a>
        </div>
      </div>

      <!-- Contact Form -->
      <div class="contact-form" style="max-width: 500px; background: rgba(255,255,255,0.06); border-radius: 20px; padding: 40px;">
        <h3>Kirim Pesan</h3>
        <form>
          <div style="margin-bottom:15px;">
            <label for="name">Nama</label><br>
            <input type="text" id="name" name="name" placeholder="Nama Anda" style="width:100%; padding:10px; border-radius:10px; border:none; margin-top:5px;">
          </div>
          <div style="margin-bottom:15px;">
            <label for="email">Email</label><br>
            <input type="email" id="email" name="email" placeholder="Email Anda" style="width:100%; padding:10px; border-radius:10px; border:none; margin-top:5px;">
          </div>
          <div style="margin-bottom:15px;">
            <label for="message">Pesan</label><br>
            <textarea id="message" name="message" rows="5" placeholder="Tulis pesan Anda" style="width:100%; padding:10px; border-radius:10px; border:none; margin-top:5px;"></textarea>
          </div>
          <button type="submit" class="btn" style="width:100%; padding:14px;">Kirim Pesan</button>
        </form>
      </div>
    </div>
  </section>
</body>
</html>
