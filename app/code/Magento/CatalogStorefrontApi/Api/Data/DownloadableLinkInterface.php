<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

interface DownloadableLinkInterface
{

        /**
     * @return string
     */
    public function getSampleUrl(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setSampleUrl(string $value): void;

    /**
     * @return string
     */
    public function getTitle(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setTitle(string $value): void;

    /**
     * @return int
     */
    public function getSortOrder(): int;
    
    /**
     * @param int $value
     * @return void
     */
    public function setSortOrder(int $value): void;

    /**
     * @return string
     */
    public function getSampleType(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setSampleType(string $value): void;

    /**
     * @return string
     */
    public function getSampleFile(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setSampleFile(string $value): void;

    /**
     * @return int
     */
    public function getLinkId(): int;
    
    /**
     * @param int $value
     * @return void
     */
    public function setLinkId(int $value): void;

    /**
     * @return float
     */
    public function getPrice(): float;
    
    /**
     * @param float $value
     * @return void
     */
    public function setPrice(float $value): void;

    /**
     * @return string
     */
    public function getLinkType(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setLinkType(string $value): void;

    /**
     * @return bool
     */
    public function getIsShareable(): bool;
    
    /**
     * @param bool $value
     * @return void
     */
    public function setIsShareable(bool $value): void;

    /**
     * @return int
     */
    public function getNumberOfDownloads(): int;
    
    /**
     * @param int $value
     * @return void
     */
    public function setNumberOfDownloads(int $value): void;

    /**
     * @return string
     */
    public function getEntityId(): string;
    
    /**
     * @param string $value
     * @return void
     */
    public function setEntityId(string $value): void;
}