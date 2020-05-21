<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api;

interface CatalogInterface
{
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ProductsGetRequestInterface $request
     * @return \Magento\CatalogStorefrontApi\Api\Data\ProductsGetResultInterface
     */
    public function GetProducts(\Magento\CatalogStorefrontApi\Api\Data\ProductsGetRequestInterface $request): \Magento\CatalogStorefrontApi\Api\Data\ProductsGetResultInterface;
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ImportProductsRequestInterface $request
     * @return \Magento\CatalogStorefrontApi\Api\Data\ImportProductsResponseInterface
     */
    public function ImportProducts(\Magento\CatalogStorefrontApi\Api\Data\ImportProductsRequestInterface $request): \Magento\CatalogStorefrontApi\Api\Data\ImportProductsResponseInterface;
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesRequestInterface $request
     * @return \Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesResponseInterface
     */
    public function ImportCategories(\Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesRequestInterface $request): \Magento\CatalogStorefrontApi\Api\Data\ImportCategoriesResponseInterface;
    /**
     * @param \Magento\CatalogStorefrontApi\Api\Data\CategoriesGetRequestInterface $request
     * @return \Magento\CatalogStorefrontApi\Api\Data\CategoriesGetResponseInterface
     */
    public function GetCategories(\Magento\CatalogStorefrontApi\Api\Data\CategoriesGetRequestInterface $request): \Magento\CatalogStorefrontApi\Api\Data\CategoriesGetResponseInterface;
}
