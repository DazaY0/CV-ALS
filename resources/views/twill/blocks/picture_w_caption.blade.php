@twillBlockTitle('Bild mit Titel')
@twillBlockIcon('image-text')
@twillBlockGroup('media')

<div class="block-picture-caption">

    @formField('medias', [
    'name' => 'picture',
    'label' => 'Bild',
    'max' => 1
    ])

    @formField('checkbox', [
    'name' => 'caption_above',
    'label' => 'Bildunterschrift über den Bild'
    ])

    @formField('input', [
    'translated' => true,
    'name' => 'caption',
    'label' => 'Bildunterschrift',
    'maxlength' => 250
    ])
</div>
