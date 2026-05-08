<?php

return [
    'label'           => ['Event Boxen', ''],
    'types'           => ['content'],
    'contentCategory' => 'texts',
    'moduleCategory'  => 'miscellaneous',
    'beTemplate'      => 'be_rsce_event-box',
    'standardFields'  => ['cssID'],
    'wrapper'         => [
        'type' => 'none',
    ],
    'fields'          => [
        'boxes' => [
            'label' => ['Boxen', 'Rechts auf "Neues Element" klicken'],
            'inputType' => 'list',
            'fields' => [
                'icon' => [
                    'label' => ['Icon', ''],
                    'inputType' => 'fileTree',
                    'eval' => ['tl_class' => 'w50','filesOnly' => true]
                ],
                'headline' => [
                    'label' => ['Überschrift', ''],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50',]
                ],
                'date' => [
                    'label' => ['Datum und Uhrzeit (falls zutreffend)', ''],
                    'inputType' => 'textarea',
                    'eval' => ['tl_class' => 'clr', 'rte' => 'tinyMCE']
                ],
                'text' => [
                    'label' => ['Text', ''],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50',]
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
