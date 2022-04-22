function sideTable(){
    let edit = document.querySelectorAll('.useredit');
    let table = document.querySelector('.sidetablehide');
    let maintable = document.querySelector('.tablefill');
    let hideelement = document.querySelectorAll('.text-desapear');
 
    edit.forEach(useredit => {
        useredit.addEventListener("click", () => {
            table.classList.toggle("sidetablehide");
            maintable.classList.toggle("maintable");
            hideelement.classList.toggle("maintable");
        });
    });
}

export {sideTable};
