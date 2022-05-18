export function tabsAdmin () {

    let tabs = document.querySelectorAll('.tab');
    let tabContents = document.querySelectorAll('.content');

    tabs.forEach(tab => {

        tab.addEventListener("click", () => {

            tabs.forEach(tab => {
                tab.classList.remove("tabs--active");
            });

            tab.classList.add("tabs--active");
   
            

            tabContents.forEach(Content => {

                Content.classList.remove("content--active");

                if (tab.dataset.tab == Content.dataset.tab){
                    Content.classList.add("content--active");
                } 

            });

        });
    });
}



export function tabsAdminLocal () {

    let tabsLocal = document.querySelectorAll('.tab-local');
    let tabContentsLocal = document.querySelectorAll('.content-local');

    tabsLocal.forEach(tabLocal => {

        tabLocal.addEventListener("click", () => {

            tabsLocal.forEach(tabLocal => {
                tabLocal.classList.remove("tabs--active-local");
            });

            tabLocal.classList.add("tabs--active-local");
   
            

            tabContentsLocal.forEach(ContentLocal => {

                ContentLocal.classList.remove("content--active-local");

                if (tabLocal.dataset.tab == ContentLocal.dataset.tab){
                    ContentLocal.classList.add("content--active-local");
                } 

            });

        });
    });
}