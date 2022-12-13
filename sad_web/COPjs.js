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

let navbar = document.querySelector('.navbar');

document.querySelector('#menu-btn').onclick = () =>{
    navbar.classList.toggle('active');
    searchForm.classList.remove('active');
    Logoutform .classList.remove('active');
}


var removeCartItemsButtons = document.getElementsByClassName('btn-area')
console.log(removeCartItemsButtons)

for (var i = 0; i < removeCartItemsButtons.length; i++){
  var button = removeCartItemsButtons[i] 
  button.addEventListener('click', function(event) {

      var buttonClicked =  event.target
      buttonClicked.parentElement.parentElement.parentElement.remove()
      updateCartTotal()

  })
}

function updateCartTotal(){

    var cartItemContainer = document.getElementsByClassName('items')[0]
    var cartItems = cartItemContainer.getElementsByClassName('itembox')
    
    var total = 0
    for (var i = 0; i < cartItems.length; i++) {
      var cartItem = cartItems[i]
      var priceElement = cartItem.getElementsByClassName('price')[0]
      var quantityElement = cartItem.getElementsByClassName('quantity-unit')[0]

      var price = parseFloat(priceElement.innerHTML.replace('$', ''))
      var quantity = quantityElement.value
      total = total + (price * quantity)

    }
    var totalprice = document.getElementsByClassName('Subtotal-price')[0]
    totalprice.innerText = total
}

window.onscroll = () =>{
    searchForm.classList.remove('active');
    Logoutform .classList.remove('active');
    navbar.classList.remove('active');
}

var swiper = new Swiper(".product-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});
