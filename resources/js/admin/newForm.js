export function newForm () {

    let newForm = document.querySelector('.new-form');
    let table = document.querySelector('.sidetable');
    let maintable = document.querySelector('.tablefill');

    document.addEventListener("renderFormModules",( event =>{
        newForm();
    }), {once: true});

    newForm.addEventListener('click', () => {
        table.classList.remove("sidetablehide");
        maintable.classList.add("maintable");
    });

}