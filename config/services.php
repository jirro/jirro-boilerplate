<?php

/*
 * This file is part of the Wishbone package.
 *
 * (c) Rendy Eko Prastiyo <rendyekoprastiyo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [
    'http' => [
        'Jirro\Component\Bundle\Container\ServiceProvider\BundleServiceProvider',
        'Jirro\Component\Http\Container\ServiceProvider\HttpServiceProvider',
        'Jirro\Component\DBAL\Container\ServiceProvider\DBALServiceProvider',
        'Jirro\Component\ORM\Container\ServiceProvider\ORMServiceProvider',
        'Jirro\Component\Validator\Container\ServiceProvider\ValidatorServiceProvider',
        'Jirro\Component\Auth\Container\ServiceProvider\AuthServiceProvider',
        'Jirro\Component\View\Container\ServiceProvider\ViewServiceProvider',
        'Jirro\Component\FileSystem\Container\ServiceProvider\FileSystemServiceProvider',
        'Jirro\Component\DebugBar\Container\ServiceProvider\DebugBarServiceProvider',
    ],
    'console' => [
        'Jirro\Component\Bundle\Container\ServiceProvider\BundleServiceProvider',
        'Jirro\Component\DBAL\Container\ServiceProvider\DBALServiceProvider',
        'Jirro\Component\ORM\Container\ServiceProvider\ORMServiceProvider',
    ],
];
