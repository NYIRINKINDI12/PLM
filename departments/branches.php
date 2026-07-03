<?php include '../components/header.php'; ?>

<link rel="stylesheet" href="../assets/css/navbar.css">
<link rel="stylesheet" href="../assets/css/branches-main.css">
<link rel="stylesheet" href="../assets/css/style.css">
<link rel="stylesheet" href="../assets/css/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- ================= HERO SECTION ================= -->
<section class="partners-hero" style="background-image:url('../assets/images/our-branche.png');">
  <div class="hero-overlay">
    <div class="hero-content">
      <h1>Our Branches</h1>
      <nav class="breadcrumbs">
        <a href="index.php">Home</a> &gt; Branches
      </nav>
    </div>
  </div>
</section>

<!-- ================= BRANCHES SECTION ================= -->
<section class="office-section">

  <div class="office-header">
    <h2></h2>
    <p>
      We proudly serve patients across Rwanda through our branches located in
      Kigali, Huye, Musanze, Rubavu and Ngoma.
    </p>
  </div>

  <div class="office-grid">

    <!-- KIGALI -->
    <div class="office-card">
      <img src="../assets/images/slide1.jpg" alt="Kigali Branch">
      <div class="office-content">
        <h3>Polyclinique La Médicale</h3>
        <h4>Kigali HQ</h4>
        <p>
          Near St Famille Catholic Church<br>
          KN3 Road, Kigali
        </p>
        <div class="office-contact">
          <span><i class="fa-solid fa-phone"></i> +250 781 132 237</span>
          <span><i class="fa-solid fa-envelope"></i> polycliniquelamedicale@gmail.com</span>
        </div>
        <a href="#" class="btn-card" data-pdf="../assets/pdf/kigali-branch-info.pdf">Read More</a>
      </div>
    </div>

    <!-- HUYE -->
    <div class="office-card">
      <img src="../assets/images/huye.png" alt="Huye Branch">
      <div class="office-content">
        <h3>Clinique La Médicale Huye</h3>
        <h4>Huye Branch</h4>
        <p>
          Southern Province<br>
          Huye District, Rwanda
        </p>
        <div class="office-contact">
          <span><i class="fa-solid fa-phone"></i> +250 781 132 236</span>
          <span><i class="fa-solid fa-envelope"></i> lamedicale.huye@gmail.com</span>
        </div>
        <a href="#" class="btn-card" data-pdf="../assets/pdf/huye-branch-info.pdf">Read More</a>
      </div>
    </div>

    <!-- MUSANZE -->
    <div class="office-card">
      <img src="../assets/images/musanze.png" alt="Musanze Branch">
      <div class="office-content">
        <h3>Clinique La Médicale Musanze</h3>
        <h4>Musanze Branch</h4>
        <p>
          Northern Province<br>
          Musanze District, Rwanda
        </p>
        <div class="office-contact">
          <span><i class="fa-solid fa-phone"></i> +250 781 132 263</span>
          <span><i class="fa-solid fa-envelope"></i> polyclinique.musanze@yahoo.fr</span>
        </div>
        <a href="#" class="btn-card" data-pdf="../assets/pdf/musanze-branch-info.pdf">Read More</a>
      </div>
    </div>

    <!-- RUBAVU -->
    <div class="office-card">
      <img src="../assets/images/rubavu.png" alt="Rubavu Branch">
      <div class="office-content">
        <h3>Clinique La Médicale Rubavu</h3>
        <h4>Rubavu Branch</h4>
        <p>
          Western Province<br>
          Rubavu District, Rwanda
        </p>
        <div class="office-contact">
          <span><i class="fa-solid fa-phone"></i> +250 785 526 587</span>
          <span><i class="fa-solid fa-envelope"></i> lamedicale.rubavu@gmail.com</span>
        </div>
        <a href="#" class="btn-card" data-pdf="../assets/pdf/rubavu-branch-info.pdf">Read More</a>
      </div>
    </div>

    <!-- NGOMA -->
    <div class="office-card">
      <img src="../assets/images/ngoma.png" alt="Ngoma Branch">
      <div class="office-content">
        <h3>Clinique La Médicale Ngoma</h3>
        <h4>Ngoma Branch</h4>
        <p>
          Eastern Province<br>
          Ngoma District, Rwanda
        </p>
        <div class="office-contact">
          <span><i class="fa-solid fa-phone"></i> +250 781 132 237</span>
          <span><i class="fa-solid fa-envelope"></i> lamedicale.ngoma@gmail.com</span>
        </div>
        <a href="#" class="btn-card" data-pdf="../assets/pdf/ngoma-branch-info.pdf">Read More</a>
      </div>
    </div>

  </div>

</section>

<!-- ================= CALL TO ACTION ================= -->
<section class="branch-message">

  <p>
    We work with a wide range of trusted insurance companies and partner organizations
    to ensure our patients receive quality healthcare services with ease.
    Patients covered by any of these insurance providers can access medical care
    without unnecessary delays through our facilities across Rwanda.
  </p>

  <div class="branch-contact-buttons">
    <a href="tel:+250781132237" class="call-btn">
      <i class="fa-solid fa-phone"></i> Call Our Clinics
    </a>

    <a href="contact.php" class="visit-btn">
      <i class="fa-solid fa-location-dot"></i> Find Nearest Branch
    </a>

    <a href="partners.php" class="insurance-btn">
      <i class="fa-solid fa-handshake"></i> See Our Insurance Partner
    </a>
  </div>

</section>

<!-- ================= PDF MODAL ================= -->
<div id="pdfModal" class="pdf-modal">
  <div class="pdf-modal-content">
    <span class="pdf-close">&times;</span>
    <iframe src="" frameborder="0" id="pdfFrame"></iframe>
  </div>
</div>

<!-- ===== BACK TO TOP ===== -->
<div class="floating-buttons">
  <button id="backToTop" class="back-to-top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>
</div>

<!-- ================= FOOTER ================= -->
<?php include '../components/footer.php'; ?>
<?php include '../components/ai-chat-box.php'; ?>

<!-- ================= JS ================= -->
<script src="../assets/js/theme.js"></script>
<script src="../assets/js/main.js"></script>

<script>
  // PDF Modal
  const modal = document.getElementById('pdfModal');
  const iframe = document.getElementById('pdfFrame');
  const closeBtn = document.querySelector('.pdf-close');
  const pdfButtons = document.querySelectorAll('.btn-card');

  pdfButtons.forEach(btn => {
    btn.addEventListener('click', (e) => {
      e.preventDefault();
      const pdfSrc = btn.getAttribute('data-pdf');
      iframe.src = pdfSrc;
      modal.style.display = 'flex';
    });
  });

  closeBtn.addEventListener('click', () => {
    modal.style.display = 'none';
    iframe.src = '';
  });

  window.addEventListener('click', (e) => {
    if(e.target === modal){
      modal.style.display = 'none';
      iframe.src = '';
    }
  });
</script>