// const { Carousel } = require("bootstrap");

$(function () {
    $('[data-toggle="tooltip"]').tooltip()
})

// move project icon circle to right when click project icon
function selectProject() {
    $('.project-list-area').removeClass('d-none');
    $('.project-icon-circle-2').toggleClass('active');
}

// show people description when hover people
$('.people-list__item-1').hover(function(){
    $('.people-list__item-description-1').toggleClass('active');
});
$('.people-list__item-2').hover(function(){
    $('.people-list__item-description-2').toggleClass('active');
});
$('.people-list__item-3').hover(function(){
    $('.people-list__item-description-3').toggleClass('active');
});
$('.people-list__item-4').hover(function(){
    $('.people-list__item-description-4').toggleClass('active');
});
$('.people-list__item-5').hover(function(){
    $('.people-list__item-description-5').toggleClass('active');
});
$('.people-list__item-6').hover(function(){
    $('.people-list__item-description-6').toggleClass('active');
});
$('.people-list__item-7').hover(function(){
    $('.people-list__item-description-7').toggleClass('active');
});

// Initialize and add the map
function initMap() {
    // The location of Uluru
    const uluru = { lat: -25.344, lng: 131.036 };
    // The map, centered at Uluru
    const map = new google.maps.Map(document.getElementById("map"), {
      zoom: 4,
      center: uluru,
    });
    // The marker, positioned at Uluru
    const marker = new google.maps.Marker({
      position: uluru,
      map: map,
    });
  }