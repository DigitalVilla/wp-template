export default function stickyNav() {
  window.onscroll = function () {
    scrollFunction()
  }

   window.addEventListener('resize', function() {
        scrollFunction()
    }, true);

  function scrollFunction() {
    console.log('with',window.innerWidth);
    console.log('scroll',document.documentElement.scrollTop);

    let sn = document.getElementById("sticky-navbar");

    // console.log("documentElement", document.documentElement.scrollTop);
    if (window.innerWidth >= 768) {

      if (document.documentElement.scrollTop >= 75) {
        sn.style.top = "0";
        sn.style.position = "fixed";

        // } else {
        //   sn.style.top = "-105px"
      } else if (document.documentElement.scrollTop < 75) {
        sn.style.position = "absolute";
        sn.style.top = "7.5rem";
      }
    } else {
      sn.style.position = "fixed";
      sn.style.top = "0";
    }
  }
}