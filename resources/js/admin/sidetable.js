function sideTable(){
    let edit = document.querySelectorAll('.edit-button');
    let table = document.querySelector('.sidetablehide');
    let maintable = document.querySelector('.tablefill');
 
    edit.forEach(useredit => {
        useredit.addEventListener("click", () => {
            table.classList.remove("sidetablehide");
            maintable.classList.add("maintable");            
        });
    });
}

export {sideTable};