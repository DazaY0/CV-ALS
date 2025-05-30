@twillBlockTitle('Neuigkeiten')
@twillBlockIcon('info')
@twillBlockGroup('app')

@formField('checkbox', [
'name' => 'show_title',
'label' => 'Show block title',
'default' => true
])

@formField('input', [
'name' => 'block_title',
'label' => 'Block title',
'default' => 'Latest Articles',
'note' => 'Leave empty to hide',
'maxlength' => 100,
'required' => false
])
