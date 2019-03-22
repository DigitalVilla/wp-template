import Swiper from 'swiper';
// import { Swiper, Navgation, Pagination } from 'swiper/dist/js/swiper.esm.js';
// Swiper.use([Navgation, Pagination]);
import swiperCSS from 'swiper/dist/css/swiper.css';
import {options} from './SwiperConfig';
import styles from '../sass/main.scss';


const workSwiper = new Swiper('.swiper-container', options('#swiper-work','slide'));
const commSwiper = new Swiper('.swiper-container-comments', options('#swiper-comments', 'coverflow'));