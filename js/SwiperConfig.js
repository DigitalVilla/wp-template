export const options = (bulletId) => {
  return {
    init: true,
    // initialSlide: 2,
    // direction: 'vertical',
    speed: 600,
    // effect:'coverflow',
    loop: true,
    resistance: false,
    grabCursor: true,
    autoplay: {
      delay: 8000,
    },
    pagination: {
      clickable: true,
      type: 'bullets',
      el: bulletId,
      bulletElement: 'span',
      bulletClass: 'swiper-pagination-switch',
      bulletActiveClass: 'swiper-pagination-switch-active',
      //http://idangero.us/swiper/api/
    }
  }
}