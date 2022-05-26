export function removeUser () {
  
    let remove = document.querySelector('.remove-button');
    let removeConfirmation = document.querySelector('.remove-confirmation');
    let removeConfirmationCancel = document.querySelector('.remove-confirmation-cancel');

    document.addEventListener("renderFormModules",( event =>{
      removeUser();
  }), {once: true}); 

    remove.addEventListener("click", () => {
      removeConfirmation.classList.add("remove-confirmation-active");
    });

    removeConfirmationCancel.addEventListener("click", () => {
        removeConfirmation.classList.remove("remove-confirmation-active");
    });
}

    