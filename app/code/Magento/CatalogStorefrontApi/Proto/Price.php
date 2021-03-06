<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: catalog.proto

namespace Magento\CatalogStorefrontApi\Proto;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Temp solution for prices
 *
 * Generated from protobuf message <code>magento.catalogStorefrontApi.proto.Price</code>
 */
class Price extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>float regular_price = 1;</code>
     */
    protected $regular_price = 0.0;
    /**
     * Generated from protobuf field <code>float final_price = 2;</code>
     */
    protected $final_price = 0.0;
    /**
     * Generated from protobuf field <code>string scope = 3;</code>
     */
    protected $scope = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $regular_price
     *     @type float $final_price
     *     @type string $scope
     * }
     */
    public function __construct($data = null)
    {
        \Magento\CatalogStorefrontApi\Metadata\Catalog::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>float regular_price = 1;</code>
     * @return float
     */
    public function getRegularPrice()
    {
        return $this->regular_price;
    }

    /**
     * Generated from protobuf field <code>float regular_price = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setRegularPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->regular_price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float final_price = 2;</code>
     * @return float
     */
    public function getFinalPrice()
    {
        return $this->final_price;
    }

    /**
     * Generated from protobuf field <code>float final_price = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setFinalPrice($var)
    {
        GPBUtil::checkFloat($var);
        $this->final_price = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string scope = 3;</code>
     * @return string
     */
    public function getScope()
    {
        return $this->scope;
    }

    /**
     * Generated from protobuf field <code>string scope = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setScope($var)
    {
        GPBUtil::checkString($var, true);
        $this->scope = $var;

        return $this;
    }
}
