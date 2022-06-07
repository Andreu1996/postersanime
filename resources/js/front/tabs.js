export function tabs () {

    let tabs = document.querySelectorAll('.tab');
    let tabsContent = document.querySelectorAll('.tabContent');
    
    document.addEventListener("renderTabsModule",( event =>{
        tabs();
    }), {once: true});
    
    tabs.forEach(tab => {

        tab.addEventListener("click", () => {

            tabs.forEach(tab => {
                tab.classList.remove("tabActive");
            });

            tab.classList.add("tabActive");

                tabsContent.forEach(tabContent => {

                    tabContent.classList.remove("tabContentActive");

                    if (tab.dataset.tab == tabContent.dataset.tab){
                        tabContent.classList.add("tabContentActive");
                    } 

                });

        });
    });

    // tabsSelect.forEach(tabSelect => {
        
    //     tabSelect.addEventListener("change", () => {

    //         tabContents.forEach(tabContent => {

    //             tabContent.classList.remove("tabContentActive");

    //             if (tabSelect.dataset.tab == tabContent.dataset.tab){
    //                 tabContent.classList.add("tabContentActive");
    //             }

    //         });
    //     });
    // });
}

