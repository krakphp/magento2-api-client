<?php
/**
 * CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody
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
 * CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody Class Doc Comment
 *
 * @category Class
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CheckoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'checkoutGuestPaymentInformationManagementV1SavePaymentInformationAndPlaceOrderPostBody';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'email' => 'string',
        'paymentMethod' => '\Krak\MagentoApiClient\Model\QuoteDataPaymentInterface',
        'billingAddress' => '\Krak\MagentoApiClient\Model\QuoteDataAddressInterface'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'email' => null,
        'paymentMethod' => null,
        'billingAddress' => null
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
        'email' => 'email',
        'paymentMethod' => 'paymentMethod',
        'billingAddress' => 'billingAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'email' => 'setEmail',
        'paymentMethod' => 'setPaymentMethod',
        'billingAddress' => 'setBillingAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'email' => 'getEmail',
        'paymentMethod' => 'getPaymentMethod',
        'billingAddress' => 'getBillingAddress'
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
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['paymentMethod'] = isset($data['paymentMethod']) ? $data['paymentMethod'] : null;
        $this->container['billingAddress'] = isset($data['billingAddress']) ? $data['billingAddress'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['email'] === null) {
            $invalidProperties[] = "'email' can't be null";
        }
        if ($this->container['paymentMethod'] === null) {
            $invalidProperties[] = "'paymentMethod' can't be null";
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

        if ($this->container['email'] === null) {
            return false;
        }
        if ($this->container['paymentMethod'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     *
     * @param string $email email
     *
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets paymentMethod
     *
     * @return \Krak\MagentoApiClient\Model\QuoteDataPaymentInterface
     */
    public function getPaymentMethod()
    {
        return $this->container['paymentMethod'];
    }

    /**
     * Sets paymentMethod
     *
     * @param \Krak\MagentoApiClient\Model\QuoteDataPaymentInterface $paymentMethod paymentMethod
     *
     * @return $this
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->container['paymentMethod'] = $paymentMethod;

        return $this;
    }

    /**
     * Gets billingAddress
     *
     * @return \Krak\MagentoApiClient\Model\QuoteDataAddressInterface
     */
    public function getBillingAddress()
    {
        return $this->container['billingAddress'];
    }

    /**
     * Sets billingAddress
     *
     * @param \Krak\MagentoApiClient\Model\QuoteDataAddressInterface $billingAddress billingAddress
     *
     * @return $this
     */
    public function setBillingAddress($billingAddress)
    {
        $this->container['billingAddress'] = $billingAddress;

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


