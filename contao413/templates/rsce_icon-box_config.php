<?php

return [
    'label'           => ['Icon-Boxen', ''],
    'types'           => ['content'],
    'contentCategory' => 'texts',
    'moduleCategory'  => 'miscellaneous',
    'beTemplate'      => 'be_rsce_box',
    'standardFields'  => ['cssID'],
    'wrapper'         => [
        'type' => 'none',
    ],
    'fields'          => [
        'boxes' => [
            'label' => ['boxes', 'Rechts auf "Neues Element" klicken'],
            'inputType' => 'list',
            'fields' => [
                'headline' => [
                    'label' => ['Überschrift', ''],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50',]
                ],
                'icon' => [
                    'label' => ['Icon', ''],
                    'inputType' => 'fileTree',
                    'eval' => ['tl_class' => 'w50','filesOnly' => true]
                ],
                'link' => [
                    'label' => ['Link-Ziel', ''],
                    'inputType' => 'pageTree',
                    'eval' => ['tl_class' => 'w50',]
                ]
            ]
        ]
    ]
];
