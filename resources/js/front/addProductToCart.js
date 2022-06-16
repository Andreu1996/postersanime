export let addProductToCart = () => {

    let mainContent = document.getElementById("main");
    let addProductToCart = document.querySelector('.add-product-to-cart');

    document.addEventListener("renderAddProductToCartModule", (event => {
        addProductToCart();
    }), { once: true });

    addProductToCart.addEventListener("click", () => {

        window.alert("adios");

        let url = form.action;
        let formData = new FormData(form);

        let sendShowRequest = async() => {

            let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                    },
                    method: 'GET',
                })
                .then(response => {

                    if (!response.ok) throw response;

                    return response.json();
                })
                .then(json => {

                    mainContent.innerHTML = json.content;

                    document.dispatchEvent(new CustomEvent('renderAddProductToCartModule'));
                    addProductToCart();
                })
                .catch(error => {

                    if (error.status == '500') {
                        console.log(error);
                    };
                });
        };

        sendShowRequest();
    });

}