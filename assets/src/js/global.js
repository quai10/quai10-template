/**
 * Initialisation des scripts du template quai10
 *
 * @author  Damien Senger <hi@hiwelo.co>
 * @version 1.0
 * */


/**
 * Initialisation du swiperJS
 * */

jQuery(document).ready(function () {
  // Toggle menu
  jQuery('.menu-opener').click(function() {
    jQuery('.nav-list').slideToggle();
  });
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


/**
 * Initialisation des maps
 * */

jQuery(document).ready(function () {
  var container = document.getElementById('map');

  if (container) {
    var map = L.map('map').setView([
      container.dataset.lat,
      container.dataset.lng
    ], container.dataset.zoom);

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([container.dataset.lat, container.dataset.lng]).addTo(map);
  }
});
