<?php include '../components/header.php'; ?>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="../assets/css/department.css">
<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<body class="dark-theme">

<!-- ===== HERO SECTION ===== -->
<section class="department-hero">
  <img class="hero-image" src="../assets/images/ped.png" alt="Pediatrie Department">

  <div class="hero-overlay">
    <div class="hero-content">
      <h1>Pediatrie</h1>
      <p>Comprehensive child healthcare services including diagnosis, treatment, and preventive care.</p>
        <nav class="breadcrumbs">
        <a href="../index.php">Home</a> &gt; Pediatrie
      </nav>
    </div>
  </div>
</section>

<!-- ===== CONTENT ===== -->
<section class="department-content">
  <div class="container">

    <!-- ABOUT -->
    <div class="section-header">
      <h2>About Our Pediatric Services</h2>
      <p>
        The Pediatrics Department provides specialized medical care for infants, children, and adolescents.
        We focus on preventive care, early diagnosis, immunizations, and treatment of childhood illnesses.
      </p>
    </div>

    <!-- SERVICES -->
    <h3 class="sub-title">Services Offered</h3>
    <div class="services-grid">
      <div class="service-box">
        <i class="fa-solid fa-baby"></i>
        <h4>Child Health Checkups</h4>
      </div>

      <div class="service-box">
        <i class="fa-solid fa-syringe"></i>
        <h4>Vaccinations & Immunizations</h4>
      </div>

      <div class="service-box">
        <i class="fa-solid fa-notes-medical"></i>
        <h4>Growth & Development Monitoring</h4>
      </div>

      <div class="service-box">
        <i class="fa-solid fa-stethoscope"></i>
        <h4>Diagnosis & Treatment</h4>
      </div>

      <div class="service-box">
        <i class="fa-solid fa-hospital-user"></i>
        <h4>Referral to Specialists</h4>
      </div>
    </div>

    <!-- WHY CHOOSE US -->
    <h3 class="sub-title">Why Choose Our Pediatrics Department?</h3>
    <div class="features-grid">
      <div class="feature-box">✔ Experienced Pediatricians</div>
      <div class="feature-box">✔ Child-Friendly Environment</div>
      <div class="feature-box">✔ Preventive Care Focus</div>
      <div class="feature-box">✔ Comprehensive Child Healthcare</div>
    </div>

  </div>
</section>

<!-- ===== BACK TO TOP ===== -->
<div class="floating-buttons">
  <button id="backToTop" class="back-to-top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>
</div>

<?php include '../components/footer.php'; ?>
<?php include '../components/ai-chat-box.php'; ?>

<!-- ===== SCRIPTS ===== -->
<script src="../assets/js/branches.js" defer></script>
<script src="../js/theme.js"></script>
<script src="../js/main.js"></script>


</body>
</html>