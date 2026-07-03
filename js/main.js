document.addEventListener("DOMContentLoaded", () => {

/* ================= DOM ELEMENTS ================= */

const hamburger = document.getElementById("hamburger");
const navMenu = document.getElementById("nav-links");
const navLinks = document.querySelectorAll(".nav-links a");

const readMoreBtn = document.getElementById("readMoreBtn");
const modal = document.getElementById("aboutModal");
const modalClose = modal ? modal.querySelector(".close") : null;

const chatToggleBtn = document.getElementById("chatToggle");
const chatBox = document.getElementById("chatBox");

const navbar = document.querySelector(".navbar");
const backToTop = document.getElementById("backToTop");

const themeToggle = document.getElementById("themeToggle");


/* ================= HAMBURGER ================= */

if (hamburger && navMenu) {
  hamburger.onclick = () =>
    navMenu.classList.toggle("active");
}


/* ================= NAV ACTIVE ================= */

navLinks.forEach(link => {
  link.onclick = () => {
    navLinks.forEach(l => l.classList.remove("active"));
    link.classList.add("active");
  };
});


/* ================= MODAL ================= */

if (readMoreBtn && modal && modalClose) {

  const openModal = () => {
    modal.classList.add("show");
    document.body.style.overflow = "hidden";
  };

  const closeModal = () => {
    modal.classList.remove("show");
    document.body.style.overflow = "auto";
  };

  readMoreBtn.onclick = openModal;
  modalClose.onclick = closeModal;

  window.addEventListener("click", e => {
    if (e.target === modal) closeModal();
  });
}


/* ================= CHAT BOX ================= */

if (chatToggleBtn && chatBox) {
  chatToggleBtn.onclick =
    () => chatBox.classList.toggle("open");
}


/* ================= BACK TO TOP ================= */

if (backToTop) {

  const updateBackToTop = () => {

    if (window.scrollY > 300)
      backToTop.classList.add("show");
    else
      backToTop.classList.remove("show");

  };

  window.addEventListener("scroll", updateBackToTop);

  backToTop.onclick = () =>
    window.scrollTo({
      top: 0,
      behavior: "smooth"
    });

}


/* ================= FIX CHATBOX OVERLAP ================= */

if (chatBox && backToTop) {

  setTimeout(() => {
    const chatHeight =
      chatBox.offsetHeight || 70;

    backToTop.style.bottom =
      (chatHeight + 40) + "px";

  }, 500);
}


/* ================= WHY CHOOSE US ================= */

document.querySelectorAll(".feature-box")
.forEach(box => {

  box.onclick = () => {

    document
      .querySelectorAll(".feature-box")
      .forEach(b =>
        b.classList.remove("active")
      );

    box.classList.add("active");
  };

});


/* ================= AUTO SCROLL ANIMATION ================= */

const observer =
new IntersectionObserver(entries => {

  entries.forEach(entry => {
    if (entry.isIntersecting)
      entry.target.classList.add("show");
  });

},{ threshold:0.15 });

document.querySelectorAll(
"section, .service-box, .feature-box"
).forEach(el => {

  el.classList.add("auto-animate");
  observer.observe(el);

});


/* ================= SMART NAVBAR ================= */

if (navbar) {

  let lastScroll = 0;

  window.addEventListener("scroll", () => {

    const current = window.scrollY;

    if (current > lastScroll && current > 120)
      navbar.style.transform =
        "translateY(-100%)";
    else
      navbar.style.transform =
        "translateY(0)";

    lastScroll = current;
  });

}


/* ================= DARK MODE ================= */

if (themeToggle) {

  themeToggle.onclick = () => {

    document.body
      .classList.toggle("dark-mode");

    themeToggle.textContent =
      document.body.classList
      .contains("dark-mode")
        ? "☀️"
        : "🌙";
  };

}

});

/* ===============================
SCROLL ANIMATION
===============================*/

document.addEventListener("DOMContentLoaded", () => {

const observer = new IntersectionObserver(entries => {
entries.forEach(entry => {
if(entry.isIntersecting){
entry.target.classList.add("show");
}
});
});

document.querySelectorAll(
'.service-box, .feature-box, .section-header'
).forEach(el => {
el.classList.add("fade-up");
observer.observe(el);
});

});

document.addEventListener("DOMContentLoaded", () => {

  
/* ================= PDF MODAL ================= */

const modal = document.getElementById('pdfModal');
const iframe = document.getElementById('pdfFrame');
const closeBtn = document.querySelector('.pdf-close');
const pdfButtons = document.querySelectorAll('.btn-card');

if(modal && iframe && closeBtn){

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

}

});