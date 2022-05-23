export let closeForm = () => {

let closeForm = document.querySelector('.sidetable-header-close');
let table = document.querySelector('.sidetablehide');
let maintable = document.querySelector('.tablefill');


    closeForm.addEventListener('click', () => {
        table.classList.add("sidetablehide");
        maintable.classList.remove("maintable"); 
    });
     
}