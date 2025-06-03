$(document).ready(function() {
$('.owl-carousel').owlCarousel({
    loop:true,
    margin:15,
    autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:false,
    center:true,
    responsive:{
        0:{
            mergeFit:true
        },
        678:{
            items:5,
        },
        1000:{
            items:5,
        }
    }
})
});

document.getElementById('hamburger').addEventListener('click', function(event) {
    event.preventDefault(); // Mencegah perilaku default (refresh) saat elemen diklik
    toggleMenu();
    const listMenu = document.getElementById('list-menu2');
    listMenu.classList.toggle('show');
  });

function toggleMenu() {
    const listMenu = document.getElementById('list-menu2');
    listMenu.classList.toggle('show');
  }

