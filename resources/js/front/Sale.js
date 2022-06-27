export let Sale = () => {

    let mainContent = document.getElementById("main");
    let SaleButton = document.querySelector('.finish-order-button');

    document.addEventListener("renderProductsModule",( event =>{
        Sale();
    }), {once: true});

    if(SaleButton){
        
        SaleButton.addEventListener("click", () => {

            let url = SaleButton.dataset.url;
    
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
    }
   
}