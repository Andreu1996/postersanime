export let renderCloseForm = () => {


let closeForm = document.querySelector('.sidetabe-header-close-svg');
let table = document.querySelector('.sidetable');
let maintable = document.querySelector('.tablefill');

    document.addEventListener("renderFormModules",( event =>{
        renderCloseForm();
    }), {once: true});


    closeForm.addEventListener('click', () => {
        table.classList.add("sidetablehide");
        maintable.classList.remove("maintable"); 
    });
     
}