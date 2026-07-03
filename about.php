<?php include 'components/header.php'; ?>

<!-- ===== CSS FILES ===== -->
<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/about.css">
<link rel="stylesheet" href="assets/css/branches.css">
<link rel="stylesheet" href="assets/css/location.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- ===== HERO SECTION ===== -->
<section class="about-hero">
  <div class="hero-overlay">
    <div class="hero-content">
      <h1>Polyclinique La Médicale</h1>
      <p>
        A trusted private healthcare provider offering a wide range of medical services.
        <br><strong>“Kwa Kanimba” — Caring for Rwanda since 1991.</strong>
      </p>
    </div>
  </div>
</section>

<!-- ===== STATISTICS SECTION ===== -->
<section class="about-stats">
  <div class="stats-container">
    <div class="stat-box">
      <h3>34+ Years</h3>
      <p>Of trusted healthcare excellence across Rwanda.</p>
    </div>
    <div class="stat-box">
      <h3>4+</h3>
      <p>Branches nationwide providing accessible medical care.</p>
    </div>
    <div class="stat-box">
      <h3>24/7</h3>
      <p>Emergency and inpatient care always available.</p>
    </div>
  </div>
</section>

<!-- ===== ABOUT SECTION ===== -->
<section class="about-wrapper" aria-labelledby="about-heading">
  <div class="about-container">

    <!-- LEFT: Image -->
    <div class="about-image" role="img" aria-label="Exterior view of Polyclinique La Médicale">
      <img class="sr-img" src="assets/images/about_us.png" alt="Exterior of Polyclinique La Médicale">
    </div>

    <!-- RIGHT: Content -->
    <div class="about-content">
      <span class="eyebrow">About Us</span>
      <h2 id="about-heading">About Polyclinique La Médicale</h2>

      <p>
        <strong>Polyclinique La Médicale</strong>, widely known as <strong>“Kwa Kanimba”</strong>, is a leading private healthcare facility based in Kigali, Rwanda. Established in 1991 by <strong>Dr. Pierre Celestin Kanimba</strong>, the polyclinic has grown from a modest medical practice into a trusted provider of comprehensive health services, with branches across the country and partnerships with major insurance providers.
      </p>

      <div class="features">
        <div class="feature-card">Emergency Care 24/7</div>
        <div class="feature-card">Experienced Specialists</div>
        <div class="feature-card">Insurance Partners</div>
      </div>

      <div class="cta-row">
        <a href="#services" class="btn-primary">See Services</a>
        <a href="#contact" class="btn-outline">Contact Us</a>
      </div>
    </div>

  </div>
</section>



<section class="rwanda-branches">
  <h2>Know Our Branches</h2>
  <div class="map-line">

    <!-- KIGALI -->
    <div class="branch-item" style="--color:#ff6b00;">
      <div class="pin">
        <i class="fa-solid fa-location-dot"></i>
      </div>
      <div class="branch-details">
        <h3>KIGALI HQ</h3>
        <p>
          Réception: +250 781 132 237<br>
          E-mail: polycliniquelamedicale@gmail.com<br>
          Near St Famille Cathoriq church<br>
          KN3 kigali 
        </p>
      </div>
    </div>

    <!-- HUYE -->
    <div class="branch-item" style="--color:#00b894;">
      <div class="pin">
        <i class="fa-solid fa-location-dot"></i>
      </div>
      <div class="branch-details">
        <h3>HUYE</h3>
        <p>
          Réception: +250 781132236<br>
          E-mail: lamedicale.huye@gmail.com<br>
          Southern Province, Huye District – Rwanda
        </p>
      </div>
    </div>

    <!-- MUSANZE -->
    <div class="branch-item" style="--color:#0984e3;">
      <div class="pin">
        <i class="fa-solid fa-location-dot"></i>
      </div>
      <div class="branch-details">
        <h3>MUSANZE</h3>
        <p>
          Réception: +250 781 132 263<br>
          E-mail: polyclinique.musanze@yahoo.fr<br>
          Northern Province, Musanze District
        </p>
      </div>
    </div>

    <!-- RUBAVU -->
    <div class="branch-item" style="--color:#d63031;">
      <div class="pin">
        <i class="fa-solid fa-location-dot"></i>
      </div>
      <div class="branch-details">
        <h3>RUBAVU</h3>
        <p>
          Réception: +250 786 562 140<br>
          E-mail: lamedicale.rubavu@gmail.com<br>
          Western Province, Rubavu District
        </p>
      </div>
    </div>

    <!-- NGOMA -->
    <div class="branch-item" style="--color:#e17055;">
      <div class="pin">
        <i class="fa-solid fa-location-dot"></i>
      </div>
      <div class="branch-details">
        <h3>NGOMA</h3>
        <p>
          Réception: +250 781132237<br>
          E-mail: lamedicale.ngoma@gmail.com<br>
          Southern Province, Ngoma District – Rwanda
        </p>
      </div>
    </div>

  </div>
