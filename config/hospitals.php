<?php

return [
    'branches' => [
        'Uttarahalli' => [
            'label' => 'Uttarahalli',
            'address' => '12/1A, Uttarahalli Main Rd, Bengaluru, Karnataka 560061',
            'lat' => 12.9084,
            'lng' => 77.5475,
        ],
        'Hulimavu' => [
            'label' => 'BG Road',
            'address' => '79, Sir M Visveswaraya Road, Hulimavu, Bengaluru, Karnataka 560076',
            'lat' => 12.8825,
            'lng' => 77.6012,
        ],
    ],

    /*
    | Shared branch list for every nav / mobile picker.
    | Keep labels identical so desktop "Pick Branches" and mobile "Pick Hospital" cannot drift.
    */
    'nav' => [
        [
            'key' => 'bg-road',
            'label' => 'BG Road',
            'route' => 'bg-road',
        ],
        [
            'key' => 'uttarahalli',
            'label' => 'Uttarahalli',
            'route' => 'uttarahalli',
        ],
    ],
];
