<?php include '../components/header.php'; ?>
<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/branches.css">
<link rel="stylesheet" href="../assets/css/branches-main.css">
<link rel="stylesheet" href="../assets/css/location.css">
<body>

<!-- ===== HERO SLIDER ===== -->
<section class="hero-slider">
  <div class="slide active" style="background-image: url('../assets/images/slide1.jpg');">
    <div class="hero-content">
      <h1>Welcome to Polyclinique la Médicale</h1>
      <p>Your health is our top priority — where care meets expertise.</p>
      <a href="about.php" class="hero-btn">Learn More</a>
    </div>
  </div>

  <div class="slide" style="background-image: url('../assets/images/slide2.png');">
    <div class="hero-content">
      <h1>Modern Laboratory Services</h1>
      <p>Accurate diagnostics with cutting-edge technology.</p>
      <a href="laboratory.php" class="hero-btn">Our Laboratory</a>
    </div>
  </div>

  <div class="slide" style="background-image: url('../assets/images/slide4.jpg');">
    <div class="hero-content">
      <h1>Advanced Medical Imaging</h1>
      <p>State-of-the-art imaging for precise diagnosis and effective treatment.</p>
      <a href="radiography.php" class="hero-btn">Explore Imaging Services</a>
    </div>
  </div>

  <div class="slide" style="background-image: url('../assets/images/slide3.jpg');">
    <div class="hero-content">
      <h1>Expert Medical Team</h1>
      <p>Dedicated professionals ready to serve your health needs.</p>
      <a href="dental.php" class="hero-btn">Contact Us</a>
    </div>
  </div>

</section>

<!-- ===== FLOATING CARDS (HALF HERO - HALF ABOUT) ===== -->
<div class="floating-cards">
  <div class="card-container">

    <!-- HELP DESK CARD -->
    <div class="card">
      <div class="card-content">
        <h3>Helpdesk</h3>
        <p>Get support from our team anytime.</p>
        <p>📞 Reception: +250 781 132 237</p>
        <p>✉️ polycliniquelamedicale@gmail.com</p>
      </div>
    
    </div>

    <!-- AMBULANCE CARD -->
    <div class="card">
      <div class="card-content">
        <h3>Ambulance 🚑</h3>
        <p>24/7 emergency services available.</p>
        <p>📞 Call: +250 789 000 111</p>
        <p>📍 Available across Kigali and nearby districts.</p>
      </div>
      <div class="card-logo">
        <img src="../assets/images/2.png" alt="Ambulance Icon">
      </div>
    </div>

    <!-- LAB RESULTS CARD -->
    <div class="card">
      <div class="card-content">
        <h3>Lab Results 📅</h3>
        <p>Receive a notification and download your report instantly.</p>
        <a href="../departments/Coming-Soon.php" class="apply-btn">Apply</a>
      </div>
  
    </div>

  </div>
</div>

<!-- ===== SERVICES ===== -->
<section id="services">
  <h2>Our Departments & Services</h2>
  <div class="service-container">
    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/labo.png" alt="Laboratory">
      </div>
      <h3>Laboratory</h3>
      <p>Emergency and critical care diagnostics 24/7.</p>
      <a href="../departments/laboratory.php" class="btn-card">Read More</a>
    </div>

    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/hospitalisation.png" alt="Medecine Generale">
      </div>
      <h3>Medecine Generale</h3>
      <p>Top specialists with cutting-edge technology.</p>
      <a href="../departments/general-medecine.php" class="btn-card">Read More </a>
    </div>

    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/pediatry.png" alt="Pediatrie">
      </div>
      <h3>Pediatrie</h3>
      <p>Comprehensive treatment for children.</p>
      <a href="../departments/Pediatrie.php" class="btn-card">Read More</a>
    </div>

    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/obstetric.png" alt="Gynecology">
      </div>
      <h3>Gynecology</h3>
      <p>Full range of fertility and reproductive treatments.</p>
      <a href="../departments/Gynecology.php" class="btn-card">Read More</a>
    </div>

    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/dentist_2.png" alt="Dentist">
      </div>
      <h3>Dentist</h3>
      <p>Wide range of preventive, diagnostic, and treatment services.</p>
      <a href="../departments/dental.php" class="btn-card">Read More</a>
    </div>

    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/Ophthalmology.png" alt="Ophtamology">
      </div>
      <h3>Ophtamology</h3>
      <p>Diagnosis and treatment of eye conditions.</p>
      <a href="../departments/ophtamology.php" class="btn-card">Read More</a>
    </div>

    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/small_surgery.png" alt="Small Surgery">
      </div>
      <h3>Small Surgery</h3>
      <p>Minor surgical procedures performed safely.</p>
      <a href="../departments/Minor-Surgical.php" class="btn-card">Read More</a>
    </div>

    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/Internal_Medicine.png" alt="Internal Medicine">
      </div>
      <h3>Internal Medicine</h3>
      <p>Diagnosis and management of adult diseases.</p>
      <a href="../departments/Internal-Medicine.php" class="btn-card">Read More</a>
    </div>

    <div class="service-card">
      <div class="service-header">
        <img src="../assets/images/icons/ct_scan (3).png" alt="Radiography">
      </div>
      <h3>Radiography</h3>
      <p>Specialized imaging and diagnostic services.</p>
      <a href="../departments/radiography.php" class="btn-card">Read More</a>
    </div>
  </div>
