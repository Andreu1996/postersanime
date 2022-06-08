export let renderProductCategory = () => {
    

    let mainContent = document.getElementById("main");
    let categories = document.querySelectorAll('.select-category');

    categories.forEach(category => {

        category.addEventListener("click", () => {
            window.alert('category');
        }
    , {once: true});

    });


}