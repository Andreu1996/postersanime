function saveButton(){

    let save = document.querySelector('.sidetableHeaderSave');
    let saveTab = document.querySelector('.pop-up-save');

    document.addEventListener("renderFormModules",( event =>{
        saveButton();
    }), {once: true});


    save.addEventListener('click', () => {  
        saveTab.classList.add("pop-up-save-active");  
      

      setTimeout(() => {
        saveTab.classList.remove("pop-up-save-active");
      }, 5000);
    });


    // let cancelButton = document.querySelector('.cancel-button');
    // let cancelSave = document.querySelector('.save');


    //     save.addEventListener("click", () => {
    //         saveTab.classList.remove("saveHide");
    //     });

    //     cancelButton.addEventListener("click", () => {
    //         saveTab.classList.add("saveHide");
    //     });

    //     cancelSave.addEventListener("click", () => {
    //         saveTab.classList.add("saveHide");
    //     });

}

export {saveButton};