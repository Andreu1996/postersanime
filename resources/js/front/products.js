import { tabs } from "./tabs";

export let renderProduct = () => {

    let mainContent = document.getElementById("main");
    let productButtons = document.querySelectorAll('.product-details');

    document.addEventListener("renderProductsModule",( event =>{
        renderProduct();
    }), {once: true});

    productButtons.forEach(productButton => {

        productButton.addEventListener("click", () => {

                let url = productButton.dataset.url;

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
                        
                        document.dispatchEvent(new CustomEvent('renderTabsModule'));
                        tabs();

                        document.dispatchEvent(new CustomEvent('renderPlusMinusModule'));
                        plusMinus();

                        document.dispatchEvent(new CustomEvent('renderPopUpCartModule'));
                        popUpCart();

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