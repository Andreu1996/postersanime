export let renderDeleteButton = () => {
    
    let modalDelete = document.querySelector('.remove-confirmation');
    let deleteConfirm = document.getElementById('remove-confirmation-delete');
    let deleteCancel = document.getElementById('remove-confirmation-cancel');
 
    document.addEventListener("renderTableModules", (event => {
        renderDeleteButton();
    }), { once: true });
 
    document.addEventListener("openModalDelete", (event => {
 
        deleteConfirm.dataset.url = event.detail.url;
        modalDelete.classList.add('active');
    }), { once: true });
 
    deleteCancel.addEventListener("click", () => {
        modalDelete.classList.remove('active');
    });
 
    deleteConfirm.addEventListener("click", () => {
 
        let url = deleteConfirm.dataset.url;
 
        let sendDeleteRequest = async() => {
 
            let response = await fetch(url, {
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-CSRF-TOKEN': document.head.querySelector('meta[name="csrf-token"]').content
                    },
                    method: 'DELETE',
                })
                .then(response => {
 
                    if (!response.ok) throw response;
 
                    return response.json();
                })
                .then(json => {
 
                    if (json.table) {
                        document.dispatchEvent(new CustomEvent('loadTable', {
                            detail: {
                                table: json.table,
                            }
                        }));
                    }
 
                    document.dispatchEvent(new CustomEvent('loadForm', {
                        detail: {
                            form: json.form,
                        }
                    }));
 
                    modalDelete.classList.remove('active');
                    document.dispatchEvent(new CustomEvent('renderFormModules'));
                    document.dispatchEvent(new CustomEvent('renderTableModules'));
                })
                .catch(error => {
 
                    if (error.status == '500') {
                        console.log(error);
                    };
                });
        };
 
        sendDeleteRequest();
    });
 
};
