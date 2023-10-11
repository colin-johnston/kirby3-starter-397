<?php

/**
 * The config file is optional. It accepts a return array with config options
 * Note: Never include more than one return statement, all options go within this single return array
 * In this example, we set debugging to true, so that errors are displayed onscreen. 
 * This setting must be set to false in production.
 * All config options: https://getkirby.com/docs/reference/system/options
 */
return [
    'debug' => true,
    'markdown' => [
        'extra' => true
    ],

    'thumbs' => [
        'srcsets' => [
            'default' => [640, 768, 1024, 1280, 1920],
            // 'default' => [
            //     '300w'  => ['width' => 300],
            //     '600w'  => ['width' => 600],
            //     '900w'  => ['width' => 900],
            //     '1200w' => ['width' => 1200],
            //     '1800w' => ['width' => 1800]
            // ],
            'projects' => [320, 400, 640, 768, 1024, 1280, 1920],
            'cover' => [320, 400, 640, 768, 1024, 1280, 1920],
        ],
        // 'driver' => 'im'
    ],
    // 'kirbytext' => [
    //     'image' => [
    //         'srcset' => [320, 400, 640, 768, 1024, 1280, 1920],
    //     ]
    // ],
];