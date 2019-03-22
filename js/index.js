// import Swiper from 'swiper';
import { Swiper, Pagination } from 'swiper/dist/js/swiper.esm.js';
import swiperCSS from 'swiper/dist/css/swiper.css';
import {options} from './SwiperConfig';
import styles from '../sass/main.scss';


Swiper.use([Pagination]);


const workSwiper = new Swiper('.swiper-container', options('#swiper-work'));
// const commSwiper = new Swiper('.swiper-container-comments', options('#swiper-comments'));