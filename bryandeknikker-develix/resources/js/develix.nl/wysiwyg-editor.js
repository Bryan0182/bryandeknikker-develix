import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

ClassicEditor
    .create(document.querySelector('#content'))
    .catch(error => {
        console.error(error);
    });
