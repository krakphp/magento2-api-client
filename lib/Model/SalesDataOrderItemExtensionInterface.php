<?php
/**
 * SalesDataOrderItemExtensionInterface
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
 * SalesDataOrderItemExtensionInterface Class Doc Comment
 *
 * @category Class
 * @description ExtensionInterface class for @see \\Magento\\Sales\\Api\\Data\\OrderItemInterface
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class SalesDataOrderItemExtensionInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'sales-data-order-item-extension-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'giftMessage' => '\Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface',
        'gwId' => 'string',
        'gwBasePrice' => 'string',
        'gwPrice' => 'string',
        'gwBaseTaxAmount' => 'string',
        'gwTaxAmount' => 'string',
        'gwBasePriceInvoiced' => 'string',
        'gwPriceInvoiced' => 'string',
        'gwBaseTaxAmountInvoiced' => 'string',
        'gwTaxAmountInvoiced' => 'string',
        'gwBasePriceRefunded' => 'string',
        'gwPriceRefunded' => 'string',
        'gwBaseTaxAmountRefunded' => 'string',
        'gwTaxAmountRefunded' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'giftMessage' => null,
        'gwId' => null,
        'gwBasePrice' => null,
        'gwPrice' => null,
        'gwBaseTaxAmount' => null,
        'gwTaxAmount' => null,
        'gwBasePriceInvoiced' => null,
        'gwPriceInvoiced' => null,
        'gwBaseTaxAmountInvoiced' => null,
        'gwTaxAmountInvoiced' => null,
        'gwBasePriceRefunded' => null,
        'gwPriceRefunded' => null,
        'gwBaseTaxAmountRefunded' => null,
        'gwTaxAmountRefunded' => null
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
        'giftMessage' => 'gift_message',
        'gwId' => 'gw_id',
        'gwBasePrice' => 'gw_base_price',
        'gwPrice' => 'gw_price',
        'gwBaseTaxAmount' => 'gw_base_tax_amount',
        'gwTaxAmount' => 'gw_tax_amount',
        'gwBasePriceInvoiced' => 'gw_base_price_invoiced',
        'gwPriceInvoiced' => 'gw_price_invoiced',
        'gwBaseTaxAmountInvoiced' => 'gw_base_tax_amount_invoiced',
        'gwTaxAmountInvoiced' => 'gw_tax_amount_invoiced',
        'gwBasePriceRefunded' => 'gw_base_price_refunded',
        'gwPriceRefunded' => 'gw_price_refunded',
        'gwBaseTaxAmountRefunded' => 'gw_base_tax_amount_refunded',
        'gwTaxAmountRefunded' => 'gw_tax_amount_refunded'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'giftMessage' => 'setGiftMessage',
        'gwId' => 'setGwId',
        'gwBasePrice' => 'setGwBasePrice',
        'gwPrice' => 'setGwPrice',
        'gwBaseTaxAmount' => 'setGwBaseTaxAmount',
        'gwTaxAmount' => 'setGwTaxAmount',
        'gwBasePriceInvoiced' => 'setGwBasePriceInvoiced',
        'gwPriceInvoiced' => 'setGwPriceInvoiced',
        'gwBaseTaxAmountInvoiced' => 'setGwBaseTaxAmountInvoiced',
        'gwTaxAmountInvoiced' => 'setGwTaxAmountInvoiced',
        'gwBasePriceRefunded' => 'setGwBasePriceRefunded',
        'gwPriceRefunded' => 'setGwPriceRefunded',
        'gwBaseTaxAmountRefunded' => 'setGwBaseTaxAmountRefunded',
        'gwTaxAmountRefunded' => 'setGwTaxAmountRefunded'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'giftMessage' => 'getGiftMessage',
        'gwId' => 'getGwId',
        'gwBasePrice' => 'getGwBasePrice',
        'gwPrice' => 'getGwPrice',
        'gwBaseTaxAmount' => 'getGwBaseTaxAmount',
        'gwTaxAmount' => 'getGwTaxAmount',
        'gwBasePriceInvoiced' => 'getGwBasePriceInvoiced',
        'gwPriceInvoiced' => 'getGwPriceInvoiced',
        'gwBaseTaxAmountInvoiced' => 'getGwBaseTaxAmountInvoiced',
        'gwTaxAmountInvoiced' => 'getGwTaxAmountInvoiced',
        'gwBasePriceRefunded' => 'getGwBasePriceRefunded',
        'gwPriceRefunded' => 'getGwPriceRefunded',
        'gwBaseTaxAmountRefunded' => 'getGwBaseTaxAmountRefunded',
        'gwTaxAmountRefunded' => 'getGwTaxAmountRefunded'
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
        $this->container['giftMessage'] = isset($data['giftMessage']) ? $data['giftMessage'] : null;
        $this->container['gwId'] = isset($data['gwId']) ? $data['gwId'] : null;
        $this->container['gwBasePrice'] = isset($data['gwBasePrice']) ? $data['gwBasePrice'] : null;
        $this->container['gwPrice'] = isset($data['gwPrice']) ? $data['gwPrice'] : null;
        $this->container['gwBaseTaxAmount'] = isset($data['gwBaseTaxAmount']) ? $data['gwBaseTaxAmount'] : null;
        $this->container['gwTaxAmount'] = isset($data['gwTaxAmount']) ? $data['gwTaxAmount'] : null;
        $this->container['gwBasePriceInvoiced'] = isset($data['gwBasePriceInvoiced']) ? $data['gwBasePriceInvoiced'] : null;
        $this->container['gwPriceInvoiced'] = isset($data['gwPriceInvoiced']) ? $data['gwPriceInvoiced'] : null;
        $this->container['gwBaseTaxAmountInvoiced'] = isset($data['gwBaseTaxAmountInvoiced']) ? $data['gwBaseTaxAmountInvoiced'] : null;
        $this->container['gwTaxAmountInvoiced'] = isset($data['gwTaxAmountInvoiced']) ? $data['gwTaxAmountInvoiced'] : null;
        $this->container['gwBasePriceRefunded'] = isset($data['gwBasePriceRefunded']) ? $data['gwBasePriceRefunded'] : null;
        $this->container['gwPriceRefunded'] = isset($data['gwPriceRefunded']) ? $data['gwPriceRefunded'] : null;
        $this->container['gwBaseTaxAmountRefunded'] = isset($data['gwBaseTaxAmountRefunded']) ? $data['gwBaseTaxAmountRefunded'] : null;
        $this->container['gwTaxAmountRefunded'] = isset($data['gwTaxAmountRefunded']) ? $data['gwTaxAmountRefunded'] : null;
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
     * Gets giftMessage
     *
     * @return \Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface
     */
    public function getGiftMessage()
    {
        return $this->container['giftMessage'];
    }

    /**
     * Sets giftMessage
     *
     * @param \Krak\MagentoApiClient\Model\GiftMessageDataMessageInterface $giftMessage giftMessage
     *
     * @return $this
     */
    public function setGiftMessage($giftMessage)
    {
        $this->container['giftMessage'] = $giftMessage;

        return $this;
    }

    /**
     * Gets gwId
     *
     * @return string
     */
    public function getGwId()
    {
        return $this->container['gwId'];
    }

    /**
     * Sets gwId
     *
     * @param string $gwId gwId
     *
     * @return $this
     */
    public function setGwId($gwId)
    {
        $this->container['gwId'] = $gwId;

        return $this;
    }

    /**
     * Gets gwBasePrice
     *
     * @return string
     */
    public function getGwBasePrice()
    {
        return $this->container['gwBasePrice'];
    }

    /**
     * Sets gwBasePrice
     *
     * @param string $gwBasePrice gwBasePrice
     *
     * @return $this
     */
    public function setGwBasePrice($gwBasePrice)
    {
        $this->container['gwBasePrice'] = $gwBasePrice;

        return $this;
    }

    /**
     * Gets gwPrice
     *
     * @return string
     */
    public function getGwPrice()
    {
        return $this->container['gwPrice'];
    }

    /**
     * Sets gwPrice
     *
     * @param string $gwPrice gwPrice
     *
     * @return $this
     */
    public function setGwPrice($gwPrice)
    {
        $this->container['gwPrice'] = $gwPrice;

        return $this;
    }

    /**
     * Gets gwBaseTaxAmount
     *
     * @return string
     */
    public function getGwBaseTaxAmount()
    {
        return $this->container['gwBaseTaxAmount'];
    }

    /**
     * Sets gwBaseTaxAmount
     *
     * @param string $gwBaseTaxAmount gwBaseTaxAmount
     *
     * @return $this
     */
    public function setGwBaseTaxAmount($gwBaseTaxAmount)
    {
        $this->container['gwBaseTaxAmount'] = $gwBaseTaxAmount;

        return $this;
    }

    /**
     * Gets gwTaxAmount
     *
     * @return string
     */
    public function getGwTaxAmount()
    {
        return $this->container['gwTaxAmount'];
    }

    /**
     * Sets gwTaxAmount
     *
     * @param string $gwTaxAmount gwTaxAmount
     *
     * @return $this
     */
    public function setGwTaxAmount($gwTaxAmount)
    {
        $this->container['gwTaxAmount'] = $gwTaxAmount;

        return $this;
    }

    /**
     * Gets gwBasePriceInvoiced
     *
     * @return string
     */
    public function getGwBasePriceInvoiced()
    {
        return $this->container['gwBasePriceInvoiced'];
    }

    /**
     * Sets gwBasePriceInvoiced
     *
     * @param string $gwBasePriceInvoiced gwBasePriceInvoiced
     *
     * @return $this
     */
    public function setGwBasePriceInvoiced($gwBasePriceInvoiced)
    {
        $this->container['gwBasePriceInvoiced'] = $gwBasePriceInvoiced;

        return $this;
    }

    /**
     * Gets gwPriceInvoiced
     *
     * @return string
     */
    public function getGwPriceInvoiced()
    {
        return $this->container['gwPriceInvoiced'];
    }

    /**
     * Sets gwPriceInvoiced
     *
     * @param string $gwPriceInvoiced gwPriceInvoiced
     *
     * @return $this
     */
    public function setGwPriceInvoiced($gwPriceInvoiced)
    {
        $this->container['gwPriceInvoiced'] = $gwPriceInvoiced;

        return $this;
    }

    /**
     * Gets gwBaseTaxAmountInvoiced
     *
     * @return string
     */
    public function getGwBaseTaxAmountInvoiced()
    {
        return $this->container['gwBaseTaxAmountInvoiced'];
    }

    /**
     * Sets gwBaseTaxAmountInvoiced
     *
     * @param string $gwBaseTaxAmountInvoiced gwBaseTaxAmountInvoiced
     *
     * @return $this
     */
    public function setGwBaseTaxAmountInvoiced($gwBaseTaxAmountInvoiced)
    {
        $this->container['gwBaseTaxAmountInvoiced'] = $gwBaseTaxAmountInvoiced;

        return $this;
    }

    /**
     * Gets gwTaxAmountInvoiced
     *
     * @return string
     */
    public function getGwTaxAmountInvoiced()
    {
        return $this->container['gwTaxAmountInvoiced'];
    }

    /**
     * Sets gwTaxAmountInvoiced
     *
     * @param string $gwTaxAmountInvoiced gwTaxAmountInvoiced
     *
     * @return $this
     */
    public function setGwTaxAmountInvoiced($gwTaxAmountInvoiced)
    {
        $this->container['gwTaxAmountInvoiced'] = $gwTaxAmountInvoiced;

        return $this;
    }

    /**
     * Gets gwBasePriceRefunded
     *
     * @return string
     */
    public function getGwBasePriceRefunded()
    {
        return $this->container['gwBasePriceRefunded'];
    }

    /**
     * Sets gwBasePriceRefunded
     *
     * @param string $gwBasePriceRefunded gwBasePriceRefunded
     *
     * @return $this
     */
    public function setGwBasePriceRefunded($gwBasePriceRefunded)
    {
        $this->container['gwBasePriceRefunded'] = $gwBasePriceRefunded;

        return $this;
    }

    /**
     * Gets gwPriceRefunded
     *
     * @return string
     */
    public function getGwPriceRefunded()
    {
        return $this->container['gwPriceRefunded'];
    }

    /**
     * Sets gwPriceRefunded
     *
     * @param string $gwPriceRefunded gwPriceRefunded
     *
     * @return $this
     */
    public function setGwPriceRefunded($gwPriceRefunded)
    {
        $this->container['gwPriceRefunded'] = $gwPriceRefunded;

        return $this;
    }

    /**
     * Gets gwBaseTaxAmountRefunded
     *
     * @return string
     */
    public function getGwBaseTaxAmountRefunded()
    {
        return $this->container['gwBaseTaxAmountRefunded'];
    }

    /**
     * Sets gwBaseTaxAmountRefunded
     *
     * @param string $gwBaseTaxAmountRefunded gwBaseTaxAmountRefunded
     *
     * @return $this
     */
    public function setGwBaseTaxAmountRefunded($gwBaseTaxAmountRefunded)
    {
        $this->container['gwBaseTaxAmountRefunded'] = $gwBaseTaxAmountRefunded;

        return $this;
    }

    /**
     * Gets gwTaxAmountRefunded
     *
     * @return string
     */
    public function getGwTaxAmountRefunded()
    {
        return $this->container['gwTaxAmountRefunded'];
    }

    /**
     * Sets gwTaxAmountRefunded
     *
     * @param string $gwTaxAmountRefunded gwTaxAmountRefunded
     *
     * @return $this
     */
    public function setGwTaxAmountRefunded($gwTaxAmountRefunded)
    {
        $this->container['gwTaxAmountRefunded'] = $gwTaxAmountRefunded;

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


