function sideTable(){
    let edit = document.querySelectorAll('.useredit');
    let table = document.querySelector('.sidetablehide');
    let maintable = document.querySelector('.tablefill');
 
    edit.forEach(useredit => {
        useredit.addEventListener("click", () => {
            table.classList.toggle("sidetablehide");
            maintable.classList.toggle("maintable");
            hideElement.classList.toggle("text-desapear");
            
        });
    });
}

export {sideTable};