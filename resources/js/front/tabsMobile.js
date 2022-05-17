export function tabsMobile () {
    
    let selectsRelated = document.querySelectorAll('.select-related');
    let selectsRelatedOptions = document.querySelectorAll('.select-related-options');

    selectsRelated.forEach(selectRelated => {

        selectRelated.addEventListener('change', () => {

            selectsRelatedOptions.forEach(selectRelatedOption => {

                if (selectRelated.value === selectRelatedOption.dataset.related) {
                    selectRelatedOption.classList.add('active');
                } else {
                    selectRelatedOption.classList.remove('active');
                }
            });
        });
    });
}