<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'mbo.event_subscriber.module_event_subscriber' shared service.

return $this->services['mbo.event_subscriber.module_event_subscriber'] = new \PrestaShop\Module\Mbo\EventSubscriber\ModuleEventSubscriber(${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});