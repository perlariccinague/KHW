<?php

return [
    'label'           => ['Gut zu wissen', ''],
    'types'           => ['content'],
    'contentCategory' => 'texts',
    'moduleCategory'  => 'miscellaneous',
    'beTemplate'      => 'be_rsce_short-info',
    'standardFields'  => ['cssID'],
    'wrapper'         => [
        'type' => 'none',
    ],
    'fields'          => [
        'headline' => [
            'label' => ['Überschrift', 'Dies steht über den Infos (z.B. "Gut zu wissen"'],
            'inputType' => 'text',
        ],
        'infos' => [
            'label' => ['Infos', 'Rechts auf "Neues Element" klicken'],
            'inputType' => 'list',
            'fields' => [
                'text' => [
                    'label' => ['Eine Kurzinfo', ''],
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
