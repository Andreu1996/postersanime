export let menu = () => {

    let mainContent = document.getElementById("main");
    let menuOptions = document.querySelectorAll('.menu_element');

    menuOptions.forEach(menuOption => {

    menuOption.addEventListener("click", () => {

        let url = menuOption.dataset.url;

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

                        document.dispatchEvent(new CustomEvent('renderFaqsModule'));
                        FAQS();

                        document.dispatchEvent(new CustomEvent('renderProductsModule'));
                        renderProduct();

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

