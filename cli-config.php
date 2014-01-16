<?php

require __DIR__ . '/bootstrap/bootstrap.php';

$helperSet = new \Symfony\Component\Console\Helper\HelperSet(array(
    'em' => new \Doctrine\ORM\Tools\Console\Helper\EntityManagerHelper($container['doctrine']),
));

$cli = new Symfony\Component\Console\Application('Doctrine Command Line Interface', \Doctrine\ORM\Version::VERSION);
$cli->setCatchExceptions(true);
$cli->setHelperSet($helperSet);

// Register All Doctrine Commands
Doctrine\ORM\Tools\Console\ConsoleRunner::addCommands($cli);

$cli->addCommands(array(
    new JustMenu\Console\SeedCommand,
));

$cli->run();
