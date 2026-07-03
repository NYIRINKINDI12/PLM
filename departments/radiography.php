<?php include '../components/header.php'; ?>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="../assets/css/department.css">
<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<body>

<!-- ================= HERO ================= -->
<section class="partners-hero" style="background-image:url('../assets/images/radiography.png');">
  <div class="hero-overlay">
    <div class="hero-content">
      <h1>Radiography & Imaging Center</h1>
      <nav class="breadcrumbs">
        <a href="../index.php">Home</a> &gt; Radiography & Imaging
      </nav>
    </div>
  </div>
</section>


<!-- ================= CONTENT ================= -->
<section class="department-content">
    <div class="container">

        <!-- ===== ABOUT ===== -->
        <div class="section-header">
            <h2>About Our Imaging Services</h2>
            <p>
                Our Radiography & Imaging Center provides accurate,
                safe and timely diagnostic imaging to support
                effective medical decision-making and treatment planning.
            </p>
        </div>

        <!-- ================= IMAGING CATEGORIES ================= -->
        <h3 class="sub-title">Imaging Services</h3>

        <div class="services-grid">

            <!-- Radiography -->
            <div class="service-box">
                <i class="fa-solid fa-x-ray"></i>
                <h4>Radiography (X-Ray)</h4>
                <p>
                    Digital X-Ray, Special Views, Contrast Studies,
                    Mammography and General Radiographic Examinations.
                </p>
                <a href="radiography-xray.php" class="read-more-btn">View Services</a>
            </div>

            <!-- CT Scan -->
            <div class="service-box">
                <i class="fa-solid fa-brain"></i>
                <h4>CT Scan</h4>
                <p>
                    CT Brain, Abdomen, Spine, With & Without Contrast,
                    CT Angiography and Advanced Imaging Studies.
                </p>
                <a href="radiography-ct.php" class="read-more-btn">View Services</a>
            </div>

            <!-- Ultrasound -->
            <div class="service-box">
                <i class="fa-solid fa-wave-square"></i>
                <h4>Ultrasound & Doppler</h4>
                <p>
                    Abdominal, Obstetric, Doppler, Transvaginal,
                    Musculoskeletal and Specialized Ultrasound Services.
                </p>
                <a href="radiography-ultrasound.php" class="read-more-btn">View Services</a>
            </div>

        </div>
        <!-- END GRID -->

        <!-- ================= WHY CHOOSE ================= -->
        <h3 class="sub-title">Why Choose Our Imaging Center?</h3>
        <div class="features-grid">
            <div class="feature-box">✔ Modern Digital Imaging Equipment</div>
            <div class="feature-box">✔ Qualified Radiology Specialists</div>
            <div class="feature-box">✔ Fast & Accurate Results</div>
            <div class="feature-box">✔ Radiation Safety Standards</div>
            <div class="feature-box">✔ Reliable Diagnostic Support</div>
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

<script src="../js/main.js"></script>

</body>
</html>