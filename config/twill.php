<?php

return [
    'media_library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => public_path('uploads'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'file_service' => env('MEDIA_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileSystem\Disk'),
    ],
    'enabled' => [
        'tags' => true,
    ],

    'modules' => [
        'pages' => true,
        'articles' => true,
    ],
    'default_crops' => [
        'page_cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ]
            ],
            'free' => [
                [
                    'name' => 'default',
                    'ratio' => 16 / 9,
                ]
            ]

        ]
    ],

    'block_editor' => [
        'file_library' => [
            'allowed_extensions' => ['jpg', 'jpeg', 'png', 'gif'],
        ],
        'blocks' => [
            'rich_text' => [
                'title' => 'Text',
                'icon' => 'text',
                'component' => 'a17-block-rich-text',
            ],
            'list' => [
                'title' => 'Liste',
                'icon' => 'list',
                'component' => 'a17-block-list',
            ],
            'image_w_caption' =>[
                'title' => 'Bild with Unterschrift',
                'icon' => 'image',
                'component' => 'a17-block-image-caption',
            ],
            'accordion' =>[
                'title' => 'Accordion',
                'icon' => 'accordion',
                'component' => 'a17-block-accordion',
            ],
            'image' =>[
                'title' => 'Bild',
                'icon' => 'image',
                'component' => 'a17-block-image',
            ],
        ],
        'crops' => [
            'highlight' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                    ],
                ],

            ],
            'picture'=> [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 0
                    ],
                ],
                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 0,
                    ],
                ],
            ],
        ],
        'files' => ['audio_file', 'download_file'],

    ],

];
