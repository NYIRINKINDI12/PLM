<?php include '../components/header.php'; ?>
<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<script src="assets/js/theme.js"></script>

<!-- Small Hero Section with Breadcrumbs -->
<section class="partners-hero" style="background-image: url('../assets/images/our_insurance_partners.png');">
  <div class="hero-overlay">
    <div class="hero-content">
      <h1>Our Insurance Partners</h1>
      <nav class="breadcrumbs">
        <a href="index.php">Home</a> &gt; <a href="partners.php">Insurance</a>
      </nav>
    </div>
  </div>
</section>

<!-- Partners Description -->
<section class="partners-intro">
  <p>
 We work with a wide range of trusted insurance companies and partner organizations to ensure our patients receive quality healthcare services with ease.
Patients covered by any of the insurance providers listed below can access medical care at our facilities without unnecessary delays, enjoying reliable coverage and peace of mind across Rwanda through our branches located in Huye, Musanze, Rubavu, Ngoma and Kigali HQ.

  </p>
</section>

<!-- Partners Grid -->
<section class="partners-section">
  <div class="partners-grid">
    <img src="../assets/images/partners/Equity.png" alt="Equity Bank Rwanda">
    <img src="../assets/images/partners/Britam.png" alt="Britam Rwanda">
    <img src="../assets/images/partners/RAMA.jpeg" alt="RAMA">
    <img src="../assets/images/partners/eden_care.png" alt="Eden Care">
    <img src="../assets/images/partners/Old_Mutual.png" alt="Old Mutual">
    <img src="../assets/images/partners/Prime_Insurance.png" alt="Prime Insurance">
    <img src="../assets/images/partners/MMI.png" alt="MMI">
    <img src="../assets/images/partners/Sanlam.jpg" alt="Sanlam">
    <img src="../assets/images/partners/Special_Guarantee_fund.png" alt="Special Guarantee Fund">
    <img src="../assets/images/partners/Urwego_Bank.png" alt="Urwego Bank">
    <img src="../assets/images/partners/ITM_AFRICA_Ltd.jpeg" alt="ITM Africa Ltd">
    <img src="../assets/images/partners/magerwa.jpg" alt="Magerwa">
    <img src="../assets/images/partners/alliance.png" alt="Alliance Rwanda">
    <img src="../assets/images/partners/Rwanda_Bar.png" alt="Rwanda Bar">
    <img src="../assets/images/partners/UR.png" alt="University of Rwanda">
    <img src="../assets/images/partners/MANUMETAL.png" alt="Manumetal">
    <img src="../assets/images/partners/Serena_Hotels.png" alt="Serena Hotels">
    <img src="../assets/images/partners/SONARWA.png" alt="SONARWA">
    <img src="../assets/images/partners/Agahozo_Shalom_Youth_Village.png" alt="Agahozo Shalom Youth Village">
    <img src="../assets/images/partners/PSF.png" alt="PSF">
    <img src="../assets/images/partners/ASA_Microfinance.png" alt="ASA Microfinance">
    <img src="../assets/images/partners/africa_new_life.png" alt="Africa New Life">
    <img src="../assets/images/partners/Top_Security.png" alt="Top Security">
  </div>
</section>

<?php include '../components/footer.php'; ?>
<?php include '../components/ai-chat-box.php'; ?>

<script src="../js/theme.js"></script>


<!-- Scripts -->
<script src="../js/main.js"></script>

<style>
/* =====================================================
   NAVBAR STACKING
===================================================== */
header,
nav {
  position: relative;
  z-index: 1000;
}

/* =====================================================
   PARTNERS HERO SECTION
===================================================== */
.partners-hero {
  position: relative;
  height: 220px;
  margin-top: 80px; /* kubera navbar fixed */
  background-size: cover;
  background-position: center;

  display: flex;
  align-items: center;
  justify-content: center;
}

/* Overlay */
.partners-hero::before {
  content: "";
  position: absolute;
  inset: 0;
  background: rgba(0, 0, 0, 0.45);
  z-index: 1;
}

/* Hero content (CENTER FIX) */
.partners-hero .hero-content {
  position: relative;
  z-index: 2;
  text-align: center;
  color: #ffffff;
}

/* Title */
.partners-hero h1 {
  font-size: 2rem;
  font-weight: 600;
  margin-bottom: 6px;
}

/* Breadcrumbs */
.breadcrumbs {
  font-size: 0.9rem;
  color: #eee;
}

.breadcrumbs a {
  color: #ffffff;
  text-decoration: none;
}

.breadcrumbs a:hover {
  text-decoration: underline;
}

/* =====================================================
   PARTNERS DESCRIPTION (ICON + TITLE)
===================================================== */
.partners-intro {
  max-width: 900px;
  margin: 70px auto 50px;
  padding: 40px 45px;

  text-align: center;
  background: #ffffff;
  border-radius: 18px;
  box-shadow: 0 12px 30px rgba(0, 0, 0, 0.07);
}

/* Icon */
.partners-intro-icon {
  width: 70px;
  height: 70px;
  margin: 0 auto 15px;

  display: flex;
  align-items: center;
  justify-content: center;

  background: linear-gradient(135deg, #0d6efd, #6610f2);
  color: #fff;
  font-size: 30px;
  border-radius: 50%;
  box-shadow: 0 6px 18px rgba(13, 110, 253, 0.45);
}

/* Title */
.partners-intro-title {
  font-size: 24px;
  font-weight: 700;
  color: #0d6efd;
  margin-bottom: 15px;
}

/* Paragraph */
.partners-intro p {
  font-size: 18px;
  line-height: 1.9;
  color: #444;
  margin: 0;
}

/* =====================================================
   PARTNERS GRID
===================================================== */
.partners-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
  gap: 30px;
  justify-items: center;
  align-items: center;
  padding: 50px 10%;
}

.partners-grid img {
  width: 140px;
  background: #ffffff;
  padding: 15px;
  border-radius: 10px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s ease, box-shadow 0.3s ease;

  pointer-events: none; /* logos ntiziklickable */
}

.partners-grid img:hover {
  transform: scale(1.07);
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
}

/* =====================================================
   DARK MODE – PARTNERS INTRO
===================================================== */
.dark-section .partners-intro {
  background: #0f1c33;
  box-shadow: 0 10px 26px rgba(0, 0, 0, 0.5);
}

.dark-section .partners-intro-title {
  color: #66b2ff;
}

.dark-section .partners-intro p {
  color: #e0e0e0;
}

.dark-section .partners-intro-icon {
  background: linear-gradient(135deg, #00bfff, #6610f2);
}


@media (max-width: 600px) {
  .partners-intro {
    padding: 28px 22px;
    margin: 45px auto 30px;
  }

  .partners-intro-title {
    font-size: 20px;
  }

  .partners-intro p {
    font-size: 16.5px;
    line-height: 1.75;
  }

  .partners-intro-icon {
    width: 60px;
    height: 60px;
    font-size: 26px;
  }
}



</style>

