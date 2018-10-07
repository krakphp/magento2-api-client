<?php
/**
 * SalesDataCreditmemoCreationArgumentsInterface
 *
 * PHP version 5
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Magento Commerce for B2B
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 2.2
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Krak\MagentoApiClient\Model;

use \ArrayAccess;
use \Krak\MagentoApiClient\ObjectSerializer;

/**
 * SalesDataCreditmemoCreationArgumentsInterface Class Doc Comment
 *
 * @category Class
 * @description Interface CreditmemoCreationArgumentsInterface
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesDataCreditmemoCreationArgumentsInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-creditmemo-creation-arguments-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'shippingAmount' => 'float',
        'adjustmentPositive' => 'float',
        'adjustmentNegative' => 'float',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\SalesDataCreditmemoCreationArgumentsExtensionInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'shippingAmount' => null,
        'adjustmentPositive' => null,
        'adjustmentNegative' => null,
        'extensionAttributes' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'shippingAmount' => 'shipping_amount',
        'adjustmentPositive' => 'adjustment_positive',
        'adjustmentNegative' => 'adjustment_negative',
        'extensionAttributes' => 'extension_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'shippingAmount' => 'setShippingAmount',
        'adjustmentPositive' => 'setAdjustmentPositive',
        'adjustmentNegative' => 'setAdjustmentNegative',
        'extensionAttributes' => 'setExtensionAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'shippingAmount' => 'getShippingAmount',
        'adjustmentPositive' => 'getAdjustmentPositive',
        'adjustmentNegative' => 'getAdjustmentNegative',
        'extensionAttributes' => 'getExtensionAttributes'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['shippingAmount'] = isset($data['shippingAmount']) ? $data['shippingAmount'] : null;
        $this->container['adjustmentPositive'] = isset($data['adjustmentPositive']) ? $data['adjustmentPositive'] : null;
        $this->container['adjustmentNegative'] = isset($data['adjustmentNegative']) ? $data['adjustmentNegative'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets shippingAmount
     *
     * @return float
     */
    public function getShippingAmount()
    {
        return $this->container['shippingAmount'];
    }

    /**
     * Sets shippingAmount
     *
     * @param float $shippingAmount Credit memo shipping amount.
     *
     * @return $this
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->container['shippingAmount'] = $shippingAmount;

        return $this;
    }

    /**
     * Gets adjustmentPositive
     *
     * @return float
     */
    public function getAdjustmentPositive()
    {
        return $this->container['adjustmentPositive'];
    }

    /**
     * Sets adjustmentPositive
     *
     * @param float $adjustmentPositive Credit memo positive adjustment.
     *
     * @return $this
     */
    public function setAdjustmentPositive($adjustmentPositive)
    {
        $this->container['adjustmentPositive'] = $adjustmentPositive;

        return $this;
    }

    /**
     * Gets adjustmentNegative
     *
     * @return float
     */
    public function getAdjustmentNegative()
    {
        return $this->container['adjustmentNegative'];
    }

    /**
     * Sets adjustmentNegative
     *
     * @param float $adjustmentNegative Credit memo negative adjustment.
     *
     * @return $this
     */
    public function setAdjustmentNegative($adjustmentNegative)
    {
        $this->container['adjustmentNegative'] = $adjustmentNegative;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\SalesDataCreditmemoCreationArgumentsExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\SalesDataCreditmemoCreationArgumentsExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


