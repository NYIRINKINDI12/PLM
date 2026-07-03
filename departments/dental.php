<?php include '../components/header.php'; ?>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="../assets/css/department.css">
<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<body class="dark-theme">

<!-- ================= HERO ================= -->
<section class="department-hero">
    <img class="hero-image" src="../assets/images/den.png" alt="Dental Department">
    <div class="hero-overlay">
        <div class="hero-content">
            <h1>Dental Department</h1>
            <p>
                Comprehensive oral healthcare services including preventive,
                restorative, cosmetic and surgical dental treatments.
            </p>
            <nav class="breadcrumbs">
        <a href="../index.php">Home</a> &gt; Dental Department
      </nav>
    </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="department-content">
    <div class="container">

        <!-- ===== ABOUT ===== -->
        <div class="section-header">
            <h2>About Our Dental Services</h2>
            <p>
                Our Dental Department provides modern diagnosis,
                treatment and prevention of oral diseases using
                advanced technology and safe clinical procedures
                to ensure healthy teeth and confident smiles.
            </p>
        </div>

        <!-- ================= SERVICES ================= -->
        <h3 class="sub-title">Dental Services Offered</h3>
        <div class="services-grid">
            <div class="service-box">
                <i class="fa-solid fa-shield-heart"></i>
                <h4>Preventive Dental Care</h4>
                <p>Checkups, Fluoride Application, Scaling & Polishing, Tooth Sensitivity Treatment</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-tooth"></i>
                <h4>Restorative Dentistry</h4>
                <p>Composite Fillings, Crown Reconstruction, Dental Bridges & Core Build Up</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-bandage"></i>
                <h4>Root Canal Treatment</h4>
                <p>Single & Multiple Canal Therapy, Pulpotomy, Apexification & Pulp Capping</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-user-doctor"></i>
                <h4>Oral Surgery</h4>
                <p>Tooth Extraction, Impacted Tooth Removal, Apicectomy & Abscess Drainage</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-heart-pulse"></i>
                <h4>Gum Treatment</h4>
                <p>Gingivectomy, Gingivoplasty, Periodontal Curettage & Operculectomy</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-teeth"></i>
                <h4>Orthodontics</h4>
                <p>Fixed Braces, Orthodontic Adjustment & Dental Splinting</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-sparkles"></i>
                <h4>Cosmetic Dentistry</h4>
                <p>Teeth Whitening, Veneers, Smile Design & Enamel Shaping</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-x-ray"></i>
                <h4>Dental Imaging</h4>
                <p>Panoramic X-Ray, CBCT Scan & Intra-Oral Radiography</p>
            </div>
        </div> <!-- END SERVICES GRID -->

        <!-- ================= WHY CHOOSE ================= -->
        <h3 class="sub-title">Why Choose Our Dental Department?</h3>
        <div class="features-grid">
            <div class="feature-box">✔ Qualified Dental Surgeons</div>
            <div class="feature-box">✔ Modern Dental Equipment</div>
            <div class="feature-box">✔ Pain-Free Procedures</div>
            <div class="feature-box">✔ International Sterilization Standards</div>
            <div class="feature-box">✔ Personalized Patient Care</div>
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