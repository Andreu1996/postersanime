// export function add_substract () {




//         plus.addEventListener("click", () => {
//             total.value = (parseInt(total.value) + 1);
//         });

//         minus.addEventListener("click", () => {
//             if (total.value > 1) {
//                 total.value = (parseInt(total.value) - 1);
//             }
//         });

// }


export let PlusMinus = () => {

    let plusMinusButtons = document.querySelectorAll(".plus-minus-button");

    plusMinusButtons.forEach(plusMinusButton => {

        plusMinusButton.addEventListener("click", () => {

            let plusMinusContainer = plusMinusButton.closest(".plus-minus-container");
            let plusMinusInput = plusMinusContainer.querySelector(".plus-minus-input");
            let value = parseInt(plusMinusInput.value);

            if(plusMinusButton.dataset.type == "plus") {
                value++;
            } else if (plusMinusButton.dataset.type == "minus" && value > 1) {
                value--;
            }

            plusMinusInput.value = value;

        });

    });
}
        

