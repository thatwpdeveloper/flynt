<?php

namespace Flynt\Components\BlockWysiwyg;

use Flynt\Api;

Api::registerFields('BlockWysiwyg', [
    'layout' => [
        'name' => 'blockWysiwyg',
        'label' => 'Block: Wysiwyg',
        'sub_fields' => [
            [
                'label' => 'Text Alignment',
                'name' => 'textAlignment',
                'type' => 'button_group',
                'choices' => [
                    'textLeft' => '<i class=\'dashicons dashicons-editor-alignleft\' title=\'Align text left\'></i>',
                    'textCenter' => '<i class=\'dashicons dashicons-editor-aligncenter\' title=\'Align text center\'></i>'
                ]
            ],
            [
                'name' => 'contentHtml',
                'label' => 'Content',
                'type' => 'wysiwyg',
                'delay' => 1,
                'media_upload' => 0,
                'toolbar' => 'full',
                'required' => 1,
                'wrapper' => [
                    'class' => 'autosize',
                ],
            ]
        ]
    ]
]);
