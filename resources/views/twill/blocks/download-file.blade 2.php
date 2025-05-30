@twillBlockTitle('File Download')
@twillBlockIcon('download')
@twillBlockGroup('media')

<x-twill::input
    translated="true"
    name="title"
    label="Download Titel"
    :required="true"
/>

<x-twill::files
    name="download_file"
    label="Datei"
    :required="true"
    fieldNote="Wähle eine Datei aus"
/>
