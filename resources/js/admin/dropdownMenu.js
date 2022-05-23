export function dropdownMenu () {
    let dropdownMenu = document.querySelector('.filter-svg');
    let dropdownMenuContent = document.querySelector('.dropdown-menu-content');
    let sidetableDownUp = document.querySelector('.sidetable');

    dropdownMenu.addEventListener("click", () => {
        dropdownMenuContent.classList.toggle("active-filter");
        dropdownMenu.classList.toggle("filter-svg-active");
        sidetableDownUp.classList.toggle("sidetable-down-up");
    });
}