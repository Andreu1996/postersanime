function sideTable(){
    let edit = document.querySelectorAll('.edit-button');
    let table = document.querySelector('.sidetable');
    let maintable = document.querySelector('.tablefill');

    document.addEventListener("renderFormModules",( event =>{
        sideTable();
    }), {once: true});
 
    edit.forEach(useredit => {
        useredit.addEventListener("click", () => {
            table.classList.remove("sidetablehide");
            maintable.classList.add("maintable");            
        });
    });
}

export {sideTable};