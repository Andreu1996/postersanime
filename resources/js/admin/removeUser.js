export function removeUser () {
    let remove = document.querySelector('.userdelete');
    let removeConfirmation = document.querySelector('.remove-confirmation');
    let removeConfirmationCancel = document.querySelector('.remove-confirmation-cancel');


    remove.addEventListener("click", () => {
      removeConfirmation.classList.add("remove-confirmation-active");
    });

    removeConfirmationCancel.addEventListener("click", () => {
        removeConfirmation.classList.remove("remove-confirmation-active");
    });
}

    