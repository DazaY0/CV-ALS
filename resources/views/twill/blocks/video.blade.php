@twillBlockTitle('Video')
@twillBlockIcon('video')

@formField('input', [
'name' => 'video_url',
'label' => 'Video URL (YouTube or Vimeo)',
'note' => 'Paste the URL of a YouTube or Vimeo video'
])

@formField('input', [
'name' => 'caption',
'label' => 'Caption',
'maxlength' => 250
])
