<?php

/*
 * This file is part of the package ku_saveclose.
 * For the full copyright and license information, please read the
 * LICENSE file that was distributed with this source code.
 * Sep 2022 Nanna Ellegaard, University of Copenhagen.
 */

$EM_CONF[$_EXTKEY] = [
    'title' => 'KU save close button',
    'description' => 'Adds save and close button to all the content elements',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '*',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'UniversityOfCopenhagen\\KuSaveclose\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Nanna Ellegaard',
    'author_email' => 'nel@adm.ku.dk',
    'author_company' => 'University of Copenhagen',
    'version' => '1.0.0',
];
