// ===== SELECT ELEMENTS =====
const themeToggle = document.getElementById('theme-toggle');
const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('nav-links');

// ===== LOAD THEME ON PAGE LOAD =====
window.addEventListener('DOMContentLoaded', () => {
    const savedTheme = localStorage.getItem('theme');

    if (savedTheme === 'dark') {
        document.body.classList.add('dark-theme');
    } else {
        document.body.classList.remove('dark-theme'); // default = light
    }
});

// ===== THEME TOGGLE =====
themeToggle.addEventListener('click', () => {
    document.body.classList.toggle('dark-theme');

    if (document.body.classList.contains('dark-theme')) {
        localStorage.setItem('theme', 'dark');
    } else {
        localStorage.setItem('theme', 'light');
    }
});

// ===== MOBILE MENU TOGGLE =====
hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});


document.getElementById('theme-toggle').addEventListener('click', () => {
  document.body.classList.toggle('dark');
});
