<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// @legacy for AssetMapper 6.3 support
return [
    'app' => [
        'path' => 'app.js',
        'entrypoint' => true,
    ],
    '@hotwired/stimulus' => [
        'url' => 'https://ga.jspm.io/npm:@hotwired/stimulus@3.2.1/dist/stimulus.js',
    ],
    '@symfony/stimulus-bundle' => [
        'path' => '@symfony/stimulus-bundle/loader.js',
    ],
    'needed-vendor' => [
        'url' => 'https://cdn.jsdelivr.net/npm/needed-vendor@3.2.0/dist/needed-vendor+esm',
    ],
    '@scoped/needed-vendor' => [
        'url' => 'https://cdn.jsdelivr.net/npm/@scoped/needed-vendor@1.2.3',
    ],
];
