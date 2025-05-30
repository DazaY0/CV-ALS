@twillBlockTitle('Audio Player')
@twillBlockIcon('b-audio')
@twillBlockGroup('media')

@formField('input', [
'translated' => true,
'name' => 'title',
'label' => 'Title (optional)',
'placeholder' => 'Enter a title for this audio',
'maxlength' => 100
])

@formField('files', [
'name' => 'audio_file',
'label' => 'Audio Datei',
'note' => 'Add one file (per language)'
])
