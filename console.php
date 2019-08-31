<?php
/** @var \App\App $app */
$app = require_once __DIR__ . '/app.php';

$app->provider->add(\Exedra\Console\ConsoleProvider::class);

$app->console->run();