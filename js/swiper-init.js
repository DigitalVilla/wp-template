export const swiper = () => {

  var swiper1075 = $('.swiper-container-work').swiper({
    autoplay: 8000,
    speed: 625,
    mode: 'horizontal',
    loop: true,
    pagination: '#swiper-pagination-1075',
    paginationClickable: true,
    preventLinksPropogation: true,
    resistance: false,
    longSwipesRatio: 0.125,
    grabCursor: true,
    cssWidthAndHeight: 'height',
    onFirstInit: function (swiper) {

    }
  });


  $("#btn-slide-next-1075").click(function () {
    swiper1075.swipeNext();
  });
  $("#btn-slide-prev-1075").click(function () {
    swiper1075.swipePrev();
  });
};