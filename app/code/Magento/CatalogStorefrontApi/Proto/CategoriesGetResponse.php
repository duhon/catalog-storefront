<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\CatalogStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.CategoriesGetResponse</code>
 *
 * phpcs:disable
 */
class CategoriesGetResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Category items = 1;</code>
     */
    private $items;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Magento\CatalogStorefrontApi\Proto\Category[]|\Google\Protobuf\Internal\RepeatedField $items
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Category items = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.Category items = 1;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\Category[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setItems($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\Category::class);
        $this->items = $arr;

        return $this;
    }
}
