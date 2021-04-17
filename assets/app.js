/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */
// any CSS you import will output into a single css file (app.scss in this case)
import './styles/app.scss';

// import bootsrap
import './bootstrap';
import 'bootstrap/dist/js/bootstrap';
import 'bootstrap/dist/css/bootstrap.css'

// importation du mouvement des images
import AOS from 'aos/dist/aos';
import 'aos/dist/aos.css';
AOS.init();

// importation des icones
import '../node_modules/@fortawesome/fontawesome-free/js/all';
import '../node_modules/@fortawesome/fontawesome-free/css/all.css';

import './js/nav';
import './js/dataTables';



