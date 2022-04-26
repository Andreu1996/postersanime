function saveButton(){

    let save = document.querySelector('.sidetableHeaderSave');
    let saveTab = document.querySelector('.save');
    let cancelButton = document.querySelector('.cancel-button');
    let cancelSave = document.querySelector('.save');


        save.addEventListener("click", () => {
            saveTab.classList.remove("saveHide");
        });

        cancelButton.addEventListener("click", () => {
            saveTab.classList.add("saveHide");
        });

        cancelSave.addEventListener("click", () => {
            saveTab.classList.add("saveHide");
        });

}

export {saveButton};