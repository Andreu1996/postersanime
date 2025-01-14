export let client = () => {

    let mainContent = document.getElementById("main");
    let addClient = document.querySelector('.finish-order-button');
    
    document.addEventListener("renderProductsModule", (event => {
        renderCart();
    }), { once: true });

    addClient.addEventListener("click", (event) => {

        //se pone para los botones que hay dentro de un formulario porque envía
        //donde no queremos
    
        event.preventDefault();
    
        forms.forEach(form => {
    
            let data = new FormData(form);
            let url = form.action;
    
            let sendPostRequest = async() => {
    
                //Para llamada POST y DELETE hace falta X-CSRF-TOKEN
                //Fetch es para realizar llamadas al servidor en Js
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

