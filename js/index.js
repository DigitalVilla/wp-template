import Swiper from 'swiper';
import swiperCSS from 'swiper/dist/css/swiper.css';
import {options} from './SwiperConfig';
import stickyNav from './stickNavbar';
import aniation from './logoAnima';
import mobile from './mobileNav';
import styles from '../sass/main.scss';
// import { Swiper, Navgation, Pagination } from 'swiper/dist/js/swiper.esm.js';
// Swiper.use([Navgation, Pagination]);

stickyNav();
const workSwiper = new Swiper('.swiper-container', options('#swiper-work','slide'));
const commSwiper = new Swiper('.swiper-container-comments', options('#swiper-comments', 'coverflow'));