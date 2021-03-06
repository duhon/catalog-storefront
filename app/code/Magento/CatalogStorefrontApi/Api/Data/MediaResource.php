<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for MediaResource class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD)
 * @SuppressWarnings(PHPCPD)
 */
final class MediaResource implements MediaResourceInterface
{

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $label;

    /**
     * @var array
     */
    private $roles;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getUrl(): string
    {
        return (string) $this->url;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setUrl(string $value): void
    {
        $this->url = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getLabel(): string
    {
        return (string) $this->label;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setLabel(string $value): void
    {
        $this->label = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string[]
     */
    public function getRoles(): array
    {
        return (array) $this->roles;
    }
    
    /**
     * @inheritdoc
     *
     * @param string[] $value
     * @return void
     */
    public function setRoles(array $value): void
    {
        $this->roles = $value;
    }
}
