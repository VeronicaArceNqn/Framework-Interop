<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'PrestaShop\PrestaShop\Adapter\Product\QueryHandler\GetProductSupplierOptionsHandler' shared autowired service.

return $this->privates['PrestaShop\\PrestaShop\\Adapter\\Product\\QueryHandler\\GetProductSupplierOptionsHandler'] = new \PrestaShop\PrestaShop\Adapter\Product\QueryHandler\GetProductSupplierOptionsHandler(($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductSupplierRepository'] ?? $this->load('getProductSupplierRepository2Service.php')), ($this->services['PrestaShop\\PrestaShop\\Adapter\\Product\\Repository\\ProductRepository'] ?? $this->getProductRepositoryService()));
