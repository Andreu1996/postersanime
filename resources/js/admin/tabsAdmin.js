export function tabsAdmin () {

    let tabs = document.querySelectorAll('.tab');
    let tabContents = document.querySelectorAll('.content');

    document.addEventListener("renderFormModules",( event =>{
        tabsAdmin();
    }), {once: true});

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