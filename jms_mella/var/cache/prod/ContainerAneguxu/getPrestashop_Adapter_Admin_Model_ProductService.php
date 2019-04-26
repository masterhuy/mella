<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.adapter.admin.model.product' shared service.

return $this->services['prestashop.adapter.admin.model.product'] = new \PrestaShopBundle\Model\Product\AdminModelAdapter(${($_ = isset($this->services['prestashop.adapter.legacy.context']) ? $this->services['prestashop.adapter.legacy.context'] : ($this->services['prestashop.adapter.legacy.context'] = new \PrestaShop\PrestaShop\Adapter\LegacyContext())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.admin.wrapper.product']) ? $this->services['prestashop.adapter.admin.wrapper.product'] : $this->load('getPrestashop_Adapter_Admin_Wrapper_ProductService.php')) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : ($this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.product']) ? $this->services['prestashop.adapter.data_provider.product'] : ($this->services['prestashop.adapter.data_provider.product'] = new \PrestaShop\PrestaShop\Adapter\Product\ProductDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.supplier']) ? $this->services['prestashop.adapter.data_provider.supplier'] : ($this->services['prestashop.adapter.data_provider.supplier'] = new \PrestaShop\PrestaShop\Adapter\Supplier\SupplierDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.warehouse']) ? $this->services['prestashop.adapter.data_provider.warehouse'] : ($this->services['prestashop.adapter.data_provider.warehouse'] = new \PrestaShop\PrestaShop\Adapter\Warehouse\WarehouseDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.feature']) ? $this->services['prestashop.adapter.data_provider.feature'] : ($this->services['prestashop.adapter.data_provider.feature'] = new \PrestaShop\PrestaShop\Adapter\Feature\FeatureDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.pack']) ? $this->services['prestashop.adapter.data_provider.pack'] : ($this->services['prestashop.adapter.data_provider.pack'] = new \PrestaShop\PrestaShop\Adapter\Pack\PackDataProvider())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.shop.context']) ? $this->services['prestashop.adapter.shop.context'] : ($this->services['prestashop.adapter.shop.context'] = new \PrestaShop\PrestaShop\Adapter\Shop\Context())) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.data_provider.tax']) ? $this->services['prestashop.adapter.data_provider.tax'] : ($this->services['prestashop.adapter.data_provider.tax'] = new \PrestaShop\PrestaShop\Adapter\Tax\TaxRuleDataProvider())) && false ?: '_'});
