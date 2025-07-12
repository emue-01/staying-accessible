<?php
use Kirby\Cms\App as Kirby;
Kirby::plugin('emue/staying-accessible', [
    'blueprints' => [
        'tabs/accessibility' => __DIR__ . '/blueprints/accessibility.yml'
    ],
    'translations' => [
        'fr' => [

        ]
    ]
]);