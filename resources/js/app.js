import '@lottiefiles/lottie-player';

import './bootstrap';
import AOS from 'aos';
import 'aos/dist/aos.css'; // Import the CSS
import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

// Initialize AOS
AOS.init({
    duration: 800, // values from 0 to 3000, with step 50ms
    once: true,    // whether animation should happen only once - while scrolling down
});


