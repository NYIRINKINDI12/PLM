<?php include 'components/header.php'; ?>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="assets/css/department.css">
<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<body class="dark-theme">

<!-- ===== HERO SECTION ===== -->
<section class="department-hero">
  <img class="hero-image" src="../assets/images/medecine.png" alt="General Medecine Department">

  <div class="hero-overlay">
    <div class="hero-content">
      <h1>General Medecine</h1>
      <p>Quality consultation and outpatient medical care without hospital admission.</p>
      <a href="../appointment.php" class="hero-btn">
        <i class="fa-solid fa-calendar-check"></i> Book Appointment
      </a>
    </div>
  </div>
</section>

<!-- ===== CONTENT ===== -->
<section class="department-content">
  <div class="container">

    <!-- ABOUT -->
    <div class="section-header">
      <h2>About Our OPD Services</h2>
      <p>
        The Outpatient Department (OPD) under the General Medecine unit provides first-contact medical care
        for patients seeking diagnosis, treatment, consultation, and follow-up services without requiring hospitalization.
      </p>
    </div>

    <!-- SERVICES -->
    <h3 class="sub-title">Services Offered</h3>
    <div class="services-grid">
      <div class="service-box">
        <i class="fa-solid fa-user-doctor"></i>
        <h4>Medical Consultation</h4>
      </div>

      <div class="service-box">
        <i class="fa-solid fa-stethoscope"></i>
        <h4>General Health Checkup</h4>
      </div>

      <div class="service-box">
        <i class="fa-solid fa-heart-pulse"></i>
        <h4>Vital Signs Monitoring</h4>
      </div>

      <div class="service-box">
        <i class="fa-solid fa-file-medical"></i>
        <h4>Diagnosis & Treatment</h4>
      </div>

      <div class="service-box">
        <i class="fa-solid fa-share-from-square"></i>
        <h4>Specialist Referral</h4>
      </div>
    </div>

    <!-- WHY CHOOSE US -->
    <h3 class="sub-title">Why Choose Our General Medecine Department?</h3>
    <div class="features-grid">
      <div class="feature-box">✔ Experienced Medical Doctors</div>
      <div class="feature-box">✔ Fast Consultation Services</div>
      <div class="feature-box">✔ Modern Diagnostic Support</div>
      <div class="feature-box">✔ Patient-Centered Care</div>
    </div>

  </div>
</section>

<!-- ===== BACK TO TOP ===== -->
<div class="floating-buttons">
  <button id="backToTop" class="back-to-top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>
</div>

<?php include 'components/footer.php'; ?>
<?php include 'components/ai-chat-box.php'; ?>

<!-- ===== SCRIPTS ===== -->
<script src="assets/js/branches.js" defer></script>
<script src="js/theme.js"></script>
<script src="js/main.js"></script>

<!-- ===== INTERSECTION OBSERVER FOR ANIMATION ===== -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if(entry.isIntersecting){
        entry.target.classList.add("show");
      }
    });
  });

  document.querySelectorAll('.service-box, .feature-box, .section-header')
    .forEach(el => {
      el.classList.add("fade-up");
      observer.observe(el);
    });
});
</script>

</body>
</html>