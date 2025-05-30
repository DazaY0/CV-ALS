@twillBlockTitle('Reihe')
@twillBlockIcon('flex-grid')


<div class="block-accordion">
    @formField('checkbox', [
    'name' => 'center',
    'label' => 'zentriert',
    'default' => false
    ])

    @formField('block_editor', [
    'blocks' => [],
    'name' => 'children'
    ])
</div>