</section>


<!-- ===== MODALS ===== -->
<div id="branch-modal" class="modal">
  <div class="modal-content">
    <span class="close-btn">&times;</span>
    <div id="modal-body"></div>
  </div>
</div>


<!-- ===== MISSION, VISION & HISTORY SECTION ===== -->
<section class="mission-vision-page">
  <div class="image-side"></div>

  <div class="content-side">
    <!-- Mission -->
    <div class="info-box mission">
      <h3><i class="fa-solid fa-stethoscope"></i> Our Mission (Clinical Mandate)</h3>
      <p>
        At Polyclinique La Médicale, our mission is to provide accessible, high-quality, and compassionate healthcare to all Rwandans. We deliver thorough medical evaluations for accurate diagnoses and lasting recovery, supported by skilled specialists and modern, 24/7 facilities across Kigali, Huye, Ngoma, Musanze, and Rubavu. Guided by the belief that every patient deserves to be welcomed, examined, and cared for properly, we work with government and private partners to make healthcare more inclusive, reliable, and effective — because good health is the foundation of a strong nation.
      </p>
    </div>

    <!-- Vision -->
    <div class="info-box vision">
      <h3><i class="fa-solid fa-eye"></i> Our Vision (Healthcare Goal)</h3>
      <p>
        The healthcare vision is to provide thorough, accurate, and timely medical care, ensuring all necessary examinations are conducted for effective treatment. Facilities are recognized for clean, well-organized environments, advanced equipment, and skilled professionals across diverse services. Emphasis is placed on patient-centered care, efficiency, and accessibility, with 24/7 operations and collaboration with insurance providers. The ultimate goal is to deliver high-quality, holistic healthcare for all, while supporting a motivated workforce and strengthening public-private healthcare partnerships.
      </p>
    </div>

    <!-- History -->
    <div class="info-box history">
      <h3><i class="fa-solid fa-hospital"></i> Our History (Clinical Evolution)</h3>
      <p>
        Polyclinique La Médicale was founded by <strong>Dr. Kanimba Pierre Célestin</strong>, who began his medical career in 1982, working in public hospitals for ten years. In 1991, he established his own private clinic, but it was destroyed during the 1994 Genocide against the Tutsi. After the genocide, he started again from scratch, and in 2003 he opened the first branch of Polyclinique La Médicale in Huye, with the goal of bringing quality healthcare closer to the people.
      </p>
      <p>
        Since then, the clinic has expanded — opening branches in Ngoma (2005) and Musanze (2013) — and it plans to build a state-of-the-art hospital in Kigali. Its mission remains to provide high-quality, timely, and accessible healthcare for all.
      </p>
    </div>
  </div>
</section>

<?php include 'components/footer.php'; ?>
<?php include 'components/ai-chat-box.php'; ?>

<script src="js/theme.js"></script>

<!-- Scripts -->
<script src="js/main.js"></script>
<script src="assets/js/branches.js" defer></script>