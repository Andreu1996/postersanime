function hamburgerMenu(){

    let hamburger = document.querySelector(".ham");  
    let menuadmin = document.querySelector(".menuadmin"); 

    hamburger.addEventListener('click', () => {  
        hamburger.classList.toggle("change");  
        menuadmin.classList.toggle("menuhide"); 
    });

}

export {hamburgerMenu};