@twillBlockTitle('Text')
@twillBlockIcon('text')

@formField('wysiwyg', [
'name' => 'text',
'label' => 'Textinhalt',
'translated' => true,
'toolbarOptions' => [
['header' => [1, 2, 3, 4, 5, 6, false]],
'bold',
'italic',
'underline',
'strike',
["color" => []],
["background" => []],
["font" => []],
["size" => ["small", false, "large", "huge"]],
'blockquote',
'code-block',
['list' => 'ordered'],
['list' => 'bullet'],
['script' => 'sub'],
['script' => 'super'],
['indent' => '-1'],
['indent' => '+1'],
'link',
'clean'
],
'editSource' => true,
'type' => 'quill',

])