</section>


  <title>About — Polyclinique La Médicale</title>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

  <!-- External CSS -->
  <link rel="stylesheet" href="../assets/css/about.css">
</head>


<section class="about-wrapper" aria-labelledby="about-heading">
  <div class="about-container">

    <!-- LEFT: Image -->
    <div class="about-image" role="img" aria-label="Exterior view of Polyclinique La Médicale">
      <img class="sr-img" src="../assets/images/about-right.png" alt="Exterior of Polyclinique La Médicale">
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
        <a href="about.php" class="btn-primary">Read More</a>
        <a href="#contact" class="btn-outline">Our Mission</a>
      </div>
    </div>

  </div>
</section>


<section class="rwanda-branches">
  <h2>Know Our Branches</h2>

  <div class="map-line">

    <div class="branch-item" style="--color:#ff6b00;">
      <div class="pin"><i class="fa-solid fa-location-dot"></i></div>
      <h3>KIGALI HQ</h3>
      <p>
        Réception: +250 781 132 237<br>
        Mobile: +250 788 305 661<br>
        Near St Famille Cathoriq church<br>
        KN3 Kigali
      </p>
    </div>

    <div class="branch-item" style="--color:#00b894;">
      <div class="pin"><i class="fa-solid fa-location-dot"></i></div>
      <h3>HUYE</h3>
      <p>
        Réception: +250 781132236<br>
        Mobile: +250 788 305 661<br>
        Southern Province, Huye District – Rwanda
      </p>
    </div>

    <div class="branch-item" style="--color:#0984e3;">
      <div class="pin"><i class="fa-solid fa-location-dot"></i></div>
      <h3>MUSANZE</h3>
      <p>
        Réception: +250 781 132 263<br>
        Mobile: +250 788 305 661<br>
        Northern Province, Musanze District
      </p>
    </div>

    <div class="branch-item" style="--color:#d63031;">
      <div class="pin"><i class="fa-solid fa-location-dot"></i></div>
      <h3>RUBAVU</h3>
      <p>
        Réception: +250 785 526 587<br>
        Mobile: +250 788 305 661<br>
        Western Province, Rubavu District
      </p>
    </div>

    <div class="branch-item" style="--color:#e17055;">
      <div class="pin"><i class="fa-solid fa-location-dot"></i></div>
      <h3>NGOMA</h3>
      <p>
        Réception: +250 781132237<br>
        Mobile: +250 788 305 661<br>
        Southern Province, Ngoma District – Rwanda
      </p>
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


