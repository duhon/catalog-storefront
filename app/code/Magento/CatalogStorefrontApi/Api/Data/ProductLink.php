<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ProductLink class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
final class ProductLink implements ProductLinkInterface
{

    /**
     * @var string
     */
    private $linkedProductSku;

    /**
     * @var string
     */
    private $typeId;

    /**
     * @var string
     */
    private $linkedProductType;

    /**
     * @var string
     */
    private $linkTypeId;

    /**
     * @var int
     */
    private $position;

    /**
     * @var string
     */
    private $sku;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $linkType;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getLinkedProductSku(): string
    {
        return (string) $this->linkedProductSku;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setLinkedProductSku(string $value): void
    {
        $this->linkedProductSku = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getTypeId(): string
    {
        return (string) $this->typeId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setTypeId(string $value): void
    {
        $this->typeId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getLinkedProductType(): string
    {
        return (string) $this->linkedProductType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setLinkedProductType(string $value): void
    {
        $this->linkedProductType = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getLinkTypeId(): string
    {
        return (string) $this->linkTypeId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setLinkTypeId(string $value): void
    {
        $this->linkTypeId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getPosition(): int
    {
        return (int) $this->position;
    }
    
    /**
     * @inheritdoc
     *
     * @param int $value
     * @return void
     */
    public function setPosition(int $value): void
    {
        $this->position = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSku(): string
    {
        return (string) $this->sku;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSku(string $value): void
    {
        $this->sku = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getProductId(): string
    {
        return (string) $this->productId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setProductId(string $value): void
    {
        $this->productId = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getLinkType(): string
    {
        return (string) $this->linkType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setLinkType(string $value): void
    {
        $this->linkType = $value;
    }
}
