<?php
session_start();

// 🔒 Generate CSRF token
if(empty($_SESSION['token'])){
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

include 'components/header.php';
?>

<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/contact.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<!-- ===== TOAST CSS ===== -->
<style>
.toast {
    visibility: hidden;
    min-width: 250px;
    margin-left: -125px;
    background-color: #4CAF50;
    color: white;
    text-align: center;
    border-radius: 8px;
    padding: 16px;
    position: fixed;
    z-index: 9999;
    left: 50%;
    bottom: 30px;
    font-size: 16px;
    opacity: 0;
    transition: opacity 0.5s, bottom 0.5s;
}
.toast.show {
    visibility: visible;
    opacity: 1;
    bottom: 50px;
}
</style>

<section class="contact-section">
  <div class="contact-container">

    <!-- LEFT SIDE: CONTACT INFO -->
    <div class="contact-info">
      <h2>Get in Touch</h2>
      <div class="info-box">
        <div class="info-item">
          <i class="fa-solid fa-location-dot"></i>
          <h3>Address</h3>
          <p>KN 32 Rd, Kigali, Rwanda<br>Kigali City, Nyarugenge District<br> near the Saint Famille Catholic Church.</p>
        </div>

        <div class="info-item">
          <i class="fa-solid fa-phone"></i>
          <h3>Phone</h3>
          <p>✔️+250788305661 <br> ✔️+250781132235</p>
        </div>

        <div class="info-item">
          <i class="fa-solid fa-clock"></i>
          <h3>Working Hours</h3>
          <p>Open 24 hours a day, 7 days a week</p>
        </div>
      </div>
    </div>

    <!-- RIGHT SIDE: CONTACT FORM -->
    <div class="contact-form">
      <h2>Contact Us</h2>
      <p>Use this form for all general enquiries. We monitor these responses constantly during working hours.</p>

      <!-- Toast -->
      <div id="toast" class="toast"></div>

      <form id="contactForm">
        <!-- CSRF token -->
        <input type="hidden" name="csrf_token" value="<?php echo $_SESSION['token']; ?>">

        <div class="form-row">
          <input type="text" name="name" placeholder="Full Name *" required>
        </div>

        <div class="form-row">
          <input type="email" name="email" placeholder="Email *" required>
          <input type="text" name="phone" placeholder="Phone Number *" required>
        </div>

        <div class="form-row">
          <textarea name="message" rows="5" placeholder="Your Message..." required></textarea>
        </div>

        <button type="submit" id="submitBtn">
          <i class="fas fa-paper-plane"></i> Send Message
        </button>
      </form>

      <hr class="divider">
    </div>
  </div>
</section>

<?php include 'components/footer.php'; ?>
<?php include 'components/ai-chat-box.php'; ?>

<script src="assets/js/theme.js"></script>
<script src="assets/js/main.js"></script>

<!-- ===== JS Toast + AJAX Submit ===== -->
<script>
function showToast(message, success = true){
    const toast = document.getElementById('toast');
    toast.innerText = message;
    toast.style.backgroundColor = success ? '#4CAF50' : '#f44336';
    toast.className = 'toast show';
    setTimeout(()=>{ toast.className = toast.className.replace('show',''); },3000);
}

const form = document.getElementById('contactForm');
const submitBtn = document.getElementById('submitBtn');

form.addEventListener('submit', function(e){
    e.preventDefault();

    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const phone = form.phone.value.trim();
    const message = form.message.value.trim();

    if(!name || !email || !phone || !message){
        showToast('Please fill all required fields', false);
        return;
    }

    const emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
    if(!email.match(emailPattern)){
        showToast('Invalid email address', false);
        return;
    }

    // Loading spinner
    submitBtn.disabled = true;
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';

    const formData = new FormData(form);

    fetch('send_message.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
        if(data.status === 'success'){
            showToast(data.message);
            form.reset();
        } else {
            showToast(data.message || 'Failed to send message', false);
        }
    })
    .catch(err => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fas fa-paper-plane"></i> Send Message';
        showToast('Server error, try again', false);
    });
});
</script>