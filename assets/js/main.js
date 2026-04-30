/**
 * Main JavaScript for Balakrishna Engineering
 */

document.addEventListener('DOMContentLoaded', () => {
    // Current Page Active State in Navbar
    const currentLocation = location.pathname;
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');

    navLinks.forEach(link => {
        if (link.getAttribute('href') && currentLocation.includes(link.getAttribute('href').split('/').pop())) {
            link.classList.add('active');
        } else if (currentLocation === '/bke/' && link.getAttribute('href') === '/bke/index.php') {
            link.classList.add('active');
        }
    });

    // Simple sticky header sizing (optional depending on padding)
    window.addEventListener('scroll', () => {
        const header = document.querySelector('.header');
        if (window.scrollY > 50) {
            header.classList.add('shadow-sm');
        } else {
            header.classList.remove('shadow-sm');
        }
    });
});
