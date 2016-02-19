<?php

/*
 * This file is part of the Jirro package.
 *
 * (c) Rendy Eko Prastiyo <rendyekoprastiyo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Jirro\Component\Kernel\ApplicationFactory;

define('ENVIRONMENT', 'development');

date_default_timezone_set('Asia/Jakarta');

require_once __DIR__ . '/vendor/autoload.php';

$config = require __DIR__ . '/config/config.php';

$applicationFactory = new ApplicationFactory();
