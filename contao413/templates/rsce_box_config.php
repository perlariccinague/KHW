<?php

return [
    'label'           => ['Teaser Boxen', ''],
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
                'description' => [
                    'label' => ['Unterüberschrift', ''],
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
                    'inputType' => 'text',
                    'eval' => [
                        'tl_class' => 'w50',
                        'rgxp' => 'url',
                        'decodeEntities' => true,
                        'maxlength' => 255,
                        'dcaPicker' => array(
                            'context' => 'link',
                            'providers' => array('pagePicker', 'filePicker'),
                        ),
                        'addWizardClass' => false
                    ]
                ]
            ]
        ]
    ]
];
