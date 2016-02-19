<?php

/*
 * This file is part of the Jirro package.
 *
 * (c) Rendy Eko Prastiyo <rendyekoprastiyo@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Symfony\Component\HttpFoundation\Request;
use Jirro\Component\Kernel\ApplicationFactory;

require_once __DIR__ . '/../bootstrap.php';

$application = $applicationFactory->createApplication(ApplicationFactory::TYPE_CONSOLE, $config);
$application->run();
