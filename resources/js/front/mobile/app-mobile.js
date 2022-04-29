require('./bootstrap.js');


    // let tabs = document.querySelectorAll('.tab');
    // let tabContent = document.querySelectorAll('.tabContent');
    // let tabContentActive = document.querySelector('.tabContentActive');

    // tabs.forEach(tab => {

    //     tab.addEventListener("click", () => {
    //         // tabContent.classList.toggle("tabContent"); 
                
    //         tabContent.forEach(tabContent => {
    //             tabContent.classList.add("tabContentActive");
    //             tabContentActive.classList.remove("tabContentActive");
    //         });
            
    //     });

    // });



import {hamburgerMenu} from "./hamburger";
import {add_substract} from "./plus-minus.js";
import {tabs} from "./tabs.js";

// import {add_substract2} from "./plus-minus.js";
// import {add_substract3} from "./plus-minus.js";


hamburgerMenu();
add_substract();
tabs ();
// add_substract2();
// add_substract3();