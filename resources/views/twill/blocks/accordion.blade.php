
@twillBlockTitle('Accordion')
@twillBlockIcon('dropdown_default')
@twillBlockGroup('content')

<div class="block-accordion">
    @formField('input', [
    'translated' => true,
    'name' => 'title',
    'label' => 'Accordion Titel',
    'maxlength' => 100
    ])

    @formField('checkbox', [
    'name' => 'opened',
    'label' => 'Anfangs offen'
    ])

    @formField('block_editor', [
    'blocks' => [],
    'name' => 'accordion_content'
    ])
</div>

