<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdater' shared service.

return $this->services['PrestaShop\\PrestaShop\\Core\\Grid\\Position\\GridPositionUpdater'] = new \PrestaShop\PrestaShop\Core\Grid\Position\GridPositionUpdater(($this->services['prestashop.core.grid.position.update_handler.doctrine_position_update_handler'] ?? $this->load('getPrestashop_Core_Grid_Position_UpdateHandler_DoctrinePositionUpdateHandlerService.php')));
