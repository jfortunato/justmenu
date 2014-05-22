<?php

define('PROJECT_ROOT', __DIR__ . '/..');

require_once PROJECT_ROOT . '/vendor/autoload.php';

$whoops = new Whoops\Run();
$whoops->pushHandler(new Whoops\Handler\PrettyPageHandler());

// Set Whoops as the default error and exception handler used by PHP:
$whoops->register();

// load project specific configurations
$yaml = new Symfony\Component\Yaml\Parser();
$config = $yaml->parse(file_get_contents(PROJECT_ROOT . '/config/config.yml'));

require_once 'container.php';
