export let renderImageUpload = () => {

    let chooseFiles = document.querySelectorAll('.choose-file');
    let deleteFiles = document.querySelectorAll('.image-preview-delete');     

    chooseFiles.forEach(chooseFile => {

        chooseFile.addEventListener("change", function() {

            let files = chooseFile.files[0]
            let fileReader = new FileReader();

            fileReader.readAsDataURL(files);
            
            fileReader.addEventListener("load", function () {
                chooseFile.closest('.image-selector').querySelector('.image-preview-element').src = fileReader.result;
                chooseFile.closest('.image-selector').querySelector('.image-preview-svg').classList.add('hidden');
                chooseFile.closest('.image-selector').querySelector('.image-preview-delete').classList.add('active');

            
            deleteFiles.forEach(deleteFile => {

                deleteFile.addEventListener("click", function() {
                    deleteFile.closest('.image-selector').querySelector('.image-preview-element').src = '';
                    deleteFile.closest('.image-selector').querySelector('.image-preview-svg').classList.remove('hidden');
                    deleteFile.closest('.image-selector').querySelector('.image-preview-delete').classList.remove('active');
                    });
                });
            });
        });
    });
}