<!-- ===== PARTNERS ===== -->
<section id="partners" class="scroll-reveal">
  <h2>Our Insurance Partners</h2>
  <div class="partners-container">
    <div class="partners-track">
      <a href="https://equitygroupholdings.com/rw/" target="_blank"><img src="../assets/images/partners/Equity.png" alt="Equity Bank Rwanda"></a>
      <a href="https://www.edencaremedical.com//" target="_blank"><img src="../assets/images/partners/eden_care.png" alt="Eden Care"></a>
      <a href="https://rw.britam.com/" target="_blank"><img src="../assets/images/partners/Britam.png" alt="Britam Rwanda"></a>
      <a href="https://www.africanewlife.org/" target="_blank"><img src="../assets/images/partners/africa_new_life.png" alt="Africa New Life Ministries"></a>
      <a href="https://www.asyv.org/" target="_blank"><img src="../assets/images/partners/Agahozo_Shalom_Youth_Village.png" alt="Agahozo-Shalom Youth Village"></a>
      <a href="https://psf.org.rw/" target="_blank"><img src="../assets/images/partners/PSF.png" alt="PSF"></a>
      <a href="https://rwanda.asa-international.com/" target="_blank"><img src="../assets/images/partners/ASA_Microfinance.png" alt="ASA Microfinance"></a>
      <a href="https://www.itmafrica.com/" target="_blank"><img src="../assets/images/partners/ITM_AFRICA_Ltd.jpeg" alt="ITM Africa Ltd"></a>
      <a href="https://www.magerwa.com/" target="_blank"><img src="../assets/images/partners/magerwa.jpg" alt="Magerwa"></a>
      <a href="https://www.alliancebioversityciat.org/regions/africa/rwanda" target="_blank"><img src="../assets/images/partners/alliance.png" alt="Alliance Rwanda"></a>
      <a href="https://www.mmi.gov.rw/" target="_blank"><img src="../assets/images/partners/MMI.png" alt="MMI"></a>
      <a href="https://manumetal.rw/" target="_blank"><img src="../assets/images/partners/MANUMETAL.png" alt="Manumetal"></a>
      <a href="https://www.serenahotels.com/kigali" target="_blank"><img src="../assets/images/partners/Serena_Hotels.png" alt="Serena Hotels"></a>
      <a href="https://www.oldmutual.co.rw/" target="_blank"><img src="../assets/images/partners/Old_Mutual.png" alt="Old Mutual"></a>
      <a href="https://www.primeinsurance.co.rw/" target="_blank"><img src="../assets/images/partners/Prime_Insurance.png" alt="Prime Insurance"></a>
      <a href="https://www.rwandabar.org/" target="_blank"><img src="../assets/images/partners/Rwanda_Bar.png" alt="Rwanda Bar"></a>
      <a href="https://www.rama.rw/" target="_blank"><img src="../assets/images/partners/RAMA.jpeg" alt="RAMA"></a>
      <a href="https://www.sanlam.co.rw/" target="_blank"><img src="../assets/images/partners/Sanlam.jpg" alt="Sanlam"></a>
      <a href="https://www.sonarwa.com/" target="_blank"><img src="../assets/images/partners/SONARWA.png" alt="SONARWA"></a>
      <a href="https://www.sgf.rw/" target="_blank"><img src="../assets/images/partners/Special_Guarantee_fund.png" alt="Special Guarantee Fund"></a>
      <a href="https://www.topsecurity.rw/" target="_blank"><img src="../assets/images/partners/Top_Security.png" alt="Top Security"></a>
      <a href="https://www.urwegobank.com/" target="_blank"><img src="../assets/images/partners/Urwego_Bank.png" alt="Urwego Bank"></a>
      <a href="https://www.ur.ac.rw/" target="_blank"><img src="../assets/images/partners/UR.png" alt="University of Rwanda"></a>
    </div>

    <div class="partners-readmore">
      <a href="partners.php" class="read-more-link">View the List</a>
    </div>
  </div>
</section>

<!-- ===== BACK TO TOP ===== -->
<!-- BACK TO TOP BUTTON -->
<!-- Floating Back to Top Button -->
<div class="floating-buttons">
  <button id="backToTop" class="back-to-top" title="Back to Top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>
</div>

<?php include '../components/footer.php'; ?>
<?php include '../components/ai-chat-box.php'; ?>

<!-- ===== SCRIPTS ===== -->
<script src="../assets/js/branches.js" defer></script>
<script src="../js/theme.js"></script>
<script src="../js/slider.js"></script>
<script src="../js/main.js"></script>


<!-- Instead of kit.fontawesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</body>
</html>

