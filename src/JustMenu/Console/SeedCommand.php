<?php namespace JustMenu\Console;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputOption;
use Doctrine\Common\DataFixtures\Loader;
use Doctrine\Common\DataFixtures\Purger\ORMPurger;
use Doctrine\Common\DataFixtures\Executor\ORMExecutor;

class SeedCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('justmenu:seed')
            ->setDescription('Re-seed the database.')
            ->addOption('append', null, InputOption::VALUE_NONE, 'If set, database will not purge first but instead simple append the seed data.');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $append = $input->getOption('append') ? true:false;

        $loader = new Loader;
        $loader->loadFromDirectory(PROJECT_ROOT . '/database/fixtures/');

        $purger = new ORMPurger;
        $executor = new ORMExecutor($this->getHelper('em')->getEntityManager(), $purger);
        $executor->execute($loader->getFixtures(), $append);
    }
}
