export function buyButton () {

    let mainContent = document.getElementById("main");
    let buyButtons = document.querySelectorAll('.buy-button');

    document.addEventListener("renderProductsModule", (event => {
        buyButton();
    }), { once: true });

    buyButtons.forEach(button => {

        button.addEventListener("click", (event) => {
            
        event.preventDefault();

        let url = button.dataset.url

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

