export function tabs () {

    let tabs = document.querySelectorAll('.tab');
    let tabContents = document.querySelectorAll('.tabContent');

    tabs.forEach(tab => {

        tab.addEventListener("click", () => {

            tabs.forEach(tab => {
                tab.classList.remove("tabActive");
            });

            tab.classList.add("tabActive");
   
            

            tabContents.forEach(tabContent => {

                tabContent.classList.remove("tabContentActive");

                if (tab.dataset.tab == tabContent.dataset.tab){
                    tabContent.classList.add("tabContentActive");
                } 

            });

        });
    });
}

