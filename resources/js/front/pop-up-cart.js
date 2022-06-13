export let popUpCart = () => {

    let popUpCartPage = document.querySelector(".pop-up-cart");
    let carts = document.querySelectorAll(".cart");
    let saves = document.querySelectorAll(".save");

    document.addEventListener("renderPopUpCartModule",( event =>{
      popUpCart();
  }), {once: true});

    carts.forEach(cart => {
        cart.addEventListener('click', () => {  
          window.alert(cart.dataset.url);
          popUpCartPage.classList.toggle("pop-up-cart-active");  
        

        setTimeout(() => {
          popUpCartPage.classList.remove("pop-up-cart-active");
        }, 5000);
      });
    });
    

    saves.forEach(save => {
        save.addEventListener('click', () => {  
          popUp.classList.toggle("pop-up-cart-active");  
        

        setTimeout(() => {
          popUp.classList.remove("pop-up-active");
        }, 1000);
      });

    });
    

}

