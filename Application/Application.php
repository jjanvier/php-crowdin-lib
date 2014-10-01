<?php

namespace Jjanvier\Library\Crowdin\Application;

use Jjanvier\Library\Crowdin\Command\Api\DirectoryAddCommand;
use Jjanvier\Library\Crowdin\Command\Api\DirectoryDeleteCommand;
use Jjanvier\Library\Crowdin\Command\Api\DownloadCommand;
use Jjanvier\Library\Crowdin\Command\Api\ExportCommand;
use Jjanvier\Library\Crowdin\Command\Api\FileAddCommand;
use Jjanvier\Library\Crowdin\Command\Api\FileDeleteCommand;
use Jjanvier\Library\Crowdin\Command\Api\FileUpdateCommand;
use Jjanvier\Library\Crowdin\Command\Api\StatusCommand;
use Jjanvier\Library\Crowdin\Command\Api\UploadTranslationCommand;
use Jjanvier\Library\Crowdin\Command\DownSyncCommand;
use Jjanvier\Library\Crowdin\Command\ExtractCommand;
use Jjanvier\Library\Crowdin\Command\UpSyncCommand;
use Symfony\Component\Console\Application as BaseApplication;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class Application extends BaseApplication implements ContainerAwareInterface
{
    /** @var ContainerInterface */
    private $container;

    /**
     * {@inheritdoc]
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @return ContainerInterface
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Register crowdin commands in the application.
     */
    public function registerCommands()
    {
        $this->add(new DirectoryAddCommand());
        $this->add(new DirectoryDeleteCommand());
        $this->add(new DownloadCommand());
        $this->add(new ExportCommand());
        $this->add(new FileAddCommand());
        $this->add(new FileDeleteCommand());
        $this->add(new FileUpdateCommand());
        $this->add(new StatusCommand());
        $this->add(new UploadTranslationCommand());
        $this->add(new DownSyncCommand());
        $this->add(new ExtractCommand());
        $this->add(new UpSyncCommand());
    }
}
