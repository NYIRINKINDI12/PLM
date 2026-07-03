<?php include '../components/header.php'; ?>

<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/services.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<body class="no-animation">

<!-- ===== HERO ===== -->
<section class="hero-services" style="background-image: url('../assets/images/hero-services.jpg');">
  <div class="hero-overlay">
    <h1>Our Services</h1>
    <p>Comprehensive medical care with expertise and compassion.</p>
  </div>
</section>

<!-- ===== SERVICES ===== -->
<section class="services-section">
  <div class="container">

    <h2 class="section-title">Our Services</h2>
    <p class="section-subtitle">Click on a service to explore its details.</p>

    <div class="services-grid">

      <!-- CORE SERVICES -->
      <a href="../departments/general-medecine.php" class="service-card">
        <div class="icon"><i class="fas fa-hospital"></i></div>
        <h3>General Medicine</h3>
        <p>Primary healthcare and diagnosis for all patients.</p>
      </a>

      <a href="../departments/emergency.php" class="service-card">
        <div class="icon"><i class="fas fa-ambulance"></i></div>
        <h3>Emergency</h3>
        <p>24/7 emergency medical services and rapid response.</p>
      </a>

      <a href="../departments/laboratory.php" class="service-card">
        <div class="icon"><i class="fas fa-vials"></i></div>
        <h3>Laboratory</h3>
        <p>Accurate testing and diagnostics.</p>
      </a>

      <a href="../departments/radiography.php" class="service-card">
        <div class="icon"><i class="fas fa-x-ray"></i></div>
        <h3>Radiology</h3>
        <p>Advanced imaging including X-ray and scans.</p>
      </a>

      <!-- SPECIALISTS -->
      <a href="../departments/cardiology.php" class="service-card">
        <div class="icon"><i class="fas fa-heartbeat"></i></div>
        <h3>Cardiology</h3>
        <p>Heart and blood vessel care.</p>
      </a>

      <a href="../departments/neurology.php" class="service-card">
        <div class="icon"><i class="fas fa-brain"></i></div>
        <h3>Neurology</h3>
        <p>Brain and nervous system treatments.</p>
      </a>

      <a href="../departments/dermatology.php" class="service-card">
        <div class="icon"><i class="fas fa-allergies"></i></div>
        <h3>Dermatology</h3>
        <p>Skin, hair, and cosmetic care.</p>
      </a>

      <a href="../departments/orthopedics.php" class="service-card">
        <div class="icon"><i class="fas fa-bone"></i></div>
        <h3>Orthopedics</h3>
        <p>Bones, joints, and muscles care.</p>
      </a>

      <a href="../departments/urology.php" class="service-card">
        <div class="icon"><i class="fas fa-kidneys"></i></div>
        <h3>Urology</h3>
        <p>Urinary and reproductive health.</p>
      </a>

      <a href="../departments/ENT.php" class="service-card">
        <div class="icon"><i class="fas fa-ear-listen"></i></div>
        <h3>ENT</h3>
        <p>Ear, nose, and throat care.</p>
      </a>

      <!-- WOMEN & CHILD -->
      <a href="../departments/Gynecology.php" class="service-card">
        <div class="icon"><i class="fas fa-female"></i></div>
        <h3>Gynecology</h3>
        <p>Women reproductive health services.</p>
      </a>

      <a href="../departments/Pediatrie.php" class="service-card">
        <div class="icon"><i class="fas fa-baby"></i></div>
        <h3>Pediatrics</h3>
        <p>Child healthcare and development.</p>
      </a>

      <!-- OTHER SERVICES -->
      <a href="../departments/dental.php" class="service-card">
        <div class="icon"><i class="fas fa-tooth"></i></div>
        <h3>Dentistry</h3>
        <p>Oral health and dental treatments.</p>
      </a>

      <a href="../departments/ophtamology.php" class="service-card">
        <div class="icon"><i class="fas fa-eye"></i></div>
        <h3>Ophthalmology</h3>
        <p>Eye care and vision correction.</p>
      </a>

      <a href="../departments/kinestherapie.php" class="service-card">
        <div class="icon"><i class="fas fa-dumbbell"></i></div>
        <h3>Physiotherapy</h3>
        <p>Rehabilitation and mobility recovery.</p>
      </a>

      <a href="../departments/rehabilitation.php" class="service-card">
        <div class="icon"><i class="fas fa-wheelchair"></i></div>
        <h3>Rehabilitation</h3>
        <p>Recovery programs after illness or surgery.</p>
      </a>

      <a href="../departments/nutrition.php" class="service-card">
        <div class="icon"><i class="fas fa-apple-alt"></i></div>
        <h3>Nutrition</h3>
        <p>Diet planning and health advice.</p>
      </a>

      <a href="../departments/psychiatry.php" class="service-card">
        <div class="icon"><i class="fas fa-user-md"></i></div>
        <h3>Psychiatry</h3>
        <p>Mental health and therapy services.</p>
      </a>

      <a href="../departments/Minor-Surgical.php" class="service-card">
        <div class="icon"><i class="fas fa-procedures"></i></div>
        <h3>Minor Surgery</h3>
        <p>Safe and quick medical procedures.</p>
      </a>

    </div>

  </div>
</section>

<?php include '../components/footer.php'; ?>

<script src="../js/theme.js"></script>
<script src="../js/main.js"></script>

<script>
/* FORCE REMOVE ANIMATIONS AFTER LOAD */
window.addEventListener("load", function () {
  document.body.classList.add("no-animation");
});
</script>

</body>
</html>