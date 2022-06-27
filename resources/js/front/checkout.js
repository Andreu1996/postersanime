export let checkout = () => {

    //Es la etiqueta main, porque es quien contiene el 'Content'
    let mainContent = document.getElementById("main");
    let checkoutButton = document.querySelector('.finish-order-button');
    let forms = document.querySelectorAll('.front-form');

    document.addEventListener("renderProductsModule", (event => {
        checkout();
    }), { once: true });

    if (checkoutButton) {

        checkoutButton.addEventListener("click", (event) => {

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


                            if (error.status == '422') {

                                error.json().then(jsonError => {

                                    let errors = jsonError.errors;
                                    let errorMessage = '';

                                    Object.keys(errors).forEach(function(key) {
                                        errorMessage += '<li>' + errors[key] + '</li>';
                                    })

                                    document.dispatchEvent(new CustomEvent('message', {
                                        detail: {
                                            message: errorMessage,
                                            type: 'error'
                                        }
                                    }));
                                })
                            }

                            if (error.status == '500') {
                                console.log(error);
                            };
                        });
                };

                sendPostRequest();
            });
        });
    }



}