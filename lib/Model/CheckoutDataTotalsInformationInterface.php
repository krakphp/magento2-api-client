<?php
/**
 * CheckoutDataTotalsInformationInterface
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
 * CheckoutDataTotalsInformationInterface Class Doc Comment
 *
 * @category Class
 * @description Interface TotalsInformationInterface
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutDataTotalsInformationInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'checkout-data-totals-information-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'address' => '\Krak\MagentoApiClient\Model\QuoteDataAddressInterface',
        'shippingMethodCode' => 'string',
        'shippingCarrierCode' => 'string',
        'extensionAttributes' => '\Krak\MagentoApiClient\Model\CheckoutDataTotalsInformationExtensionInterface',
        'customAttributes' => '\Krak\MagentoApiClient\Model\FrameworkAttributeInterface[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'address' => null,
        'shippingMethodCode' => null,
        'shippingCarrierCode' => null,
        'extensionAttributes' => null,
        'customAttributes' => null
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
        'address' => 'address',
        'shippingMethodCode' => 'shipping_method_code',
        'shippingCarrierCode' => 'shipping_carrier_code',
        'extensionAttributes' => 'extension_attributes',
        'customAttributes' => 'custom_attributes'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'address' => 'setAddress',
        'shippingMethodCode' => 'setShippingMethodCode',
        'shippingCarrierCode' => 'setShippingCarrierCode',
        'extensionAttributes' => 'setExtensionAttributes',
        'customAttributes' => 'setCustomAttributes'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'address' => 'getAddress',
        'shippingMethodCode' => 'getShippingMethodCode',
        'shippingCarrierCode' => 'getShippingCarrierCode',
        'extensionAttributes' => 'getExtensionAttributes',
        'customAttributes' => 'getCustomAttributes'
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
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['shippingMethodCode'] = isset($data['shippingMethodCode']) ? $data['shippingMethodCode'] : null;
        $this->container['shippingCarrierCode'] = isset($data['shippingCarrierCode']) ? $data['shippingCarrierCode'] : null;
        $this->container['extensionAttributes'] = isset($data['extensionAttributes']) ? $data['extensionAttributes'] : null;
        $this->container['customAttributes'] = isset($data['customAttributes']) ? $data['customAttributes'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['address'] === null) {
            $invalidProperties[] = "'address' can't be null";
        }
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

        if ($this->container['address'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets address
     *
     * @return \Krak\MagentoApiClient\Model\QuoteDataAddressInterface
     */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
     * Sets address
     *
     * @param \Krak\MagentoApiClient\Model\QuoteDataAddressInterface $address address
     *
     * @return $this
     */
    public function setAddress($address)
    {
        $this->container['address'] = $address;

        return $this;
    }

    /**
     * Gets shippingMethodCode
     *
     * @return string
     */
    public function getShippingMethodCode()
    {
        return $this->container['shippingMethodCode'];
    }

    /**
     * Sets shippingMethodCode
     *
     * @param string $shippingMethodCode Shipping method code
     *
     * @return $this
     */
    public function setShippingMethodCode($shippingMethodCode)
    {
        $this->container['shippingMethodCode'] = $shippingMethodCode;

        return $this;
    }

    /**
     * Gets shippingCarrierCode
     *
     * @return string
     */
    public function getShippingCarrierCode()
    {
        return $this->container['shippingCarrierCode'];
    }

    /**
     * Sets shippingCarrierCode
     *
     * @param string $shippingCarrierCode Carrier code
     *
     * @return $this
     */
    public function setShippingCarrierCode($shippingCarrierCode)
    {
        $this->container['shippingCarrierCode'] = $shippingCarrierCode;

        return $this;
    }

    /**
     * Gets extensionAttributes
     *
     * @return \Krak\MagentoApiClient\Model\CheckoutDataTotalsInformationExtensionInterface
     */
    public function getExtensionAttributes()
    {
        return $this->container['extensionAttributes'];
    }

    /**
     * Sets extensionAttributes
     *
     * @param \Krak\MagentoApiClient\Model\CheckoutDataTotalsInformationExtensionInterface $extensionAttributes extensionAttributes
     *
     * @return $this
     */
    public function setExtensionAttributes($extensionAttributes)
    {
        $this->container['extensionAttributes'] = $extensionAttributes;

        return $this;
    }

    /**
     * Gets customAttributes
     *
     * @return \Krak\MagentoApiClient\Model\FrameworkAttributeInterface[]
     */
    public function getCustomAttributes()
    {
        return $this->container['customAttributes'];
    }

    /**
     * Sets customAttributes
     *
     * @param \Krak\MagentoApiClient\Model\FrameworkAttributeInterface[] $customAttributes Custom attributes values.
     *
     * @return $this
     */
    public function setCustomAttributes($customAttributes)
    {
        $this->container['customAttributes'] = $customAttributes;

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


