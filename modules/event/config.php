<?php
/**
 * event config file
 * @package event
 * @version 0.0.1
 * @upgrade true
 */

return [
    '__name' => 'event',
    '__version' => '0.0.1',
    '__git' => 'https://github.com/getphun/event',
    '__files' => [
        'modules/event' => [
            'install',
            'remove',
            'update'
        ]
    ],
    '__dependencies' => [
        'core'
    ],
    '_services' => [
        'event' => 'Event\\Service\\Event'
    ],
    '_autoload' => [
        'classes' => [
            'Event\\Service\\Event' => 'modules/event/service/Event.php'
        ],
        'files' => []
    ]
];