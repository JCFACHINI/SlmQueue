<?php

namespace SlmQueueTest\Asset;

use SlmQueue\Strategy\AbstractStrategy;
use Zend\EventManager\EventManagerInterface;

class SimpleStrategy extends AbstractStrategy
{
    /**
     * {@inheritDoc}
     */
    public function attach(EventManagerInterface $events, $priority = 1)
    {
        die();
    }
}
