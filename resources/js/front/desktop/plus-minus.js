export function add_substract () {


    let minuses = document.getElementById("minus");
    let pluses = document.getElementById("plus");
    let total = document.getElementById('total');

        // plus.addEventListener("click", () => {
        //     total.value = (parseInt(total.value) + 1);
        // });

        minus.addEventListener("click", () => {
            if (total.value > 0) {
                total.value = (parseInt(total.value) - 1);
            }
        });

}