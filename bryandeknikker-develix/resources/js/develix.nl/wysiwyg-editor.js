import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

function initializeEditor(selector, hiddenFieldId) {
    ClassicEditor
        .create(document.querySelector(selector))
        .then(editor => {
            editor.model.document.on('change:data', () => {
                // Zet de waarde van het verborgen veld gelijk aan de editor-inhoud
                document.querySelector(hiddenFieldId).value = editor.getData();
            });
        })
        .catch(error => {
            console.error(error);
        });
}

// Initialiseer CKEditor en synchroniseer met de textarea
initializeEditor('#content', '#content');
initializeEditor('#intro', '#intro');
