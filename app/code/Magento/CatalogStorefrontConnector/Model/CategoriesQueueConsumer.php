<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CatalogStorefrontConnector\Model;

use Magento\CatalogStorefrontConnector\Model\Publisher\CategoryPublisher;
use Magento\CatalogStorefrontConnector\Model\Data\UpdatedEntitiesDataInterface;
use Magento\CatalogStorefrontConnector\Model\Publisher\CatalogEntityIdsProvider;
use Psr\Log\LoggerInterface;

/**
 * Consumer processes messages with store front categories data
 */
class CategoriesQueueConsumer
{
    /**
     * @var CategoryPublisher
     */
    private $categoryPublisher;

    /**
     * @var CatalogEntityIdsProvider
     */
    private $catalogEntityIdsProvider;

    /**
     * @var LoggerInterface
     */
    private $logger;

    /**
     * @param CategoryPublisher $categoryPublisher
     * @param CatalogEntityIdsProvider $catalogEntityIdsProvider
     */
    public function __construct(
        CategoryPublisher $categoryPublisher,
        CatalogEntityIdsProvider $catalogEntityIdsProvider,
        LoggerInterface $logger
    ) {
        $this->categoryPublisher = $categoryPublisher;
        $this->catalogEntityIdsProvider = $catalogEntityIdsProvider;
        $this->logger = $logger;
    }

    /**
     * Process collected categories IDs for update
     *
     * Process messages from storefront.collect.updated.categories.data topic
     * and publish new messages to storefront.catalog.data.consume topic
     *
     * @param UpdatedEntitiesDataInterface[] $messages
     * @return void
     * @throws \Exception
     */
    public function processMessages(array $messages): void
    {
        $storeCategories = $this->getUniqueIdsForStores($messages);
        foreach ($storeCategories as $storeId => $categoryIds) {
            if (empty($categoryIds)) {
                foreach ($this->catalogEntityIdsProvider->getCategoryIds($storeId) as $ids) {
                    $this->categoryPublisher->publish($ids, $storeId);
                }
            } else {
                $this->categoryPublisher->publish(\array_unique($categoryIds), $storeId);
            }
        }
    }

    /**
     * Get unique ids for stores from messages
     *
     * @param array $messages
     * @return array
     */
    private function getUniqueIdsForStores(array $messages): array
    {
        $result = [];
        /** @var UpdatedEntitiesDataInterface $updatedCategoriesData */
        foreach ($messages as $updatedCategoriesData) {
            $storeId = $updatedCategoriesData->getStoreId();
            $storeCategoriesIds = $updatedCategoriesData->getEntityIds();
            $result[$storeId] = isset($result[$storeId])
                // phpcs:ignore Magento2.Performance.ForeachArrayMerge
                ? \array_unique(\array_merge($result[$storeId], $storeCategoriesIds))
                : $storeCategoriesIds;
        }

        return $result;
    }
}