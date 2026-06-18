// ********INTERACTION.JS FILE
// Scroll Progress Bar
window.addEventListener('scroll', () => {
  const scrolled = window.scrollY;
  const total = document.body.scrollHeight - window.innerHeight;
  const pct = (scrolled / total) * 100;
  const bar = document.getElementById('scroll-progress');
  if (bar) bar.style.width = pct + '%';
});

// Navbar glass on scroll
const header = document.querySelector('header, nav.navbar, .site-header, .navbar');
if (header) {
  window.addEventListener('scroll', () => {
    if (window.scrollY > 60) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });
}
