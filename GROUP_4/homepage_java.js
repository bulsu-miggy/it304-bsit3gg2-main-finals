let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active'); 
}

var isAuthenticated = document.cookie.indexOf("authenticated=true") >= 0;

if (isAuthenticated) {
  document.body.className += " authenticated";
}
 
let  Logoutform = document.querySelector('.Log-out-form');
 
document.querySelector('#logout-btn').onclick = () =>{
    Logoutform .classList.toggle('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
} 

let  cartform = document.querySelector('.cart-form');
 
document.querySelector('#cart-btn').onclick = () =>{
    cartform .classList.toggle('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
} 

let  userform = document.querySelector('.user-form');
 
document.querySelector('#user-btn').onclick = () =>{
    userform .classList.toggle('active');
    searchForm.classList.remove('active');
    navbar.classList.remove('active');
} 

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    Logoutform .classList.remove('active');
}


window.onscroll = () =>{
    searchForm.classList.remove('active');
    Logoutform .classList.remove('active');
    navbar.classList.remove('active');
}

// var swiper = new Swiper(".product-slider", {
//     loop:true,
//     spaceBetween: 20,
//     autoplay: {
//         delay: 7500,
//         disableOnInteraction: false,
//     },
//     centeredSlides: true,
//     breakpoints: {
//       0: {
//         slidesPerView: 1,
//       },
//       768: {
//         slidesPerView: 2,
//       },
//       1020: {
//         slidesPerView: 3,
//       },
//     },
// });
