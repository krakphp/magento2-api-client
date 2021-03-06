<?php
/**
 * NegotiableQuoteDataNegotiableQuoteTotalsInterface
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
 * NegotiableQuoteDataNegotiableQuoteTotalsInterface Class Doc Comment
 *
 * @category Class
 * @description Extension attribute for quote totals model.
 * @package  Krak\MagentoApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class NegotiableQuoteDataNegotiableQuoteTotalsInterface implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'negotiable-quote-data-negotiable-quote-totals-interface';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'itemsCount' => 'int',
        'quoteStatus' => 'string',
        'createdAt' => 'string',
        'updatedAt' => 'string',
        'customerGroup' => 'int',
        'baseToQuoteRate' => 'float',
        'costTotal' => 'float',
        'baseCostTotal' => 'float',
        'originalTotal' => 'float',
        'baseOriginalTotal' => 'float',
        'originalTax' => 'float',
        'baseOriginalTax' => 'float',
        'originalPriceInclTax' => 'float',
        'baseOriginalPriceInclTax' => 'float',
        'negotiatedPriceType' => 'int',
        'negotiatedPriceValue' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'itemsCount' => null,
        'quoteStatus' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'customerGroup' => null,
        'baseToQuoteRate' => null,
        'costTotal' => null,
        'baseCostTotal' => null,
        'originalTotal' => null,
        'baseOriginalTotal' => null,
        'originalTax' => null,
        'baseOriginalTax' => null,
        'originalPriceInclTax' => null,
        'baseOriginalPriceInclTax' => null,
        'negotiatedPriceType' => null,
        'negotiatedPriceValue' => null
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
        'itemsCount' => 'items_count',
        'quoteStatus' => 'quote_status',
        'createdAt' => 'created_at',
        'updatedAt' => 'updated_at',
        'customerGroup' => 'customer_group',
        'baseToQuoteRate' => 'base_to_quote_rate',
        'costTotal' => 'cost_total',
        'baseCostTotal' => 'base_cost_total',
        'originalTotal' => 'original_total',
        'baseOriginalTotal' => 'base_original_total',
        'originalTax' => 'original_tax',
        'baseOriginalTax' => 'base_original_tax',
        'originalPriceInclTax' => 'original_price_incl_tax',
        'baseOriginalPriceInclTax' => 'base_original_price_incl_tax',
        'negotiatedPriceType' => 'negotiated_price_type',
        'negotiatedPriceValue' => 'negotiated_price_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'itemsCount' => 'setItemsCount',
        'quoteStatus' => 'setQuoteStatus',
        'createdAt' => 'setCreatedAt',
        'updatedAt' => 'setUpdatedAt',
        'customerGroup' => 'setCustomerGroup',
        'baseToQuoteRate' => 'setBaseToQuoteRate',
        'costTotal' => 'setCostTotal',
        'baseCostTotal' => 'setBaseCostTotal',
        'originalTotal' => 'setOriginalTotal',
        'baseOriginalTotal' => 'setBaseOriginalTotal',
        'originalTax' => 'setOriginalTax',
        'baseOriginalTax' => 'setBaseOriginalTax',
        'originalPriceInclTax' => 'setOriginalPriceInclTax',
        'baseOriginalPriceInclTax' => 'setBaseOriginalPriceInclTax',
        'negotiatedPriceType' => 'setNegotiatedPriceType',
        'negotiatedPriceValue' => 'setNegotiatedPriceValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'itemsCount' => 'getItemsCount',
        'quoteStatus' => 'getQuoteStatus',
        'createdAt' => 'getCreatedAt',
        'updatedAt' => 'getUpdatedAt',
        'customerGroup' => 'getCustomerGroup',
        'baseToQuoteRate' => 'getBaseToQuoteRate',
        'costTotal' => 'getCostTotal',
        'baseCostTotal' => 'getBaseCostTotal',
        'originalTotal' => 'getOriginalTotal',
        'baseOriginalTotal' => 'getBaseOriginalTotal',
        'originalTax' => 'getOriginalTax',
        'baseOriginalTax' => 'getBaseOriginalTax',
        'originalPriceInclTax' => 'getOriginalPriceInclTax',
        'baseOriginalPriceInclTax' => 'getBaseOriginalPriceInclTax',
        'negotiatedPriceType' => 'getNegotiatedPriceType',
        'negotiatedPriceValue' => 'getNegotiatedPriceValue'
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
        $this->container['itemsCount'] = isset($data['itemsCount']) ? $data['itemsCount'] : null;
        $this->container['quoteStatus'] = isset($data['quoteStatus']) ? $data['quoteStatus'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['customerGroup'] = isset($data['customerGroup']) ? $data['customerGroup'] : null;
        $this->container['baseToQuoteRate'] = isset($data['baseToQuoteRate']) ? $data['baseToQuoteRate'] : null;
        $this->container['costTotal'] = isset($data['costTotal']) ? $data['costTotal'] : null;
        $this->container['baseCostTotal'] = isset($data['baseCostTotal']) ? $data['baseCostTotal'] : null;
        $this->container['originalTotal'] = isset($data['originalTotal']) ? $data['originalTotal'] : null;
        $this->container['baseOriginalTotal'] = isset($data['baseOriginalTotal']) ? $data['baseOriginalTotal'] : null;
        $this->container['originalTax'] = isset($data['originalTax']) ? $data['originalTax'] : null;
        $this->container['baseOriginalTax'] = isset($data['baseOriginalTax']) ? $data['baseOriginalTax'] : null;
        $this->container['originalPriceInclTax'] = isset($data['originalPriceInclTax']) ? $data['originalPriceInclTax'] : null;
        $this->container['baseOriginalPriceInclTax'] = isset($data['baseOriginalPriceInclTax']) ? $data['baseOriginalPriceInclTax'] : null;
        $this->container['negotiatedPriceType'] = isset($data['negotiatedPriceType']) ? $data['negotiatedPriceType'] : null;
        $this->container['negotiatedPriceValue'] = isset($data['negotiatedPriceValue']) ? $data['negotiatedPriceValue'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['itemsCount'] === null) {
            $invalidProperties[] = "'itemsCount' can't be null";
        }
        if ($this->container['quoteStatus'] === null) {
            $invalidProperties[] = "'quoteStatus' can't be null";
        }
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['customerGroup'] === null) {
            $invalidProperties[] = "'customerGroup' can't be null";
        }
        if ($this->container['baseToQuoteRate'] === null) {
            $invalidProperties[] = "'baseToQuoteRate' can't be null";
        }
        if ($this->container['costTotal'] === null) {
            $invalidProperties[] = "'costTotal' can't be null";
        }
        if ($this->container['baseCostTotal'] === null) {
            $invalidProperties[] = "'baseCostTotal' can't be null";
        }
        if ($this->container['originalTotal'] === null) {
            $invalidProperties[] = "'originalTotal' can't be null";
        }
        if ($this->container['baseOriginalTotal'] === null) {
            $invalidProperties[] = "'baseOriginalTotal' can't be null";
        }
        if ($this->container['originalTax'] === null) {
            $invalidProperties[] = "'originalTax' can't be null";
        }
        if ($this->container['baseOriginalTax'] === null) {
            $invalidProperties[] = "'baseOriginalTax' can't be null";
        }
        if ($this->container['originalPriceInclTax'] === null) {
            $invalidProperties[] = "'originalPriceInclTax' can't be null";
        }
        if ($this->container['baseOriginalPriceInclTax'] === null) {
            $invalidProperties[] = "'baseOriginalPriceInclTax' can't be null";
        }
        if ($this->container['negotiatedPriceType'] === null) {
            $invalidProperties[] = "'negotiatedPriceType' can't be null";
        }
        if ($this->container['negotiatedPriceValue'] === null) {
            $invalidProperties[] = "'negotiatedPriceValue' can't be null";
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

        if ($this->container['itemsCount'] === null) {
            return false;
        }
        if ($this->container['quoteStatus'] === null) {
            return false;
        }
        if ($this->container['createdAt'] === null) {
            return false;
        }
        if ($this->container['updatedAt'] === null) {
            return false;
        }
        if ($this->container['customerGroup'] === null) {
            return false;
        }
        if ($this->container['baseToQuoteRate'] === null) {
            return false;
        }
        if ($this->container['costTotal'] === null) {
            return false;
        }
        if ($this->container['baseCostTotal'] === null) {
            return false;
        }
        if ($this->container['originalTotal'] === null) {
            return false;
        }
        if ($this->container['baseOriginalTotal'] === null) {
            return false;
        }
        if ($this->container['originalTax'] === null) {
            return false;
        }
        if ($this->container['baseOriginalTax'] === null) {
            return false;
        }
        if ($this->container['originalPriceInclTax'] === null) {
            return false;
        }
        if ($this->container['baseOriginalPriceInclTax'] === null) {
            return false;
        }
        if ($this->container['negotiatedPriceType'] === null) {
            return false;
        }
        if ($this->container['negotiatedPriceValue'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets itemsCount
     *
     * @return int
     */
    public function getItemsCount()
    {
        return $this->container['itemsCount'];
    }

    /**
     * Sets itemsCount
     *
     * @param int $itemsCount The number of different items or products in the cart.
     *
     * @return $this
     */
    public function setItemsCount($itemsCount)
    {
        $this->container['itemsCount'] = $itemsCount;

        return $this;
    }

    /**
     * Gets quoteStatus
     *
     * @return string
     */
    public function getQuoteStatus()
    {
        return $this->container['quoteStatus'];
    }

    /**
     * Sets quoteStatus
     *
     * @param string $quoteStatus Negotiable quote status.
     *
     * @return $this
     */
    public function setQuoteStatus($quoteStatus)
    {
        $this->container['quoteStatus'] = $quoteStatus;

        return $this;
    }

    /**
     * Gets createdAt
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
     * Sets createdAt
     *
     * @param string $createdAt The cart creation date and time.
     *
     * @return $this
     */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;

        return $this;
    }

    /**
     * Gets updatedAt
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
     * Sets updatedAt
     *
     * @param string $updatedAt The cart last update date and time.
     *
     * @return $this
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;

        return $this;
    }

    /**
     * Gets customerGroup
     *
     * @return int
     */
    public function getCustomerGroup()
    {
        return $this->container['customerGroup'];
    }

    /**
     * Sets customerGroup
     *
     * @param int $customerGroup Customer group id.
     *
     * @return $this
     */
    public function setCustomerGroup($customerGroup)
    {
        $this->container['customerGroup'] = $customerGroup;

        return $this;
    }

    /**
     * Gets baseToQuoteRate
     *
     * @return float
     */
    public function getBaseToQuoteRate()
    {
        return $this->container['baseToQuoteRate'];
    }

    /**
     * Sets baseToQuoteRate
     *
     * @param float $baseToQuoteRate Base currency to quote currency rate.
     *
     * @return $this
     */
    public function setBaseToQuoteRate($baseToQuoteRate)
    {
        $this->container['baseToQuoteRate'] = $baseToQuoteRate;

        return $this;
    }

    /**
     * Gets costTotal
     *
     * @return float
     */
    public function getCostTotal()
    {
        return $this->container['costTotal'];
    }

    /**
     * Sets costTotal
     *
     * @param float $costTotal Total cost for quote.
     *
     * @return $this
     */
    public function setCostTotal($costTotal)
    {
        $this->container['costTotal'] = $costTotal;

        return $this;
    }

    /**
     * Gets baseCostTotal
     *
     * @return float
     */
    public function getBaseCostTotal()
    {
        return $this->container['baseCostTotal'];
    }

    /**
     * Sets baseCostTotal
     *
     * @param float $baseCostTotal Total cost for quote in base currency.
     *
     * @return $this
     */
    public function setBaseCostTotal($baseCostTotal)
    {
        $this->container['baseCostTotal'] = $baseCostTotal;

        return $this;
    }

    /**
     * Gets originalTotal
     *
     * @return float
     */
    public function getOriginalTotal()
    {
        return $this->container['originalTotal'];
    }

    /**
     * Sets originalTotal
     *
     * @param float $originalTotal Original quote total.
     *
     * @return $this
     */
    public function setOriginalTotal($originalTotal)
    {
        $this->container['originalTotal'] = $originalTotal;

        return $this;
    }

    /**
     * Gets baseOriginalTotal
     *
     * @return float
     */
    public function getBaseOriginalTotal()
    {
        return $this->container['baseOriginalTotal'];
    }

    /**
     * Sets baseOriginalTotal
     *
     * @param float $baseOriginalTotal Original quote total in base currency.
     *
     * @return $this
     */
    public function setBaseOriginalTotal($baseOriginalTotal)
    {
        $this->container['baseOriginalTotal'] = $baseOriginalTotal;

        return $this;
    }

    /**
     * Gets originalTax
     *
     * @return float
     */
    public function getOriginalTax()
    {
        return $this->container['originalTax'];
    }

    /**
     * Sets originalTax
     *
     * @param float $originalTax Original tax amount for quote.
     *
     * @return $this
     */
    public function setOriginalTax($originalTax)
    {
        $this->container['originalTax'] = $originalTax;

        return $this;
    }

    /**
     * Gets baseOriginalTax
     *
     * @return float
     */
    public function getBaseOriginalTax()
    {
        return $this->container['baseOriginalTax'];
    }

    /**
     * Sets baseOriginalTax
     *
     * @param float $baseOriginalTax Original tax amount for quote in base currency.
     *
     * @return $this
     */
    public function setBaseOriginalTax($baseOriginalTax)
    {
        $this->container['baseOriginalTax'] = $baseOriginalTax;

        return $this;
    }

    /**
     * Gets originalPriceInclTax
     *
     * @return float
     */
    public function getOriginalPriceInclTax()
    {
        return $this->container['originalPriceInclTax'];
    }

    /**
     * Sets originalPriceInclTax
     *
     * @param float $originalPriceInclTax Original price with included tax for quote.
     *
     * @return $this
     */
    public function setOriginalPriceInclTax($originalPriceInclTax)
    {
        $this->container['originalPriceInclTax'] = $originalPriceInclTax;

        return $this;
    }

    /**
     * Gets baseOriginalPriceInclTax
     *
     * @return float
     */
    public function getBaseOriginalPriceInclTax()
    {
        return $this->container['baseOriginalPriceInclTax'];
    }

    /**
     * Sets baseOriginalPriceInclTax
     *
     * @param float $baseOriginalPriceInclTax Original price with included tax for quote in base currency.
     *
     * @return $this
     */
    public function setBaseOriginalPriceInclTax($baseOriginalPriceInclTax)
    {
        $this->container['baseOriginalPriceInclTax'] = $baseOriginalPriceInclTax;

        return $this;
    }

    /**
     * Gets negotiatedPriceType
     *
     * @return int
     */
    public function getNegotiatedPriceType()
    {
        return $this->container['negotiatedPriceType'];
    }

    /**
     * Sets negotiatedPriceType
     *
     * @param int $negotiatedPriceType Negotiable quote type.
     *
     * @return $this
     */
    public function setNegotiatedPriceType($negotiatedPriceType)
    {
        $this->container['negotiatedPriceType'] = $negotiatedPriceType;

        return $this;
    }

    /**
     * Gets negotiatedPriceValue
     *
     * @return float
     */
    public function getNegotiatedPriceValue()
    {
        return $this->container['negotiatedPriceValue'];
    }

    /**
     * Sets negotiatedPriceValue
     *
     * @param float $negotiatedPriceValue Negotiable price value for quote.
     *
     * @return $this
     */
    public function setNegotiatedPriceValue($negotiatedPriceValue)
    {
        $this->container['negotiatedPriceValue'] = $negotiatedPriceValue;

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


