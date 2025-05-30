@twillBlockTitle('Liste')
@twillBlockIcon('media-list')

@formField('input', [
'name' => 'title',
'label' => 'List Title',
'translated' => true,
'maxlength' => 200
])

@formField('block_editor', [
'blocks' => ['list-item'],
'name' => 'list_content'
])
