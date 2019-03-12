<?php
/**
 * This file is part of Labs project
 *
 * @author Andrew Woods <atwoods1@gmail.com>
 *
 * @copyright 2019 Andrew Woods
 * @license MIT https://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


define('CONFIG_DIR', __DIR__ );

define('APP_DIR', dirname(CONFIG_DIR));

define('RESOURCES_DIR', APP_DIR . '/resources');

define('CACHE_DIR', RESOURCES_DIR . '/cache');

define('WEB_DIR', APP_DIR . '/public');

define('TEMPLATE_DIR', RESOURCES_DIR . '/templates');

function displayConstants(){
    echo 'APP_DIR=' . APP_DIR . '<br>' . PHP_EOL;
    echo 'CACHE_DIR=' . CACHE_DIR . '<br>' .  PHP_EOL;
    echo 'CONFIG_DIR=' . CONFIG_DIR . '<br>' .  PHP_EOL;
    echo 'RESOURCES_DIR=' . RESOURCES_DIR . '<br>' .  PHP_EOL;
    echo 'TEMPLATE_DIR=' . TEMPLATE_DIR . '<br>' .  PHP_EOL;
    echo 'WEB_DIR=' . WEB_DIR . '<br>' .  PHP_EOL;
}

