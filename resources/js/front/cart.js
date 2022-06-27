export let renderCart = () => {

    let mainContent = document.getElementById("main");
    let addToCart = document.querySelector('.add-product-to-cart');
    let forms = document.querySelectorAll('.cart-form');
    let plusMinusButtons = document.querySelectorAll(".plus-minus-button-cart");

    document.addEventListener("renderMainModule",( event =>{
        renderCart();
    }), {once: true});

    document.addEventListener("renderProductsModule", (event => {
        renderCart();
    }), { once: true });

    if (addToCart) {
    
        addToCart.addEventListener("click", (event) => {
        
            event.preventDefault();
    
            forms.forEach(form => {
    
                let data = new FormData(form);
                let url = form.action;

                let sendPostRequest = async() => {
    
                    let response = await fetch(url, {
                        headers: {
                            'Accept': 'application/json',
                            'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                        },
                        method: 'POST',
                        body: data
                    })
                    .then(response => {

                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        mainContent.innerHTML = json.content;

                        document.dispatchEvent(new CustomEvent('renderProductsModule'));
                        
                    })
                    .catch(error => {

                        if (error.status == '500') {
                            console.log(error);
                        };
                    });
                };

                sendPostRequest();
            });
    
        });
    }

    
    plusMinusButtons.forEach(plusMinusButton => {

        plusMinusButton.addEventListener("click", (event) => {

            event.preventDefault();

            let url = plusMinusButton.dataset.url;
            console.log(url);

            let sendPostRequest = async() => {

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

                        document.dispatchEvent(new CustomEvent('renderProductsModule'));

                    })
                    .catch(error => {

                        if (error.status == '500') {
                            console.log(error);
                        };
                    });
            };

            sendPostRequest();

        });

    });
    
}