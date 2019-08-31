<?php
require_once __DIR__ . '/vendor/autoload.php';

$app = new \App\App(__DIR__, \App\Context::class);

$app->provider->add(\Exedra\Routeller\RoutellerProvider::class);
$app->provider->add(\App\Providers\TwigProvider::class);

$app->map['web']->group(\App\Controllers\WebController::class);
$app->map['apis']->any('/apis')->group(\App\Controllers\ApiController::class);

return $app;