/**
 * Initialisation des scripts du template quai10
 *
 * @author  Damien Senger <hi@hiwelo.co>
 * @version 1.0
 * */


/**
 * Initialisation du swiperJS
 * */

$(document).ready(function () {
  var swiperQuai = new Swiper('.swiper-container', {
    loop: true,
    speed: 500,

    // autoplay
    autoplay: 4000,
    autoplayDisableOnInteraction: true,

    // controls
    nextButton: '.swiper-next-btn',
    prevButton: '.swiper-prev-btn'
  });
});
