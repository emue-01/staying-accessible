<?php
@include_once __DIR__ . '/vendor/autoload.php';
use Kirby\Cms\App as Kirby;
Kirby::plugin('emue/staying-accessible', [
    'blueprints' => [
        'tabs/accessibility' => __DIR__ . '/blueprints/accessibility.yml'
    ],
    // borrowed from tobimori/kirby-seo
    'translations' => A::keyBy(A::map(
		Dir::read(__DIR__ . '/translations'),
		fn ($file) => A::merge([
			'lang' => F::name($file),
		], Yaml::decode(F::read(__DIR__ . '/translations/' . $file)))
	), 'lang'),
]);