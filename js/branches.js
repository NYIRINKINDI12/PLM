const branches = {
  kigali: `
    <h2>KIGALI (Main HQ)</h2>
    <p><strong>Location:</strong> KN 3 Rd, Near St Famille Catholic Church</p>
    <p><strong>Réception:</strong> +250 781 132 237</p>
    <p><strong>Mobile:</strong> +250 788 305 661</p>
    <p><strong>Email:</strong>polycliniquelamedicale@gmail.com</p>
  `,
  huye: `
    <h2>HUYE Branch</h2>
    <p><strong>Location:</strong> Southern Province, Huye District</p>
    <p><strong>Réception:</strong> +250 788 507 246</p>
    <p><strong>Mobile:</strong> +250 788 305 661</p>
    <p><strong>Email:</strong> lamedicale.huye@gmail.com</p>
  `,
  musanze: `
    <h2>MUSANZE Branch</h2>
    <p><strong>Location:</strong> Northern Province, Musanze District</p>
    <p><strong>Réception:</strong> +250 781 132 263</p>
    <p><strong>Email:</strong> polyclinique.musanze@yahoo.fr</p>
  `,
  rubavu: `
    <h2>RUBAVU Branch</h2>
    <p><strong>Location:</strong> Western Province, Rubavu District</p>
    <p><strong>Réception:</strong> +250 785 526 587</p>
    <p><strong>Mobile:</strong> +250 788 305 661</p>
    <p><strong>Email:</strong> lamedicale.rubavu@gmail.com</p>
  `,
  ngoma: `
    <h2>NGOMA Branch</h2>
    <p><strong>Location:</strong> Southern Province, Ngoma District</p>
    <p><strong>Réception:</strong> +250 788 305 661</p>
    <p><strong>Email:</strong> kibungomedicalcenter@yahoo.com</p>
  `
};

function openModal(branch) {
  document.getElementById("modalInfo").innerHTML = branches[branch];
  document.getElementById("branchModal").style.display = "flex";
  document.body.style.overflow = "hidden";
}

function closeModal() {
  document.getElementById("branchModal").style.display = "none";
  document.body.style.overflow = "auto";
}

window.onclick = function(e) {
  const modal = document.getElementById("branchModal");
  if (e.target === modal) closeModal();
};


// Gufata modal na iframe
const modal = document.getElementById('pdfModal');
const iframe = document.getElementById('pdfFrame');
const closeBtn = document.querySelector('.pdf-close');

// Buttons zose za Read More
const pdfButtons = document.querySelectorAll('.btn-card');

pdfButtons.forEach(btn => {
  btn.addEventListener('click', (e) => {
    e.preventDefault(); // ntihafungure link yindi
    const pdfSrc = btn.getAttribute('data-pdf');
    iframe.src = pdfSrc;
    modal.style.display = 'flex';
  });
});

// Close modal
closeBtn.addEventListener('click', () => {
  modal.style.display = 'none';
  iframe.src = ''; // clear iframe
});

// Close modal niba user akanda ahandi
window.addEventListener('click', (e) => {
  if(e.target === modal){
    modal.style.display = 'none';
    iframe.src = '';
  }
});