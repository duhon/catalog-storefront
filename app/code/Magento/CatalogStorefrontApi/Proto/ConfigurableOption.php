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
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.ConfigurableOption</code>
 *
 * phpcs:disable
 */
class ConfigurableOption extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string id = 1;</code>
     */
    protected $id = '';
    /**
     * Generated from protobuf field <code>string label = 2;</code>
     */
    protected $label = '';
    /**
     * Generated from protobuf field <code>string position = 3;</code>
     */
    protected $position = '';
    /**
     * Generated from protobuf field <code>string use_default = 4;</code>
     */
    protected $use_default = '';
    /**
     * Generated from protobuf field <code>string product_id = 5;</code>
     */
    protected $product_id = '';
    /**
     * Generated from protobuf field <code>string attribute_code = 6;</code>
     */
    protected $attribute_code = '';
    /**
     * Generated from protobuf field <code>string attribute_id = 7;</code>
     */
    protected $attribute_id = '';
    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.ConfigurableOptionValue values = 8;</code>
     */
    private $values;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $id
     *     @type string $label
     *     @type string $position
     *     @type string $use_default
     *     @type string $product_id
     *     @type string $attribute_code
     *     @type string $attribute_id
     *     @type \Magento\CatalogStorefrontApi\Proto\ConfigurableOptionValue[]|\Google\Protobuf\Internal\RepeatedField $values
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Generated from protobuf field <code>string id = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setId($var)
    {
        GPBUtil::checkString($var, true);
        $this->id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Generated from protobuf field <code>string label = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLabel($var)
    {
        GPBUtil::checkString($var, true);
        $this->label = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string position = 3;</code>
     * @return string
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Generated from protobuf field <code>string position = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkString($var, true);
        $this->position = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string use_default = 4;</code>
     * @return string
     */
    public function getUseDefault()
    {
        return $this->use_default;
    }

    /**
     * Generated from protobuf field <code>string use_default = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUseDefault($var)
    {
        GPBUtil::checkString($var, true);
        $this->use_default = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string product_id = 5;</code>
     * @return string
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * Generated from protobuf field <code>string product_id = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setProductId($var)
    {
        GPBUtil::checkString($var, true);
        $this->product_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string attribute_code = 6;</code>
     * @return string
     */
    public function getAttributeCode()
    {
        return $this->attribute_code;
    }

    /**
     * Generated from protobuf field <code>string attribute_code = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setAttributeCode($var)
    {
        GPBUtil::checkString($var, true);
        $this->attribute_code = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string attribute_id = 7;</code>
     * @return string
     */
    public function getAttributeId()
    {
        return $this->attribute_id;
    }

    /**
     * Generated from protobuf field <code>string attribute_id = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setAttributeId($var)
    {
        GPBUtil::checkString($var, true);
        $this->attribute_id = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.ConfigurableOptionValue values = 8;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Generated from protobuf field <code>repeated .magento.catalogStorefrontApi.proto.ConfigurableOptionValue values = 8;</code>
     * @param \Magento\CatalogStorefrontApi\Proto\ConfigurableOptionValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Magento\CatalogStorefrontApi\Proto\ConfigurableOptionValue::class);
        $this->values = $arr;

        return $this;
    }
}
