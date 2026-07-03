<?php
session_start();

// 🔒 Generate CSRF token
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}

include 'components/header.php';
?>

<link rel="stylesheet" href="assets/css/navbar.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="assets/css/appointment.css">
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

<section class="appointment-section">
<div class="appointment-container">

<!-- LEFT SIDE -->
<div class="appointment-info">
<h2>Book Your Appointment</h2>
<div class="info-box">
<div class="info-item">
<i class="fas fa-phone-alt"></i>
<h3>Call Us</h3>
<p>+250 788 123 456</p>
</div>
<div class="info-item">
<i class="fas fa-map-marker-alt"></i>
<h3>Visit</h3>
<p>KN 32 Rd, Kigali, Rwanda</p>
</div>
<div class="info-item">
<i class="fas fa-clock"></i>
<h3>Working Hours</h3>
<p>Open 24 hours a day, 7 days a week</p>
</div>
</div>
</div>

<!-- RIGHT SIDE -->
<div class="appointment-form">
<h2>Make an Appointment</h2>
<p>Fill out the form below and we’ll get back to you soon.</p>

<!-- Toast -->
<div id="toast" class="toast"></div>

<form id="appointmentForm">

<!-- CSRF TOKEN -->
<input type="hidden" name="csrf_token" value="<?php echo $_SESSION['token']; ?>">

<!-- NAME + EMAIL -->
<div class="form-row">
<input type="text" name="name" placeholder="Full Name" required>
<input type="email" name="email" placeholder="Email Address" required>
</div>

<!-- PHONE + SERVICE -->
<div class="form-row">
<input type="tel" name="phone" placeholder="Phone Number" required>
<select name="service" required>
<option value="">Select Service</option>
<option>General Consultation</option>
<option>Dental Care</option>
<option>Pediatrics (Child Care)</option>
<option>Gynecology & Obstetrics</option>
<option>Radiology & Imaging</option>
<option>X-Ray</option>
<option>Ultrasound Scan</option>
<option>CT Scan</option>
<option>Vaccination & Immunization</option>
<option>Eye Care / Ophthalmology</option>
<option>Physiotherapy</option>
<option>Medical Checkup</option>
<option>Pre-Employment Medical Exam</option>
<option>Minor Surgery</option>
<option>Family Planning</option>
</select>
</div>

<!-- DOB + APPOINTMENT DATE -->
<div class="form-row">
<div class="input-group">
<label>Age</label>
<i class="fas fa-calendar-alt"></i>
<input type="date" name="dob" required>
</div>
<div class="input-group">
<label>Appointment Date</label>
<i class="fas fa-calendar-alt"></i>
<input type="date" name="appointment" min="<?= date('Y-m-d'); ?>" required>
</div>
</div>

<textarea name="message" placeholder="Your Message or Symptoms"></textarea>

<button type="submit" id="submitBtn">
<i class="fas fa-calendar-check"></i> Submit Appointment
</button>

</form>
</div>
</div>
</section>

<?php include 'components/footer.php'; ?>
<?php include 'components/ai-chat-box.php'; ?>

<script src="assets/js/theme.js"></script>
<script src="assets/js/main.js"></script>

<script>
// Toast function
function showToast(message, success = true){
    const toast = document.getElementById('toast');
    toast.innerText = message;
    toast.style.backgroundColor = success ? '#4CAF50' : '#f44336';
    toast.className = 'toast show';
    setTimeout(() => { toast.className = toast.className.replace('show',''); }, 3000);
}

// AJAX form submit
const form = document.getElementById('appointmentForm');
const submitBtn = document.getElementById('submitBtn');

form.addEventListener('submit', function(e){
    e.preventDefault();

    // Frontend validation
    const name = form.name.value.trim();
    const email = form.email.value.trim();
    const phone = form.phone.value.trim();
    const service = form.service.value;

    if(!name || !email || !phone || !service){
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
    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Submitting...';

    // AJAX request
    const formData = new FormData(form);

    fetch('send-appointment.php', {
        method: 'POST',
        body: formData
    })
    .then(res => res.json())
    .then(data => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fas fa-calendar-check"></i> Submit Appointment';
        if(data.status === 'success'){
            showToast('Appointment submitted successfully!');
            form.reset();
        } else {
            showToast(data.message || 'Failed to submit appointment', false);
        }
    })
    .catch(err => {
        submitBtn.disabled = false;
        submitBtn.innerHTML = '<i class="fas fa-calendar-check"></i> Submit Appointment';
        showToast('Server error, try again', false);
    });
});
</script>