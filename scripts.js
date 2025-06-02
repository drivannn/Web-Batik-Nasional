// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    
    document.querySelector(this.getAttribute('href')).scrollIntoView({
      behavior: 'smooth'
    });
  });
});

const hamburger = document.getElementById('hamburger');
const menu = document.getElementById('menu');
const batik_container = document.getElementsByClassName('batik-container')

hamburger.addEventListener('click', () => {
  // Toggle kelas 'active' pada tombol dan menu
  hamburger.classList.toggle('active');
  menu.classList.toggle('active');
});

const boxes = document.querySelectorAll('.box');

window.addEventListener('scroll', function() {
    const scrollY = window.scrollY;

    boxes.forEach(box => {
        // Menghitung batas pergerakan
        const maxX = window.innerWidth - 300; // Lebar jendela - lebar kotak
        const maxY = scrollY + Math.floor(Math.random() * 100); // Posisi scroll + posisi acak

        const randomX = Math.floor(Math.random() * maxX);
        const randomY = Math.min(maxY, window.innerHeight - 500); // Menjaga kotak tetap dalam viewport

        // Mengubah posisi kotak berdasarkan scroll
        box.style.transform = `translate(${randomX}px, 0px)`;
    });
});

function showAlert(platform) {
  alert('Anda mengklik ' + platform + '!');
}

function toggleDetails(detailId) {
  const details = document.getElementById(detailId);
  if (details.style.display === "none" || details.style.display === "") {
      details.style.display = "block";
  } else {
      details.style.display = "none";
  }
}

document.addEventListener("DOMContentLoaded", function() {
  // Menambahkan kelas fade-in setelah konten dimuat
  const container = document.querySelector('.container');
  container.classList.add('fade-in');
});