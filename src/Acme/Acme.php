<?php
namespace Rocketeer\Plugins\Acme;

use Rocketeer\Abstracts\AbstractPlugin;
use Rocketeer\Services\TasksHandler;

class Acme extends AbstractPlugin
{
    /**
     * Register Tasks with Rocketeer
     *
     * @param \Rocketeer\Services\TasksHandler $queue
     *
     * @return void
     */
    public function onQueue(TasksHandler $queue)
    {
        // TODO: Implement onQueue() method.
    }
}
