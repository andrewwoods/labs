<?php
/** 
 * This file is part of the Labs project
 *
 * @author Andrew Woods <atwoods1@gmail.com>
 *
 * @copyright 2019 Andrew Woods 
 * @license MIT https://opensource.org/licenses/MIT
 *
 * For the full copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 *
 * ---------------------------------------------------------------------
 */

require dirname(__FILE__, 2) . '/vendor/autoload.php';

$app = new Slim\App();



// Get container
$container = $app->getContainer();

// Register component on container
$container['view'] = function ($container) {
    return new \Slim\Views\PhpRenderer(TEMPLATE_DIR);
};


$app->get('/', function ($request, $response, $args) {
    $content = "Hooray! It Works!";

    return $this->view->render($response, '/index.php', [
        'name' => $args['name']
    ]);
});

$app->get('/hello/{name}', function ($request, $response, $args) {
    return $response->getBody()->write("Hello, " . $args['name']);
});

$app->run();

