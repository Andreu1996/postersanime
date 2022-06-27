export let renderProducts = () => {

    let mainContent = document.getElementById("main");
    let productButtons = document.querySelectorAll('.product-details');
    let categoryOptions = document.querySelectorAll('.select-category');
    let selectFilterPrice = document.querySelector('.select-filter');

    document.addEventListener("renderMainModule",( event =>{
        renderProducts();
    }), {once: true});

    document.addEventListener("renderProductsModule",( event =>{
        renderProducts();
    }), {once: true});

    if (productButtons) {

        productButtons.forEach(productButton => {

            productButton.addEventListener("click", () => {
            
                let url = productButton.dataset.url;

                // permite una llamada asincronica con el servidor.
                let renderSection = async () => {
                   
                    // deja esperando la respuesta del servidor. Solo caundo esto responda, lo siguiente de mas abajo se ejecutara. si no responte saldra un error
                    let response = await fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest',
                        },
                        // indica el metodo que se va a utilizar indicado en routes.php
                        method: 'GET', 
                    })
                    // si la respuesta es correcta, entonces se ejecuta el siguiente codigo
                    .then(response => {
                                  
                        if (!response.ok) throw response;

                        return response.json();
                    })
                    .then(json => {

                        mainContent.innerHTML = json.content; 
                        
                        document.dispatchEvent(new CustomEvent('renderProductsModule'));
                    })

                    .catch(error =>  {
        
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
    
                // ejecuta la funcion renderSection
                renderSection();
            });
        });
    }

    if (categoryOptions) {

        categoryOptions.forEach(categoryOption => {

            categoryOption.addEventListener("click", () => {

                let url = categoryOption.dataset.url;

                let renderSection = async () => {
                    
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

                    .catch(error =>  {
        
                        if(error.status == '500'){
                            console.log(error);
                        };
                    });
                };
    
                renderSection();
            });

        });
    }

    if(selectFilterPrice){
  
        selectFilterPrice.addEventListener("change", () => {

            let url = selectFilterPrice.value;

            let sendFilterRequest = async() => {
        
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

            sendFilterRequest();
        });
    }
}

