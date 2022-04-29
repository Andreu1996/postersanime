require('./bootstrap.js');

let minuses = document.querySelectorAll(".minus");
    let pluses = document.querySelectorAll(".plus");
    let totals = document.querySelectorAll('.total');

    pluses.forEach(plus => {

        plus.addEventListener("click", () => {
            let total = parseInt(total_element.innerHTML);
            total_element.innerHTML = totals + 1;
        });
        
    });

    minuses.forEach(minus => {

        minus.addEventListener("click", () => {
            window.alert("minus");
        });
        
    });


// import {tabs} from "../mobile/tabs";
// import {add_substract} from "../mobile/plus-minus.js";

// tabs ();
// add_substract();
