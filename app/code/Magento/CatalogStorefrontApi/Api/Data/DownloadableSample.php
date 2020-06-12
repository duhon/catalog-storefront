<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for DownloadableSample class
 *
 * phpcs:disable Magento2.PHP.FinalImplementation
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 * @SuppressWarnings(PHPMD.TooManyFields)
 * @SuppressWarnings(PHPMD.ExcessivePublicCount)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveClassComplexity)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 */
final class DownloadableSample implements DownloadableSampleInterface
{

    /**
     * @var string
     */
    private $sampleUrl;

    /**
     * @var string
     */
    private $title;

    /**
     * @var int
     */
    private $sortOrder;

    /**
     * @var string
     */
    private $sampleType;

    /**
     * @var string
     */
    private $sampleFile;

    /**
     * @var string
     */
    private $entityId;
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSampleUrl(): string
    {
        return (string) $this->sampleUrl;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSampleUrl(string $value): void
    {
        $this->sampleUrl = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getTitle(): string
    {
        return (string) $this->title;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setTitle(string $value): void
    {
        $this->title = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return int
     */
    public function getSortOrder(): int
    {
        return (int) $this->sortOrder;
    }
    
    /**
     * @inheritdoc
     *
     * @param int $value
     * @return void
     */
    public function setSortOrder(int $value): void
    {
        $this->sortOrder = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSampleType(): string
    {
        return (string) $this->sampleType;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSampleType(string $value): void
    {
        $this->sampleType = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getSampleFile(): string
    {
        return (string) $this->sampleFile;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setSampleFile(string $value): void
    {
        $this->sampleFile = $value;
    }
    
    /**
     * @inheritdoc
     *
     * @return string
     */
    public function getEntityId(): string
    {
        return (string) $this->entityId;
    }
    
    /**
     * @inheritdoc
     *
     * @param string $value
     * @return void
     */
    public function setEntityId(string $value): void
    {
        $this->entityId = $value;
    }
}
