 function previewImage(event){
        const fileInput = event.target;
        const preview = document.getElementById('createBlogImgPreview');

        const file = fileInput.files[0];
        if(file){
            const reader = new FileReader();
            reader.onload = function(e){
                preview.src = e.target.result;
            }

            reader.readAsDataURL(file);
        }
}