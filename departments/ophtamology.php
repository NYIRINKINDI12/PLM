<?php include '../components/header.php'; ?>

<!-- ===== CSS ===== -->
<link rel="stylesheet" href="../assets/css/department.css">
<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<body class="dark-theme">

<!-- ================= HERO ================= -->
<section class="department-hero">
    <img class="hero-image" src="../assets/images/ophta.png" alt="Ophthalmology Department">
    <div class="hero-overlay">
        <div class="hero-content">
            <h1>Ophthalmology Department</h1>
            <p>
                Comprehensive eye care services including diagnosis,
                treatment and advanced surgical procedures for
                various eye conditions.
            </p>
             <nav class="breadcrumbs">
        <a href="../index.php">Home</a> &gt;Ophthalmology Department
      </nav>
        </div>
    </div>
</section>

<!-- ================= CONTENT ================= -->
<section class="department-content">
    <div class="container">

        <!-- ===== ABOUT ===== -->
        <div class="section-header">
            <h2>About Our Ophthalmology Services</h2>
            <p>
                Our Ophthalmology Department provides advanced diagnostic,
                medical and surgical eye care services using modern
                technology to ensure optimal vision and long-term eye health.
            </p>
        </div>

        <!-- ================= SERVICES ================= -->
        <h3 class="sub-title">Ophthalmology Services Offered</h3>
        <div class="services-grid">

            <div class="service-box">
                <i class="fa-solid fa-eye"></i>
                <h4>Diagnostic & Screening</h4>
                <p>Fundus Photo, OCT (Anterior & Posterior), Tonometry, Pachymetry, Gonioscopy & Visual Field Exam</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-syringe"></i>
                <h4>Medical Treatments & Injections</h4>
                <p>Intravitreal Injection, Subconjunctival Injection, Prosthesis Fitting & Therapeutic Contact Lens</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-laser-pointer"></i>
                <h4>Laser Procedures</h4>
                <p>YAG Laser Capsulotomy, Laser Iridotomy, Glaucoma Laser Treatment</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-user-doctor"></i>
                <h4>Eye Surgeries</h4>
                <p>Phaco-emulsification, Vitrectomy, Glaucoma Filtering Surgery & Lens Washout</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-bandage"></i>
                <h4>Lid & Surface Surgery</h4>
                <p>Chalazion Drainage, Ptosis Repair, Pterygium Excision & Conjunctival Tumor Removal</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-child"></i>
                <h4>Pediatric Ophthalmology</h4>
                <p>ROP Screening, Pediatric Vitrectomy, Orthoptist Exam & Pediatric Crosslinking</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-heart-pulse"></i>
                <h4>Cornea & Transplant</h4>
                <p>Corneal Transplant, Collagen Crosslinking, Corneal Debridement & Scleral Repair</p>
            </div>

            <div class="service-box">
                <i class="fa-solid fa-glasses"></i>
                <h4>Low Vision Services</h4>
                <p>Low Vision Assessment, Electrolysis, Orbit Reconstruction & Orbital Decompression</p>
            </div>

        </div>
        <!-- END SERVICES GRID -->

        <!-- ================= WHY CHOOSE ================= -->
        <h3 class="sub-title">Why Choose Our Ophthalmology Department?</h3>
        <div class="features-grid">
            <div class="feature-box">✔ Experienced Eye Specialists</div>
            <div class="feature-box">✔ Advanced Diagnostic Equipment</div>
            <div class="feature-box">✔ Modern Laser & Surgical Technology</div>
            <div class="feature-box">✔ Patient-Centered Eye Care</div>
            <div class="feature-box">✔ Comprehensive Vision Solutions</div>
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