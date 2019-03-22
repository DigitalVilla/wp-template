export const options = (bulletId, effect ) => {
  return {
    effect,
    init: true,
    // direction: 'vertical',
    speed: 600,
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