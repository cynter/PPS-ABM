<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$app = new \Slim\App();
$app->get('/user/{id}', function ($request, $response, $args) {
    // Show user identified by $args['id']
    $id = $request->getAttribute('id');
    $response->getBody()->write("trae usuario por numero id $id");

    return $response;
});
$app->post('/user', function ($request, $response, $args) {
    // Create new user
    echo 'crea un usuario';
});
$app->put('/user/{id}', function ($request, $response, $args) {
    // Update user identified by $args['id']
    echo 'actualiza un usuario por id';
});
$app->delete('/user/{id}', function ($request, $response, $args) {
    // Delete user identified by $args['id']
    echo 'elimina un usuario por id';
});
$app->run();